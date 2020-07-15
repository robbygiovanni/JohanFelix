<?php

namespace App\Controllers;

use App\Models\PhotoModel;

class Home extends BaseController
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
        return view('home', $data);
    }

    public function refreshPhoto($kategori)
    {
        $data = [
            'photo' => $this->photoModel->getPhoto('landscape')
        ];

        return view('ajxRefreshPhoto', $data);
    }

    //--------------------------------------------------------------------
}
