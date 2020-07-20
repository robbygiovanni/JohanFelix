<?php

namespace App\Controllers;

use App\Models\PhotoModel;

class Contact extends BaseController
{
    protected $photoModel;

    public function __construct()
    {
        $this->photoModel = new PhotoModel();
    }

    public function index()
    {
        return view('contact');
    }

    //--------------------------------------------------------------------
}
