<?php

namespace Spatie\PrefixedIds\Models\Concerns;

use Illuminate\Database\Eloquent\Model;
use Spatie\PrefixedIds\Exceptions\NoPrefixConfiguredForModel;
use Spatie\PrefixedIds\Exceptions\NoPrefixedModelFound;
use Spatie\PrefixedIds\PrefixedIds;

trait HasPrefixedId
{
    public static function bootHasPrefixedId()
    {
        static::creating(function (Model $model) {
            $attributeName = config('prefixed-ids.prefixed_id_attribute_name');

            $model->{$attributeName} = $model->generatePrefixedId();
        });
    }

    public function getPrefixedIdAttribute(): ?string
    {
        $attributeName = config('prefixed-ids.prefixed_id_attribute_name');

        return $this->attributes[$attributeName] ?? null;
    }

    public static function findByPrefixedId(string $prefixedId): ?Model
    {
        $attributeName = config('prefixed-ids.prefixed_id_attribute_name');

        return static::firstWhere($attributeName, $prefixedId);
    }

    public static function findByPrefixedIdOrFail(string $prefixedId): Model
    {
        if (is_null($model = static::findByPrefixedId($prefixedId))) {
            throw NoPrefixedModelFound::make($prefixedId);
        }

        return $model;
    }

    protected function getIdPrefix(): string
    {
        $prefix = PrefixedIds::getPrefixForModel(static::class);

        if (! $prefix) {
            throw NoPrefixConfiguredForModel::make($this);
        }

        return $prefix;
    }

    protected function generatePrefixedId(): string
    {
        return "{$this->getIdPrefix()}{$this->getUniquePartForPrefixId()}";
    }

    protected function getUniquePartForPrefixId(): string
    {
        return PrefixedIds::getUniqueId();
    }
}
