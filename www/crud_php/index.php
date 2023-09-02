<!DOCTYPE html>
<html>
<head>
 
    <title>PROYECTO CONEXION/title>
   
   
</head>
<body>
    <?php
    include 'conexion.php';
    $sql="select * from personas";
    $result = $con->query($sql);

    ?>
    <div>
    <table>
        <thead>
            <tr>
                <th>dpi</th>
                <th>prinombre</th>
                <th>segunombre</th>
                <th>primapellido</th>
                <th>seguapellido</th>
                <th>direccion</th>
                <th>telefonocasa</th>
                <th>telefono</th>
                <th>salario</th>
                <th>bonificacion</th>
</tr>
        </thead>
        <tbody>
            <?php   while ($filas=mysqli_fetch_assoc($resultado)){
   
            }
                ?>
            
            <tr>
                <td><?php echo $filas['dpi'] ?></td>
                <td><?php echo $filas['prinombre'] ?></td>
                <td><?php echo $filas['segunombre'] ?></td>
                <td><?php echo $filas['primapellido'] ?></td>
                <td><?php echo $filas['seguapellido'] ?></td>
                <td><?php echo $filas['direccion'] ?></td>
                <td><?php echo $filas['telefonocasa'] ?></td>
                <td><?php echo $filas['telefono'] ?></td>
                <td><?php echo $filas['salario'] ?></td>
                <td><?php echo $filas['bonificacion'] ?></td>
            
            </tr>
        </tbody>
    </table>
    </div>
</body>


</body>
</html>