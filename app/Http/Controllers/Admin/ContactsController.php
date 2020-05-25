<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $contacts = Contacts::all();

        return view('admin.contacts.index', compact('contacts'));
    }

    /**
     * Display the specified resource.
     *
     * @param contacts $contact
     * @return View
     */
    public function show(Contacts $contact): View
    {
        $contact = Contacts::with('doctor')->where('id', $contact->id)->first();

        return view('admin.contacts.partials._view', compact('contact'));
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param Contacts $contact
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws \Exception
     */
    public function destroy(Request $request, Contacts $contact): JsonResponse
    {
        $contact->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.contacts.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
