<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinTuc extends Model
{
    protected $table = "tintuc";

    protected $fillable = [
        'id', 'TieuDe', 'TieuDeKhongDau','TomTat','NoiDung','Hinh','NoiBat','SoLuotXem','idLoaiTin'
    ];

    public function LoaiTin()
    {
    	return $this->belongsTo('App\LoaiTin','idLoaiTin','id');
    }

    public function Comment()
    {
    	return $this->hasMany('App\Comment','idTinTuc','id');
    }
}
