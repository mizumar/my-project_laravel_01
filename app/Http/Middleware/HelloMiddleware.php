<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class HelloMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        $response = $next($request);

        if (!is_object($response)) {
            return $response;
        }

        $content = $response->getContent();

        if (is_string($content)) {
            $pattern = '/<middleware>(.*)<\/middleware>/i';
            $replace = '<a href="http://$1">$1</a>';
            $content = preg_replace($pattern, $replace, $content);
            $response->setContent($content);
        }

        return $response;
    }
}
