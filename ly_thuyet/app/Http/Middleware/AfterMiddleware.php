<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AfterMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);
        // lay noi dung cuar view
        $content = $response->getContent();
        // thay the danh sach bang danh sach 123
        $content = str_replace('danh sach','danh sach 123',$content);
        // thiet lap gia trij thuoc tinh content
        $response->setContent($content);
        return $response;
    }
}
