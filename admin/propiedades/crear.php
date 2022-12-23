<?php
// manera mas corta de redireccionar
require "../../includes/funciones.php";

$auth = estaAutenticado();

// saber si el usuario esta autenticado
if (!$auth) {
	// no esta autenticado
	// redireccionar al login
	header('Location: /');
}
// base de datos
require "../../includes/config/database.php";

// conectar base de datos

$db = conectarBD();

// consultar los vendedores variable vender
$vender = "SELECT * FROM vendedores";
// db es la base de datos, vender es la consulta
$resultado = mysqli_query($db, $vender);

// echo "<pre>";
// var_dump($resultado);
// echo "</pre>";

// array con errores
$errores = [];

$titulo = "";
$precio = "";
$descripcion = "";
$habitaciones = "";
$wc = "";
$estacionamiento = "";
$vendedorId = "";
// poner fecha actual
$creado = date("Y-m-d");

// var_dump($db);
//  $_SERVER sirve para obtener información sobre la petición actual
//  $_SERVER['REQUEST_METHOD'] nos dice cual es el método de la petición (GET, POST, PUT, DELETE)

// $_SERVER Trae informacion mas detallada sobre el servidor
// post va traer informacion sobre la peticion
// file ver el contenido de los archivos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// echo '<pre>';
	// var_dump($_POST);
	// echo '</pre>';

	// asignar files hacia una variable
	// el uso de name de html ayuda a obtener el valor del input
	$imagen = $_FILES["imagen"];
	// el tamano que se muestra en size esta en bytes

	// leer datos del formulario y se guarda en variables
	// $nombre = $_POST['nombre'];

	// sanitizar datos
	// escapar caracteres especiales
	// evitar que injected codigo malicioso
	// $nombre = mysqli_real_escape_string($db, $nombre);
	// primero la base de datos, luego la variable
	// NO CONFIAR EN EL USUARIO
	$titulo = mysqli_real_escape_string($db, $_POST["titulo"]);
	$precio = mysqli_real_escape_string($db, $_POST["precio"]);
	$descripcion = mysqli_real_escape_string($db, $_POST["descripcion"]);
	$habitaciones = mysqli_real_escape_string($db, $_POST["habitaciones"]);
	$wc = mysqli_real_escape_string($db, $_POST["wc"]);
	$estacionamiento = mysqli_real_escape_string($db, $_POST["estacionamiento"]);
	$vendedorId = mysqli_real_escape_string($db, $_POST["vendedor"]);

	// validar datos
	// otra forma

	// if (!$titulo) {
	// 	$errores[] = 'El titulo es obligatorio';
	// }
	if (empty($titulo)) {
		$errores["titulo"] = "El titulo es obligatorio";
	}
	if (empty($precio)) {
		$errores["precio"] = "El precio es obligatorio";
	}
	if (strlen($descripcion) < 50) {
		$errores["descripcion"] =
			"La descripcion es obligatoria debe ser mayor a 50 caracteres";
	}
	if (empty($habitaciones)) {
		$errores["habitaciones"] = "El numero de habitaciones es obligatorio";
	}
	if (empty($wc)) {
		$errores["wc"] = "El numero de wc es obligatorio";
	}
	if (empty($estacionamiento)) {
		$errores["estacionamiento"] =
			"El numero de estacionamiento es obligatorio";
	}
	if (empty($vendedorId)) {
		$errores["vendedor"] = "El vendedor es obligatorio";
	}
	if (empty($imagen["name"])) {
		$errores["imagen"] = "La imagen es obligatoria";
	}
	// imagen menos de 1mb
	if ($imagen["size"] > 1000000) {
		$errores["imagen"] = "La imagen debe ser menor a 100kb";
	}
	// el tamano de php es maximo de 2mb (2097152) y despues de eso manda error de archivo muy grande
	// mediante el archivo php.ini
	// el archivo php.ini se encuentra en el directorio de php

	// echo '<pre>';
	// var_dump($errores);
	// echo '</pre>';
	// para no enviar a la base de datos la consulta
	// exit;

	// revisar el el arreglo de errores esta vacio
	if (empty($errores)) {
		// subida de archivos

		// crear carpeta
		$carpetaImagenes = "../../imagenes";

		// comprobar si ya existe la carpeta
		// lo que hace es si no existe la carpeta la crea
		if (!is_dir($carpetaImagenes)) {
			mkdir($carpetaImagenes);
		}

		// generar nombre de archivo unico
		// md5 es una funcion de php que hashea el nombre de archivo
		// uniqid es una funcion de php que genera un id unico
		// parametros de uniqid:
		// 1er parametro: prefijo del id unico (opcional)
		// 2do parametro: true para que genere un id unico con caracteres alfanumericos
		$nombreImagen = md5(uniqid(rand(), true)) . ".jpg";

		// subir la imagen
		// move_uploaded_file($_FILES['imagen']['tmp_name'], $carpetaImagenes . '/' . $_FILES['imagen']['name']);
		// primer parametro es el archivo temporal, segundo es la carpeta donde se guardara
		move_uploaded_file(
			$imagen["tmp_name"],
			$carpetaImagenes . "/" . $nombreImagen
		);

		// insetar en la base de datos
		// insert sirve para insertar en la base de datos
		// into sirve para indicar la tabla donde se va a insertar
		// values sirve para indicar los valores que se van a insertar
		$sql = "INSERT INTO propiedades (titulo, precio, imagen, descripcion, habitaciones, wc, estacionamiento,creado, vendedorId)
		VALUES ('$titulo', '$precio', '$nombreImagen', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedorId')";

		// echo $sql;

		// ejecutar consulta
		// mysqli_query sirve para ejecutar consultas
		// db es la base de datos
		// sql es la consulta que se va a ejecutar
		$resultado = mysqli_query($db, $sql);

		// comprobar si se hizo bien la consulta
		if ($resultado) {
			// redireccionar a la página de inicio
			// header sirve para redireccionar a otra página
			// location: sirve para redireccionar a otra página
			// usarlo poco
			// querry string es una cadena de texto que se puede pasar por la url
			// enviar mas de un mensaje
			// header("Location: /admin?mensaje=Propiedad creada correctamente&registrado=success");
			header("Location: /admin?resultado=1");
		} else {
			echo "Error al insertar";
		}
	}
}
incluir_Template("header");
?>
<main class="contenedor seccion">
	<h1>Crear</h1>
	<a href="/admin/" class="boton boton-verde">Volver</a>
	<?php foreach ($errores as $error) : ?>
		<div class="alerta error">
			<?php echo $error; ?>
		</div>
	<?php endforeach; ?>
	<!-- action es donde se van a enviar todos los datos -->
	<!-- method get  leee los datos y expone los datos en la url es poco seguro-->
	<!-- post los maneja internamente en el archivo -->
	<!--  -->
	<!-- get sirve mas para pasar informacion de una pantalla a otra -->
	<!-- Obtener datos -->
	<!-- post mas para inicios de secion -->

	<!-- para subir archivo en el formulario necesitas otro atributo enctype="multipart/form-data" se usa siempre-->
	<form action="/admin/propiedades/crear.php" class="formulario" method="POST" enctype="multipart/form-data">
		<fieldset>
			<!-- el name debe que ser igual al id para que poda obtener los datos del usuario que ingreso -->
			<!-- debe ser igual el name y id de la base de datos -->
			<legend>Información General</legend>
			<label for="titulo">Titulo:</label>
			<input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

			<label for="precio">Precio:</label>
			<input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

			<label for="imagen">Imagen:</label>
			<!-- uso de archivos -->
			<input type="file" id="imagen" name="imagen" accept="image/jpeg, image/png">

			<label for="descripcion"></label>
			<textarea name="descripcion" id="descripcion" class="descripcion"><?php echo $descripcion; ?></textarea>
		</fieldset>

		<fieldset>
			<legend>Información Propiedad</legend>
			<!-- value en este caso sirve para que si un dato falta o esta mal se guarde y para no escribir todo -->
			<label for="habitaciones">Habitaciones:</label>
			<input type="number" name="habitaciones" id="habitaciones" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

			<label for="wc">Baños:</label>
			<input type="number" name="wc" id="wc" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $wc; ?>">
			<label for="estacionamiento">Estacionamiento:</label>
			<input type="number" name="estacionamiento" id="estacionamiento" placeholder="Ejemplo: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
		</fieldset>

		<fieldset>
			<legend>Vendedor</legend>

			<select name="vendedor">
				<!-- este debe que ser vacio por que es el por defecto -->
				<option value="" disabled selected>--Selecionar--</option>
				<!-- <option value="1">Skierhy</option>
				<option value="2">Karen</option> -->

				<?php // consulta para obtener los vendedores

				// $vendedor = myqli_fetch_assoc(); se usa para obtener una sola fila de la consulta
				while ($vendedor = mysqli_fetch_assoc($resultado)) : ?>
					<!-- if ternario en php lo que hace si el venddorid (lo que seleciono el usuario despues de submit) === al
					vendedor['id'] es la base de datos entonnces pone el selected -->
					<option <?php echo $vendedorId === $vendedor["id"]
								? "selected"
								: ""; ?> value="<?php echo $vendedor["id"]; ?>">
						<?php echo $vendedor["nombre"] . " " . $vendedor["apellido"]; ?>
					</option>

				<?php endwhile; ?>
			</select>
		</fieldset>
		<input type="submit" value="Crear Propiedad" class="boton boton-verde">
	</form>
</main>
<?php incluir_Template("footer");
?>