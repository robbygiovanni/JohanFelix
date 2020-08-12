<?php

namespace App\Controllers;

use App\Models\PhotoModel;
use App\Models\ContactModel;



class Contact extends BaseController
{
    protected $photoModel;

    public function __construct()
    {
        $this->photoModel = new PhotoModel();
        $this->contactModel = new ContactModel();
    }

    public function index()
    {
        return view('contact');
    }

    public function submit()
    {
        $this->contactModel->insertMessage();
        // $data = [
        //     'photo' => $this->photoModel->getPhoto('portrait')
        // ];

        // return view('photo/portrait', $data);
    }

    //--------------------------------------------------------------------
}
