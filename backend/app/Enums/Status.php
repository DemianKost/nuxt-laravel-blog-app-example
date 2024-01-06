<?php

declare(strict_types=1);

namespace App\Enums;

enum Status: string
{
    case PUBLISHED = 'published';
    case DRAFT = 'draft';
    case EDITORIAL = 'editorial';
}