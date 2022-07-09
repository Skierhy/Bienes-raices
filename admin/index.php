<?php
// session_start();
// // se muestra el paso de informacion en la super global _SESSION

// // echo '<pre>';
// // var_dump($_SESSION);
// // echo '</pre>';

// $auth = $_SESSION['login'];

// // saber si el usuario esta autenticado
// if (!$auth) {
// 	// no esta autenticado
// 	// redireccionar al login
// 	header('Location: /');
// }

// manera mas corta de redireccionar
require "../includes/funciones.php";

$auth = estaAutenticado();

// saber si el usuario esta autenticado
if (!$auth) {
	// no esta autenticado
	// redireccionar al login
	header('Location: /');
}



// mostrar listado de propiedades:
// importar la conexion
// base de datos
require "../includes/config/database.php";
// conectar base de datos
$db = conectarBD();
// escribir el query
// que es query de seleccion de todos los registros de la tabla propiedades
// query para obtener todos los registros de la tabla propiedades
// selecionamos todo
// de la tabla propiedades
$query = "SELECT * FROM propiedades";

// consultar Base de datos

$resultadoConsulta = mysqli_query($db, $query);



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

// No se pone aqui por que no va existir una variable con el id
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$id = $_POST['id'];
	$id = filter_var($id, FILTER_VALIDATE_INT);

	if ($id) {
		// eliminar archivo de la base de datos
		$query = "SELECT imagen FROM propiedades WHERE id = $id";
		$resultado = mysqli_query($db, $query);
		$propiedad = mysqli_fetch_assoc($resultado);
		// var_dump($propiedad['imagen']);
		unlink('../imagenes/' . $propiedad['imagen']);
		// eliminar propiedad
		$query = "DELETE FROM propiedades WHERE id = ${id}";
		$resultado = mysqli_query($db, $query);

		if ($resultado) {
			header("Location: /admin?resultado=3");
		}
	}
}
incluir_Template('header');
?>

<main class="contenedor seccion">
	<h1>Admin de Bienes raíces</h1>
	<?php
	if ($resultado == 1) :
	?>
		<p class="alerta exito">Anuncio Creado Correctamente</p>
	<?php
	elseif ($resultado == 2) :
	?>
		<p class="alerta exito">Anuncio Actualizado</p>
	<?php
	elseif ($resultado == 3) :
	?>
		<p class="alerta exito">Anuncio Eliminado</p>
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
		<!-- mostrar resultados -->
		<tbody>
			<?php
			// recorrer resultados
			// mysqli_fetch_assoc = devuelve un array asociativo con los datos de la fila actual

			while ($propiedad = mysqli_fetch_assoc($resultadoConsulta)) :
			?>
				<tr>
					<th>
						<?php
						echo $propiedad['id'];
						?>
					</th>
					<th>
						<?php
						echo $propiedad['titulo'];
						?>
					</th>
					<th> <img src="/imagenes/<?php echo $propiedad['imagen'] ?>" alt="imagen propiedad" class="imagen-tabla"> </th>
					<th>
						$
						<?php
						echo $propiedad['precio'];
						?>
					</th>
					<th>
						<form method="POST" class="w-100">
							<!-- input hiden
							para enviar el id de la propiedad -->
							<input type="hidden" name="id" value="<?php echo $propiedad['id'] ?>">
							<input type="submit" class="boton-rojo-block" value="Eliminar">
						</form>
						<a href="/admin/propiedades/actualizar.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">
							Actualizar
						</a>
					</th>
				</tr>
			<?php
			endwhile;
			?>
		</tbody>
	</table>
</main>
<?php
// cerrar conexion
// por que se debe que cerrar la conexion
// para que no se quede abierta
// si no se cierra, se queda abierta y no se puede usar
// la base de datos
mysqli_close($db);
incluir_Template('footer');
?>