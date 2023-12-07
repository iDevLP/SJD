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

    let currentPageUrl = window.location.href;

    // Obtener todos los enlaces dentro del menú
    let menuLinks = document.querySelectorAll('.link a');

    // Iterar sobre cada enlace y agregar la clase "active" si la URL coincide
    menuLinks.forEach(function (link) {
        let linkUrl = link.getAttribute('href');

        if (currentPageUrl === linkUrl) {
            link.classList.add('active');
        }
    });
});
