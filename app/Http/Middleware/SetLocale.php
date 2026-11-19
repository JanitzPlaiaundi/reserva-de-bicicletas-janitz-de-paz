<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $supportedLocales = ['en', 'es'];
        
        if ($request->session()->has('locale')) {
            $locale = $request->session()->get('locale');
        } else {
            $locale = $request->getPreferredLanguage($supportedLocales);
        }

        if (in_array($locale, $supportedLocales)) {
            App::setLocale($locale);
        }

        return $next($request);
    }
}
