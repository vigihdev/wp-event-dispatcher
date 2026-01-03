<?php

declare(strict_types=1);

namespace Vigihdev\WpEventDispatcher\Event;

use WP_Post;

final class PostPlacedEvent
{
    public const POST_SAVE = 'post.save';
    public const POST_UPDATE = 'post.update';
    public const POST_CREATE = 'post.create';
    public const POST_DELETE = 'post.delete';

    public function __construct(private readonly int $postId) {}

    public function getPost(): WP_Post
    {
        return get_post($this->postId);
    }
}
