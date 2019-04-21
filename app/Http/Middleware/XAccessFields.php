<?php

namespace App\Http\Middleware;

use Closure;

class XAccessFields
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
        $response = $next($request);
        $data = $response['data'];
        $fields = config('customerfields.com-detail');
        $result = [];
        foreach ($fields as $field) {
            $result[$field] = $data[$field];
        }
        $response['data'] = $result;
        return $response;
    }
}
