<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\HoraireRequest;
use App\Models\Horaires;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $horaires = Horaires::all();

        return view('admin.horaires.index', compact('horaires'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param HoraireRequest $request
     * @return RedirectResponse
     */
    public function store(HoraireRequest $request): RedirectResponse
    {
        $horaire = new Horaires();

        $horaire->title = $request->get('title');
        $horaire->content = $request->get('content');
        $horaire->save();

        return redirect()->route('admin.horaires.index')->with('success', 'create message');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param HoraireRequest $request
     * @param Horaires $horaire
     * @return RedirectResponse
     */
    public function update(HoraireRequest $request, Horaires $horaire): RedirectResponse
    {
        $horaire->title = $request->get('title');
        $horaire->content = $request->get('content');
        $horaire->save();

        return redirect()->route('admin.horaires.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Horaires $horaire
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws Exception
     */
    public function destroy(Request $request, Horaires $horaire): JsonResponse
    {
        $horaire->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.horaires.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
