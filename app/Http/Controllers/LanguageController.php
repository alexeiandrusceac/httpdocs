<?php
/**
 * Created by PhpStorm.
 * User: alexei.andrusceac
 * Date: 08.10.2018
 * Time: 11:15
 */

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
use Redirect;
use App\Http\Requests;

class LanguageController extends Controller
{
    public function index()
    {
        \Session::put('locale', Input::get('locale'));
        return Redirect::back();
    }

}