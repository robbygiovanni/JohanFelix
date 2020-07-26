<?php

namespace App\Controllers;

use App\Models\VideoModel;

class Video extends BaseController
{
    protected $videoModel;

    public function __construct()
    {
        $this->videoModel = new VideoModel();
    }

    public function index()
    {
        $data = [
            'video' => $this->videoModel->getVideo('musicvideo')
        ];

        return view('video/musicVideo', $data);
    }

    public function ShortMovie()
    {
        $data = [
            'video' => $this->videoModel->getVideo('shortmovie')
        ];

        return view('video/shortMovie', $data);
    }


    //--------------------------------------------------------------------
}
