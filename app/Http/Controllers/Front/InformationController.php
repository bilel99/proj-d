<?php

namespace App\Http\Controllers\Front;

use App\Models\Pages;
use App\Models\Informations;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    /**
     * informations
     *
     * @return JsonResponse
     */
    public function informations(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Pages::getPage(Pages::PAGE_INFORMATIONS),
            'informations' => Informations::with('alert')->get(),
        ]);
    }
}
