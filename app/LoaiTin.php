<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiTin extends Model
{
    protected $table = "loaitin";

    protected $fillable = [
        'id', 'idTheLoai', 'Ten','TenKhongDau'
    ];

    public function TheLoai()
    {
    	return $this->belongsTo('App\TheLoai','idTheLoai','id');
    }

    public function TinTuc()
    {
    	return $this->hasMany('App\TinTuc','idLoaiTin','id');
    }
}
