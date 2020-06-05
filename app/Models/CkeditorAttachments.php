<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CkeditorAttachments extends Model
{

    public const DISK = 'public';

   /**
     * The attributes that are mass assignables.
     *
     * @var array
     */
    protected $fillable = [
        'model',
        'attachment',
        'disk',
        'url',
    ];

    /**
     * @param string $model
     * @param int $id
     * @param string $filename
     */
    public function create(string $model, int $id = null, string $filename): void
    {
        $this->model = $model;
        $this->attachment = $id;
        $this->disk = self::DISK;
        $this->url = Storage::disk($this->disk)->url($filename);
        $this->save();
    }

    /**
     * Purge the attachment.
     *
     * @return void
     * @throws \Exception
     */
    public function purge()
    {
        Storage::disk($this->disk)->delete($this->attachment);

        $this->delete();
    }

    public function getRetrievingFile()
    {

    }
}
