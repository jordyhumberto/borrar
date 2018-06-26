<?php
require 'conexion.php';
$id=$_GET['id'];
$tabla=$_GET['tabla'];
$campo=$_GET['campo'];
$ext=$_GET['ext'];
$sql="DELETE FROM $tabla WHERE $campo='$id'";
$resultado=$mysqli->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        if ($resultado){
            echo "eliminado con exito";
        }else{
            echo "no se pudo eliminar";
        }
    ?>
    <a href="<?php echo $ext;?>">regresar</a>
</body>
</html>