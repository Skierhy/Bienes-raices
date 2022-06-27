<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Bienes raíces</title>
		<link rel="stylesheet" href="build/css/app.css" />
	</head>

	<body>
		<!-- operador ternario para saber si estamos en el index html -->
		<!-- como las demas archivos php no tiene la variable usamos isset para saber si existe esa variable -->
		<header class="header <?php echo isset($inicio) ? 'inicio' : '' ?>">
			<div class="contenedor contenido-header">
				<div class="barra">
					<!-- para referir a la pagina principal -->
					<a href="index.php">
						<img
							src="build/img/logo.svg"
							alt="Logotipo de Bienes raíces"
						/>
					</a>
					<div class="mobile-menu">
						<img src="build/img/barras.svg" alt="icon menu responsive" />
					</div>
					<div class="derecha">
						<img
							src="build/img/dark-mode.svg"
							alt="dark mode"
							class="dark-mode-boton"
						/>
						<nav class="navegacion mostrar">
							<a href="nosotros.php">Nosotros</a>
							<a href="anuncios.php">Anuncios</a>
							<a href="blog.php">Blog</a>
							<a href="contacto.php">Contacto</a>
						</nav>
					</div>
				</div>
				<!-- .barra -->
			</div>
			<!-- .contenedor contenido -->
		</header>