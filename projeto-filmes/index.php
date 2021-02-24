<?php
include "css.php";
    session_start();
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
    <body style="color:white;background-color:black">
    <h1 style="text-align:center;">Filmes</h1>
    <?php
        $stm = $con->prepare('select * from filmes');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'" style="color:white">';
            echo $resultado['titulo'];
            echo '</a>';
            echo '<br>';
        }
        $stm->close();
        echo "<br>";
        $stm = $con->prepare('select * from utilizadores');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            if($resultado['id'] == $_SESSION['id_user']){
                echo '<a href="utilizadores_edit.php?user='.$resultado['id'].'" style="color:white">User</a><br>';
            }
        }
        $stm->close();
        ?>
         <br> <br>
        <a href="filmes_create.php" style="color:white">Adicionar Filme</a>
        <a href="login.php" style="color:white">Login</a>
        <a href="register.php" style="color:white">Register</a>
        <a href="listautilizadores.php" style="color:white">Lista de utilizadores</a>
    
        <br><br>
        <a href="index.php" style="color:white">Filmes</a>
        <a href="atores_index.php" style="color:white">Atores</a>
        <a href="realizadores_index.php" style="color:white">Realizadores</a>
    </body>
</html>

<?php
    }
?>