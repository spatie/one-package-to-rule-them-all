<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\DependencyInjection;

use Symfony\Component\DependencyInjection\Argument\BoundArgument;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Compiler\PriorityTaggedServiceTrait;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * Adds all services with the tags "serializer.encoder" and "serializer.normalizer" as
 * encoders and normalizers to the "serializer" service.
 *
 * @author Javier Lopez <f12loalf@gmail.com>
 * @author Robin Chalas <robin.chalas@gmail.com>
 */
class SerializerPass implements CompilerPassInterface
{
    use PriorityTaggedServiceTrait;

    private $serializerService;
    private $normalizerTag;
    private $encoderTag;

    public function __construct(string $serializerService = 'serializer', string $normalizerTag = 'serializer.normalizer', string $encoderTag = 'serializer.encoder')
    {
        if (0 < \func_num_args()) {
            trigger_deprecation('symfony/serializer', '5.3', 'Configuring "%s" is deprecated.', __CLASS__);
        }

        $this->serializerService = $serializerService;
        $this->normalizerTag = $normalizerTag;
        $this->encoderTag = $encoderTag;
    }

    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition($this->serializerService)) {
            return;
        }

        if (!$normalizers = $this->findAndSortTaggedServices($this->normalizerTag, $container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as "%s" to use the "%s" service.', $this->normalizerTag, $this->serializerService));
        }

        $serializerDefinition = $container->getDefinition($this->serializerService);
        $serializerDefinition->replaceArgument(0, $normalizers);

        if (!$encoders = $this->findAndSortTaggedServices($this->encoderTag, $container)) {
            throw new RuntimeException(sprintf('You must tag at least one service as "%s" to use the "%s" service.', $this->encoderTag, $this->serializerService));
        }

        $serializerDefinition->replaceArgument(1, $encoders);

        if (!$container->hasParameter('serializer.default_context')) {
            return;
        }

        $defaultContext = $container->getParameter('serializer.default_context');
        foreach (array_keys(array_merge($container->findTaggedServiceIds($this->normalizerTag), $container->findTaggedServiceIds($this->encoderTag))) as $service) {
            $definition = $container->getDefinition($service);
            $definition->setBindings(['array $defaultContext' => new BoundArgument($defaultContext, false)] + $definition->getBindings());
        }

        $container->getParameterBag()->remove('serializer.default_context');
    }
}
