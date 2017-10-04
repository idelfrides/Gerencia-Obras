<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 00:32
 */

namespace App\Models;


use SON\Model\Table;
session_start();
class usuario extends Table {

    protected $table = "usuario";
    private $id;
    private $nomeUsuario;
    private $emailUsuario;
    private $senhaUsuario;
    private $enderecoUsuario;
    private $cpfUsuario;
    private $rgUsuario;
    private $empresaUsuario;



    /**
     * usuario constructor.
     * @param $id
     * @param $nomeUsuario
     * @param $emailUsuario
     * @param $senhaUsuario
     * @param $enderecoUsuario
     * @param $cpfUsuario
     * @param $rgUsuario
     * @param $empresaUsuario
     */
    public function __construct($id, $nomeUsuario, $emailUsuario, $senhaUsuario, $enderecoUsuario, $cpfUsuario, $rgUsuario, $empresaUsuario)
    {
        $this->id = $id;
        $this->nomeUsuario = $nomeUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->senhaUsuario = $senhaUsuario;
        $this->enderecoUsuario = $enderecoUsuario;
        $this->cpfUsuario = $cpfUsuario;
        $this->rgUsuario = $rgUsuario;
        $this->empresaUsuario = $empresaUsuario;
    }
    public function validarLogin($emailUsuario, $senhaUsuario){

    }

    /**
     * @return \PDO
     */
    public function getId(): \PDO
    {
        return $this->id;
    }

    /**
     * @param \PDO $id
     */
    public function setId(\PDO $id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomeUsuario()
    {
        return $this->nomeUsuario;
    }

    /**
     * @param mixed $nomeUsuario
     */
    public function setNomeUsuario($nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
    }

    /**
     * @return mixed
     */
    public function getEmailUsuario()
    {
        return $this->emailUsuario;
    }

    /**
     * @param mixed $emailUsuario
     */
    public function setEmailUsuario($emailUsuario)
    {
        $this->emailUsuario = $emailUsuario;
    }

    /**
     * @return mixed
     */
    public function getSenhaUsuario()
    {
        return $this->senhaUsuario;
    }

    /**
     * @param mixed $senhaUsuario
     */
    public function setSenhaUsuario($senhaUsuario)
    {
        $this->senhaUsuario = $senhaUsuario;
    }

    /**
     * @return mixed
     */
    public function getEnderecoUsuario()
    {
        return $this->enderecoUsuario;
    }

    /**
     * @param mixed $enderecoUsuario
     */
    public function setEnderecoUsuario($enderecoUsuario)
    {
        $this->enderecoUsuario = $enderecoUsuario;
    }

    /**
     * @return mixed
     */
    public function getCpfUsuario()
    {
        return $this->cpfUsuario;
    }

    /**
     * @param mixed $cpfUsuario
     */
    public function setCpfUsuario($cpfUsuario)
    {
        $this->cpfUsuario = $cpfUsuario;
    }

    /**
     * @return mixed
     */
    public function getRgUsuario()
    {
        return $this->rgUsuario;
    }

    /**
     * @param mixed $rgUsuario
     */
    public function setRgUsuario($rgUsuario)
    {
        $this->rgUsuario = $rgUsuario;
    }

    /**
     * @return mixed
     */
    public function getEmpresaUsuario()
    {
        return $this->empresaUsuario;
    }

    /**
     * @param mixed $empresaUsuario
     */
    public function setEmpresaUsuario($empresaUsuario)
    {
        $this->empresaUsuario = $empresaUsuario;
    }

}