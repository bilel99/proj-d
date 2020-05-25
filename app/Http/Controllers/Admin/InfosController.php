<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use App\Models\Alerts;
use App\Models\Informations;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InfosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $infos = Informations::all();

        return view('admin.infos.index', compact('infos'));
    }

    /**
     * @return View
     */
    public function create(): View
    {
        $alerts = Alerts::all();
        $page_info = Pages::where('unique_name', Pages::PAGE_INFORMATIONS)->first();
        $types = Alerts::getTypes();
        $levels = Alerts::getLevels();

        return view('admin.infos.partials._create', compact('alerts', 'page_info', 'types', 'levels'));
    }

    /**
     * @param InfoRequest $request
     * @return RedirectResponse
     */
    public function store(InfoRequest $request): RedirectResponse
    {
        $info = new Informations();
        $info->alert_id = $request->get('alert_id');
        $info->title = $request->get('title');
        $info->content = $request->get('content');
        $info->save();

        return redirect()->route('admin.informations.index')->with('success', 'created message');
    }

    /**
     * @param Informations $information
     * @return View
     */
    public function edit(Informations $information): View
    {
        $alerts = Alerts::all();
        $page_info = Pages::where('unique_name', Pages::PAGE_INFORMATIONS)->first();
        $types = Alerts::getTypes();
        $levels = Alerts::getLevels();

        return view('admin.infos.partials._edit', compact('information', 'alerts', 'page_info', 'types', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param InfoRequest $request
     * @param Informations $information
     * @return RedirectResponse
     */
    public function update(InfoRequest $request, Informations $information)
    {
        $information->alert_id = $request->get('alert_id');
        $information->title = $request->get('title');
        $information->content = $request->get('content');
        $information->save();

        return redirect()->route('admin.informations.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Informations $information
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Informations $information): JsonResponse
    {
        $information->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.informations.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
