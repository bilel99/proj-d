<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\Page;
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

        $about = Pages::getPage(Pages::PAGE_QUI_SOMME_NOUS);

        return $response->setData([
            'data' => $about,
            'img_default' => asset('front/img/image_doctor2.png') ?? '',
            'media' => Pages::getRetrieveMedia($about->media ?? null),
        ]);
    }
}
