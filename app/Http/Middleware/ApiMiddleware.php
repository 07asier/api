<?php

namespace App\Http\Middleware;

use Closure;
use DB;

class ApiMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $usuarios = DB::table('usuarios_api')->select('api_token')->get();
        for($i=0;$i<sizeof($usuarios);$i++){
            if($request->api_token == $usuarios[$i]->api_token) {
                return $next($request);
            }
        }

            return response()->json(['error'=>'Unauth'],401);
        }
}
