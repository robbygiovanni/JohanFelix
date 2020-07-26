<?php

namespace App\Models;

use CodeIgniter\Model;

class PhotoModel extends Model
{
    protected $table = 'photo';
    protected $primaryKey = 'id_photo';


    public function getPhoto($kategori)
    {
        return $this->where(['kategori_photo' => $kategori])->findAll();
    }
}
