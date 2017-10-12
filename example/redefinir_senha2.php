<?php
/* -------------------------------------------
 * Created by PhpStorm.
 * User: IDELFRIDES JORGE
 * Date: 10/10/2017
 * Time: 12:40
 ---------------------------------------------*/

// inclui o arquivo q realiza a conexao ao DB e mantém todos os métodos da aplicação
include_once 'open_conection.php';
$conec =  new open_conection();

if (isset($_GET["nova-senha1"]) and (isset($_GET["nova-senha2"])) and (isset($_GET["email-usr"]))){
    $email_usr = $_GET["email-usr"];
    $nova_senha1 = $_GET["nova-senha1"];
    $nova_senha2 = $_GET["nova-senha2"];
    $chave = $_GET["chave"];

    $email_usr = preg_replace('/[^[:alnum:]_.-@]/','',$email_usr);
    $chave = preg_replace('/[^[:alnum:]]/','',$chave);
    $nova_senha1 =  addslashes($nova_senha1);

    $result = $conec->checkChave($email_usr, $chave);

    if ($result){
        $altera_senha = $conec->Set_nova_senha($nova_senha1, $result);
        echo "<h2>Senha alterado com sucesso</h2>";
        $conec->voltar_login();
    }else{
        echo "<h2>Erro: Usuário não encontrado</h2>";
        $conec->voltar_tela_nova_senha();
    }
}

