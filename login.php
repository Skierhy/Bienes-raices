<?php
// importa base de datos
require 'includes/config/database.php';
$db = conectarBD();

$errores = [];

// autenticar el usuario
// se usa para cuando se envia el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // echo '<pre>';
    // print_r($_POST);
    // echo '</pre>';
    // mysql_real_escape_string() se usa para evitar inyectión de código
    $email = mysqli_real_escape_string($db, filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (!$email) {
        $errores['email'] = 'El email es requerido';
    }
    if (!$password) {
        $errores['password'] = 'La contraseña es requerida';
    }
    // echo '<pre>';
    // print_r($errores);
    // echo '</pre>';

    if (empty($errores)) {
        // revisar si el usuario existe
        $query = "SELECT * FROM usuarios WHERE email = '${email}'";
        $resultado = mysqli_query($db, $query);
        // sirve si el query fue exitoso
        // en pocas palabras, si el query se ejecuto correctamente
        // encontro un usuario con el email ingresado
        if ($resultado->num_rows) {
            // revisar si la contraseña es correcta
            $usuario = mysqli_fetch_assoc($resultado);

            // verificar si la contraseña es correcta
            // primero es el password del usuario del navegador
            // segundo es la contraseña del la base de datos el hash de la contraseña
            $auth = password_verify($password, $usuario['password']);

            if ($auth) {
                // el usuario y la contraseña son correctos
                // guardar el usuario en la sesión

                // super global $_SESSION
                // guardar los datos del usuario en la sesión en el navegador
                // necesita este
                session_start();
                // mantener inciar sesión

                // llenar el arreglo de la sesión
                // para usarla para pasar entre paginas
                // permisos de acceso
                $_SESSION['usuario'] = $usuario['email'];
                $_SESSION['login'] = true;

                // echo '<pre>';
                // print_r($_SESSION);
                // echo '</pre>';

                // redireccionar al usuario a la pagina de inicio
                header('Location: /admin');
            } else {
                $errores['password'] = 'La contraseña es incorrecta';
            }
        } else {
            $errores['email'] = 'El usuario no existe';
        }
    }
}




// incluye el header
// sirve para codigo mas importante de la aplicacion
require 'includes/funciones.php';
incluir_Template('header');
?>

<main class="contenedor seccion contenido-centrado">
    <h1>Iniciar sección</h1>

    <?php
    foreach ($errores as $error) : ?>
        <div class="alerta error">
            <?= $error ?>
        </div>
    <?php endforeach; ?>

    <form class="formulario" method="POST">
        <fieldset>
            <legend>Email y password</legend>
            <label for="email">E-mail</label>
            <input type="email" placeholder="Tu e-mail" id="email" name="email" require />

            <label for="password">Nombre</label>
            <input type="password" placeholder="Tu password" id="password" name="password" require />
        </fieldset>
        <input type="submit" value="Iniciar sesión" class="boton boton-verde">
    </form>
</main>
<?php
incluir_Template('footer');
?>