<?php

namespace App\Controllers;

use App\Models\PhotoModel;

class Photo extends BaseController
{
    protected $photoModel;

    public function __construct()
    {
        $this->photoModel = new PhotoModel();
    }

    public function index()
    {
        $data = [
            'photo' => $this->photoModel->getPhoto()
        ];

        return view('photo/portrait', $data);
    }

    public function Landscape()
    {
        $data = [
            'photo' => $this->photoModel->getPhoto('landscape')
        ];

        return view('photo/landscape', $data);
    }

    //--------------------------------------------------------------------
}
