<?php
    $rapazes= $_POST["num1"];
    $raparigas= $_POST["num2"];
    echo "A turma é composta por: <br>";
    echo "<h3>".$rapazes. " rapazes</h3><br>";
    echo "<h3>".$raparigas. " raparigas</h3><br>";
    $total= $raparigas + $rapazes;
    echo "O numero total de alunos é ".$total."<br>";
    $perrapazes=($rapazes * 100) / $total;
    echo "A percentagem de rapazes é de ".$perrapazes."%<br>";
    $perraparigas=($raparigas * 100) / $total;
    echo "A percentagem de raparigas é de ".$perraparigas."%<br>";
?>
