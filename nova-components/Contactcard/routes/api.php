<?php

use App\Models\Contacts;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Card API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your card. These routes
| are loaded by the ServiceProvider of your card. You're free to add
| as many additional routes to this file as your card may require.
|
*/

Route::get('/data', function (Request $request) {
    // Get Contact in created_at after 24 hours
    $result = [];
    $contacts =
        Contacts
            ::whereBetween(
                'created_at', [
                    Carbon::now()->subDay(1)->startOfDay(),
                    Carbon::now()
                ]
            )
            ->orderByDesc('created_at')
            ->get();

    if (isset($contacts) && 0 !== count($contacts)) {
        $result[] = [
            'count' => count($contacts),
            'last_email' => $contacts[0]->email,
            'last_created' => $contacts[0]->created_at,
        ];

        return response()->json($result);
    }

    $result[] = [
        'error' => true,
    ];

    return response()->json($result);
});
