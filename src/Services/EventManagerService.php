<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Services;

use Vigihdev\WpEventDispatcher\Contracts\EventManagerInterface;
use Vigihdev\WpEventDispatcher\Contracts\RequestListenerInterface;

final class EventManagerService implements EventManagerInterface
{
    /**
     * @var RequestListenerInterface[] $listenerRequest
     */
    private array $listenerRequest = [];

    public function __construct(
        private readonly iterable $listeners,
    ) {

        foreach ($listeners as $listener) {
            if ($listener instanceof RequestListenerInterface) {
                $this->listenerRequest[] = $listener;
            }
        }
    }

    /**
     *
     * @return void
     */
    public function dispatcher(): void
    {

        foreach ($this->listenerRequest as $listener) {
            $priority = $listener->getPriority();
            $args = $listener->getAcceptedArgs();
            $wpHook = $listener->getWpHook();
            $className = $listener->getClassName();

            add_action($wpHook, function () use ($listener) {}, $priority, $args);
        }
    }
}
