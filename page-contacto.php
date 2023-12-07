<?php get_header(); ?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombrecontacto"];
    $apellido = $_POST["apellidocontacto"];
    $correo = $_POST["correocontacto"];
    $numero = $_POST["numerocontacto"];
    $mensajeinput = $_POST["mensajecontacto"];
    // Obtén otros valores del formulario

    // Configura el destinatario del correo
    $destinatario = "geraldalfaro768@gmail.com";

    // Asunto del correo
    $asunto = "Nuevo formulario de contacto";

    // Contenido del correo
    $mensaje = "Nombre: $nombre\nApellido: $apellido\n $correo\n $numero\n $mensajeinput\n"; // Agrega otros campos aquí

    // Cabeceras del correo
    $cabeceras = "From: geraldalfaro768@gmail.com";

    // Envía el correo
    $enviado = mail($destinatario, $asunto, $mensaje, $cabeceras);

}
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h2 class="fw-bold my-5">Contacto</h2>
            <div class="row">
                <div class="col-lg-5 col-md-12 mt-3">
                    <article>
                        <div class="rectangulo d-flex align-items-center mb-5 mx-auto">
                            <img src="<?php echo get_theme_file_uri("img/envelope-solid.png") ?>" class="mx-4" alt="">
                            <div class="info-contacto">
                                <h6 class="my-2 parrafo-gerald3">
                                    Correo electrónico
                                </h6>
                                <p class="parrafo-gerald1">
                                    escuelasanjuan@gmail.com
                                </p>
                            </div>
                        </div>
                        <div class="rectangulo d-flex align-items-center mb-5 mx-auto">
                            <img src="<?php echo get_theme_file_uri("img/phone-solid.png") ?>" class="mx-4" alt="">
                            <div class="info-contacto">
                                <h6 class="my-2 parrafo-gerald3">
                                    Teléfono
                                </h6>
                                <p class="parrafo-gerald1">
                                    +56 32 236 0303
                                </p>
                            </div>
                        </div>
                        <div class="rectangulo d-flex align-items-center mb-5 mx-auto">
                            <img src="<?php echo get_theme_file_uri("img/map-location-dot-solid.png") ?>" class="mx-4"
                                alt="">
                            <div class="info-contacto">
                                <h6 class="my-2 parrafo-gerald3">
                                    Dirección
                                </h6>
                                <p class="parrafo-gerald1">
                                    Diego Portales 190, 2500000 Viña del Mar Valparaíso
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                <div class="col-lg-7 col-md-12 rounded">
                    <article class="">
                        <div class="">
                            <h3 class="titulo-gerald3">¡Habla con nosotros!</h3>
                            <p class="parrafo-gerald1 my-4">Complete el formulario a continuación con los datos
                                correspondientes para que podamos recibir su mensaje, ¡trataremos de contestar lo más
                                rápido posible!</p>
                            <form class="formulario" action="">
                                <div>
                                    <label for="nombre">Nombre:</label>
                                    <input class="formulario__item" type="text" name="nombre" id="nombre"
                                        placeholder="Ejemplo: Luis Pastén" required>
                                    <span class="error">✘ Ingresa tu nombre</span>
                                    <span class="correcto">✔ Bien hecho!</span>
                                </div>

                                <div>
                                    <label for="telefono">Teléfono:</label>
                                    <input class="formulario__item" type="text" name="telefono" id="telefono"
                                        placeholder="Ejemplo: +56 9 12345678" required
                                        pattern="^(\+?56)?(\s?)(0?9)(\s?)[98765432]\d{7}$">
                                    <span class="error">✘ Ingresa tu número telefónico</span>
                                    <span class="correcto">✔ Bien hecho!</span>
                                </div>
                                <div class="formulario__full">
                                    <label for="correo">Correo electrónico:</label>
                                    <input class="formulario__item" type="text" name="correo" id="correo"
                                        placeholder="Ejemplo: Jhon@doe.com" required
                                        pattern="[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-]([\.]?[a-zA-Z0-9!#$%&'*\/=?^_`\{\|\}~\+\-])+@[a-zA-Z0-9]([^@&%$\/\(\)=?¿!\.,:;]|\d)+[a-zA-Z0-9][\.][a-zA-Z]{2,4}([\.][a-zA-Z]{2})?">
                                    <span class="error">✘ Ingresa tu correo electrónico</span>
                                    <span class="correcto">✔ Bien hecho!</span>
                                </div>
                                <div class="formulario__full">
                                    <label class="formulario__mensaje" for="mensaje">Mensaje:</label>
                                    <textarea class="formulario__item" name="mensaje" id="mensaje"
                                        placeholder="Su mensaje" required></textarea>
                                    <span class="error">✘ Ingresa un mensaje para la escuela</span>
                                    <span class="correcto">✔ Bien hecho!</span>
                                </div>
                                <div class="formulario__full">
                                    <button class="button" type="submit">Enviar</button>
                                </div>
                            </form>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <h2 class="titulo-gerald my-2">Ubicación</h2>
            <iframe style="border: 0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1182.6912756715733!2d-71.56575566412921!3d-33.026027202624235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9689ddfdf422ef3f%3A0x998c617e9c098500!2sEscuela%20Especial%20San%20Juan%20de%20Dios!5e0!3m2!1ses-419!2scl!4v1700165088983!5m2!1ses-419!2scl"
                width="100%" height="450"></iframe>
        </div>
    </div>
</div>
<?php get_footer(); ?>