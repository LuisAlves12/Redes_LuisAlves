<?php
include "css.php";
session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['ator']) || !is_numeric($_GET['ator'])){
                echo '<script>alert("Erro ao abrir ator");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idAtor=$_GET['ator'];
            $con = new mysqli("localhost","root","","filmes");
    
            if($con->connect_errno!=0){
                echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from atores where id_ator = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idAtor);
                    $stm->execute();
                    $res=$stm->get_result();
                    $livro = $res->fetch_assoc();
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
    if(isset($livro)){
        echo '<br>';
        echo "Nome: ".$livro['nome'];
        echo '<br>';
        echo "Data Nascimento: ".$livro['data_nascimento'];
        echo '<br>';
        echo "Nacionalidade: ".$livro['nacionalidade'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o filme selecionado não existe. <br>Confirme a sua seleção.</h2>';
    }
    echo '<br>';
    echo '<a href="atores_edit.php?ator='.$livro['id_ator'].'" style="color:white">Editar Ator</a><br>';
    echo '<a href="atores_delete.php?ator='.$livro['id_ator'].'" style="color:white">Eliminar Ator</a>';
?>
<?php
    }
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
?>
</body>
</html>
<br><br>
        <a href="index.php" style="color:white">Filmes</a>
        <a href="atores_index.php" style="color:white">Atores</a>
        <a href="realizadores_index.php" style="color:white">Realizadores</a>
<br> <br>
<a href="login.php" style="color:white">Login</a>
<a href="register.php" style="color:white">Register</a>
<a href="listautilizadores.php" style="color:white">ListadeUtilizadores</a>