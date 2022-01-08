<?php

namespace App\Entities\Type;

/**
 * Class ImageStatusType
 *
 * @package App\Entities\Type
 */
final class ImageStatusType
{
    public const STATUS_NEW = 'new';
    public const STATUS_CREATED = 'created';
    public const STATUS_ACTIVE = 'active';
    public const STATUS_REMOVED = 'removed';
    public const STATUS_RESTORED = 'restored';
    public const STATUS_FAVORITE = 'favorite';
    public const ALL = [
        self::STATUS_NEW,
        self::STATUS_ACTIVE,
        self::STATUS_CREATED,
        self::STATUS_REMOVED,
        self::STATUS_RESTORED,
        self::STATUS_FAVORITE,
    ];
    public const ALL_ACTIVE = [
        self::STATUS_NEW,
        self::STATUS_ACTIVE,
        self::STATUS_CREATED,
        self::STATUS_RESTORED,
        self::STATUS_FAVORITE,
    ];
}
