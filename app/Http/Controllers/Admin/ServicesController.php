<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlertRequest;
use App\Http\Requests\ServiceRequest;
use App\Models\Pages;
use App\Models\Services;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $services = Services::all();
        $pages = Pages::all();

        return view('admin.services.index', compact('services', 'pages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param ServiceRequest $request
     * @return RedirectResponse
     */
    public function store(ServiceRequest $request): RedirectResponse
    {
        $service = new Services();

        $service->page_id = $request->get('page_id');
        $service->icon = $request->get('icon');
        $service->title = $request->get('title');
        $service->content = $request->get('content');
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'create message');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param ServiceRequest $request
     * @param Services $service
     * @return RedirectResponse
     */
    public function update(ServiceRequest $request, Services $service)
    {
        $service->page_id = $request->get('page_id');
        $service->icon = $request->get('icon');
        $service->title = $request->get('title');
        $service->content = $request->get('content');
        $service->save();

        return redirect()->route('admin.services.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Services $service
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws Exception
     */
    public function destroy(Request $request, Services $service): JsonResponse
    {
        $service->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.services.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
