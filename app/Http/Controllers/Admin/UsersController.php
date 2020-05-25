<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::all();

        return view('admin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('admin.users.partials._create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     * @return RedirectResponse
     */
    public function store(UserRequest $request): RedirectResponse
    {
        $user = new User();

        $user->name = $request->get('name');
        $user->firstname = $request->get('firstname');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->status = $request->get('status');

        if (!empty($request->get('password'))) {
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'create message');
    }

    /**
     * Display the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function show(User $user): View
    {
        return view('admin.users.partials._view', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $user
     * @return View
     */
    public function edit(User $user): View
    {
        return view('admin.users.partials._edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param User $user
     * @return RedirectResponse
     */
    public function update(UserRequest $request, User $user): RedirectResponse
    {
        $user->name = $request->get('name');
        $user->firstname = $request->get('firstname');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->status = $request->get('status');

        if (!empty($request->get('password'))) {
            $user->password = Hash::make($request->get('password'));
        }

        $user->save();

        return redirect()->route('admin.users.index')->with('success', 'update message');
    }

    /**
     * Ajax Request Method
     * Remove the specified resource from storage.
     *
     * @param Request $request
     * @param User $user
     * @return JsonResponse|\Symfony\Component\HttpFoundation\JsonResponse
     * @throws Exception
     */
    public function destroy(Request $request, User $user): JsonResponse
    {
        $user->delete();

        if ($request->isXmlHttpRequest()) {
            $response = new JsonResponse();

            return $response->setData([
                'message' => 'delete message',
                'routeIndex' => route('admin.users.index'),
                'currentURL' => url()->current(),
            ]);
        }

        throw new \RuntimeException(__('globals.ajax.error'));
    }
}
