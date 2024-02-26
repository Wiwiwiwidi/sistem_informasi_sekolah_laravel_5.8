<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table ="siswas";
    protected $fillable =['nis','nama_siswa','jenkel','agama','telp','tmp_lahir','tgl_lahir','alamat','foto','email','kelas_id'];

    protected $primarykey='id';

    public function kelas()
    {
        return $this->belongsTo('App\kelas')->withDefault();
    }
    
}
