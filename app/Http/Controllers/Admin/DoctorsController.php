<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\DoctorRequest;
use App\Models\Doctors;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DoctorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $doctors = Doctors::all();

        return view('admin.doctors.index', compact('doctors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.doctors.partials._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DoctorRequest $request
     * @return RedirectResponse
     */
    public function store(DoctorRequest $request)
    {
        $doctor = new Doctors();

        $doctor->name = $request->get('name');
        $doctor->firstname = $request->get('firstname');
        $doctor->civility = $request->get('civility');
        $doctor->email = $request->get('email');
        $doctor->save();

        return redirect()->route('admin.doctors.index')->with('success', 'create message');
    }

    /**
     * Display the specified resource.
     *
     * @param Doctors $doctor
     * @return View
     */
    public function show(Doctors $doctor): View
    {
        return view('admin.doctors.partials._view', compact('doctor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Doctors $doctor
     * @return View
     */
    public function edit(Doctors $doctor): View
    {
        return view('admin.doctors.partials._edit', ['doctor' => $doctor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param DoctorRequest $request
     * @param Doctors $doctor
     * @return RedirectResponse
     */
    public function update(DoctorRequest $request, Doctors $doctor)
    {
        $doctor->name = $request->get('name');
        $doctor->firstname = $request->get('firstname');
        $doctor->civility = $request->get('civility');
        $doctor->email = $request->get('email');
        $doctor->save();

        return redirect()->route('admin.doctors.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Doctors $doctor
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Doctors $doctor): JsonResponse
    {
        $doctor->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.doctors.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
