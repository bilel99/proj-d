<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AlertRequest;
use App\Models\Alerts;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
     * @param Request $request
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'content' => [
                'required',
                'min:2',
                'max:255',
            ],
            'icon' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'types' => [
                'nullable',
                'numeric',
            ],
            'levels' => [
                'nullable',
                'numeric',
            ],
        ]);

        $response = new JsonResponse();

        if ($validator->fails()) {
            return $response->setData([
                'error' => $validator->getMessageBag(),
            ]);
        }

        $alert = new Alerts();
        $alert->title = $request->get('title');
        $alert->content = $request->get('content');
        $alert->icon = $request->get('icon');
        $alert->types = $request->get('types');
        $alert->levels = $request->get('levels');
        $alert->save();

        return $response->setData([
            'model' => $alert,
            'message' => 'Created message',
            'routeIndex' => route('admin.alerts.index'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param AlertRequest $request
     * @param Alerts $alert
     * @return RedirectResponse
     */
    public function update(AlertRequest $request, Alerts $alert): RedirectResponse
    {
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
        // Detach
        if (!empty($alert->pages)) {
            $alert->pages()->detach($alert->pages);
        }

        // Delete
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
