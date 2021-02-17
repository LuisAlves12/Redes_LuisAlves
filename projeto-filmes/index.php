<?php
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
    <body>
    <h1>filmes</h1>
    <?php
        $stm = $con->prepare('select * from filmes');
        $stm->execute();
        $res=$stm->get_result();
        while($resultado = $res->fetch_assoc()){
            echo '<a href="filmes_show.php?filme='.$resultado['id_filme'].'">';
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
                echo '<a href="utilizadores_edit.php?user='.$resultado['id'].'">User</a><br>';
            }
        }
        $stm->close();
        ?>
         <br> <br>
        <a href="filmes_create.php">Adicionar Filme</a>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
        <a href="listautilizadores.php">Lista de utilizadores</a>
    
        <br><br>
        <a href="atores_index.php">Atores</a>
        <a href="realizadores_index.php">Realizadores</a>
    </body>
</html>

<?php
    }
?>