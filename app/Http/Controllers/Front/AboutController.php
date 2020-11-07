<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function getAbout(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_QUI_SOMME_NOUS),
            'img_default' => asset('front/img/image_doctor2.png'),
        ]);
    }
}
