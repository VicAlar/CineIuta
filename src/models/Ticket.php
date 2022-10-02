<?php

namespace Iuta\CineIuta\models;

class Ticket {
    public $id;
    public $nombreCliente;
    public $fechaCompra;
    public $asientosReservados;

    public function __construct($id, $nombreCliente, $fechaCompra, $asientosReservados) {
        $this->id = $id;
        $this->nombreCliente = $nombreCliente;
        $this->fechaCompra = $fechaCompra;
        $this->asientosReservados = $asientosReservados;
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
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }

    /**
     * @param mixed $nombreCliente
     */
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    }

    /**
     * @return mixed
     */
    public function getFechaCompra()
    {
        return $this->fechaCompra;
    }

    /**
     * @param mixed $fechaCompra
     */
    public function setFechaCompra($fechaCompra)
    {
        $this->fechaCompra = $fechaCompra;
    }

    /**
     * @return mixed
     */
    public function getAsientosReservados()
    {
        return $this->asientosReservados;
    }

    /**
     * @param mixed $asientosReservados
     */
    public function setAsientosReservados($asientosReservados)
    {
        $this->asientosReservados = $asientosReservados;
    }

}