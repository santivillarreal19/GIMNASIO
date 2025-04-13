<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <section class="register">
        <div class="register-cont">
            <h1>Registrarse</h1>
            <form action="#" method="post" autocomplete="off">
                <label>Nombre de usuario</label>
                <input type="text" name="nombre" placeholder="nombre" required>
                <label>Apellido de usuario</label>
                <input type="text" name="apellido" placeholder="apellido" required>
                <label>Celular</label>
                <input type="number" name="celular" placeholder="numero de celular" required>
                <label>Numero de whasappt</label>
                <input type="number" name="whasappt" placeholder="Numero de whasappt" required>
                <label>Correo</label>
                <input type="correo" name="correo" placeholder="Correo " required>
                <label>Fecha de nacimiento</label>
                <input type="date" name="fecha" required>
                <label>Contraseña</label>
                <input type="password" name="contrasena" placeholder="contraseña de usuario" required>
                <label>Foto del usuario</label>
                <input type="image" name="imagen" required>
                <label>Tipo de documento</label>
                <select name="tp">
                    <?php
                    require_once('../config/conexion.php');
                    $sql = "SELECT * FROM tp_documento";
                    $stmt = mysqli_query($conexion,$stmt);

                    while($row = mysqli_fetch_array($stmt)){
                        echo "<option value='".$row['id_tp']."'>".$row['tp_documento']."</option>";
                    }
                    ?>
                </select>
                <label>Documento</label>
                <input type="number" name="Documento" required>
                <label>Tipo de rol</label>
                <select name="rol">
                    <?php 
                    require_once('../config/conexion.php');
                    $sql = "SELECT * FROM rol";
                    $stmt = mysqli_query($conexion,$sql);

                    while($row = mysqli_fetch_array($stmt)){
                        echo "<option value='".$row['id_rol']."'>".$row['rol']."</option>";
                    }
                    ?>
                </select>
                <label>Genero</label>
                <?php 
                require_once('../config/conexion.php');
                $sql =  "SELECT * FROM sexo";
                $stmt = mysqli_query($conexion,$sql);

                while($row = mysqli_fetch_array($stmt)){
                    echo "<option value='".$row['id_sexo']."'>".$row['sexo']."</option>";
                }
                ?>
            </form>
        </div>
    </section>
</body>
</html>