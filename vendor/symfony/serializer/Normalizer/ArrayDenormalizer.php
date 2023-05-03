<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Normalizer;

use Symfony\Component\PropertyInfo\Type;
use Symfony\Component\Serializer\Exception\BadMethodCallException;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Exception\NotNormalizableValueException;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerAwareInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Denormalizes arrays of objects.
 *
 * @author Alexander M. Turek <me@derrabus.de>
 *
 * @final
 */
class ArrayDenormalizer implements ContextAwareDenormalizerInterface, DenormalizerAwareInterface, SerializerAwareInterface, CacheableSupportsMethodInterface
{
    use DenormalizerAwareTrait;

    /**
     * {@inheritdoc}
     *
     * @throws NotNormalizableValueException
     */
    public function denormalize($data, string $type, string $format = null, array $context = []): array
    {
        if (null === $this->denormalizer) {
            throw new BadMethodCallException('Please set a denormalizer before calling denormalize()!');
        }
        if (!\is_array($data)) {
            throw NotNormalizableValueException::createForUnexpectedDataType(sprintf('Data expected to be "%s", "%s" given.', $type, get_debug_type($data)), $data, [Type::BUILTIN_TYPE_ARRAY], $context['deserialization_path'] ?? null);
        }
        if (!str_ends_with($type, '[]')) {
            throw new InvalidArgumentException('Unsupported class: '.$type);
        }

        $type = substr($type, 0, -2);

        $builtinType = isset($context['key_type']) ? $context['key_type']->getBuiltinType() : null;
        foreach ($data as $key => $value) {
            $subContext = $context;
            $subContext['deserialization_path'] = ($context['deserialization_path'] ?? false) ? sprintf('%s[%s]', $context['deserialization_path'], $key) : "[$key]";

            if (null !== $builtinType && !('is_'.$builtinType)($key)) {
                throw NotNormalizableValueException::createForUnexpectedDataType(sprintf('The type of the key "%s" must be "%s" ("%s" given).', $key, $builtinType, get_debug_type($key)), $key, [$builtinType], $subContext['deserialization_path'] ?? null, true);
            }

            $data[$key] = $this->denormalizer->denormalize($value, $type, $format, $subContext);
        }

        return $data;
    }

    /**
     * {@inheritdoc}
     */
    public function supportsDenormalization($data, string $type, string $format = null, array $context = []): bool
    {
        if (null === $this->denormalizer) {
            throw new BadMethodCallException(sprintf('The nested denormalizer needs to be set to allow "%s()" to be used.', __METHOD__));
        }

        return str_ends_with($type, '[]')
            && $this->denormalizer->supportsDenormalization($data, substr($type, 0, -2), $format, $context);
    }

    /**
     * {@inheritdoc}
     *
     * @deprecated call setDenormalizer() instead
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        if (!$serializer instanceof DenormalizerInterface) {
            throw new InvalidArgumentException('Expected a serializer that also implements DenormalizerInterface.');
        }

        if (Serializer::class !== debug_backtrace()[1]['class'] ?? null) {
            trigger_deprecation('symfony/serializer', '5.3', 'Calling "%s()" is deprecated. Please call setDenormalizer() instead.', __METHOD__);
        }

        $this->setDenormalizer($serializer);
    }

    /**
     * {@inheritdoc}
     */
    public function hasCacheableSupportsMethod(): bool
    {
        return $this->denormalizer instanceof CacheableSupportsMethodInterface && $this->denormalizer->hasCacheableSupportsMethod();
    }
}
