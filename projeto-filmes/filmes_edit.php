<?php
include "css.php";
session_start();
    if(!isset($_SESSION['login'])){
        $_SESSION['login']="incorreto";
    }
    if($_SESSION['login']== "correto" && isset($_SESSION['login'])){
if($_SERVER['REQUEST_METHOD']=="GET"){

    if(isset($_GET['filme']) && is_numeric($_GET['filme'])){
        $idFilme = $_GET['filme'];
        $con = new mysqli("localhost","root","","filmes");

        if($con->connect_errno!=0){
            echo "<h1>Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error."</h1>";
            exit();
        }
        $sql = "Select * from filmes where id_filme=?";
        $stm = $con->prepare($sql);

        if($stm!=false){
            $stm->bind_param("i",$idFilme);
            $stm->execute();
            $res=$stm->get_result();
            $filme = $res->fetch_assoc();
            $stm->close();
        }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="ISO-8859-1">
    <title>Editar filme</title>
</head>
<body style="color:white;background-color:black">
    <h1 style="text-align:center;">Editar filmes</h1>
    <form action="filmes_update.php?filme=<?php echo $filme['id_filme']; ?>" method="post">
        <label>Titulo</label><input type="text" name="titulo" required value="<?php echo $filme['titulo'];?>"><br>
        <label>Sinopse</label><input type="text" name="sinopse" required value="<?php echo $filme['sinopse'];?>"><br>
        <label>Quantidade</label><input type="numeric" name="quantidade" required value="<?php echo $filme['quantidade'];?>"><br>
        <label>Idioma</label><input type="text" name="idioma" required value="<?php echo $filme['idioma'];?>"><br>
        <label>Data lançamento</label><input type="date" name="data_lancamento" required value="<?php echo $filme['data_lancamento'];?>"><br>
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
    else{
        echo "Precisa estar logado.<br>";
        echo "A ser redirecionado para a pagina de login";
        header("refresh:5; url=login.php");
    }
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