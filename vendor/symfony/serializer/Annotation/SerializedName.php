<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Annotation;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;

/**
 * Annotation class for @SerializedName().
 *
 * @Annotation
 * @NamedArgumentConstructor
 * @Target({"PROPERTY", "METHOD"})
 *
 * @author Fabien Bourigault <bourigaultfabien@gmail.com>
 */
#[\Attribute(\Attribute::TARGET_METHOD | \Attribute::TARGET_PROPERTY)]
final class SerializedName
{
    /**
     * @var string
     */
    private $serializedName;

    /**
     * @param string $serializedName
     */
    public function __construct($serializedName)
    {
        if (\is_array($serializedName)) {
            trigger_deprecation('symfony/serializer', '5.3', 'Passing an array as first argument to "%s" is deprecated. Use named arguments instead.', __METHOD__);

            if (!isset($serializedName['value'])) {
                throw new InvalidArgumentException(sprintf('Parameter of annotation "%s" should be set.', static::class));
            }
            $serializedName = $serializedName['value'];
        }

        if (!\is_string($serializedName) || empty($serializedName)) {
            throw new InvalidArgumentException(sprintf('Parameter of annotation "%s" must be a non-empty string.', static::class));
        }

        $this->serializedName = $serializedName;
    }

    public function getSerializedName(): string
    {
        return $this->serializedName;
    }
}
