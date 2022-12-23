<?php
// sirve para codigo mas importante de la aplicacion
require 'includes/funciones.php';
incluir_Template('header');
?>
<main class="contenedor seccion">
	<section class="seccion contenedor">
		<h2>Casas y Departamentos en Ventas</h2>
		<!-- incluir anuncio.php -->
		<?php
		$limite = 10;
		include 'includes/templates/anuncio.php';
		?>
	</section>
</main>
<?php
incluir_Template('footer');
?>