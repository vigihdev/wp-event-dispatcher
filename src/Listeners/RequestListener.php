<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Listeners;

use Vigihdev\WpEventDispatcher\Contracts\RequestListenerInterface;

final class RequestListener implements RequestListenerInterface
{
    public function __construct(
        private readonly string $wpHook,
        private readonly string $method,
        private readonly string $className,
        private readonly int $priority = 10,
        private readonly int $acceptedArgs = 1,
    ) {}

    public function getClassName(): string
    {
        return $this->className;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getWpHook(): string
    {
        return $this->wpHook;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function getAcceptedArgs(): int
    {
        return $this->acceptedArgs;
    }
}
