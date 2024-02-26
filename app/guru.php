<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table ="gurus";
    protected $fillable =['nip','nama_guru','jenkel','telp','alamat','foto','email'];

    protected $primarykey='id';

    public function kelas(): HasMany
    {
        return $this->hasMany('App\kelas');
    }
    
    public function jadwal(): HasMany
    {
        return $this->hasMany('App\jadwal');
    }
}
