<?php   
    $con=new mysqli("localhost","root","","filmes");
    if($con->connect_errno!=0){
        echo "Ocorreu um erro no acesso à base de dados ". $con->connect_error;
        exit;
    }
    else{
?>
    <!DOCTYPE html>
    <html>
    <head>
        <meta charset="ISO-8859-1">
        <title>Autores</title>
    </head>
    <body>
        <h1>Autores</h1>
            <?php   
                $stm= $con->prepare('select * from autores');
                $stm->execute();
                $res=$stm->get_result();
                while($resultado = $res->fetch_assoc()){
                    echo '<a href="autores_show.php?autor='.$resultado['id_autor']. '">';
                    echo $resultado['nome'];
                    echo '</a>';
                    echo '<br>';
                }
                $stm->close();
            ?>
            <br> <br>
            <a href="autores_create.php">Adicionar</a>
            <a href="login.php">Login</a>
            <a href="register.php">Register</a>
            <a href="listautilizadores.php">ListadeUtilizadores</a>
        <br>
    </body>
    </html>
<?php
    }
?>