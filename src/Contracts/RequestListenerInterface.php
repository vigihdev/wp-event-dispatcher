<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Contracts;

interface RequestListenerInterface
{
    public function getMethod(): string;
    public function getWpHook(): string;
    public function getClassName(): string;
    public function getPriority(): int;
    public function getAcceptedArgs(): int;
}
