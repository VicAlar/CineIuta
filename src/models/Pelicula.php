<?php

namespace Iuta\CineIuta\models;

Class Pelicula {
    private $id;
    private $titulo;
    private $genero;
    private $duracion;
    private $director;
    private $sinopsis;
    private $imagen;
    private $trailer;
    private $fechaEstreno;
    private $reparto;

    public function __construct($id, $titulo, $genero, $duracion, $director, $sinopsis, $imagen, $trailer, $fechaEstreno, $reparto) {
        $this->id = $id;
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracion = $duracion;
        $this->director = $director;
        $this->sinopsis = $sinopsis;
        $this->imagen = $imagen;
        $this->trailer = $trailer;
        $this->fechaEstreno = $fechaEstreno;
        $this->reparto = $reparto;
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
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    /**
     * @return mixed
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * @param mixed $duracion
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    }

    /**
     * @return mixed
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @param mixed $director
     */
    public function setDirector($director)
    {
        $this->director = $director;
    }

    /**
     * @return mixed
     */
    public function getSinopsis()
    {
        return $this->sinopsis;
    }

    /**
     * @param mixed $sinopsis
     */
    public function setSinopsis($sinopsis)
    {
        $this->sinopsis = $sinopsis;
    }

    /**
     * @return mixed
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * @param mixed $imagen
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;
    }

    /**
     * @return mixed
     */
    public function getTrailer()
    {
        return $this->trailer;
    }

    /**
     * @param mixed $trailer
     */
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
    }

    /**
     * @return mixed
     */
    public function getFechaEstreno()
    {
        return $this->fechaEstreno;
    }

    /**
     * @param mixed $fechaEstreno
     */
    public function setFechaEstreno($fechaEstreno)
    {
        $this->fechaEstreno = $fechaEstreno;
    }

    /**
     * @return mixed
     */
    public function getReparto()
    {
        return $this->reparto;
    }

    /**
     * @param mixed $reparto
     */
    public function setReparto($reparto)
    {
        $this->reparto = $reparto;
    }



}