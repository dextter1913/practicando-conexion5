<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practicando conexion 5</title>
</head>
<body>
<center>
<h1>Practicando Conexion 5</h1>
<form action="index.php" method="post">
<label for="usuario">Usuario:</label>
<input type="text" name="usuario" id="usuario"><br><br>
<label for="contraseña">Contraseña:</label>
<input type="password" name="contraseña" id="contraseña"><br><br>
<label for="contraseña2">Confirmar Contraseña:</label>
<input type="password" name="contraseña2" id="contraseña2"><br><br>
<label for="id">Doc Identidad</label>
<input type="text" name="id" id="id"><br><br>
<label for="nombre">Nombre Estudiante:</label>
<input type="text" name="nombre" id="nombre"><br><br>
<label for="apellido">Primer Apellido:</label>
<input type="text" name="apellido" id="apellido"><br><br>
<label for="apellido2">Segundo Apellido:</label>
<input type="text" name="apellido2" id="apelido2"><br><br>
<label for="telefono">Telefono:</label>
<input type="text" name="telefono" id="telefono"><br><br>
<input type="submit" value="Registrar" name="btnregistrar">

</form>
</center>
    <?php 
    if (isset($_POST['btnregistrar'])) {
        $_usuario = $_POST['usuario'];
        $_contraseña = $_POST['contraseña'];
        $_contraseña2 = $_POST['contraseña2'];
        $_id = $_POST['id'];
        $_nombre = $_POST['nombre'];
        $_apellido = $_POST['apellido'];
        $_apellido2 = $_POST['apellido2'];
        $_telefono = $_POST['telefono'];

        if ($_contraseña === $_contraseña2) {
            include("./clases/conexionOpen.php");
            $conexion->query("INSERT INTO $table(user, pass) VALUES('$_usuario','$_contraseña')");
            $conexion->query("INSERT INTO $table2(id, nombre, apellido1, apellido2, telefono, user) 
            VALUES('$_id','$_nombre','$_apellido','$_apellido2','$_telefono','$_usuario')");
            include("./clases/conexionClose.php");
            echo "<center>Registro Exitoso</center>";
        }
    }
    ?>
</body>
</html>