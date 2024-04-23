

<?php
$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$sexo = $_POST["sexo"];


if(empty($nombre) || empty($apellido) || ($sexo !='M' && $sexo !='F') ){
    $mesaje_error="Error al procesar los datos, Asegurese de completar los datos.";
    $url_anterior=$_SERVER['HTTP_REFERER'];

    setcookie("mesaje_error", $mesaje_error); 

    header('Location: '.$url_anterior);

    die();

}



require("conector.php");

$sql="";


if ($id==0) {
    $sql ="INSERT INTO personas (nombre, apellido, sexo) VALUES('".$nombre."', '".$apellido."', '".$sexo."') ";
} else {
    $sql ="UPDATE personas SET nombre = '".$nombre."', apellido = '".$apellido."', sexo = '".$sexo."' WHERE id = ".$id;
}



mysqli_query($con, $sql) or die(mysqli_error());


unset($_COOKIE['mesaje_error']); 
setcookie('mesaje_error', ''); 



?>


<h1>PERSONA GUARDADA</h1>
<a href="index.php">INICIO</a>
