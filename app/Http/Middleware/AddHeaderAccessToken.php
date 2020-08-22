<?php


namespace App\Http\Middleware;

use App\Models\ApiConsumer;
use Closure;
use Illuminate\Http\Request;

class AddHeaderAccessToken
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if ($request->has('access_token')) {
            // Is Authorized
            if (ApiConsumer::where('api_token', $request->get('access_token'))->exists()) {
                // Pass to header http the authorization
                $request->headers->set('Authorization', 'Bearer ' . $request->get('access_token'));

                return $next($request);
            }
        }

        return response()->json([
            'authorized' => false,
            'message' => 'Unauthorized: access_token not found',
        ], 401);
    }
}
