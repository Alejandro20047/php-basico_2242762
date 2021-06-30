<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $table = "artist";
    protected $primaryKey = "ArtistId";
    public $timestamps = false;

    //RELACION 1:m DEL ARTISTA CON SUS DISCOS
    public function discos(){
        //hasMany: Parametros
        //       1. El modelo del lado M
        //       2. FK
        return $this->hasMany('App\Disco', 'ArtistId');
    }
    //Relacione 1:m Artista a Cancion pasando por discos
    public function canciones(){
        
        //hasmanyThrough: parametros(1= Artista, 2=Disco, 3= Cancion); 
        //     1. el modelo 3
        //     2. el modelo 2
        //     3. FK del modelo 1 en el modelo 2
        //     4. FK del modelo 2 en el modelo 3
        //     5. Pk del 1
        //     6. Pk del 2
        return $this->hasManyThrough('App\Cancion',
                                      'App\Disco',
                                      'ArtistId',
                                      'AlbumId',
                                      'ArtistId',
                                      'AlbumId');

    }
}