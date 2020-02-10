<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $fillable = array('nama', 'nim','id_dosen');
    public $timestamps = true;

    public function wali()
    {
        return $this->hasOne('App\Wali', 'id_mahasiswa');
    }
    public function dosen()
    {
        return $this->belongsTo('App\Dosen', 'id_dosen');
    }

    public function hobi()
    {
        return $this->belongsToMany(
            'App\Hobi', #Model Hobi
        'mahasiswa_hobi', #table mahasiswa_hobi
        'id_mahasiswa', #fk table untuk mahasiswa
        'id_hobi' #fk table untuk hobi
        );
    }
}
