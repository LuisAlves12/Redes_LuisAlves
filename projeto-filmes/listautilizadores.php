<?php
include "css.php";
    $con = new mysqli("localhost","root","","filmes");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ".$con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Utilizadores</title>
    </head>
    <body style="color:white;background-color:black">
    <h1 style="text-align:center;">Utilizadores</h1>
    <?php
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo $resultado['nome'], "   " ,$resultado['user_name'], "    " ,$resultado['email'];
            echo '<br>';
        }
        $stm->close();
    ?>
<br>
</body>
</html>

<?php
    }
?>
<br><br>
        <a href="index.php" style="color:white">Filmes</a>
        <a href="atores_index.php" style="color:white">Atores</a>
        <a href="realizadores_index.php" style="color:white">Realizadores</a>
<br> <br>
            <a href="login.php" style="color:white">Login</a>
            <a href="register.php" style="color:white">Register</a>
            <a href="listautilizadores.php" style="color:white">ListadeUtilizadores</a>