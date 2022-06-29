<?php
	// sirve para codigo mas importante de la aplicacion
	require 'includes/funciones.php';
	incluir_Template('header');
?>
<main class="contenedor seccion">
			<h1>Conoce Sobre Nosotros</h1>

			<div class="nosotros contenedor seccion">
				<picture>
					<source src="build/img/nosotros.webp" type="image/webp" />
					<source src="build/img/nosotros.jpg" type="image/jpeg" />
					<img
						loading="lazy"
						src="build/img/nosotros.jpg"
						alt="nosotros"
					/>
				</picture>
				<div>
					<blockquote>25 Años Nos Respalda</blockquote>
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
			</div>
		</main>

		<section class="contenedor seccion">
			<h1>Mas Sobre Nosotros</h1>
			<div class="icono-nosotros">
				<div class="iconos-apartado">
					<img src="build/img/icono1.svg" alt="icono de seguridad" />
					<h3>Seguridad</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit.
						Mollitia repudiandae id tempore ex non nulla, deserunt
						perspiciatis ut magni nemo aliquam facere magnam quaerat,
						voluptatibus obcaecati! Voluptatum nam veniam nihil.
					</p>
				</div>
				<!-- 1 -->
				<div class="iconos-apartado">
					<img src="build/img/icono2.svg" alt="icono de economía" />
					<h3>Economía</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit.
						Mollitia repudiandae id tempore ex non nulla, deserunt
						perspiciatis ut magni nemo aliquam facere magnam quaerat,
						voluptatibus obcaecati! Voluptatum nam veniam nihil.
					</p>
				</div>
				<!-- 1 -->
				<div class="iconos-apartado">
					<img src="build/img/icono3.svg" alt="icono de tiempo" />
					<h3>Tiempo</h3>
					<p>
						Lorem ipsum dolor sit amet consectetur, adipisicing elit.
						Mollitia repudiandae id tempore ex non nulla, deserunt
						perspiciatis ut magni nemo aliquam facere magnam quaerat,
						voluptatibus obcaecati! Voluptatum nam veniam nihil.
					</p>
				</div>
				<!-- 1 -->
			</div>
		</section>

<?php
	incluir_Template('footer');
?>