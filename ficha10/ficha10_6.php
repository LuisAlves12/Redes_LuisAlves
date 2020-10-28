<!DOCTYPE html>
	<html>
	<head>
		<title> Teste PHP</title>
	</head>
	<body>
    <?php
        $pacientes = array(
            'Joana'=>20,
            'Rui'=>25,
            'Ana'=>30,
        );
        echo 'Idade do paciente Joana '.$paciente['Joana']. 'anos.';
        foreach ($pacientes as $nomes=>$idade){
            echo 'O paciente '.$nome. ' tem '.$idade. ' anos.<br>';
        }
        $pacientes['Pedro']=24;
        $pacientes['Carla']=23;
    ?>
    </body>
</html>