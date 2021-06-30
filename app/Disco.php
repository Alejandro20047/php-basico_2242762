<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disco extends Model
{
    //configuraciones basicas
    protected $table = "album";
    protected $primaryKey = "AlbumId";
    public $timestamps = false;
}