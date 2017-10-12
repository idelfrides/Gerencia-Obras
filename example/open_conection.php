
<!-- *****************************
 * Created by PhpStorm.
 * User: IDELFRIDES JORGE
 * Date: 04/10/2017
 * Time: 02:07
 ********************************* -->

<?php
include_once 'config_host.php';

class open_conection extends config_host{
    //configura_envio_email();
    var $pdo;

    function __construct(){
        //echo phpinfo();
        echo "<br> <h3>OPEN CONECTION</h3><br><br>";
        foreach(PDO::getAvailableDrivers() as $driver){
            echo "<br>";
            echo $driver;
        }

       // $this->pdo = new PDO($this->db2, $this->user, $this->pw);
        $this->pdo = new PDO('mysql:host='.$this->host, $this->user, $this->pw);
        //$this->pdo = new PDO('mysql:host='.$this->host.';dbname='.$this->db, $this->user, $this->pw);
    }
    function gera_chave_acesso($email){
        $consutl = $this->pdo->prepare("SELECT * FROM usuario WHERE emailUsuario = :email");
        $consutl->bindValue(":emailUsuario",$email);
        $run = $consutl->execute();

        $rs = $consutl->fetch(PDO::FETCH_ASSOC);

        if($rs){
            $chave = sha1($rs["id"].$rs["senhaUsuario"]);
            return $chave;
        }else{
            return null;
        }
    }

    function checkChave($email, $chave){
        $consutl = $this->pdo->prepare("SELECT * FROM usuario WHERE emailUsuario = :email");
        $consutl->bindValue(":email",$email);
        $run = $consutl->execute();

        $rs = $consutl->fetch(PDO::FETCH_ASSOC);

        if($rs){
            $chave_correta = sha1($rs["id"].$rs["senha"]);
            if ($chave==$chave_correta){
                return $rs['id'];
            }
        }
    }

    function Set_nova_senha($nova_senha, $id){
        $consutl = $this->pdo->prepare("UPDATE usuario SET senhaUsuario = :nova_senha WHERE id = :id");
        $consutl->bindValue(":nova_senha",sha1($nova_senha));
        $consutl->bindValue(":id",$id);
        $run = $consutl->execute();
    }

    /* ------------------------------------------
       função que envia e-mail para o usuário
     -------------------------------------------- */
    function envia_email($to, $matter, $message, $headers){
        $enviado = mail($to, $matter, $message, $headers);
        if ($enviado) {
            echo "E-MAIL ENVIADO COM SUCCESSO! <br><br> um link foi enviado ao seu e-mail para recuperação da sua conta";
        } else {
            echo "<h3><br> <br> ERRO AO ENVIAR E-MAIL!!!</h3>";
        }
    }

    /* método q volta para  tela de login da aplicação */
    function voltar_login(){
        header("location:index.html");
    }

    function voltar_tela_nova_senha(){
        header("location:tela_nova_senha.php");
    }

}
