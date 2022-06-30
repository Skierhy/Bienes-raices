<footer class="footer seccion">
			<div class="contenedor contenedor-footer">
				<nav class="navegacion">
					<a href="nosotros.php">Nosotros</a>
					<a href="anuncios.php">Anuncios</a>
					<a href="blog.php">Blog</a>
					<a href="contacto.php">Contacto</a>
				</nav>
			</div>
			<!-- para que el year de copyright cambie automatico -->
			<!-- Y debe se mayuscula para que imprima todo el year completo -->
			<p class="copyright">Todos los derechos Reservados <?php
				$year = date('Y');
				echo $year;
			?> &copy;</p>
		</footer>
		<script src="/build/js/bundle.min.js"></script>
	</body>
</html>