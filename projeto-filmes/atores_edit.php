<?php
include "css.php";
session_start();
if(!isset($_SESSION['login'])){
    $_SESSION['login']="incorreto";
}
if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['ator']) && is_numeric($_GET['ator'])){
        $idAtor = $_GET['ator'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from atores where id_ator=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idAtor);
            $stm->execute();
            $res=$stm->get_result();
            $ator = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar ator</title>
</head>
<body style="color:white;background-color:black">
    <h1 style="text-align:center;">Editar ator</h1>
    <form action="atores_update.php?ator=<?php echo $ator['id_ator']; ?>" method="post">
        <label>Nome</label><input type="text" name="nome" required value="<?php echo $ator['nome'];?>"><br>
        <label>nacionalidade</label><input type="text" name="nacionalidade" required value="<?php echo $ator['nacionalidade'];?>"><br>
        <label>Data_Nascimento</label><input type="date" name="data_nascimento" required value="<?php echo $ator['data_nascimento'];?>"><br>
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
echo '<br>';
echo '<a href="atores_delete.php?ator='.$ator['id_ator'].'" style="color:white">Eliminar Ator</a>';
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