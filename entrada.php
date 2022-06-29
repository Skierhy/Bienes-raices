<?php
	// sirve para codigo mas importante de la aplicacion
	require 'includes/funciones.php';
	incluir_Template('header');
?>
<main class="contenedor seccion contenido-centrado">
			<h1>Guia de decoración de tu hogar</h1>
			<picture>
				<source srcset="build/img/destacada2.webp" type="image/webp" />
				<source srcset="build/img/destacada2.jpg" type="image/jpeg" />
				<img
					src="build/img/destacada2.jpg"
					alt="Casa en venta frente al bosque"
				/>
			</picture>

			<p class="informacion-meta">
				Escrito el: <span>6/22/2022</span> por: <span>Admin</span>
			</p>

			<div class="resumen-propiedad">
				<p>
					Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					Voluptatem exercitationem perferendis, voluptates esse nisi
					laudantium recusandae iusto non facere harum ipsum dignissimos
					dolore temporibus ullam, nemo amet. Ab, provident blanditiis!
					Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					Voluptatem exercitationem perferendis, voluptates esse nisi
					laudantium recusandae iusto non facere harum ipsum dignissimos
					dolore temporibus ullam, nemo amet. Ab, provident blanditiis!
					Lorem ipsum dolor, sit amet consectetur adipisicing elit.
					Voluptatem exercitationem perferendis, voluptates esse nisi
					laudantium recusandae iusto non facere harum ipsum dignissimos
					dolore temporibus ullam, nemo amet. Ab, provident blanditiis!
				</p>
			</div>
		</main>

<?php
	incluir_Template('footer');
?>
