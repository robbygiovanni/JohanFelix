<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }

    public function photo()
    {
        return view('pages/photo');
    }

    public function video()
    {
        return view('pages/video');
    }

    //--------------------------------------------------------------------
}
