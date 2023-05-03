<?php

namespace Spatie\FailedJobMonitor;

use Illuminate\Notifications\Notification as IlluminateNotification;
use Illuminate\Queue\Events\JobFailed;
use Illuminate\Queue\QueueManager;
use Spatie\FailedJobMonitor\Exceptions\InvalidConfiguration;

class FailedJobNotifier
{
    public function register(): void
    {
        app(QueueManager::class)->failing(function (JobFailed $event) {
            $notifiable = app(config('failed-job-monitor.notifiable'));

            $notification = app(config('failed-job-monitor.notification'))->setEvent($event);

            if (! $this->isValidNotificationClass($notification)) {
                throw InvalidConfiguration::notificationClassInvalid(get_class($notification));
            }

            if ($this->shouldSendNotification($notification)) {
                $notifiable->notify($notification);
            }
        });
    }

    public function isValidNotificationClass($notification): bool
    {
        if (get_class($notification) === Notification::class) {
            return true;
        }

        if (is_subclass_of($notification, IlluminateNotification::class)) {
            return true;
        }

        return false;
    }

    public function shouldSendNotification($notification): bool
    {
        $callable = config('failed-job-monitor.notificationFilter');

        if (! is_callable($callable)) {
            return true;
        }

        return $callable($notification);
    }
}
