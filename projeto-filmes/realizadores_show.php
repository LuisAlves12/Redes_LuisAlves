<?php
include "css.php";
    session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
        if($_SERVER['REQUEST_METHOD']=="GET"){
            if(!isset($_GET['realizador']) || !is_numeric($_GET['realizador'])){
                echo '<script>alert("Erro ao abrir realizador");</script>';
                echo 'Aguarde um momento. A reencaminhar página';
                header("refresh:5;url=index.php");
                exit();
            }
            $idRealizador=$_GET['realizador'];
            $con = new mysqli("localhost","root","","filmes");
    
            if($con->connect_errno!=0){
                echo 'Occoreu um erro no acesso à base de dados. <br>'.$con->connect_error;
                exit();
            }
            else{
                $sql = 'select * from realizadores where id_realizador = ?';
                $stm = $con->prepare($sql);
                if($stm!=false){
                    $stm->bind_param('i',$idRealizador);
                    $stm->execute();
                    $res=$stm->get_result();
                    $realizador = $res->fetch_assoc();
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
<h1 style="text-align:center;">Detalhes do realizador</h1>
<?php
    if(isset($realizador)){
        echo '<br>';
        echo "Nome: ".$realizador['nome'];
        echo '<br>';
        echo "Data Nascimento: ".$realizador['data_nascimento'];
        echo '<br>';
        echo "Nacionalidade: ".$realizador['nacionalidade'];
        echo '<br>';
    }
    else{
        echo '<h2>Parece que o realizador selecionado não existe.</h2>';
    }
    echo '<br>';
    echo '<a href="realizadores_edit.php?realizador='.$realizador['id_realizador'].'" style="color:white">Editar Realizador</a><br>';
    echo '<a href="realizadores_delete.php?realizador='.$realizador['id_realizador'].'" style="color:white">Eliminar Realizador</a>';
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