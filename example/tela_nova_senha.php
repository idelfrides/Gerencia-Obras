<!-- /**
 * Created by PhpStorm.
 * User: IDELFRIDES JORGE
 * Date: 09/10/2017
 * Time: 00:25
 */ -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Tela de nova senha</title>
</head>
<body>
    <h1>TELA DE REDEFINIÇÃO DE SENHA DO USUÁRIO</h1>
        <?php
            $chave = " ";
            if ($_GET["$chave"]){
                $chave = preg_replace('/[^[:alnum:]]/', '', $_GET["$chave"]);
        ?>
        <form name="redefinicao" method="get" action="redefinir_senha2.php   ">
            <input type="hidden" name="chave" value=" <?php echo $chave ?> "/>

            <strong>E-mail&nbsp;</strong><input type="email" name="email-usr" placeholder="Email" size="50"
                                                 maxlength="50"/><br><br><br>
            <strong>Nova Senha&nbsp;&nbsp</strong><input type="password" name="nova-senha1" placeholder="Nova senha"
                                                           size="22" maxlength="8"/><br><br><br>
            <strong>Repetir Senha&nbsp;</strong><input type="password" name="nova-senha2" placeholder="Repetir senha"
                                                        size=20" maxlength="8"/><br><br>
            <input type="submit" value="Confirmar"/>
        </form>
        <?php
        }else{
                echo "<br><br>Usuário não encontrado";
            }
        ?>
</body>
</html>