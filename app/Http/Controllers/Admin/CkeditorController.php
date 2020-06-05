<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CkeditorAttachments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Psy\Util\Json;

class CkeditorController extends Controller
{
    /**
     * success response method.
     *
     * @param Request $request
     * @param string $method
     * @param null $model
     * @param null $id
     * @return JsonResponse
     */
    public function upload(Request $request, $method='POST', $model=null, $id=null): JsonResponse
    {
        if ('POST' === strtoupper($method)) {
            $this->uploadMediaToCkeditor($request, $model);
        } else if ('PUT' === strtoupper($method)) {
            $this->uploadUpdateMediaToCkeditor($request, $model, $id);
        }
    }


    /**
     * @param $request
     * @param $model
     * @return JsonResponse
     */
    private function uploadMediaToCkeditor($request, $model): JsonResponse
    {
        $response = new JsonResponse();
        $uploadedFiles = $request->allFiles();

        // Upload Files Laravel Spatie Media Library Bundles
        foreach ($uploadedFiles as $key => $file) {
            if ($file->isValid()) {

                // Add file to storage
                $path = $file->store('ckeditor_upload', 'public');

                $ckeditor = new CkeditorAttachments();
                $ckeditor->create($model, null, $path);

                return $response->setData([
                    'uploaded' => true,
                    'url' => Storage::disk('public')->url($path),
                ]);
            }

            return $response->setData([
                'uploaded' => false,
                'error' => [
                    'message' => 'could not upload this image',
                ]
            ]);
        }
    }

    private function uploadUpdateMediaToCkeditor($request, $model, $id)
    {
        $response = new JsonResponse();
        $uploadedFiles = $request->allFiles();
        $class = $model::where('id', $id)->first();


        // Upload Files Laravel Spatie Media Library Bundles
        foreach ($uploadedFiles as $key => $file) {
            if ($file->isValid()) {
                $class->addMedia($file)->preservingOriginal()->toMediaCollection('ckeditor-' . $class->getTable() . $class->id);

                return $response->setData([
                    'uploaded' => true,
                    'url' => $class->getRetrievingFile('ckeditor-' . $class->getTable() . $class->id),
                ]);
            }

            return $response->setData([
                'uploaded' => false,
                'error' => [
                    'message' => 'could not upload this image',
                ]
            ]);
        }
    }
}
