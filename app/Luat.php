<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Luat extends Model
{
    protected $table ='luatgiaothong';

    protected $fillable = [
        'id', 'HinhAnh', 'PhuongTien','TieuDe','MucPhat','NghiDinh'
    ];
}
