<?php
require 'conexion.php';
$tabla="tbl_docente";
$campo="IDDocente";
$ext="otro.php";
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
    <a href="index.php">al index</a>
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
                    <td><?php echo $row['IDDocente'];?></td>
                    <td><?php echo $row['Nombres'];?></td>
                    <td><a href="borrar.php?id=<?php echo $row['IDDocente'];?>&tabla=<?php echo $tabla;?>&campo=<?php echo $campo;?>&ext=<?php echo $ext;?>">x</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>