<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\DocBlock\Tags\Var_;
use Redirect;
use View;


class MainController extends Controller
{

    public function index()
    {
        return view('index');
    }

    public function services()
    {
        return view('services');
    }

    public function info_decor()
    {
        return view('info_decor');
    }

    public function info_gravura()
    {
        return view('info_gravura');
    }

    public function info_const()
    {
        return view('info_const');
    }

    public function info_auto()
    {
        return view('info_auto');
    }

    public function info_casete()
    {
        return view('info_casete');
    }

    public function info_autocolant()
    {
        return view('info_autocolant');
    }

    public function info_litere()
    {
        return view('info_litere');
    }

    public function info_pos()
    {
        return view('info_pos');
    }

    public function info_suprafete()
    {
        return view('info_suprafete');
    }
    public function contacts()
    {
        return view('contacts');
    }

    public function about()
    {
        return view('about');
    }

    public function baimages()
    {
        return view('baimages');
    }

    public function order()
    {
        return view('order');
    }
    public function send_mail(Request $request)
    {

          $data['info'] = $request->all();
        Mail::send('mail', $data, function($message) {
            $message->to('alex.x2@mail.ru', 'Avem nevoie de serviciile dvs')->subject('Avem nevoie de serviciile dvs');
            $message->from('nacleicamail@gmail.com');
        });

    }
}
