<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Event;

use Symfony\Component\EventDispatcher\EventDispatcher;
use Vigihdev\WpEventDispatcher\Contracts\PostDispatcherInterface;

final class PostDispatcher extends EventDispatcher implements PostDispatcherInterface {}
