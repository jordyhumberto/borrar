<?php
require 'conexion.php';
$tabla="tabla";
$campo="id";
$ext="index.php";
$sql="SELECT * FROM $tabla";
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
    <a href="otro.php">al otro</a>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>BORRAR</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row=$resultado->fetch_array(MYSQLI_ASSOC)){?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['nombre'];?></td>
                    <td><a href="borrar.php?id=<?php echo $row['id'];?>&tabla=<?php echo $tabla;?>&campo=<?php echo $campo;?>&ext=<?php echo $ext;?>">x</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>