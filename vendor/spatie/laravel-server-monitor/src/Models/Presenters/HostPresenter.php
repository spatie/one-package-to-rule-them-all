<?php

namespace Spatie\ServerMonitor\Models\Presenters;

use Exception;

trait HostPresenter
{
    public function getHealthAsEmojiAttribute(): string
    {
        if ($this->isHealthy()) {
            return '✅';
        }

        if ($this->isUnhealthy()) {
            return '❌';
        }

        if ($this->hasWarning()) {
            return '⚠️';
        }

        throw new Exception("Could not determine health emoji for host `{$this->id}`");
    }
}
