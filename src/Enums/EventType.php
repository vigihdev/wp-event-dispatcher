<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Enums;

enum EventType: string
{
    case POST_SAVE = 'save_post';
    case POST_DELETE = 'delete_post';
}
