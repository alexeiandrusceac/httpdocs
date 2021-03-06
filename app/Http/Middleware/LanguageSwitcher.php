<?php
/**
 * Created by PhpStorm.
 * User: alexei.andrusceac
 * Date: 08.10.2018
 * Time: 11:56
 */

namespace App\Http\Middleware;

use Closure;
use App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class LanguageSwitcher
{
    public function handle($request, Closure $next)
    {
        App::setLocale(Session::has('locale') ? Session::get('locale') : Config::get('app.locale'));
        return $next($request);
    }
}