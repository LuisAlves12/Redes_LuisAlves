<?php
include "css.php";
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']=="correto" && isset($_SESSION['login'])){
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['realizador']) && is_numeric($_GET['realizador'])){
        $idRealizador=$_GET['realizador'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from realizadores where id_realizador=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idRealizador);
            $stm->execute();
            $res=$stm->get_result();
            $realizador = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar Realizador</title>
</head>
<body style="color:white;background-color:black">
    <h1 style="text-align:center;">Editar realizador</h1>
    <form action="realizadores_update.php?realizador=<?php echo $realizador['id_realizador']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $realizador['nome'];?>"><br>
        <label>Data Nascimento</label><input type="date" name="data_nascimento" required value="<?php echo $realizador['data_nascimento'];?>"><br>
        <label>Nacionalidade</label><input type="text" name="nacionalidade" required value="<?php echo $realizador['nacionalidade'];?>"><br>
        <input type="submit" name="enviar"><br>
    </form>
</body>
<?php
 }
 else{
     echo ("<h1>Houve um erro ao processar o seu pedido.<br>Dentro de segundos será reencaminhado!</h1>");
     header("refresh:5; url=index.php");
 }
}
?>
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

<a href="login.php" style="color:white">Login</a>
<a href="register.php" style="color:white">Register</a>
<a href="listautilizadores.php" style="color:white">ListadeUtilizadores</a>