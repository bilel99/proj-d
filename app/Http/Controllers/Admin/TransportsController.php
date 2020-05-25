<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransportRequest;
use App\Models\MedicalHouses;
use App\Models\Transports;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\View;

class TransportsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $transports = Transports::all();
        $houses = MedicalHouses::all();

        return view('admin.transports.index', compact('transports', 'houses'));
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
            'icon' => [
                'nullable',
                'min:2',
                'max:255',
            ],
            'title' => [
                'required',
                'min:2',
                'max:255',
            ],
            'infos' => [
                'required',
                'min:2',
                'max:255',
            ],
        ]);

        $response = new JsonResponse();

        if ($validator->fails()) {
            return $response->setData([
                'error' => $validator->getMessageBag(),
            ]);
        }

        $transport = new transports();
        $transport->icon = $request->get('icon');
        $transport->title = $request->get('title');
        $transport->infos = $request->get('infos');
        $transport->save();
        
        return $response->setData([
            'model' => $transport,
            'message' => 'Created message',
            'routeIndex' => route('admin.transports.index'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param TransportRequest $request
     * @param Transports $transport
     * @return RedirectResponse
     */
    public function update(TransportRequest $request, Transports $transport)
    {
        $transport->icon = $request->get('icon');
        $transport->title = $request->get('title');
        $transport->infos = $request->get('infos');
        $transport->save();

        return redirect()->route('admin.transports.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Transports $transport
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Transports $transport): JsonResponse
    {
        // Detach
        if (!empty($transport->medicalHouse)) {
            $transport->medicalHouse()->detach($transport->medicalHouse);
        }

        // Delete
        $transport->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.transports.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
