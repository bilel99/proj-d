<?php

use App\Models\Doctors;
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
    // Count Total doctor in database
    $result = [];
    $doctors =
        Doctors
            ::orderByDesc('created_at')
            ->count();

    if (isset($doctors)) {
        $result[] = [
            'count' => $doctors,
        ];

        return response()->json($result);
    }

    $result[] = [
        'error' => true,
    ];

    return response()->json($result);
});
