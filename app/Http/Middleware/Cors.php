<?php
namespace App\Http\Middleware;
use Closure;
/*
CORS対策
*/
class Cors
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $headers = [
            'Access-Control-Allow-Origin'   => '*',
            'Access-Control-Allow-Methods'  => 'GET, POST, PUT, DELETE, OPTIONS',
            'Access-Control-Allow-Headers'  => 'Content-Type, Authorization',
            'Access-Control-Expose-Headers' => 'X-Total-Count'
        ];
        foreach($headers as $k => $v){
            $response->headers->set($k, $v);
        }
        return $response;
    }
}
