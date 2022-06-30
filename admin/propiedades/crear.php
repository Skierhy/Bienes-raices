<?php
	require '../../includes/funciones.php';
	incluir_Template('header');
?>
		<main class="contenedor seccion">
			<h1>Crear</h1>
			<a href="/admin/" class="boton boton-verde">Volver</a>

			<form action="" class="formulario">
				<fieldset>
					<legend>Información General</legend>
					<label for="titulo">Titulo:</label>
					<input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad">

					<label for="precio">Precio:</label>
					<input type="number" id="precio" name="precio" placeholder="Precio Propiedad">

					<label for="imagen">Imagen:</label>
					<!-- uso de archivos -->
					<input type="file" id="imagen" name="precio" accept="image/jpeg">

					<label for="descripcion"></label>
					<textarea name="descripcion" id="descripcion" class="descripcion"></textarea>
				</fieldset>

				<fieldset>
					<legend>Información Propiedad</legend>

					<label for="habitacion">Habitaciones:</label>
					<input type="number" name="habitacion" id="habitacion" placeholder="Ejemplo: 3" min="1" max="9">

					<label for="wc">Baños:</label>
					<input type="number" name="wc" id="wc" placeholder="Ejemplo: 3" min="1" max="9">

					<label for="Estacionamiento">Estacionamiento:</label>
					<input type="number" name="Estacionamiento" id="Estacionamiento" placeholder="Ejemplo: 3" min="1" max="9">
				</fieldset>

				<fieldset>
					<legend>Vendedor</legend>

					<select>
						<option value="0" disabled selected>--Selecionar--</option>
						<option value="1">Juan</option>
						<option value="2">Karen</option>
					</select>
				</fieldset>
				<input type="submit" value="Crear Propiedad" class="boton boton-verde">
			</form>
		</main>
<?php
	incluir_Template('footer');
?>