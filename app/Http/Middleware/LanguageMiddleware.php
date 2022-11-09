<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class LanguageMiddleware
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
        $asTranslation = ['en','es', 'fr'];
        $userLocales = $request->getLanguages();
        $locale = \Str::before($request->getPreferredLanguage($userLocales),'_');
    
        //check if the locale is in the array of available locales
        if (!in_array($locale, $asTranslation)) {
            $locale = 'en';
        }
        //remove the brackets from the locale
        app()->setLocale( \Str::before($locale, '_'));
    
        return $next($request);
    }
}
