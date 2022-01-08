<?php

namespace App\Http\Middleware;

use Closure;
use \Illuminate\Support\Facades\App;
use \Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Request;
use \Illuminate\Support\Facades\Session;


class Locale
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
        $raw_locale = Session::get('locale');
        $cookie_locale = $request->cookie('Locale');

        if (in_array($raw_locale, Config::get('app.locales'))) {
            $locale = $raw_locale;                          //Устанавливаем из Session
        } elseif (in_array($cookie_locale, Config::get('app.locales'))) {
            $locale = $cookie_locale; # Устанавливаем из Cookie
        } else {
            $locale = Config::get('app.locale'); # Ставим стандартный язык приложения
        }

        $uri = \Illuminate\Support\Facades\Request::path(); //получаем URI
        $segmentsURI = explode('/', $uri); //делим на части по разделителю "/"

        // Изменить язык если в URL стоит префикс
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], Config::get('app.locales'))) {
            Session::put('locale', $segmentsURI[0]); # И устанавливаем его в сессии под именем locale
            $response = redirect()->back()->withCookie(cookie('Locale', $segmentsURI[0], 9999999999));
            $locale = $segmentsURI[0];
        }

        App::setLocale($locale); # Устанавливаем локаль приложения

        return $next($request);
    }

    public static function getLocale()
    {
        $uri = Request::path(); //получаем URI
        $segmentsURI = explode('/', $uri); //делим на части по разделителю "/"

        //Проверяем метку языка - есть ли она среди доступных языков
        if (!empty($segmentsURI[0]) && in_array($segmentsURI[0], Config::get('app.locales'))) {
            return $segmentsURI[0];
        } else {
            return Config::get('app.locale');
        }
    }
}
