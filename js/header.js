let tamañoLetraPredeterminado = 16;
let root = document.querySelector(":root");
window.addEventListener("load", function () {
    document.querySelector(".main-menu-icon").addEventListener("click", () => {
        document.querySelector("#main-menu-link-container").classList.toggle("show-menu");
    })
    const agrandarLetra = document.querySelector("#agrandarLetra");
    const disminuirLetra = document.querySelector("#disminuirLetra");
    const escalaGrises = document.querySelector("#escalaGrises");

    agrandarLetra.addEventListener("click", () => {
        if (tamañoLetraPredeterminado < 24)
            tamañoLetraPredeterminado++;
        root.style.fontSize = `${tamañoLetraPredeterminado}px`;
        console.log(root.fontSize);
    })
    disminuirLetra.addEventListener("click", () => {
        if (tamañoLetraPredeterminado > 16)
            tamañoLetraPredeterminado = tamañoLetraPredeterminado - 1;
        root.style.fontSize = `${tamañoLetraPredeterminado}px`;
        console.log(root.fontSize);
    })
    escalaGrises.addEventListener("click", () => {
        root.classList.toggle("gray-scale")
    })
    const botonAccesibilidad = document.querySelector("#accesibilidadButton");
    botonAccesibilidad.addEventListener("click", () => {
        document.querySelector("#menuAccesibilidad").classList.toggle("menu-accesibilidad--show");
    })
    function setActive(element) {
        // Remover la clase 'active' de todos los elementos
        var menuItems = document.querySelectorAll('#link a');
        menuItems.forEach(function (item) {
            item.classList.remove('active');
        });

        // Agregar la clase 'active' al elemento clicado
        element.classList.add('active');
    }
});
