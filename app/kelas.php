<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    protected $table ="kelass";
    protected $fillable =['nama_kelas','tingkat_kelas','jurusan','jumlah_siswa','guru_id'];

    protected $primarykey='id';
    
    public function siswa(): HasMany
    {
        return $this->hasMany('App\siswa');
    }
    public function guru()
    {
        return $this->belongsTo('App\guru')->withDefault();
    }
    
    public function jadwal(): HasMany
    {
        return $this->hasMany('App\jadwal');
    }

}
