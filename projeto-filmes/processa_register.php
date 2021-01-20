<?php
    if($_SERVER['REQUEST_METHOD']=="POST"){
            $nome="";
            $user_name="";
            $password="";
            if(isset($_POST['nome'])){
                $nome=$_POST['nome'];
            }
            if(isset($_POST['user_name'])){
                $user_name=$_POST['user_name'];
            }
            if(isset($_POST['password'])){
                $password=$_POST['password'];
            }
            $con=new mysqli("localhost","root","","filmes");
            if($con->connect_errno!=0){
                echo "Ocorreu um erro no acesso à base de dados. <br>" .$con->connect_error;
                exit;
            }
            else{
                if($con->connect_errno!=0){
                    echo "Ocorreu um erro no acesso à base de dados.<br>".$con->connect_error;
                    exit;
                }
        
                else{
                    $sql = 'insert into filmes(titulo,sinopse,quantidade,idioma,data_lancamento) values(?,?,?,?,?)';
                    $stm = $con->prepare($sql);
                    if($stm!=false){
                        $stm->bind_param('ssiss',$titulo,$sinopse,$quantidade,$idioma,$data_lancamento);
                        $stm->execute();
                        $stm->close();
                        echo '<script>alert("Livro adicionado com sucesso");</script>';
                        echo 'Aguarde um momento. A reencaminhar página';
                        header("refresh:5; url=index.php");
                    }
                    else{
                        echo($con->error);
                        echo "Aguarde um momento. A reencaminhar página";
                        header("refresh:5;url=index.php");
                    }
                }
            }
        else{
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="ISO-8859-1">
    <title>Adicionar filmes</title>
    </head>
    <body>
    <h1>Adicionar filmes</h1>
    <form action="processa_register.php" method="post">
    <label>Nome</label><input type="text" name="nome" required ><br>
    <label>Nome de Utilizador</label><input type="text" name="user_name" required ><br>
    <label>Palavra-Passe</label><input type="text" name="password" required ><br>
    <input type="submit" name="enviar"><br>
    </form>
    </body>
    </html>
    <?php
        };
    ?>