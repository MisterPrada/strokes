<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Функция для смены языка приложения
     * @param $locale
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index($locale)
    {
        if (in_array($locale, Config::get('app.locales'))) {   # Проверяем, что у пользователя выбран доступный язык
            Session::put('locale', $locale);                    # И устанавливаем его в сессии под именем locale

            $referer = redirect()->back()->getTargetUrl(); //URL предыдущей страницы
            $parse_url = parse_url($referer, PHP_URL_PATH); //URI предыдущей страницы

            //разбиваем на массив по разделителю
            $segments = explode('/', $parse_url);

            //Если URL (где нажали на переключение языка) содержал корректную метку языка
            if (in_array($segments[1], Config::get('app.locales'))) {
                unset($segments[1]); //удаляем метку
            }

            //Добавляем метку языка в URL (если выбран не язык по-умолчанию)
            array_splice($segments, 1, 0, $locale);


            //формируем полный URL
            $url = request()->root().implode("/", $segments);

            //если были еще GET-параметры - добавляем их
            if(parse_url($referer, PHP_URL_QUERY)){
                $url = $url.'?'. parse_url($referer, PHP_URL_QUERY);
            }
            return redirect($url)->withCookie(cookie('Locale', $locale, 9999999999)); //Перенаправляем назад на ту же страницу
        }
        else{
            $response = redirect()->back()->withCookie(cookie('Locale', $locale, 0));
        }

    }

    public function show($locale){
        $locale = in_array($locale, config('app.locales')) ? $locale : config('app.fallback_locale');

        $files   = glob(resource_path('lang/' . $locale . '/*.php'));
        $strings = [];

        $strings = json_decode(file_get_contents (resource_path("lang/{$locale}.json")), true);

        foreach ($files as $file) {
            $name = basename($file, '.php');
            $strings[$name] = require $file;
        }

        $contents = 'window.i18n = ' . json_encode($strings, config('app.debug', false) ? JSON_PRETTY_PRINT : 0) . ';';
        $response = \Response::make($contents, 200);
        $response->header('Content-Type', 'application/javascript');

        return $response;
    }
}
