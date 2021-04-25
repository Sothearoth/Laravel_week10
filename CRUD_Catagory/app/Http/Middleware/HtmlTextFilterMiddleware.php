<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class HtmlTextFilterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // get data from request when ke submit in form (check ke submit mk)
        if($request->isMethod('put')|| $request->isMethod('post') || $request->isMethod('patch'))
        {
            $data = $request->all();
            foreach($data as $index=>$value){
                    $data[$index] = strip_tags($value);
            }
            $request->replace($data);
          
        }
        return $next($request);
    }
}
