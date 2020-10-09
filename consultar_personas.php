<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>MOSTRANDO DATOS</h2>
    <?php
    require ("conector.php");
    $sql ="SELECT * FROM personas";
    $resultados = mysqli_query($con, $sql) or die(mysqli_error());    
     ?>


    <ol>
    <?php
    while($fila = mysqli_fetch_array($resultados)){
        echo "<li>".$fila["nombre"].", ".$fila["apellido"]." | <a href='form_persona.php?id=".$fila['id']."' >EDITAR</a></li>";

    }
    ?>
    </ol>

    
</body>
</html>
