<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelGaleri extends Model
{
    protected $table = 'mediatk';
    
    public function lookup($param)
    {
        return $this->query("SELECT mediatk.id, mediatk.file, kegiatantk.detail FROM mediatk JOIN kegiatantk ON mediatk.id_kegiatan = kegiatantk.id WHERE kegiatantk.kegiatan = '" . $param . "'")->getResultArray();
    }
}
