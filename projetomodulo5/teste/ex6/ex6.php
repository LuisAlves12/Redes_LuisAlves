<!DOCTYPE html>
<html>
    <head>
        <title>Projeto Modulo 5</title>
        <meta charset="utf8">
    </head>
    <body>
    <form action="resultado.php" method="post">
            <table>
                <tr>
                    <td>Nome:</td>
                    <td><input type="text" name="txt_nome" size="15"><br></td>
                </tr>
                <tr>
                    <td>Data de nascimento:</td>
                    <td><input type="date" name="txt_data" value="<?php echo date('Y-m-d'); ?>"><br></td>   
                </tr>
            </table>
            <input type="submit" name="btn_enviar" value="Enviar">
        </form>
    </body>
</html>