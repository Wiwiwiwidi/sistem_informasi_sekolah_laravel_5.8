<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mapel extends Model
{
    protected $table ="mapels";
    protected $fillable =['nama_mapel'];

    protected $primarykey='id';

    public function jadwal(): HasMany
    {
        return $this->hasMany('App\jadwal');
    }
}

