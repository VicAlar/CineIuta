<?php

namespace Iuta\CineIuta\models;

class AsientoReservado {
    public $id;
    public $asiento;
    public $sala;
    public $funcion;
    public $reservado;

    public function __construct($id, $asiento, $sala, $funcion, $reservado) {
        $this->id = $id;
        $this->asiento = $asiento;
        $this->sala = $sala;
        $this->funcion = $funcion;
        $this->reservado = $reservado;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAsiento()
    {
        return $this->asiento;
    }

    /**
     * @param mixed $asiento
     */
    public function setAsiento($asiento)
    {
        $this->asiento = $asiento;
    }

    /**
     * @return mixed
     */
    public function getSala()
    {
        return $this->sala;
    }

    /**
     * @param mixed $sala
     */
    public function setSala($sala)
    {
        $this->sala = $sala;
    }

    /**
     * @return mixed
     */
    public function getFuncion()
    {
        return $this->funcion;
    }

    /**
     * @param mixed $funcion
     */
    public function setFuncion($funcion)
    {
        $this->funcion = $funcion;
    }

    /**
     * @return mixed
     */
    public function getReservado()
    {
        return $this->reservado;
    }

    /**
     * @param mixed $reservado
     */
    public function setReservado($reservado)
    {
        $this->reservado = $reservado;
    }


}