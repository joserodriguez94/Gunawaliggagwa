<?php


include("conexionbase.php");


if (isset($_POST['register'])) {

       if (
              strlen($_POST['name']) >= 1 &&
              strlen($_POST['email']) >= 1  &&
              strlen($_POST['mensaje'])  >= 1
       ) {

              $name = trim($_POST['name']);
              $email = trim($_POST['email']);
              $mensaje = trim($_POST['mensaje']);
              $fechareg = date("d/m/y");
              $consulta = "INSERT INTO mensajedeformulario(nombre, correo, mensaje, fechareg) VALUES ('$name','$email','$mensaje','$fechareg') ";
              $resultado = mysqli_query($conex, $consulta);
              if ($resultado) {
              ?>
                     <h3 class="ok"> Mensaje enviada correctamente. <br>
                            Estaremos en contacto con usted muy pronto. </h3>

              <?php




              } else {
              ?>
                     <h3 class="bad"> ¡Ups, estamos teniendo problemas con nuestro servidor!.
                            <br> Para mas información contáctenos por nuestras 
                            redes sociales e correo electrónico.
                     </h3>



              <?php


              }
       } else {
              ?>
              <h3 class="bad"> ¡Ups, por favor complete todos los campos necesarios!</h3>





              <?php

       }
}



?>