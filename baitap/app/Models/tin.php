<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tin extends Model
{
    use HasFactory;
    
    protected $table = 'tin';
    protected $primaryKey = 'id';  
    protected $dates = ['ngayDang'];
    protected $fillable = [
        'tieude',
        'tomtat',
        'urlHinh',
        'ngayDang',
        'noiDung',
        'idLT',
        'xem',
        'noiBat',
        'anHien',
        'tags',
        'lang',
    ];
}
