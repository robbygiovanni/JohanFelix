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

    public function Travel()
    {
        $data = [
            'photo' => $this->photoModel->getPhoto('travel')
        ];

        return view('photo/travel', $data);
    }

    public function Product()
    {
        $data = [
            'photo' => $this->photoModel->getPhoto('product')
        ];

        return view('photo/product', $data);
    }
    //--------------------------------------------------------------------
}
