<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PageRequest;
use App\Models\Alerts;
use App\Models\Pages;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
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
        
        //dd($page->getRetrievingFile($page->unique_name));

        return view('admin.pages.partials._edit', compact('page', 'alerts', 'pages', 'types', 'levels'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param PageRequest $request
     * @param pages $page
     * @return RedirectResponse
     */
    public function update(PageRequest $request, Pages $page): RedirectResponse
    {
        $page->title = $request->get('title');
        $page->content = $request->get('content');
        $page->save();

        $page->alerts()->sync($request->get('alerts'));

        // Upload Files Laravel Spatie Media Library Bundles
        $page->clearMediaCollection($page->unique_name);
        $page->addMedia($request->file('files'))->preservingOriginal()->toMediaCollection($page->unique_name);

        return redirect()->route('admin.pages.index')->with('success', 'update message');
    }

    public function getFiles(Request $request, Pages $page)
    {
        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'file' => $page->hasFile($page->unique_name) ?? $page->getRetrievingFile($page->unique_name),
            ]);
        }
    }
}
