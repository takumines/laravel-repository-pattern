<?php

namespace App\Enums;

use MyCLabs\Enum\Enum;

class PostStatus extends Enum
{
    public const PUBLISHED = 'published';

    public const DRAFT = 'draft';
}