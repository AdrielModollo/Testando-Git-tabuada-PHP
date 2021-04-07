<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Tabuada</title>
</head>

<body>

    <?php

    $tab = 0;
    if(isset($_POST["minhaTabuada"])){
        $tab = $_POST["minhaTabuada"];
        //If para verifica se não é número e informa a mensagem abaixo
        if(!is_numeric($tab)){
            echo "<br>O valor informado não é um número.<br>";
        }else{
            
        //inicio a variável com valor 0
        $num=0;
        //contador até ser menor ou igual 10
        while($num<=10){
            //estrutura da tabuada
            echo $num . " x " . $tab . " = " . ($num * $tab) . "<br>";
            //adiciona até nossa condição, ou seja de 0 à 10
            $num++;
        }

    }
}

?>

<!-- Encaminho os dados através do método post--> 
<form method="post">
    <input type="text" name="minhaTabuada" >
    <input type="submit">
</form>

</body>


</html>