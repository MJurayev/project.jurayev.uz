<?php

namespace App\Http\Middleware;

use Closure;
use App;
class LanguageSwitcher
{
    public function __construct()
    {
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!session()->has('locale'))
        {
            session()->put('locale',Config()->get('app.locale'));
        }
        App::setLocale(session('locale'));
        return $next($request);
    }
}