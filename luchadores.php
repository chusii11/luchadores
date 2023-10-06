<?php

include('clasesluchadores.php');

$tipocombate=rand(1,4);

print_r($_POST);
if($_POST['luchador1']=='floyd'){
    $luchador1=new Boxeador('Floyd Mayweather',100);
}elseif($_POST['luchador1']=='bruce') {
    $luchador1=new Taekwondo('Bruce Lee',100);
}elseif($_POST['luchador1']=='mcgregor'){
    $luchador1=new Mma('Mcgregor',100);
}else {
    $luchador1=new Judo('Teddy Rinner',100);
}
if($_POST['luchador2']=='floyd'){
    $luchador2=new Boxeador('Floyd Mayweather',100);
}elseif($_POST['luchador2']=='bruce') {
    $luchador2=new Taekwondo('Bruce Lee',100);
}elseif($_POST['luchador2']=='mcgregor'){
    $luchador2=new Mma('Mcgregor',100);
}else {
    $luchador2=new Judo('Teddy Rinner',100);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    img {
        height: 10rem;
        width: 15rem;
    }
    </style>
</head>
<body>
    <form action="luchadores.php" method="post">
        <label>Mayweather</label>
        <input type="radio" name="luchador1" value="floyd">
        <label>Bruce Lee</label>
        <input type="radio" name="luchador1" value="bruce">
        <label>Mcgregor</label>
        <input type="radio" name="luchador1" value="mcgregor">
        <label>Teddy Rinner</label>
        <input type="radio" name="luchador1" value="teddy">
</br>
<h1>VS:</h1>
</br>
        <label>Mayweather</label>
        <input type="radio" name="luchador2" value="floyd">
        <label>Bruce Lee</label>
        <input type="radio" name="luchador2" value="bruce">
        <label>Mcgregor</label>
        <input type="radio" name="luchador2" value="mcgregor">
        <label>Teddy Rinner</label>
        <input type="radio" name="luchador2" value="teddy">
        <input type="submit">
    </form>
</br>
</body>
</html>
<?php
if($tipocombate==1){
    $puntuacion1=$luchador1->puntuacion + $luchador1->puñetazos;
    $puntuacion2=$luchador2->puntuacion + $luchador2->puñetazos;
    echo "Enfrentaremos en un combate de Boxeo a ".$luchador1->nombre." contra ".$luchador2->nombre;
    echo "</br>";
    echo "Puntuación Total de ".$luchador1->nombre." es = ".$puntuacion1;
    echo "</br>";
    echo "Puntuación Total de ".$luchador2->nombre." es = ".$puntuacion2;
    echo "</br>";
    if($puntuacion1>$puntuacion2){
        echo "El ganador es: ".$luchador1->nombre;
        echo "</br>";
        echo $luchador1->galeria;
    }elseif($puntuacion1<$puntuacion2){
        echo "El ganador es: ".$luchador2->nombre;
        echo "</br>";
        echo $luchador2->galeria;
    }else {
        echo "El combate termina en empate";
    }
}elseif($tipocombate==2){
    $puntuacion1=$luchador1->puntuacion + $luchador1->puñetazos + $luchador1->patadas;
    $puntuacion2=$luchador2->puntuacion + $luchador2->puñetazos + $luchador2->patadas;
    echo "Enfrentaremos en un combate de Taekwondo a ".$luchador1->nombre." contra ".$luchador2->nombre;
    echo "</br>";
    echo "Puntuación Total de ".$luchador1->nombre." es = ".$puntuacion1;
    echo "</br>";
    echo "Puntuación Total de ".$luchador2->nombre." es = ".$puntuacion2;
    echo "</br>";
    if($puntuacion1>$puntuacion2){
        echo "El ganador es: ".$luchador1->nombre;
        echo "</br>";
        echo $luchador1->galeria;
    }elseif($puntuacion1<$puntuacion2){
        echo "El ganador es: ".$luchador2->nombre;
        echo "</br>";
        echo $luchador2->galeria;
    }else {
        echo "El combate termina en empate";
    }
}elseif($tipocombate==3){
    $puntuacion1=$luchador1->puntuacion + $luchador1->puñetazos + $luchador1->patadas + $luchador1->agarres;
    $puntuacion2=$luchador2->puntuacion + $luchador2->puñetazos + $luchador2->patadas + $luchador2->agarres;
    echo "Enfrentaremos en un combate de MMA a ".$luchador1->nombre." contra ".$luchador2->nombre;
    echo "</br>";
    echo "Puntuación Total de ".$luchador1->nombre." es = ".$puntuacion1;
    echo "</br>";
    echo "Puntuación Total de ".$luchador2->nombre." es = ".$puntuacion2;
    echo "</br>";
    if($puntuacion1>$puntuacion2){
        echo "El ganador es: ".$luchador1->nombre;
        echo "</br>";
        echo $luchador1->galeria;
    }elseif($puntuacion1<$puntuacion2){
        echo "El ganador es: ".$luchador2->nombre;
        echo "</br>";
        echo $luchador2->galeria;
    }else {
        echo "El combate termina en empate";
    }
}else{
    $puntuacion1=$luchador1->puntuacion + $luchador1->agarres;
    $puntuacion2=$luchador2->puntuacion + $luchador2->agarres;
    echo "Enfrentaremos en un combate de Judo a ".$luchador1->nombre." contra ".$luchador2->nombre;
    echo "</br>";
    echo "Puntuación Total de ".$luchador1->nombre." es = ".$puntuacion1;
    echo "</br>";
    echo "Puntuación Total de ".$luchador2->nombre." es = ".$puntuacion2;
    echo "</br>";
    if($puntuacion1>$puntuacion2){
        echo "El ganador es: ".$luchador1->nombre;
        echo "</br>";
        echo $luchador1->galeria;
    }elseif($puntuacion1<$puntuacion2){
        echo "El ganador es: ".$luchador2->nombre;
        echo "</br>";
        echo $luchador2->galeria;
    }else {
        echo "El combate termina en empate";
    }
}


?>
