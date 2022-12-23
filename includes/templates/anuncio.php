<?php
// importar la conexion de base de datos
// debe que se la ubicacion de index
require 'includes/config/database.php';
$db = conectarBD();



// consultar la base de datos

$query = "SELECT * FROM propiedades LIMIT ${limite}";

// leer los resultados de la consulta
$resultado = mysqli_query($db, $query);
?>


<div class="contenedor-anuncios">
    <?php
    while ($propiedad = mysqli_fetch_assoc($resultado)) :
    ?>
        <div class="anuncio">
            <img loading="lazy" src="imagenes/<?php echo $propiedad['imagen'] ?>" alt="anuncio" class="imagen-relleno" />
            <div class="contenido-anuncio">
                <h3><?php echo $propiedad['titulo'] ?></h3>
                <p class="parrafo-relleno">
                    <?php echo $propiedad['descripcion'] ?>
                </p>

                <p class="precio">$<?php echo $propiedad['precio'] ?></p>

                <ul class="iconos-caracteristicas">
                    <li>
                        <img loading="lazy" src="build/img/icono_wc.svg" alt="icono wc" />
                        <p><?php echo $propiedad['wc'] ?></p>
                    </li>

                    <li>
                        <img loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento" />
                        <p><?php echo $propiedad['estacionamiento'] ?></p>
                    </li>

                    <li>
                        <img loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio" />
                        <p><?php echo $propiedad['habitaciones'] ?></p>
                    </li>
                </ul>

                <a href="anuncio.php?id=<?php echo $propiedad['id'] ?>" class="boton-amarillo-block">
                    Ver Propiedad
                </a>
            </div>
            <!-- contenido-anuncio fin -->
        </div>
        <!-- fin de anuncio -->

    <?php
    endwhile;
    ?>
</div>
<!-- fin de contenedor-anuncio -->


<?php
// cerrar la conexion de base de datos
mysqli_close($db);
?>