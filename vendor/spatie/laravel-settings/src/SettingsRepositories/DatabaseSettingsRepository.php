<?php

namespace Spatie\LaravelSettings\SettingsRepositories;

use Illuminate\Database\Eloquent\Builder;
use Spatie\LaravelSettings\Models\SettingsProperty;

class DatabaseSettingsRepository implements SettingsRepository
{
    /** @var class-string<\Illuminate\Database\Eloquent\Model> */
    protected string $propertyModel;

    protected ?string $connection;

    protected ?string $table;

    public function __construct(array $config)
    {
        $this->propertyModel = $config['model'] ?? SettingsProperty::class;
        $this->connection = $config['connection'] ?? null;
        $this->table = $config['table'] ?? null;
    }

    public function getPropertiesInGroup(string $group): array
    {
        return $this->getBuilder()
            ->where('group', $group)
            ->get(['name', 'payload'])
            ->mapWithKeys(function (object $object) {
                return [$object->name => json_decode($object->payload, true)];
            })
            ->toArray();
    }

    public function checkIfPropertyExists(string $group, string $name): bool
    {
        return $this->getBuilder()
            ->where('group', $group)
            ->where('name', $name)
            ->exists();
    }

    public function getPropertyPayload(string $group, string $name)
    {
        $setting = $this->getBuilder()
            ->where('group', $group)
            ->where('name', $name)
            ->first('payload')
            ->toArray();

        return json_decode($setting['payload']);
    }

    public function createProperty(string $group, string $name, $payload): void
    {
        $this->getBuilder()->create([
            'group' => $group,
            'name' => $name,
            'payload' => json_encode($payload),
            'locked' => false,
        ]);
    }

    public function updatePropertyPayload(string $group, string $name, $value): void
    {
        $this->getBuilder()
            ->where('group', $group)
            ->where('name', $name)
            ->update([
                'payload' => json_encode($value),
            ]);
    }

    public function deleteProperty(string $group, string $name): void
    {
        $this->getBuilder()
            ->where('group', $group)
            ->where('name', $name)
            ->delete();
    }

    public function lockProperties(string $group, array $properties): void
    {
        $this->getBuilder()
            ->where('group', $group)
            ->whereIn('name', $properties)
            ->update(['locked' => true]);
    }

    public function unlockProperties(string $group, array $properties): void
    {
        $this->getBuilder()
            ->where('group', $group)
            ->whereIn('name', $properties)
            ->update(['locked' => false]);
    }

    public function getLockedProperties(string $group): array
    {
        return $this->getBuilder()
            ->where('group', $group)
            ->where('locked', true)
            ->pluck('name')
            ->toArray();
    }

    public function getBuilder(): Builder
    {
        $model = new $this->propertyModel;

        if ($this->connection) {
            $model->setConnection($this->connection);
        }

        if ($this->table) {
            $model->setTable($this->table);
        }

        return $model->newQuery();
    }
}
