<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jadwal extends Model
{
    protected $table ="jadwals";
    protected $fillable =['hari','dari_jam','sampai_jam','ruang','kelas_id','mapel_id','guru_id'];

    protected $primarykey='id';

    public function kelas()
    {
        return $this->belongsTo('App\kelas')->withDefault();
    }

    public function mapel()
    {
        return $this->belongsTo('App\mapel')->withDefault();
    }

    public function guru()
    {
        return $this->belongsTo('App\guru')->withDefault();
    }

}


