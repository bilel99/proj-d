<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Alerts extends BasesModel
{
    // Types
    public const TYPES_ALERT = 'alert';
    public const TYPES_ALERT_MESSAGE = 'alert-message';
    public const TYPES_PLAIN_TEXT = 'plain_text';

    // Levels
    public const LEVELS_DEFAULT = 'default';
    public const LEVELS_INFO = 'info';
    public const LEVELS_SUCCESS = 'success';
    public const LEVELS_WARNING = 'warning';
    public const LEVELS_DANGER = 'danger';
    
    /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'content',
        'icon',
        'types',
        'levels',
    ];

    /**
     * @return BelongsToMany
     */
    public function pages(): BelongsToMany
    {
        return $this->belongsToMany(
            Pages::class,
            'pages_alerts',
            'alert_id',
            'page_id')
            ->using(PageAlert::class)
            ->withTimestamps();
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
            '3' => self::LEVELS_SUCCESS,
            '4' => self::LEVELS_WARNING,
            '5' => self::LEVELS_DANGER,
        ];
    }

    /**
     * @param int $types
     * @return string
     */
    public function returnGetType(int $types): string 
    {
        switch ($types) {
            case 1:
                return self::TYPES_ALERT;
                break;
            case 2:
                return self::TYPES_ALERT_MESSAGE;
                break;
            case 3:
                return self::TYPES_PLAIN_TEXT;
                break;
            default:
                return self::TYPES_ALERT;

        }
    }

    /**
     * @param int $levels
     * @return string
     */
    public function returnGetLevel(int $levels): string
    {
        switch ($levels) {
            case 1:
                return self::LEVELS_DEFAULT;
                break;
            case 2:
                return self::LEVELS_INFO;
                break;
            case 3:
                return self::LEVELS_SUCCESS;
                break;
            case 4:
                return self::LEVELS_WARNING;
                break;
            case 5:
                return self::LEVELS_DANGER;
                break;
            default:
                return self::LEVELS_DEFAULT;
        }
    }
}
