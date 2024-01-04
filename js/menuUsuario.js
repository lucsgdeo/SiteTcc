
function abrirMenuUsuario() {
    let menuUsuario = document.querySelector(".hide");

    if (menuUsuario.classList.contains("openMenuUsuario")) {
        menuUsuario.classList.remove("openMenuUsuario");
      } else {
        menuUsuario.classList.add("openMenuUsuario");
      }
}