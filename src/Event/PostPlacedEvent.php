<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Event;

use Symfony\Contracts\EventDispatcher\Event;
use WP_Post;

final class PostPlacedEvent extends Event
{

    public function __construct(private readonly WP_Post $post) {}

    public function getPost(): WP_Post
    {
        return $this->post;
    }
}
