<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Alerts extends Model
{
    // Types
    public const TYPES_ALERT = 'alert';
    public const TYPES_ALERT_MESSAGE = 'alert-message';
    public const TYPES_PLAIN_TEXT = 'plain_text';

    // Levels
    public const LEVELS_DEFAULT = 'default';
    public const LEVELS_INFO = 'info';
    public const LEVELS_WARNING = 'warning';
    public const LEVELS_DANGER = 'danger';
    
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'page_id',
        'title',
        'content',
        'icon',
        'types'
    ];

    public function page(): HasMany
    {
        return $this->hasMany(Pages::class);
    }

    /**
     * @return array
     */
    public static function getTypes(): array
    {
        return [
            '1' => self::TYPES_ALERT,
            '2' => self::TYPES_ALERT_MESSAGE,
            '3' => self::TYPES_PLAIN_TEXT,
        ];
    }

    /**
     * @return array
     */
    public static function getLevels(): array
    {
        return [
            '1' => self::LEVELS_DEFAULT,
            '2' => self::LEVELS_INFO,
            '3' => self::LEVELS_WARNING,
            '4' => self::LEVELS_DANGER,
        ];
    }
}
