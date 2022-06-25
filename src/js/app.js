// click en el boton de hamburgesa

// para el documento este cargado documento html, css y js
document.addEventListener("DOMContentLoaded", function () {
	eventListener();
	darkMode();
});

function eventListener() {
	// para el boton de hamburgesa
	// selecionar clase mobile-menu
	const mobilemenu = document.querySelector(".mobile-menu");
	// tendra un evento cuando da click hara esto
	mobilemenu.addEventListener("click", navegacionResponsive);
}

function navegacionResponsive() {
	// cambiar el display a display block
	// manipulacion de css en js

	// // en esta parte si la clase tiene la clase de mostrar esto
	const navegacion = document.querySelector(".navegacion");

	// // si la clase tiene la clase de mostrar
	// if (navegacion.classList.contains("mostrar")) {
	//     // si tiene la clase mostrar la quita
	//     navegacion.classList.remove("mostrar");

	// }else{
	//     // si no tiene la clase mostrar la agrega
	//     navegacion.classList.add("mostrar");
	// }

	// manera corta de hacer esto

	navegacion.classList.toggle("mostrar");
}

function darkMode() {
	const botonDarkMode = document.querySelector(".dark-mode-boton");
	const sistemaDarkMode = window.matchMedia("(prefers-color-scheme: dark)");

	if (sistemaDarkMode.matches) {
		// anadir la clase dark-mode
		document.body.classList.add("dark-mode");
	} else {
		// quitar la clase dark-mode
		document.body.classList.remove("dark-mode");
	}
	// en esta parte lo que hace escuchara si el usuario cambia entre modos de luz y oscuro
	sistemaDarkMode.addEventListener("change", function () {
		if (sistemaDarkMode.matches) {
			// anadir la clase dark-mode
			document.body.classList.add("dark-mode");
		} else {
			// quitar la clase dark-mode
			document.body.classList.remove("dark-mode");
		}
	});

	botonDarkMode.addEventListener("click", function () {
		// agregar clase dark-mode
		document.body.classList.toggle("dark-mode");
	});
}
