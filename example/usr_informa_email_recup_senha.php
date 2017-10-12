
<!-- *************************************
 * Created by PhpStorm.
 * User: IDELFRIDES JORGE WM
 * Date: 04/10/2017
 * Time: 17:37
  **************************************** -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <title> Envio de email para redefinir senha</title>
    <style>
        h1{
            /* font-family: "Lucida Sans"; */
            color: darkblue;
            font-size: large;
            text-transform: uppercase;
            font-weight: bolder;
            text-align: center;
        }
    </style>
</head>
<body>
<h1>Informe seu email para redefinir senha</h1>
<form method="get" name="email-recupera" action="NAO-VALE/recupera_envia_email_usuario_exper.php">
    <strong>E-mail &nbsp;&nbsp;</strong><input type="email" name="email" size="50" maxlength="50" placeholder="Seu e-mail"/> <br> <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="submit" value=" Enviar"/>
</form>
</body>
</html>



