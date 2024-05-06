<?php

include '../../../app/appConfig.php';

$nombre_completo = $_POST['nombre_completo'];
$email = $_POST['email'];
$password = $_POST['password'];
$password_repetido = $_POST['password_repetido'];
$nombre_mascota = $_POST['nombre_mascota'];

$cargo = "CLIENTE";

$contador = 0;
$sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
$query = $pdo->prepare($sql);
$query->execute();
$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);
foreach ($usuarios as $usuario) {
    $contador = $contador + 1;
}
if ($contador > 0) {
    //echo "este usuario ya esta registrado en la base de datos";
    session_start();
    $_SESSION['mensaje'] = "Este correo electronico " . $email . " ya esta registrado";
    $_SESSION['icono'] = 'error';
    header('Location: ' . $URL . '/login/registro.php');
} else {
    // echo "este usuario es nuevo";
    if ($password == $password_repetido) {
        //echo "si son iguales";

        $password = password_hash($password, PASSWORD_DEFAULT);
        $sentencia = $pdo->prepare("INSERT INTO tb_usuarios
                               ( nombre_completo, email, password,nombre_mascota,cargo, fyh_creacion)
                         VALUES(:nombre_completo,:email,:password,:nombre_mascota,:cargo,:fyh_creacion) ");
        $sentencia->bindParam('nombre_completo', $nombre_completo);
        $sentencia->bindParam('email', $email);
        $sentencia->bindParam('password', $password);
        $sentencia->bindParam('nombre_mascota', $nombre_mascota);
        $sentencia->bindParam('cargo', $cargo);
        $sentencia->bindParam('fyh_creacion', $fechaHora);

        if ($sentencia->execute()) {
            session_start();
            $_SESSION['mensaje'] = "Se registro exitosamente !!";
            $_SESSION['icono'] = 'success';

            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM tb_usuarios WHERE email = '$email' ";
            $query = $pdo->prepare($sql);
            $query->execute();
            $usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

            $contador = 0;
            foreach ($usuarios as $usuario) {
                $contador = $contador + 1;
                $password_tabla = $usuario['password'];
            }

            $hash = $password_tabla;
            if (($contador > 0) && (password_verify($password, $hash))) {
                echo "bienvenido al sistema";
                session_start();
                $_SESSION['sesion_email'] = $email;
                header('Location: ' . $URL . '/');
            } else {
                echo "error en los datos";
                header('Location: ' . $URL . '/');
            }



        } else {
            session_start();
            $_SESSION['mensaje'] = "error no se pudo registrar el usuario";
            $_SESSION['icono'] = 'error';
            header('Location: ' . $URL . '/login/registro.php');
        }

    } else {
        //echo "las contraseñas no son iguales";
        session_start();
        $_SESSION['mensaje'] = "Las contraseñas no son iguales";
        $_SESSION['icono'] = 'error';
        header('Location: ' . $URL . '/login/registro.php');
    }
}
