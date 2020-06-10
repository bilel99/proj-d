<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use ClassicO\NovaMediaLibrary\API;

class MediaController extends Controller
{

    /**
     * Get Api to retrieve media file
     * Use bundle to media file Nova
     *
     * @param int $id
     * @return mixed
     */
   public function get(int $id) {
       $file = API::getFiles($id, null, true);
       
       return $file->path;
       // Return image
       //return API::getPrivateFile($file->path, request('img_size'));
   }
}
