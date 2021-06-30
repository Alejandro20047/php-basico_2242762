<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ListaReproduccion extends Model
{
    protected $table = "playlist";
    protected $primaryKey = "PlaylistId";
    public $timestamps = false;

    //RELACION MM Playlist y sus canciones 
    public function canciones(){
       //belongtoMany: parametros
       // 1.El modelo a relacionar 
       // 2.La tabla pivote
       // 3.FK de este modelo en el pivote
       // 4.FK del modelo relacionar, de el pivote

       return $this->belongsToMany('App\Cancion',
                                    'playlisttrack',   
                                    'PlaylistId',
                                    'TrackId');


    }
}
