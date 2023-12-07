document.addEventListener('DOMContentLoaded', function () {
    const modalRedes = document.querySelector('#modalRedes');

    modalRedes.addEventListener('show.bs.modal', event => {
        let boton = event.relatedTarget;
        let imagen = boton.getAttribute('data-imagen')
        let titulo = boton.getAttribute('data-titulo')
        let descripcion = boton.getAttribute('data-descripcion')
        document.querySelector('.modal-title').innerHTML = titulo;
        document.querySelector('#modalImage').src = imagen;
        document.querySelector('.modal-parrafo').innerHTML = descripcion;

    });
});