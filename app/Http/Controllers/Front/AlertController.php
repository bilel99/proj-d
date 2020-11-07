<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use App\Models\Alerts;

class AlertController extends Controller
{
    /**
     * alert
     *
     * @param Alerts $alert
     * @return JsonResponse
     */
    public function findAlert(Alerts $alert): JsonResponse
    {
        $response = new JsonResponse();

        return $response->setData([
            'data' => $alert,
        ]);
    }
}
