<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function show(Pages $page): View
    {
        return view('admin.pages.partials._view', compact('page'));
    }

    /**
     * @param Pages $pages
     * @return View
     */
    public function edit(Pages $pages): View
    {
        return view('admin.pages.partials._edit', compact('pages'));
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

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param pages $page
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Pages $page): JsonResponse
    {
        $page->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.pages.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
