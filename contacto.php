<!doctype html>
<html lang="es">

<head>


    <?php
    include('./include/header.php');

    ?>

</head>

<body>

    <!--Nav -->
    <?php
    include('./include/nav.php');

    ?>

    <!--Fin de nav -->

    <!--Slider-->
    <?php
    include('./include/slidesprincipio.php');

    ?>
    <!--Fin Slider-->



    <div class="fondo">


        <div class=" p-3 ">

            <div class="  text-center  p-3 " id="bloquearticulo">





                <div class="col-12 ">
                    <div class="mt-5 card   mb-5">

                        <div class="card-body">
                            <div>
                                <h2 class=" fs-1 mt-1"> <b> Formulario de envió de mensaje </b> </h2>
                            </div>

                            <div>
                                <p class="card-text mb-4"> Puede enviar un mensaje a soporte técnico
                                    si usted tiene
                                    alguna consulta y desea que le ayudemos,
                                    por lo contrario no llenar para no atrasar
                                    las respuestas que le damos a otros usuarios,
                                    se le agradecería la amabilidad.
                                    También puede contactarnos por nuestro
                                    correo electrónico o por nuestras redes
                                    sociales. </p>
                            </div>

                            <div class="container mt-2">


                                <!-- Mensaje de respuesta -->
                                <div id="mensajeRespuesta"></div>

                                <!-- Formulario -->
                                <form id="formMensaje">
                                    <div class="mb-3">
                                        <label for="nombre" class="form-label">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Correo Electrónico:</label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="mensaje" class="form-label">Mensaje:</label>
                                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4"
                                            required></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-success">Enviar mensaje</button>
                                </form>
                            </div>





                            <?php

                            include("registro.php");

                            ?>

                        </div>
                    </div>
                </div>




            </div>

        </div>


        <div class=" p-3 ">

            <div class="  text-center  p-3 " id="bloquearticulo">





                <div class="col-12 ">
                    <div class="mt-5 card   mb-5">

                        <div class="card-body">
                            <div>
                                <h2 class=" fs-1 mt-1 mb-3"> <b> Siguenos y contactenos a nuestras redes </b> </h2>
                            </div>

                            <div class="mb-3">

                                <a class=" icon-hover  botonface btn-floating p-2  m-1"
                                    href="https://www.facebook.com/profile.php?id=100057640583552" role="button">
                                    <i class="icon-facebook-official p-2"> </i>
                                </a>




                                <a class=" icon-hover  botonface  btn-floating p-2  m-1"
                                    href="https://www.instagram.com/gunawaliggagwa/?hl=es" role="button">
                                    <i class="icon-instagram p-2"></i>
                                </a>



                            </div>

                        </div>
                    </div>
                </div>




            </div>

        </div>


        <div class=" p-3 ">

            <div class="  text-center  p-3 " id="bloquearticulo">





                <div class="col-12 ">
                    <div class="mt-5 card   mb-5">

                        <div class="card-body">
                            <div>
                                <h2 class=" fs-1 mt-1 mb-3"> <b> Contactenos a nuestro correo electronico </b> </h2>
                            </div>

                            <div class="mb-3">

                                <p>gunawaliggagwa@gmail.com</p>


                            </div>

                        </div>
                    </div>
                </div>




            </div>

        </div>



        <!--Footer-->
        <?php
        include('./include/footer.php');

        ?>
        <!--Fin Footer-->

    </div>


    <!--Scripts-->
    <?php
    include('./include/script.php');

    ?>
    <!--Fin Scripts-->

</body>



</html>