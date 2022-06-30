<?php
	// sirve para codigo mas importante de la aplicacion
	require 'includes/funciones.php';
	incluir_Template('header');
?>
<main class="contenedor seccion contenido-centrado">
			<h1>Casa en venta frente al bosque</h1>
			<picture>
				<source srcset="build/img/destacada.webp" type="image/webp" />
				<source srcset="build/img/destacada.jpg" type="image/jpeg" />
				<img
					src="build/img/destacada.jpg"
					alt="Casa en venta frente al bosque"
				/>
			</picture>

			<div class="resumen-propiedad">
				<p class="precio">$3,000,000</p>
				<ul class="iconos-caracteristicas">
					<li>
						<img
							loading="lazy"
							src="build/img/icono_wc.svg"
							alt="icono wc"
						/>

						<p>3</p>
					</li>

					<li>
						<img
							loading="lazy"
							src="build/img/icono_estacionamiento.svg"
							alt="icono estacionamiento"
						/>
						<p>3</p>
					</li>

					<li>
						<img
							loading="lazy"
							src="build/img/icono_dormitorio.svg"
							alt="icono dormitorio"
						/>
						<p>4</p>
					</li>
				</ul>
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