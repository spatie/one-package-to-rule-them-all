<?php

namespace Spatie\EventSourcing\EventSerializers;

use Spatie\EventSourcing\StoredEvents\ShouldBeStored;

interface EventSerializer
{
    public function serialize(ShouldBeStored $event): string;

    public function deserialize(string $eventClass, string $json, string $metadata = null): ShouldBeStored;
}
