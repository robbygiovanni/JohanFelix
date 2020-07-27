<?php

namespace App\Controllers;

use App\Models\AchievementModel;

class Achievement extends BaseController
{
    protected $achievementModel;

    public function __construct()
    {
        $this->achievementModel = new AchievementModel();
    }

    public function index()
    {
        $data = [
            'achievement' => $this->achievementModel->getAchievement()
        ];
        return view('achievement', $data);
    }

    //--------------------------------------------------------------------
}
