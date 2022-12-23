<?php
require 'includes/config/database.php';
$db = conectarBD();
$id = $_GET['id'];
$id = filter_var($id, FILTER_VALIDATE_INT);
// echo '<pre>';
// var_dump($id);
// echo '</pre>';
if (!$id) {
	header('Location: /');
}

$query = "SELECT * FROM propiedades WHERE id = ${id}";
$resultado = mysqli_query($db, $query);

if ($resultado->num_rows == 0) {
	header('Location: /');
}
$propiedades = mysqli_fetch_array($resultado);


// consular la base de datos
// sirve para codigo mas importante de la aplicacion
require 'includes/funciones.php';
incluir_Template('header');
?>
<main class="contenedor seccion contenido-centrado">
	<h1><?php echo $propiedades['titulo']; ?></h1>
	<img src="imagenes/<?php echo $propiedades['imagen']; ?>" alt="Casa en venta frente al bosque" />
	<div class="resumen-propiedad">
		<p class="precio">$<?php echo $propiedades['precio']; ?></p>
		<ul class="iconos-caracteristicas">
			<li>
				<img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />

				<p><?php echo $propiedades['wc']; ?></p>
			</li>

			<li>
				<img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
				<p><?php echo $propiedades['estacionamiento']; ?></p>
			</li>

			<li>
				<img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
				<p><?php echo $propiedades['habitaciones']; ?></p>
			</li>
		</ul>
		<p>
			<?php echo $propiedades['descripcion']; ?>
		</p>
	</div>
</main>
<?php
mysqli_close($db);
incluir_Template('footer');
?>