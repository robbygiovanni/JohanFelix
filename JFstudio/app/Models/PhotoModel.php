<?php

namespace App\Models;

use CodeIgniter\Model;

class PhotoModel extends Model
{
    protected $table = 'photo';
    protected $primaryKey = 'id_photo';


    public function getPhoto($kategori = false)
    {
        if ($kategori == false) {

            return $this->where(['kategori_photo' => 'portrait'])->findAll();
        }

        return $this->where(['kategori_photo' => $kategori])->findAll();
    }
}
