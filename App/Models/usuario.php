<?php
/**
 * Created by PhpStorm.
 * User: franciscomatias
 * Date: 04/10/17
 * Time: 00:32
 */

namespace App\Models;


use App\Conn;
use SON\DI\Container;
use SON\Model\Table;
class usuario extends Table{

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
    public function __construct($id=null, $nomeUsuario=null, $emailUsuario=null, $senhaUsuario=null, $enderecoUsuario=null, $cpfUsuario=null, $rgUsuario=null, $empresaUsuario=null)
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
    public function validarLogin(){

        $connexao = new Conn();

        $cone = $connexao->getCon();

        $query = "select * from usuario WHERE emailUsuario = '$this->emailUsuario'";
        $resultado = mysqli_query($cone, $query);
        $row = mysqli_fetch_array($resultado);

        if ($row['senhaUsuario'] == $this->senhaUsuario){
            $_SESSION['nivelAcessoUsuario'] = $row['nivelAcessoUsuario'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['emailUsuario'] = $row['emailUsuario'];
            $_SESSION['nomeUsuario'] = $row['nomeUsuario'];
            header('Location:/Gerencia-Obras/public/home');

        }else{
            header('Location:/Gerencia-Obras/public/?erro=1');

        }


    }
    public function logout(){
        unset($_SESSION['nivelAcessoUsuario']);
        unset($_SESSION['id']);
        unset($_SESSION['emailUsuario']);
        unset($_SESSION['nomeUsuario']);
        header('Location:/Gerencia-Obras/public/?erro=1');
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