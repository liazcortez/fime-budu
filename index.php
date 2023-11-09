<?php include('components/header/index.php') ?>

<div class="hero">
    <div class="contenido-hero">
        <h2>Objetivo</h2>
        <div class="hero-text">

            <p>Desarrollar actividades de investigación en el área de la síntesis y caracterización de materiales con la
                finalidad de mejorar la capacidad de generar conocimientos y desarrollos tecnológicos,
                manteniéndose siempre a niveles de competitividad internacional. Lo anterior mediante la participación
                activa en la revisión y establecimiento de planes y programas de estudio, y el desarrollo de proyectos
                de investigación científica y tecnológica.</p>
        </div>

    </div>
</div>
<div class="container sombra">
    <main class="servicios">
        <div class="servicio">
            <a class="boton1" href="https://www.uanl.mx/">
                <div class="iconos1">
                    <img src="https://www.uanl.mx/wp-content/uploads/2020/06/uanl.png"
                        alt="Universidad Autónoma de Nuevo León">
                </div>
            </a><a class="boton1" href="https://www.uanl.mx/">
                <h5 style='color:black'>Universidad Autónoma de Nuevo León</h5>
            </a>

        </div>
        <div class="servicio">
            <a class="boton2" href="https://www.fime.uanl.mx/">
                <div class="iconos2">
                    <img src="https://www.fime.uanl.mx/wp-content/uploads/2021/10/fime-logo-1.png"
                        alt="Facultad de Ingeniería Mecánica y Eléctrica">
                </div>
            </a><a class="boton2" href="https://www.fime.uanl.mx/">
                <h5 style='color:black'>Facultad de Ingeniería Mecánica y Eléctrica</h5>
            </a>
        </div>
    </main>

</div>

<div id="contacto" class="contacto">

    <form class="row g-3 formulario">
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa tu nombre">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="Ingresa tu correo electronico">
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Telefono</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Ingresa tu numero de telefono">
        </div>
        <div class="col-md-12">
            <label for="inputCity" class="form-label">Mensaje</label>
            <textarea class="form-control" id="inputCity" rows="5" max placeholder="Ingresa tu mensaje"></textarea>
        </div>

        <div class="enviar col-12">
            <input class="boton" type="submit" value="Enviar">
        </div>
    </form>

</div>


<?php include('components/footer/index.php')?>