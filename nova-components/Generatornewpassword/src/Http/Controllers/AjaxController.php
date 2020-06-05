<?php

namespace Generatornewpassword\Generatornewpassword\Http\Controllers;

use App\Services\AdvPasswordGenerator\AdvPasswordGenerator;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Response;

class AjaxController extends Controller
{
    /**
     * @return JsonResponse
     */
    public function generateNewPassword(): JsonResponse
    {

        $generatePassword = AdvPasswordGenerator::getValue();

        return Response::json([
            'result' => $generatePassword,
        ]);
    }
}
