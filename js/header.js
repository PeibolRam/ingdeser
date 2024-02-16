// header effect
let prevScrollPos = window.scrollY;
let isNavbarVisible = true;
let isNavbarBlueVisible = false;

window.addEventListener("scroll", () => {
  const currentScrollPos = window.scrollY;
  const navbar = document.getElementById("navbar");
  const navbarBlue = document.getElementById("navbar-blue");

  if (prevScrollPos > currentScrollPos) {
    // El usuario está haciendo scroll hacia arriba
    isNavbarVisible = true;
    isNavbarBlueVisible = false;
  } else {
    // El usuario está haciendo scroll hacia abajo
    isNavbarVisible = false;
    isNavbarBlueVisible = true;
  }
  prevScrollPos = currentScrollPos;

  // Cambiar el fondo a blanco cuando el usuario hace scroll hacia abajo
  if (isNavbarVisible) {
    navbar.style.backgroundColor = "#ffffff90";
  } else {
    navbar.style.backgroundColor = "#fff"; // Cambia el color de fondo a blanco
  }

  // Ocultar o mostrar la barra de navegación según la dirección del scroll
  if (isNavbarVisible) {
    navbar.style.top = "0";
  } else {
    navbar.style.top = "-120px";
  }

  // Ocultar o mostrar la barra de navegación azul según la dirección del scroll
  if (isNavbarBlueVisible) {
    navbarBlue.style.top = "0";
  } else {
    navbarBlue.style.top = "-120px";
  }

});

// Mostrar la barra de navegación cuando el cursor se acerca a la parte superior de la página
// window.addEventListener("mousemove", (event) => {
//     if (event.clientY < 50) {
//       navbar.style.top = "0";
//     }
// });