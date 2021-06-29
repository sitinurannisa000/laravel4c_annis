<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Makul extends Model
{
    protected $table = 'makul';
    protected $fillable = ['id', 'kd_makul','nama_makul', 'SKS'];
    public $timestamps = false;

}