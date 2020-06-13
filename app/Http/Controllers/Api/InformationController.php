<?php

namespace App\Http\Controllers\Api;

use App\Models\Informations;
use Illuminate\Http\JsonResponse;

class InformationController extends BaseResourceController
{
    protected $model = Informations::class;
    protected $modelResource = \App\Http\Resources\Information::class;
    
    /**
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function findAll()
    {
        $response = new JsonResponse();

        $informations = Informations::with('alert')
            ->get();

        if (!empty($informations)) {
            return $response->setData([
                'data' => $informations->toArray(),
            ]);
        }

        return $response->setData([
            'message' => 'collection not found',
        ]);
    }

    /**
     * @param Informations $information
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getRelations(Informations $information)
    {
        $response = new JsonResponse();

        $information = Informations
            ::with('alert')
            ->where('id', $information->id)
            ->first();

        if (!empty($information)) {
            return $response->setData([
                'data' => $information->toArray(),
            ]);
        }

        return $response->setData([
            'message' => 'collection not found',
        ]);
    }

    /**
     * Save a hashed password
     */
    protected function preSaveStore()
    {
        //
    }

    /**
     * Save a hashed password
     */
    protected function preSaveUpdate()
    {
        $this->preSaveStore();
    }
}
