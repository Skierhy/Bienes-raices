<?php
// sirve para codigo mas importante de la aplicacion
require 'includes/funciones.php';
incluir_Template('header', $inicio = true);
?>
<main class="contenedor seccion">
	<h1>Mas Sobre Nosotros</h1>

	<div class="iconos-nosotros">
		<div class="icono">
			<img src="build/img/icono1.svg" alt="Icono seguridad" loading="lady" />
			<h3>Seguridad</h3>
			<p>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut,
				neque repudiandae magni mollitia asperiores illum, consectetur
				nulla dignissimos exercitationem nobis ipsam modi laborum a
				eum debitis! Iusto dolorum ab voluptatum!
			</p>
		</div>
		<!-- 1 -->

		<div class="icono">
			<img src="build/img/icono2.svg" alt="Icono Precio" loading="lady" />
			<h3>Precio</h3>
			<p>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut,
				neque repudiandae magni mollitia asperiores illum, consectetur
				nulla dignissimos exercitationem nobis ipsam modi laborum a
				eum debitis! Iusto dolorum ab voluptatum!
			</p>
		</div>
		<!-- 1 -->

		<div class="icono">
			<img src="build/img/icono3.svg" alt="Icono tiempo" loading="lady" />
			<h3>A Tiempo</h3>
			<p>
				Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut,
				neque repudiandae magni mollitia asperiores illum, consectetur
				nulla dignissimos exercitationem nobis ipsam modi laborum a
				eum debitis! Iusto dolorum ab voluptatum!
			</p>
		</div>
		<!-- 1 -->
	</div>
</main>

<section class="seccion contenedor">
	<h2>Casas y Depas en Ventas</h2>
	<!-- incluir anuncio.php -->
	<?php
	$limite = 3;
	include 'includes/templates/anuncio.php';
	?>
	<div class="alinear-derecha">
		<a href="anuncios.php" class="boton-verde">Ver Todas</a>
	</div>
</section>

<section class="imagen-contacto">
	<h2>Encuentra la casa de tus sueños</h2>
	<p>
		Llena el formulario de contacto y un asesor se pondrá en contacto
		contigo a la brevedad
	</p>
	<a href="contacto.php" class="boton-amarillo"> Contactanos </a>
</section>
<div class="contenedor seccion seccion-inferior">
	<section class="blog">
		<h3>Nuestro blog</h3>
		<!-- entrada de blog  o post de un foro con article-->
		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog1.webp" type="image/webp" />
					<source srcset="build/img/blog1.jpg" type="image/jpeg" />
					<img loading="lazy" src="build/img/blog1.jpg" alt="texto entrada blog" />
				</picture>
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Terraza en el techo de tu casa</h4>
					<p class="informacion-meta">
						Escrito el: <span>20/10/2021</span> por:
						<span>Admin</span>
					</p>
					<p>
						Consejos para construir una terraza en el techo de tu
						casa con los mejores materiales y ahorrando dinero
					</p>
				</a>
			</div>
		</article>
		<!-- 2 -->
		<article class="entrada-blog">
			<div class="imagen">
				<picture>
					<source srcset="build/img/blog2.webp" type="image/webp" />
					<source srcset="build/img/blog2.jpg" type="image/jpeg" />
					<img loading="lazy" src="build/img/blog2.jpg" alt="texto entrada blog" />
				</picture>
			</div>
			<div class="texto-entrada">
				<a href="entrada.php">
					<h4>Guía para la decoración de tu hogar</h4>
					<p class="informacion-meta">
						Escrito el: <span>20/10/2021</span> por:
						<span>Admin</span>
					</p>
					<p>
						Maximiza el espacio dn tu hogar con esta guía, aprende a
						combinar muebles y colores para darle vida a tu espacio
					</p>
				</a>
			</div>
		</article>
	</section>

	<section class="testimoniales">
		<h3>Testimoniales</h3>

		<div class="testimonial">
			<!-- para los testimonios se usa normalmente blackquote -->
			<blockquote>
				Lorem ipsum dolor sit amet consectetur adipisicing elit.
				Perferendis reprehenderit dolor nostrum quod consequatur quo.
			</blockquote>
			<p>- Luis Leonardo Nolasco Najera</p>
		</div>
	</section>
</div>

<?php
incluir_Template('footer');
?>