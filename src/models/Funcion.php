<?php

namespace Iuta\CineIuta\models;

Class Funcion {
    private $id;
    private $pelicula;
    private $sala;
    private $fecha;
    private $hora;

    public function __construct($id, $pelicula, $sala, $fecha, $hora) {
        $this->id = $id;
        $this->pelicula = $pelicula;
        $this->sala = $sala;
        $this->fecha = $fecha;
        $this->hora = $hora;
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
    public function getPelicula()
    {
        return $this->pelicula;
    }

    /**
     * @param mixed $pelicula
     */
    public function setPelicula($pelicula)
    {
        $this->pelicula = $pelicula;
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
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * @param mixed $fecha
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;
    }

    /**
     * @return mixed
     */
    public function getHora()
    {
        return $this->hora;
    }

    /**
     * @param mixed $hora
     */
    public function setHora($hora)
    {
        $this->hora = $hora;
    }


}