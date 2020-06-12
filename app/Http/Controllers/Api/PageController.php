<?php

namespace App\Http\Controllers\Api;

use App\Models\Pages;
use Illuminate\Http\JsonResponse;

class PageController extends BaseResourceController
{
    protected $model = Pages::class;
    protected $modelResource = \App\Http\Resources\Page::class;


    /**
     * @param Pages $page
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getRelations(Pages $page)
    {
        $response = new JsonResponse();

        $page = Pages
            ::with('alerts', 'service')
            ->where('id', $page->id)
            ->first();

        if (!empty($page)) {
            return $response->setData([
                'data' => $page->toArray(),
                'media' => $page->media !== null ? $page::getRetrieveMedia($page->media) : null,
            ], 200);
        }

        return $response->setData([
            'message' => 'collection not found',
        ], 200);
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
