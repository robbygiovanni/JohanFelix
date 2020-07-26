<?php

namespace App\Models;

use CodeIgniter\Model;

class VideoModel extends Model
{
    protected $table = 'video';
    protected $primaryKey = 'id_video';


    public function getVideo($kategori)
    {
        return $this->where(['kategori_video' => $kategori])->findAll();
    }
}
