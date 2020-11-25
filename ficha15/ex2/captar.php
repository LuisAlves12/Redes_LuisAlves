<?php
if($_POST["operacao"] == "soma"){
    soma();
}
else if($_POST["operacao"] == "subtracao"){
    subtracao();
}
else if($_POST["operacao"] == "multiplicacao"){
    multiplicacao();
}
else if($_POST["operacao"] == "divisao"){
    divisao(); 
}
    function soma(){
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $soma= $num1 + $num2;
        echo "A soma dos numero é: ".$soma. "<br>";
    }
    function subtracao(){
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $sub= $num1 - $num2;
        echo "A subtração dos numero é: ".$sub. "<br>";
    }
    function multiplicacao(){
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $mul= $num1 * $num2;
        echo "A multiplicação dos numero é: ".$mul. "<br>";
    }
    function divisao(){
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $div= $num1 / $num2;
        echo "A multiplicação dos numero é: ".$div. "<br>";
    }
?>