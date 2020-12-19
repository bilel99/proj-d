<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Horaires;

class HoraireController extends Controller
{
    /**
     * horaires
     *
     * @return JsonResponse
     */
    public function horaires(): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => Horaires::get(),
        ]);
    }
}
