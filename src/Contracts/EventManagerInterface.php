<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Contracts;

interface EventManagerInterface
{

    public function dispatcher(): void;
}
