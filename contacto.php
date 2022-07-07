<?php
// sirve para codigo mas importante de la aplicacion
require "includes/funciones.php";
incluir_Template("header");
?>
		<main class="contenedor seccion">
			<h1>Contacto</h1>
			<picture>
				<source srcset="build/img/destacada3.webp" type="image/webp" />
				<source srcset="build/img/destacada3.jpg" type="image/jpeg" />
				<img src="build/img/destacada3.jpg" alt="imagen contacto" />
			</picture>

			<h2>Llene el formulario de contacto</h2>
			<form action="" class="formulario">
				<!--separación información-->
				<fieldset>
					<legend>Información personal</legend>
					<label for="nombre">Nombre</label>
					<input type="text" placeholder="Tu nombre" id="nombre" />

					<label for="email">E-mail</label>
					<input type="email" placeholder="Tu e-mail" id="email" />

					<label for="telefono">Nombre</label>
					<input type="tel" placeholder="Tu teléfono" id="telefono" />

					<label for="mensaje">Mensaje:</label>
					<textarea id="mensaje"></textarea>
				</fieldset>

				<!--separación información-->
				<fieldset>
					<legend>Información sobre la propiedad</legend>
					<label for="opciones">Vende o compra:</label>
					<select id="opciones">
						<!-- para opcion selecionar -->
						<option value="" disabled selected>-- seleccione --</option>
						<option value="vende">Vende</option>
						<option value="compra">Compra</option>
					</select>

					<label for="presupuesto">Precio o presupuesto</label>
					<input type="number" placeholder="Tu Precio o presupuesto" id="presupuesto" />
				</fieldset>

				<fieldset>
					<legend>Información sobre la propiedad</legend>
					<div class="forma-contacto">
						<label for="contactar-telefono">Teléfono</label>
						<input type="radio" name="contacto" value="telefono" id="contactar-telefono" />

						<label for="contactar-email">E-mail</label>
						<input type="radio" name="email" value="email" id="contactar-email" />
					</div>

					<p>Si eligió teléfono, elija la fecha y la hora</p>

					<label for="fecha">Fecha: </label>
					<input type="date" id="fecha" />

					<label for="Hora">Hora: </label>
					<!-- establecer el minimo y el maximo de hora -->
					<input type="time" id="Hora" min="09:00" max="18:00" />
				</fieldset>

				<input type="submit" value="Enviar" class="boton-verde" />
			</form>
		</main>

<?php incluir_Template("footer");
?>
