<?php

class Saludar{

    function __construct(string $nombre)
    {
        $this->nombre = $nombre;
    }

    function escribirSaludo(){
        echo "Hola $this->nombre";
    }
}