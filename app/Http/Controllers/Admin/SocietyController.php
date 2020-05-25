<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocietyRequest;
use App\Models\Society;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SocietyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $society = Society::all();

        return view('admin.society.index', compact('society'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param SocietyRequest $request
     * @param Society $society
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SocietyRequest $request, Society $society): RedirectResponse
    {
        $society->name = $request->get('name');
        $society->email = $request->get('email');
        $society->save();

        return redirect()->route('admin.society.index')->with('success', 'update message');
    }
}
