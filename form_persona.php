<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FORMULARIO DE PERSONA</title>
</head>
<body>
    <h2>FORMULARIO</h2>
    <?php
    //para verificar si existe un registro existente    
    $id = isset($_GET['id']) ? $_GET['id'] : 0;
    $nombre ="";
    $apellido ="";
    $sexo ="";
    require ("conector.php");
    
    if($id>0){
        $sql ="SELECT * FROM personas WHERE id = ".$id;
        $resultados = mysqli_query($con, $sql) or die(mysqli_error());
        while($fila = mysqli_fetch_array($resultados)){
            $id = $fila['id'];
            $nombre = $fila['nombre'];
            $apellido = $fila['apellido'];
            $sexo = $fila['sexo'];
        }

    }


    ?>

    <form action="guardar_persona.php" method="post">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" placeholder="Nombre de la persona">
        <br>
        <input type="text" name="apellido" id="apellido" value="<?php echo $apellido; ?>" placeholder="Apellido de la persona">
        <br>
        <select name="sexo" id="sexo">
            <option>SELECCIONE EL SEXO</option>
            <option value="F" <?php echo $sexo=="F"?"selected":""; ?> >FEMENINO</option>
            <option value="M" <?php echo $sexo=="M"?"selected":""; ?> >MASCULINO</option>
        </select>
        <br>
        <button type="submit">GUARDAR</button>

    </form>
    <?php //esto solamente se mostrara cuando hay un registro existente ?>
    <?php if($id>0){ ?>
        <form action="borrar_persona.php" method="post">
            <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">
            <button type="submit">BORRAR</button>
        </form>
    <?php } ?>

    <br>
    <a href="index.php">VOLVER A INICIO</a>


</body>
</html>
