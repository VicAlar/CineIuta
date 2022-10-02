<?php

namespace Iuta\CineIuta\models;

class Asiento {
    public $id;
    public $numero;
    public $sala;

    public function __construct($id, $numero, $sala) {
        $this->id = $id;
        $this->numero = $numero;
        $this->sala = $sala;
    }

}