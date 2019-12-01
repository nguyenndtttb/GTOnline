<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CanhBao extends Model
{
    protected $table = 'canhbao';

    protected $fillable = [
        'tenduong', 'kinhdo', 'vido','hinhanh','tieude','tinhtrang','nguontin','diadiem'
    ];
}
