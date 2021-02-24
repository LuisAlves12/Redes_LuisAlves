<?php
include "css.php";
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['filme']) || !is_numeric($_GET['filme'])){
                echo '<script>alert("Erro ao abrir livro");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idFilme=$_GET['filme'];
            $con = new mysqli("localhost","root","","filmes");
    
            if($con->connect_errno!=0){
                echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from filmes where id_filme = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idFilme);
                    $stm->execute();
                    $res=$stm->get_result();
                    $filme = $res->fetch_assoc();
                    $stm->close();
                }
                else{
                    echo '<br>';
                    echo ($con->error);
                    echo '<br>';
                    echo "Aguarde um momento.A reencaminhar página";
                    echo '<br>';
                    header("refresh:5; url=index.php");
                }
            }
        }
        ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>Detalhes</title>
</head>
<body style="color:white;background-color:black">
<h1 style="text-align:center;">Detalhes do filme</h1>
<?php
    if(isset($filme)){
        echo '<br>';
        echo "Titulo: ".$filme['titulo'];
        echo '<br>';
        echo "Sinopse: ".$filme['sinopse'];
        echo '<br>';
        echo "Data Lançamento: ".$filme['data_lancamento'];
        echo '<br>';
        echo "Quantiadade: ".$filme['quantidade'];
        echo '<br>';
        echo "Idioma: ".$filme['idioma'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o filme selecionado não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<br>';
    echo '<a href="filmes_edit.php?filme='.$filme['id_filme'].'" style="color:white">Editar filme</a><br>';
    echo '<a href="filmes_delete.php?filme='.$filme['id_filme'].'" style="color:white">Eliminar filme</a>';
?>
</body>
</html>
<?php
    }
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
?>
<br><br>
        <a href="index.php" style="color:white">Filmes</a>
        <a href="atores_index.php" style="color:white">Atores</a>
        <a href="realizadores_index.php" style="color:white">Realizadores</a>
<br> <br>
<a href="filmes_create.php" style="color:white">Adicionar</a>
<a href="login.php" style="color:white">Login</a>
<a href="register.php" style="color:white">Register</a>
<a href="listautilizadores.php" style="color:white">ListadeUtilizadores</a>