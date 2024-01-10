<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    {
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
}
