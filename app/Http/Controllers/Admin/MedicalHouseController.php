<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\InfoRequest;
use App\Http\Requests\MedicalHouseRequest;
use App\Models\Alerts;
use App\Models\Informations;
use App\Models\MedicalHouses;
use App\Models\Pages;
use App\Models\Transports;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class MedicalHouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $houses = MedicalHouses::all();

        return view('admin.medical-house.index', compact('houses'));
    }

    public function show(MedicalHouses $medical_house)
    {

    }

    /**
     * @return View
     */
    public function create(): View
    {
        $transports = Transports::all();

        return view('admin.medical-house.partials._create', compact('transports'));
    }

    /**
     * @param InfoRequest $request
     * @return RedirectResponse
     */
    public function store(MedicalHouseRequest $request): RedirectResponse
    {
        $houses = new MedicalHouses();
        $houses->title = $request->get('title');
        $houses->content = $request->get('content');
        $houses->map = $request->get('map');
        $houses->address = $request->get('address');
        $houses->compl_address = $request->get('compl_address');
        $houses->phone = $request->get('phone');
        $houses->hours = $request->get('hours');
        $houses->save();

        $houses->transports()->attach($request->get('transports'));

        return redirect()->route('admin.medical-house.index')->with('success', 'created message');
    }

    /**
     * @param MedicalHouses $medical_house
     * @return View
     */
    public function edit(MedicalHouses $medical_house): View
    {
        $transports = Transports::all();

        return view('admin.medical-house.partials._edit', compact('medical_house', 'transports'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param MedicalHouseRequest $request
     * @param MedicalHouses $medical_house
     * @return RedirectResponse
     */
    public function update(MedicalHouseRequest $request, MedicalHouses $medical_house)
    {
        $medical_house->title = $request->get('title');
        $medical_house->content = $request->get('content');
        $medical_house->map = $request->get('map');
        $medical_house->address = $request->get('address');
        $medical_house->compl_address = $request->get('compl_address');
        $medical_house->phone = $request->get('phone');
        $medical_house->hours = $request->get('hours');
        $medical_house->save();

        $medical_house->transports()->sync($request->get('transports'));

        return redirect()->route('admin.medical-house.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param MedicalHouses $medical_house
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, MedicalHouses $medical_house): JsonResponse
    {
        // Detach transport
        if (!empty($medical_house->transports)) {
            $medical_house->transports()->detach($medical_house->transports);
        }

        // Delete
        $medical_house->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.medical-house.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
