<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Vigihdev\WpEventDispatcher\Enums\EventType;

final class PostSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents(): array
    {
        return [
            EventType::POST_SAVE->value => 'onPostSave',
            EventType::POST_DELETE->value => 'onPostDelete',
        ];
    }

    public function onPostSave(PostPlacedEvent $event): void {}

    public function onPostDelete(PostPlacedEvent $event): void {}
}
