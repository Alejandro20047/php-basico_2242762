<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
    protected $table = "genre";
    protected $primaryKey = "GenreId";
    public $timestamps = false;

    //1 M entre Genero y Cancion
    public function canciones(){
       return $this->hasmany('App\Cancion', 'GenreId');

    }
}
