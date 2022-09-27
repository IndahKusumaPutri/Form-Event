<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class event extends Model
{
    public $timestamps = false;
    protected $table = 'events';
    protected $fillable = ['id_layanankesehatan','nama_event','tanggal','keterangan'];

    public function lakes()
    {
        return $this->belongsTo(lakes::class,'id_layanankesehatan','id_layanankesehatan');
    }

    public function regispasien()
    {
        return $this->hasMany(regispasien::class);
    }
}
