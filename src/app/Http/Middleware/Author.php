<?php

namespace App\Http\Middleware;

use App\Models\Siswa;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Author
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = $request->bearerToken();
        $Client = Siswa::where('api_token', $token)->first();
        if (!$Client || $Client->api_token === null){
            return response()->json([
                'message' => 'Unathorized'
            ], 401);
        }
        $request->merge(['authenticated_client' => $client]);
        return $next($request);
    }
}
