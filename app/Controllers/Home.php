<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function kontrak(){
        return view('Admin/kontrak');
    }

    public function infoPembayaran(): string
    {
        return view('Admin/infoPembayaran');
    }

    public function dashboard(): string
    {
        return view('Admin/dashboard');
    }

    public function tagihanP1(): string
    {
        return view('Admin/tagihanP1');
    }

    public function tagihanP2(): string
    {
        return view('Admin/tagihanP2');
    }

    public function tagihanP3(): string
    {
        return view('Admin/tagihanP3');
    }

    public function tagihanP4(): string
    {
        return view('Admin/tagihanP4');
    }

    public function tagihanP5(): string
    {
        return view('Admin/tagihanP5');
    }

    public function tagihanP6(): string
    {
        return view('Admin/tagihanP6');
    }
}
