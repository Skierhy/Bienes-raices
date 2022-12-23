<?php
// necesita inicializar la super global
// $_SESSION
// session_start();

// para que no iniciemos dos veces de la sesion
if (!isset($_SESSION)) {
	session_start();
}
// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

// es como un if else
// $auth = $_SESSION['login'] ?? null;
// if ($auth) {
// $_SESSION['login'] = true;
// } else {
// si no existe si le asgina a auth null
// }
$auth = $_SESSION['login'] ?? false;
?>


<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Bienes raíces</title>
	<!-- la / sirve para que en la raiz de la carpeta main hay una carpeta que se llama build -->
	<!-- en de usar ../ -->
	<link rel="stylesheet" href="/build/css/app.css" />
</head>

<body>
	<!-- operador ternario para saber si estamos en el index html -->
	<!-- como las demas archivos php no tiene la variable usamos isset para saber si existe esa variable -->
	<!-- no tener problemas en produccion IMPORTANTE -->
	<!-- ahorita ya no es necesario por que funciones.php esta por defecto el parametro -->
	<header class="header <?php echo $inicio ? 'inicio' : '' ?>">
		<div class="contenedor contenido-header">
			<div class="barra">
				<!-- para referir a la pagina principal -->
				<a href="/index.php">
					<img src="/build/img/logo.svg" alt="Logotipo de Bienes raíces" />
				</a>
				<div class="mobile-menu">
					<img src="/build/img/barras.svg" alt="icon menu responsive" />
				</div>
				<div class="derecha">
					<img src="/build/img/dark-mode.svg" alt="dark mode" class="dark-mode-boton" />
					<nav class="navegacion mostrar">
						<a href="nosotros.php">Nosotros</a>
						<a href="anuncios.php">Anuncios</a>
						<a href="blog.php">Blog</a>
						<a href="contacto.php">Contacto</a>
						<?php
						if ($auth) : ?>
							<a href="cerrar-sesion.php">Cerrar sesión</a>
						<?php else :
						?>
							<a href="/login.php">Iniciar sesión</a>
						<?php endif; ?>
					</nav>
				</div>
			</div>
			<!-- .barra -->

			<?php
			if ($inicio) {
				echo "<h1>Venta de Casas y Departamentos Exclusivos</h1>";
			}
			?>
		</div>
		<!-- .contenedor contenido -->
	</header>