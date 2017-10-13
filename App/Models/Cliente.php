<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 13/10/17
 * Time: 18:49
 */

namespace App\Models;


class Cliente{


private $nomeCliente;
private $endCliente;
private $empresaCliente;
private $cpfCliente;
private $emailCliente;
private $telefoneCliente;

    /**
     * Cliente constructor.
     * @param $nomeCliente
     * @param $endCliente
     * @param $empresaCliente
     * @param $cpfCliente
     * @param $emailCliente
     * @param $telefoneCliente
     */
    public function __construct($nomeCliente=null, $endCliente=null, $empresaCliente=null, $cpfCliente=null, $emailCliente=null, $telefoneCliente=null)
    {
        $this->nomeCliente = $nomeCliente;
        $this->endCliente = $endCliente;
        $this->empresaCliente = $empresaCliente;
        $this->cpfCliente = $cpfCliente;
        $this->emailCliente = $emailCliente;
        $this->telefoneCliente = $telefoneCliente;
    }

    public function cadastroCliente(){

}

    /**
     * @return mixed
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * @param mixed $nomeCliente
     */
    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    /**
     * @return mixed
     */
    public function getEndCliente()
    {
        return $this->endCliente;
    }

    /**
     * @param mixed $endCliente
     */
    public function setEndCliente($endCliente)
    {
        $this->endCliente = $endCliente;
    }

    /**
     * @return mixed
     */
    public function getEmpresaCliente()
    {
        return $this->empresaCliente;
    }

    /**
     * @param mixed $empresaCliente
     */
    public function setEmpresaCliente($empresaCliente)
    {
        $this->empresaCliente = $empresaCliente;
    }

    /**
     * @return mixed
     */
    public function getCpfCliente()
    {
        return $this->cpfCliente;
    }

    /**
     * @param mixed $cpfCliente
     */
    public function setCpfCliente($cpfCliente)
    {
        $this->cpfCliente = $cpfCliente;
    }

    /**
     * @return mixed
     */
    public function getEmailCliente()
    {
        return $this->emailCliente;
    }

    /**
     * @param mixed $emailCliente
     */
    public function setEmailCliente($emailCliente)
    {
        $this->emailCliente = $emailCliente;
    }

    /**
     * @return mixed
     */
    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    /**
     * @param mixed $telefoneCliente
     */
    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    }

}