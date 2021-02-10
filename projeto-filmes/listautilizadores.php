<?php
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
    <title>Filmes</title>
    </head>
    <body>
    <h1>Utilizadores</h1>
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
<br> <br>
            <a href="index.php">Pagina Inicial</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="listautilizadores.php">ListadeUtilizadores</a>