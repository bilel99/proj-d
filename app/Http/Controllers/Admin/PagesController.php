<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Alerts;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $pages = Pages::all();

        return view('admin.pages.index', compact('pages'));
    }

    /**
     * @param Pages $page
     * @return View
     */
    public function edit(Pages $page): View
    {
        $alerts = Alerts::all();
        $pages = Pages::all();
        $types = Alerts::getTypes();
        $levels = Alerts::getLevels();

        return view('admin.pages.partials._edit', compact('page', 'alerts', 'pages', 'types', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageRequest $request
     * @param pages $page
     * @return RedirectResponse
     */
    public function update(PageRequest $request, Pages $page)
    {
        $page->unique_name = Str::slug(strtolower($request->get('unique_name')), '-');
        $page->title = $request->get('title');
        $page->content = $request->get('content');
        $page->save();

        return redirect()->route('admin.pages.index')->with('success', 'update message');
    }
}
