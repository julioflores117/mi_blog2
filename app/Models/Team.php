<?php
namespace App\Models;
class Team{
    public $nombre;
    public $grupo;

    public function mostrarDetalles(){
        echo $this->nombre;
        echo $this->grupo;
    }

}