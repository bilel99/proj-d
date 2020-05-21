<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlertRequest;
use App\Models\Alerts;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AlertsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $alerts = Alerts::all();
        $pages = Pages::all();
        $types = Alerts::getTypes();
        $levels = Alerts::getLevels();

        return view('admin.alerts.index', compact('alerts', 'pages', 'types', 'levels'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AlertRequest $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function store(AlertRequest $request): JsonResponse
    {
        $alert = new Alerts();

        $alert->page_id = $request->get('page_id');
        $alert->title = $request->get('title');
        $alert->content = $request->get('content');
        $alert->icon = $request->get('icon');
        $alert->types = $request->get('types');
        $alert->levels = $request->get('levels');
        $alert->save();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'model' => $alert,
                'message' => 'Created message',
                'routeIndex' => route('admin.alerts.index'),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));

        //return redirect()->route('admin.alerts.index')->with('success', 'create message');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AlertRequest $request
     * @param Alerts $alert
     * @return RedirectResponse
     */
    public function update(AlertRequest $request, Alerts $alert)
    {
        $alert->page_id = $request->get('page_id');
        $alert->title = $request->get('title');
        $alert->content = $request->get('content');
        $alert->icon = $request->get('icon');
        $alert->types = $request->get('types');
        $alert->levels = $request->get('levels');
        $alert->save();

        return redirect()->route('admin.alerts.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Alerts $alert
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Alerts $alert): JsonResponse
    {
        $alert->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.alerts.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
