
<!-- *****************************
 * Created by PhpStorm.
 * User: IDELFRIDES JORGE
 * Date: 04/10/2017
 * Time: 02:07
 ********************************** -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title> Envia chave de recuperação senha usuario</title>
    <style></style>
</head>
<body>
<h1> Envia chave de recuperação senha usuario</h1>
<?php
    /* inclui-se a classe open_conection a este arquivo */
    include_once 'open_conection.php';

    /* instancia objeto da classe open_conection */
    $con = new open_conection();

    /* email informado pelo usuario */
    $email_usr = $_GET['email-recupera'];

    $email_usr = preg_replace('/[^[:alnum:]_.-@]/','',$email_usr);

    /* chama o método para gerar uma chave de acesse criptografada para redefinição da senha*/
    $key = $con->gera_chave_acesso($email_usr);

    if ($key){

        echo "E-mail valido<br><br> Mensagem será enviada. <br><br> Acesse seu email!<br><br>";

        /* assunto da correspondência */
        $assunto = "Recuperação da conta de usuário";
        /* nome do remetente */
        $nome = "Sistema gerencia obras";
        /* mensagem que será apresentada ao usuario */
        $mensagem = "O Sr. solicitou a recuperação de seus dados de login.";
        /* email_remetente - é email do servidor remoto garantido pelo plano de hospedagem */
        $email_remetente = "idelfridesjorgepapai@gmail.com";
        /* configurações necessárias para correto interpreração da message */
        $cabecalho = "MIME-Version: 1.0";
        $cabecalho .= 'Content-type: text/html; charset = iso-8859-1\n';
        $cabecalho .= 'From: $email_remetente';
        /* mensagem q será apresentada ao usuario */
        $message = "<strong>Nome:</strong>$nome<br><br><strong>Assunto:</strong>$assunto<br><br><strong>Mensagem:</strong>$mensagem<br><br><br><br>Clique no botão abaixo para <br><br><br><a href='tela_nova_senha.php' target='_blanks'><button value=$key>Redefinir senha</button></a> ";
        /* invoca a função que envia_email */
        $con->envia_email($email_usr, $assunto, $message, $cabecalho);
        //$con->voltar_login();
    } else {
        echo "<h5>Emial invalido</h5>";
    }
?>
</body>
</html>


