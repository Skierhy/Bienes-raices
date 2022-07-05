<?php

// echo '<pre>';
// var_dump($_GET);
// echo '</pre>';
// obtener el query string
// ?? significa que si no hay query string, entonces ponga esto
// placeholder
// uso de isset para saber si existe una variable
// isset($_GET['id'])
// $id = $_GET["id"] ?? null;
$resultado = $_GET["resultado"] ?? null;
require '../includes/funciones.php';
incluir_Template('header');
?>

<main class="contenedor seccion">
	<h1>Admin de Bienes raíces</h1>
	<?php
	if ($resultado == 1) :
	?>
		<p class="alerta exito">Anuncio Creado Correctamente</p>
	<?php
	endif;
	?>
	<a href="/admin/propiedades/crear.php" class="boton boton-verde">Nueva Propiedad</a>

	<table class="propiedades">
		<thead>
			<tr>
				<th>ID</th>
				<th>Titulo</th>
				<th>Imagen</th>
				<th>Precio</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
			<tr>
				<th>1</th>
				<th>Casa en la playa</th>
				<th> <img src="/imagenes/86e004403e891b6e659e25d2711625de.jpg" alt="imagen propiedad" class="imagen-tabla"> </th>
				<th>$120000000</th>
				<th>
					<a href="#" class="boton-rojo-block">Eliminar</a>
					<a href="#" class="boton-amarillo-block">Actualizar</a>
				</th>
			</tr>
		</tbody>
	</table>
</main>
<?php
incluir_Template('footer');
?>