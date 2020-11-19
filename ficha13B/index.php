<doctype htlm>
    <header>
        <title>RC</title>
    </header>
<html>
    <body>
        <?php  
            include('header.php');
        ?>
        <br>Aqui fica o restante conteúdo da página.<br>
        Vamos lá fazer uma soma, só de exemplo.
        <?php  
            echo 3+5;
        ?>
        <?php
            include('login.php');
        ?>
        <br>
        <?php
            include('footer.php');
        ?>
    </body>
</html>