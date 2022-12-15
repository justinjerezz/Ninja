<?php


$fecha_oferta = '#';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/20-socios-al-mes/css/stylo.css">
  <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
  <!-- ===== Link Swiper's CSS ===== -->
  <link rel="stylesheet" href="/20-socios-al-mes/css/swiper.css" />
  <link rel="stylesheet" href="/20-socios-al-mes/css/css.css" />

  <!-- ===== Fontawesome CDN Link ===== -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

  <script src="https://code.jquery.com/jquery-3.6.1.min.js"
    integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

  <title>Landing ventas</title>
</head>

<body>

  <div class="contenedor">
    <div class="contador pL-1 pY-1">
      <div class="central">

        <div id="cuentaAtras" class="simply-amount">
          <div>
            <div id="cuentaAtrasDias" class="tiempo">

            </div>
            <div class="textoFecha">
              Días
            </div>

          </div>
          <span>:</span>
          <div>
            <div id="cuentaAtrasHoras" class="tiempo">

            </div>
            <div class="textoFecha">
              Horas
            </div>

          </div>
          <span>:</span>
          <div>
            <div id="cuentaAtrasMinutos" class="tiempo">

            </div>
            <div class="textoFecha">
              Minutos
            </div>

          </div>
          <span>:</span>
          <div>
            <div id="cuentaAtrasSegundos" class="tiempo">

            </div>
            <div class="textoFecha">
              Segundos
            </div>

          </div>
        </div>

        <script src="/20-socios-al-mes/js/simplyCountdown.min.js"></script>
        <script>
          $(document).ready(function () {
            var MlSeconds = 60 * 60000;

            var end = new Date("<?= $fecha_oferta ?>");

            end = new Date(
              end.toLocaleString("en-US", {
                timeZone: "Europe/Madrid",
              })
            );

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;

            function formatCurrentDate(date = new Date()) {
              return new Date(
                date.toLocaleString("en-US", {
                  timeZone: "Europe/Madrid",
                })
              );
            }

            function showRemaining() {
              //var now = new Date();

              let now = formatCurrentDate();

              var distance = end - now;

              /* console.log(end, now) */
              if (distance < 0) {
                clearInterval(timer);
                document.getElementById("cuentaAtras").innerHTML = "EXPIRED!";

                return;
              }
              var days = Math.floor(distance / _day);
              var hours = Math.floor((distance % _day) / _hour);
              var minutes = Math.floor((distance % _hour) / _minute);
              var seconds = Math.floor((distance % _minute) / _second);

              $("#cuentaAtrasDias").html(days);
              $("#cuentaAtrasHoras").html(hours);
              $("#cuentaAtrasMinutos").html(minutes);
              $("#cuentaAtrasSegundos").html(seconds);
            }

            timer = setInterval(showRemaining, 1000);
          });
        </script>

      </div>
    </div>
    <div class="botoncomprar">
      <a class="seccion-14__boton_inicio blanco fs-2 fondo-azul3" href="https://ninjadeventas.com/promo"
        target="_blank">COMPRAR AHORA</a>
    </div>
  </div>

  <section class="seccion-1">

    <div class="container pY-8">
      <div class="d-flex flex-direction-column row-landscape gap-5">
        <div class="columns__box pY-2 d-flex justify-content-left align-items-center">
          <div class="fs-md columns__content">
            <p class="seccion-1__parrafo-escritorio monserrat-700 fs-4">
              Consigue <br> 20 socios en <br> piloto automático <br> todos los meses
            </p>

            <p class="seccion-1__parrafo-movil ">Consigue 20 socios en piloto automático todos los meses</p>

            <a class="seccion-14__boton_inicio blanco fs-3 fondo-azul3" href="https://ninjadeventas.com/promo"
              target="_blank">COMPRAR AHORA</a>

          </div>
        </div>
        <div class="columns__box ">

          <div class="responsiveContent columns__box">

            <iframe
              src="https://player.vimeo.com/video/761908437?h=5440c2c183&amp;badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
              frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""
              style="position:absolute;top:0;left:0;width:100%;height:100%;border-radius: 5px;"
              title="Identidad corporativa .mp4" data-ready="true"></iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>



          </div>


        </div>
      </div>

  </section>

  <section class="seccion-2 fondo-gris pY-5">

    <div class="container">
      <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">
        <div class="flex-1">
          <h2 class="seccion-2__texto__titulo monserrat-extrabold azul-poco-oscuro fs-4">La base de cualquier negocio
            exitoso son los clientes.</h2>
          <p class="seccion-2__texto__parrafo negro-claro fs-3 mX-auto">Sin embargo, conseguirlos muchas veces resulta
            <br>
            misión imposible. Este es el principal quebradero de <br>
            cabeza de cualquier distribuidor pero nosotros <br>
            te traemos la solución definitiva.
          </p>
          <!-- <img src="/20-socios-al-mes/recursos/2_LP/Flecha.svg" alt="" loading="lazy"  class="seccion-2__texto__flecha"> -->
          <!--Imagen position absolute-->
        </div>
        <div class="flex-1 text-center">
          <!--Fondo de imagen-->
          <div class="seccion-12__imagenes">
            <img src="/20-socios-al-mes/recursos/2_LP/Ilustracion_LP2.svg" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-80 position-absolute">
            <img src="/20-socios-al-mes/recursos/5_LP/sobra_ilustracion_premio.png" alt="" loading="lazy" srcset=""
              class="seccion-2__imagenes__fondo w-100">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="pY-5">

    <div class="container">
      <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">
        <div class="flex-1">
          <h2 class="seccion-2__texto__titulo monserrat-extrabold azul-poco-oscuro fs-4 text-center">Lorem ipsum </h2>
          <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/modulos.png" class="w-100" alt="Módulos">
        </div>

      </div>

      <p class="fs-md text-center mY-5 cartas_ventas__title" style="line-height: 4rem;    font-weight: 400;">Lorem ipsum
        dolor sit amet consectetur adipisicing elit. Pariatur reiciendis porro est ea dignissimos. Ratione nisi rem
        voluptatum saepe obcaecati dolor similique numquam, facilis corrupti consequatur fugiat qui commodi reiciendis?
      </p>

      <div class="d-flex flex-direction-column row-landscape align-items-center content-ninja">

        <div class="d-flex w-100 justify-content-around">
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro"> La
              metodología ninja</h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">El cliente
              ideal</h3>
          </div>
        </div>

        <div class="d-flex w-100 justify-content-around">

          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">La promesa
            </h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">El tráfico
            </h3>
          </div>
        </div>


        <div class="d-flex w-100 justify-content-around">

          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Edición de
              video</h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Las
              campañas</h3>
          </div>

        </div>

      </div>


      <div class="d-flex flex-direction-column row-landscape align-items-center content-ninja">
        <div class="d-flex w-100 justify-content-around">
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">
              Presetnación discruptiva</h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Embudo de
              venta</h3>
          </div>
        </div>

        <div class="d-flex w-100 justify-content-around">
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Video
              marketing</h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Grupos de
              Whatsapp</h3>
          </div>
        </div>

        <div class="d-flex w-100 justify-content-around">
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Email
              marketing</h3>
          </div>
          <div class="flex-1 ninja-item">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/trafico.png" class="w-100 img-cartas-ventas"
              alt="Módulos">
            <h3 class="fs-2 sectionInfonografia__title sectionInfonografia__title--pilares azul-poco-oscuro">Creando
              imágenes llamativas</h3>
          </div>
        </div>



      </div>

    </div>
  </section>

  <div class="seccion-3">

    <h2 class="seccion-2__texto__titulo monserrat-extrabold azul-poco-oscuro fs-4 text-center mB-9"> ¿Cómo puedes
      generar prospectos <br> de alta calidad de forma automatizada?</h2>


    <div class="sectionInfonografia__boxPilares container d-flex gap-2 relative mY-5">
      <div class="sectionInfonografia__pilaresImg flex-1">
        <picture>
          <source media="(min-width: 850px)" srcset="/20-socios-al-mes/recursos/3_LP/prospectos_1.png">

          <img src="/20-socios-al-mes/recursos/3_LP/prospectos_responsive_1.png" alt=""
            class="sectionInfonografia__img w-100">
        </picture>
      </div>

      <div class="sectionInfonografia__content--pilares flex-2">
        <div>
          <h3
            class="fs-3 sectionInfonografia__title sectionInfonografia__title--pilares  monserrat-extrabold azul-poco-oscuro">
            Captación de leads</h3>
          <p class="fs-3 sectionInfonografia__text sectionInfonografia__text--pilares mT-2  negro-claro"
            style="font-weight:400;">Acceso a varios embudos de ventas
            completamente terminados y probados
            en clientes reales. El objetivo es que puedas
            generar 20 socios de alta calidad al mes.</p>
        </div>

        <div>
          <h3
            class="fs-3 sectionInfonografia__title sectionInfonografia__title--pilares  monserrat-extrabold azul-poco-oscuro">
            Gestión de prospectos</h3>
          <p class="fs-3 sectionInfonografia__text sectionInfonografia__text--pilares mT-2  negro-claro"
            style="font-weight:400;">Te daremos formación en marketing, ventas
            marca personal o publicidad para que esos leads
            que has generado se traduzcan en clientes.</p>
        </div>

        <div>
          <h3
            class="fs-3 sectionInfonografia__title sectionInfonografia__title--pilares  monserrat-extrabold azul-poco-oscuro">
            Aumento de la eficiencia</h3>
          <p class="fs-3 sectionInfonografia__text sectionInfonografia__text--pilares mT-2  negro-claro"
            style="font-weight:400;">Una vez que domines el sistema de captación
            de leads y cierre de prospectos, te enseñaremos
            a optimizarlo al máximo para que puedas reducir
            aún más el tiempo que tengas que dedicarle.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="seccion-4">
    <div class="seccion-4__titulo">
      <h2 class="seccion-4__titulo__texto blanco fs-4">&iquest;Cómo te vamos a enseñar <br> a aumentar tus ventas&quest;
      </h2>
      <img src="/20-socios-al-mes/recursos/4_LP/FLECHA_AUMENTO.svg" alt="" loading="lazy"
        class="seccion-4__titulo__flecha--aumento">
    </div>
    <div class="container">

      <div class="seccion-4__contenido">
        <div class="seccion-4__contenido--1 flex-direction-column row-landscape">
          <div class="seccion-4__contenido--1__arriba flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_1 gap-3"></div>
            <h3 class="monserrat-bold negro-claro">Embudos de ventas</h3>
            <p class=" negro-claro">Te enseñaremos
              a utilizar y optimizar
              iFannel para que
              puedas generar más
              de 30 leads de calidad
              al mes en piloto
              automático.</p>
          </div>
          <div class="seccion-4__contenido--1__abajo flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_2"></div>
            <h3 class="monserrat-bold negro-claro"> Marca personal</h3>
            <p class=" negro-claro">Te explicaremos
              cómo generar tu
              propia marca para que
              puedas convertirte
              en una autoridad en
              tu nicho a la que
              todos acudan.</p>
          </div>
          <div class="seccion-4__contenido--1__arriba flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_3"></div>
            <h3 class="monserrat-bold negro-claro">Fases de las ventas</h3>
            <p class=" negro-claro">Aprende a presentar tu producto, a darle
              un seguimiento a tus
              clientes hasta que
              estén listos para
              comprar, y a cerrar
              una venta con éxito.</p>
          </div>
          <div class="seccion-4__contenido--1__abajo flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_4"></div>
            <h3 class="monserrat-bold negro-claro">Anuncios que seducen</h3>
            <p class=" negro-claro">Al acabar la
              formación serás capaz
              de crear anuncios que
              atraigan prospectos
              listos para comprar
              tus productos.</p>
          </div>
        </div>
        <div class="seccion-4__contenido--2 flex-direction-column row-landscape">
          <div class="seccion-4__contenido--1__arriba  flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_5"></div>
            <h3 class="monserrat-bold negro-claro">Crea tu comunidad</h3>
            <p class=" negro-claro">Y fideliza a tus
              clientes para que
              seas su primera
              opción de compra.</p>
          </div>
          <div class="seccion-4__contenido--1__abajo flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_6"></div>
            <h3 class="monserrat-bold negro-claro">Automatización</h3>
            <p class=" negro-claro">Aprenderás a adaptar
              una secuencia de
              email marketing
              predefinida para
              aumentar el
              engagement con
              tu comunidad.</p>
          </div>
          <div class="seccion-4__contenido--1__arriba flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_7"></div>
            <h3 class="monserrat-bold negro-claro">Ejemplos</h3>
            <p class=" negro-claro">Te mostraremos
              modelos de anuncios
              para que no tengas que pasar mucho tiempo pensando
              los tuyos.</p>
          </div>
          <div class="seccion-4__contenido--1__abajo flex-1">
            <div class="seccion-4__contenido--1__arriba__imagen_8"></div>
            <h3 class="monserrat-bold negro-claro">Duplicación</h3>
            <p class=" negro-claro">Te daremos la
              posibilidad de
              mostrarle este sistema
              a tu equipo para aumentar sus
              resultados de manera
              exponencial.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <seccion class="seccion-5 fondo-azul">

    <section class="seccion-2 pY-5">

      <div class="container">
        <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">
          <div class="flex-1 w-100">

            <p class="seccion-4__titulo__texto monserrat-extrabold blanco fs-4 pY-2">¿Cómo vamos a
              hacer que aumentes
              tu facturación
              invirtiendo mucho
              menos tiempo?</p>
            <!-- <img src="/20-socios-al-mes/recursos/2_LP/Flecha.svg" alt="" loading="lazy"  class="seccion-2__texto__flecha"> -->
            <!--Imagen position absolute-->
          </div>
          <div class="flex-1 text-center">
            <!--Fondo de imagen-->
            <div class="seccion-12__imagenes">
              <img src="/20-socios-al-mes/recursos/5_LP/ILUSTRACION_Como_vamos_a_HACER_QUE_AUMENTES_TU_FACTURACION.svg"
                alt="" loading="lazy" class="seccion-2__imagenes__img w-80 position-absolute">
              <img src="/20-socios-al-mes/recursos/5_LP/sobra_ilustracion_premio.png" alt="" loading="lazy" srcset=""
                class="seccion-2__imagenes__fondo w-100">
            </div>

          </div>
        </div>
      </div>
    </section>

    <div class="container">
      <!-- <p class="seccion-4__titulo__texto blanco monserrat-regular fs-3 pY-5 blanco text-center">Durante esos tres meses tendrás acceso a tres herramientas que
        hemos desarrollado y que transformarán radicalmente tu negocio:</p> -->
      <div class="seccion-5__planes d-flex flex-direction-column row-landscape">
        <div class="flex-1">
          <img src="/20-socios-al-mes/recursos/5_LP/LOGO_IFANEL.png" class="seccion-5__planes-ifanel__img" alt=""
            loading="lazy">
          <div class="seccion-5__planes-ifanel__contenido fondo-gris position-relative flecha-black">
            <h3 class="monserrat-bold negro-claro fs-md">Paquete Starter de iFannel</h3>
            <p class=" negro-claro fs-md pX-2">Capta leads de calidad <br>
              con funnels listos <br>
              para llegar y usar.</p>
            <button class="seccion-14__boton fs-2">
              <p class=" blanco">PRECIO HABITUAL:</p><span class="monserrat-bold blanco">117€ AL TRIMESTRE</span>
            </button>
          </div>
        </div>
        <div class="flex-1">
          <img src="/20-socios-al-mes/recursos/5_LP/LOGO_IRAPID.png" class="seccion-5__planes-irapyd__img" alt=""
            loading="lazy">
          <div class="seccion-5__planes-irapyd__contenido position-relative flecha-white">
            <h3 class="monserrat-bold negro-claro fs-md">iRapyd</h3>
            <p class=" negro-claro fs-md pX-2">Gestiona todos tus leads para aumentar tus conversiones.</p>
            <button class="seccion-14__boton fs-2">
              <p class=" blanco">PRECIO HABITUAL:</p><span class="monserrat-bold blanco">39€ AL TRIMESTRE</span>
            </button>
          </div>
        </div>
        <div class="flex-1">
          <img src="/20-socios-al-mes/recursos/5_LP/LOGO_NINJA.png" class="seccion-5__planes-ninja__img" alt=""
            loading="lazy">
          <div class="seccion-5__planes-ninja__contenido fondo-gris ">
            <h3 class="monserrat-bold negro-claro fs-md">Escuela Ninja</h3>
            <p class=" negro-claro fs-md pX-2">Te convertirás
              en un Ninja de las
              ventas y del MLM.</p>
            <button class="seccion-14__boton fs-2">
              <p class=" blanco">PRECIO HABITUAL:</p><span class="monserrat-bold blanco">100€ AL TRIMESTRE</span>
            </button>
          </div>
        </div>
      </div>

    </div>
  </seccion>

  <div class="seccion-10__titulo">
    <h2 class="monserrat-bold blanco ">Los 10 pilares de Ninja</h2>

  </div>

  <seccion class="seccion-10">

    <div class="container">
      <!-- <div class="seccion-10__camino">

        <div class="seccion-10__camino-texto-izquierda">
          <div class="seccion-10__camino-texto-izquierda__texto">
            <span class="monserrat-bold azul-poco-oscuro">01</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Formación<br>
              actualizada</h3>
            <p class=" negro-claro">El márketing y las ventas <br>
              no para de evolucionar. <br>
              Por eso actualizamos nuestras <br>
              formaciones constantemente.</p>
          </div>
          <div class="seccion-10__camino-texto-izquierda__img">
            <img src="/20-socios-al-mes/recursos/10_LP/1_formacion.svg" alt="" loading="lazy">
          </div>
        </div>

        <div class="seccion-10__camino-texto-derecha">
          <div class="seccion-10__camino-texto-derecha__img ">
            <img src="/20-socios-al-mes/recursos/10_LP/2_herramientas.svg" alt="" loading="lazy" class="width-50">
          </div>
          <div class="seccion-10__camino-texto-derecha__texto">
            <span class="monserrat-bold azul-poco-oscuro">02</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Herramientas</h3>
            <p class=" negro-claro">Te daremos acceso a herramientas <br>
              diseñadas por nosotros para que <br>
              apliques lo aprendido en las <br>
              formaciones.</p>
          </div>
        </div>


        <div class="seccion-10__camino-texto-izquierda">
          <div class="seccion-10__camino-texto-izquierda__texto">
            <span class="monserrat-bold azul-poco-oscuro">03</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Formaciones<br>
              especiales</h3>
            <p class=" negro-claro">Además del temario habitual,<br>
              traeremos a verdaderos expertos<br>
              en áreas concretas para hacer una<br>
              master class.</p>
          </div>
          <div class="seccion-10__camino-texto-izquierda__img">
            <img src="/20-socios-al-mes/recursos/10_LP/3_formaciones_especiales.svg" alt="" loading="lazy">
          </div>
        </div>

        <div class="seccion-10__camino-texto-derecha">
          <div class="seccion-10__camino-texto-derecha__img">
            <img src="/20-socios-al-mes/recursos/10_LP/4_comunidad.svg" alt="" loading="lazy">
          </div>
          <div class="seccion-10__camino-texto-derecha__texto">
            <span class="monserrat-bold azul-poco-oscuro">04</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Comunidad</h3>
            <p class=" negro-claro">Tendrás acceso a una comunidad<br>
              con el mismo objetivo que tú:<br>
              ser un ninja de las ventas.
            </p>
          </div>
        </div>

        <div class="seccion-10__camino-texto-izquierda">
          <div class="seccion-10__camino-texto-izquierda__texto">
            <span class="monserrat-bold azul-poco-oscuro">05</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Biblioteca<br>
              de clases</h3>
            <p class=" negro-claro">Grabamos y subimos al campus<br>
              todas las formaciones en directo<br>
              para que puedas verlas siempre<br>
              que quieras.</p>
          </div>
          <div class="seccion-10__camino-texto-izquierda__img">
            <img src="/20-socios-al-mes/recursos/10_LP/5_biblioteca.svg" alt="" loading="lazy">
          </div>
        </div>

        <div class="seccion-10__camino-texto-derecha">
          <div class="seccion-10__camino-texto-derecha__img">
            <img src="/20-socios-al-mes/recursos/10_LP/plataforma.svg" alt="" loading="lazy">
          </div>
          <div class="seccion-10__camino-texto-derecha__texto">
            <span class="monserrat-bold azul-poco-oscuro">06</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Plataforma</h3>
            <p class=" negro-claro">Hemos diseñado un campus virtual<br>
              pensando en hacerte la vida más<br>
              fácil, por lo que todo está a golpe <br>
              de un sólo click. </p>
          </div>
        </div>

        <div class="seccion-10__camino-texto-izquierda">
          <div class="seccion-10__camino-texto-izquierda__texto">
            <span class="monserrat-bold azul-poco-oscuro">07</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Materiales<br>
              en PDF</h3>
            <p class=" negro-claro">podrás descargar formaciones<br>
              en PDF para que seas capaz de <br>
              acceder a ellas incluso sin conexión.</p>
          </div>
          <div class="seccion-10__camino-texto-izquierda__img ">
            <img src="/20-socios-al-mes/recursos/10_LP/pdf.svg" alt="" loading="lazy" class="width-50">
          </div>
        </div>

        <div class="seccion-10__camino-texto-derecha">
          <div class="seccion-10__camino-texto-derecha__img padding-bottom-2">
            <img src="/20-socios-al-mes/recursos/10_LP/certificados.svg" alt="" loading="lazy">
          </div>
          <div class="seccion-10__camino-texto-derecha__texto">
            <span class="monserrat-bold azul-poco-oscuro">08</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Certificaciones</h3>
            <p class=" negro-claro">Cuando hayas terminado un <br>
              módulo, te daremos la posibilidad <br>
              de hacer un prueba que certifique <br> tus competencias.
            </p>
          </div>
        </div>

        <div class="seccion-10__camino-texto-izquierda">
          <div class="seccion-10__camino-texto-izquierda__texto">
            <span class="monserrat-bold azul-poco-oscuro">09</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Conviértete<br>
              en formador</h3>
            <p class=" negro-claro">Premiamos a nuestros mejores<br>
              alumnos concediéndoles el estatus<br>
              de formador. &iquest;Quieres ser de ellos&quest;</p>
          </div>
          <div class="seccion-10__camino-texto-izquierda__img">
            <img src="/20-socios-al-mes/recursos/10_LP/conviertete_en_formador.svg" alt="" loading="lazy">
          </div>
        </div>

        <div class="seccion-10__camino-texto-derecha padding-bottom-20 ">
          <div class="seccion-10__camino-texto-derecha__img">
            <img src="/20-socios-al-mes/recursos/10_LP/garantia.svg" alt="" loading="lazy">
          </div>
          <div class="seccion-10__camino-texto-derecha__texto ">
            <span class="monserrat-bold azul-poco-oscuro">10</span>
            <h3 class="monserrat-bold azul-poco-oscuro">Garantía</h3>
            <p class=" negro-claro">Sabemos que la Academia Ninja<br>
              vale su peso (en GB) en oro; pero<br>
              si no estás satisfecho, tienes 14 días <br>
              de garantía </p>
          </div>
        </div>

      </div> -->

    </div>
    <div class="sectionInfonografia__boxPilares container d-flex gap-2 relative mT-5">
      <div class="sectionInfonografia__pilaresImg flex-1">
        <picture>
          <source media="(min-width: 850px)" srcset="/20-socios-al-mes/recursos/6_BONOS/pilares_ninja.png">

          <img src="/20-socios-al-mes/recursos/6_BONOS/pilares_responsive.png" alt=""
            class="sectionInfonografia__img w-100">
        </picture>
      </div>

      <div class="sectionInfonografia__content--pilares flex-2 pilares mY-5">
        <!--   <div>
          <h3 class="fs-3 sectionInfonografia__title sectionInfonografia__title--pilares  monserrat-extrabold azul-poco-oscuro">Captación de leads</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares mT-2  negro-claro">Acceso a varios embudos de ventas
            completamente terminados y probados
            en clientes reales. El objetivo es que puedas
            generar 30 prospectos de alta calidad al mes.</p>
        </div> -->

        <div>
          <span class="fs-4 monserrat-bold azul-poco-oscuro">01</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Formación<br>
            actualizada</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">El márketing y las
            ventas
            no para de evolucionar.
            Por eso actualizamos nuestras
            formaciones constantemente.</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">02</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Herramientas</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Te daremos acceso a
            herramientas diseñadas por nosotros para que apliques lo aprendido en las
            formaciones.</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">03</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Formaciones<br>
            especiales</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Además del temario
            habitual,
            traeremos a verdaderos expertos
            en áreas concretas para hacer una
            master class.</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">04</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Comunidad</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Tendrás acceso a una
            comunidad
            con el mismo objetivo que tú:
            ser un ninja de las ventas.
          </p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">05</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Biblioteca<br>
            de clases</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Grabamos y subimos
            al campus
            todas las formaciones en directo
            para que puedas verlas siempre
            que quieras.</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">06</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Plataforma</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Hemos diseñado un
            campus virtual
            pensando en hacerte la vida más
            fácil, por lo que todo está a golpe
            de un sólo click. </p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">07</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Materiales<br>
            en PDF</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">podrás descargar
            formaciones
            en PDF para que seas capaz de
            acceder a ellas incluso sin conexión.</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">08</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Certificaciones</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Cuando hayas
            terminado un <br>
            módulo, te daremos la posibilidad <br>
            de hacer un prueba que certifique <br> tus competencias.
          </p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">09</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Conviértete<br>
            en formador</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Premiamos a nuestros
            mejores<br>
            alumnos concediéndoles el estatus<br>
            de formador. &iquest;Quieres ser de ellos&quest;</p>
        </div>



        <div> <span class="fs-4 monserrat-bold azul-poco-oscuro">10</span>
          <h3
            class="fs-4 sectionInfonografia__title sectionInfonografia__title--pilares monserrat-bold azul-poco-oscuro mB-1">
            Garantía</h3>
          <p class="fs-md sectionInfonografia__text sectionInfonografia__text--pilares negro-claro">Sabemos que la
            Academia Ninja<br>
            vale su peso (en GB) en oro; pero<br>
            si no estás satisfecho, tienes 14 días <br>
            de garantía </p>
        </div>


      </div>
    </div>
  </seccion>

  <seccion class="seccion-10-responsivo oculto">
    <div class="seccion-10-responsivo-camino-blanco">
      <div class="seccion-10-responsivo-camino-blanco__img">
        <img src="/20-socios-al-mes/recursos/10_LP/1_formacion.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-blanco__texto">

        <div class="seccion-10-responsivo-camino-blanco__texto__informacion">
          <span class="monserrat-bold azul-poco-oscuro">01</span>
          <h3 class="monserrat-bold azul-poco-oscuro">Formación<br>
            actualizada</h3>
          <p class=" negro-claro">El márketing y las ventas no para de <br> evolucionar.<br>
            Por eso actualizamos nuestras <br>
            formaciones constantemente.</p>
        </div>
      </div>
    </div>





    <div class="seccion-10-responsivo-camino-azul">
      <div class="seccion-10-responsivo-camino-azul__img ">
        <img src="/20-socios-al-mes/recursos/10_LP/2_herramientas.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-azul__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold blanco">02</span>
          <h3 class="monserrat-bold blanco">Herramientas</h3>
          <p class=" blanco">Te daremos acceso a herramientas <br>
            diseñadas por nosotros para que <br>
            apliques lo aprendido en las <br>
            formaciones.</p>
        </div>

      </div>
    </div>

    <div class="seccion-10-responsivo-camino-blanco">
      <div class="seccion-10-responsivo-camino-blanco__img">
        <img src="/20-socios-al-mes/recursos/10_LP/3_formaciones_especiales.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-blanco__texto">

        <div class="seccion-10-responsivo-camino-blanco__texto__informacion">
          <span class="monserrat-bold azul-poco-oscuro">03</span>
          <h3 class="monserrat-bold azul-poco-oscuro">Formaciones<br>
            especiales</h3>
          <p class=" negro-claro">Además del temario habitual,<br>
            traeremos a verdaderos expertos<br>
            en áreas concretas para hacer una<br>
            master class.</p>
        </div>
      </div>
    </div>

    <div class="seccion-10-responsivo-camino-azul">
      <div class="seccion-10-responsivo-camino-azul__img ">
        <img src="/20-socios-al-mes/recursos/10_LP/4_comunidad.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-azul__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold blanco">04</span>
          <h3 class="monserrat-bold blanco">Comunidad</h3>
          <p class=" blanco">Tendrás acceso a una comunidad<br>
            con el mismo objetivo que tú:<br>
            ser un ninja de las ventas.
          </p>
        </div>
      </div>
    </div>
    <div class="seccion-10-responsivo-camino-blanco">
      <div class="seccion-10-responsivo-camino-blanco__img">
        <img src="/20-socios-al-mes/recursos/10_LP/5_biblioteca.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-blanco__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold azul-poco-oscuro">05</span>
          <h3 class="monserrat-bold azul-poco-oscuro">Biblioteca<br>
            de clases</h3>
          <p class=" negro-claro">Grabamos y subimos al campus<br>
            todas las formaciones en directo<br>
            para que puedas verlas siempre<br>
            que quieras.</p>
        </div>
      </div>
    </div>
    <div class="seccion-10-responsivo-camino-azul">
      <div class="seccion-10-responsivo-camino-azul__img">
        <img src="/20-socios-al-mes/recursos/10_LP/VERSIONRESPONSIVE/plataforma.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-azul__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold blanco">06</span>
          <h3 class="monserrat-bold blanco">Plataforma</h3>
          <p class=" blanco">Hemos diseñado un campus virtual<br>
            pensando en hacerte la vida más<br>
            fácil, por lo que todo está a golpe <br>
            de un sólo click. </p>
        </div>
      </div>
    </div>
    <div class="seccion-10-responsivo-camino-blanco">
      <div class="seccion-10-responsivo-camino-blanco__img ">
        <img src="/20-socios-al-mes/recursos/10_LP/VERSIONRESPONSIVE/pdf.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-blanco__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold azul-poco-oscuro">07</span>
          <h3 class="monserrat-bold azul-poco-oscuro">Materiales<br>
            en PDF</h3>
          <p class=" negro-claro">podrás descargar formaciones<br>
            en PDF para que seas capaz de <br>
            acceder a ellas incluso sin conexión.</p>
        </div>
      </div>
    </div>
    <div class="seccion-10-responsivo-camino-azul">
      <div class="seccion-10-responsivo-camino-azul__img">
        <img src="/20-socios-al-mes/recursos/10_LP/VERSIONRESPONSIVE/certificados.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-azul__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold blanco">08</span>
          <h3 class="monserrat-bold blanco">Certificaciones</h3>
          <p class=" blanco">Cuando hayas terminado un <br>
            módulo, te daremos la posibilidad <br>
            de hacer un prueba que certifique <br> tus competencias.
          </p>
        </div>
      </div>
    </div>
    <div class="seccion-10-responsivo-camino-blanco">
      <div class="seccion-10-responsivo-camino-blanco__img">
        <img src="/20-socios-al-mes/recursos/10_LP/conviertete_en_formador.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-blanco__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold azul-poco-oscuro">09</span>
          <h3 class="monserrat-bold azul-poco-oscuro">Conviértete<br>
            en formador</h3>
          <p class=" negro-claro">Premiamos a nuestros mejores<br>
            alumnos concediéndoles el estatus<br>
            de formador. &iquest; Quieres ser de ellos&quest;</p>
        </div>
      </div>
    </div>

    <div class="seccion-10-responsivo-camino-azul">
      <div class="seccion-10-responsivo-camino-azul__img ">
        <img src="/20-socios-al-mes/recursos/10_LP/VERSIONRESPONSIVE/garantia.svg" alt="" loading="lazy">
      </div>
      <div class="seccion-10-responsivo-camino-azul__texto">

        <div class="seccion-10-responsivo-camino-azul__texto__informacion">
          <span class="monserrat-bold blanco">10</span>
          <h3 class="monserrat-bold blanco">Garantía</h3>
          <p class=" blanco">Sabemos que la Academia Ninja<br>
            vale su peso (en GB) en oro; pero<br>
            si no estás satisfecho, tienes 14 dí1as <br>
            de garantía </p>
        </div>
      </div>
    </div>

  </seccion>

  <seccion class="seccion-6-oculto">

    <div class="seccion-6__titulo fs-2 mT-5">

      <h2 class="monserrat-bold azul-poco-oscuro">Además, si compras el paquete <br>
        completo antes del <br>
        <?= $fecha_oferta_date ?>, <br>
        te daremos acceso gratuito a&colon;
      </h2>
    </div>

    <div class="seccion-6__bonos">
      <div class="container">
        <img src="/20-socios-al-mes/recursos/6_BONOS/bono1.png" class="seccion-6__bonos__img border-image-radius "
          alt="" loading="lazy">
        <p class="seccion-6__bonos__parrafo  blanco fs-3">Acceso a varios embudos de ventas completamente
          <br>
          terminados y probados en clientes reales. El objetivo es que <br>
          puedas generar 30 prospectos de alta calidad al mes.
        </p>
        <span class="monserrat-bold blanco fs-3 d-block text-center mB-2">&lpar;VALOR DE 497€&rpar;</span>


        <div style="width: 100%; position:relative; ">
          <div class="swiper mySwiper container">
            <div class="header-window w-100">
              <div class="mockup-button">&nbsp;&nbsp;</div>
              <div class="mockup-button">&nbsp;&nbsp;</div>
              <div class="mockup-button">&nbsp;&nbsp;</div>
            </div>
            <div class="swiper-wrapper content">
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content ">

                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_joel/pagina_como_viajar_barato_joel.jpg"
                      alt="" loading="lazy" class="carlos" tabindex="1">
                  </div>

                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">

                  <div class="image ">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Agenda.jpg"
                      class="carlos" alt="" loading="lazy" tabindex="2">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Video_2.jpg"
                      alt="" loading="lazy" tabindex="3" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Whatsapp.jpg"
                      alt="" loading="lazy" tabindex="4" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/LP_Viajes_Viajar_barato_2.jpg"
                      alt="" loading="lazy" tabindex="5" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agendar-cita.jpg" alt=""
                      loading="lazy" tabindex="6" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agradecimientos-v2.jpg"
                      alt="" loading="lazy" tabindex="7" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAGINA-COSMETICOS-JOEL-BAZAN.jpg"
                      alt="" loading="lazy" tabindex="8" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAgina-Whatsapp.jpg" alt=""
                      loading="lazy" tabindex="9" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/Pagina-Youtube-V2.jpg"
                      alt="" loading="lazy" tabindex="10" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/agendar_cita.jpg" alt=""
                      loading="lazy" tabindex="11" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/GRACIAS_Video.jpg" alt=""
                      loading="lazy" tabindex="12" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/LP_Cosmeticos.jpg" alt=""
                      loading="lazy" tabindex="13" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/Plan_de_20_dias.jpg"
                      alt="" loading="lazy" tabindex="14" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/whatsapp_cosmetica.jpg"
                      alt="" loading="lazy" tabindex="15" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/youtube_cosmetica.jpg"
                      alt="" loading="lazy" tabindex="16" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/agendar_cita_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="17" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/ejemplo-pop-up.jpg"
                      alt="" loading="lazy" tabindex="18" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/gracias_pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="19" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="20" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/Whatsapp_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="21" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/youtube_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="22" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/agradecimientos-nutricion.jpg"
                      alt="" loading="lazy" tabindex="23" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/pagina_nutricion_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="24" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/agendar_cita.jpg" alt=""
                      loading="lazy" tabindex="25" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/GRACIAS_Whastapp.jpg"
                      alt="" loading="lazy" tabindex="26" class="carlos">
                  </div>
                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/LP_Nutricion_3.jpg" alt=""
                      loading="lazy" tabindex="27" class="carlos">
                  </div>
                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/youtube.jpg" alt=""
                      loading="lazy" tabindex="28" class="carlos">
                  </div>

                </div>
              </div>

            </div>

            <div class="swiper-pagination"></div>
          </div>

          <div class="swiper-button-next blanco"></div>
          <div class="swiper-button-prev blanco"></div>

        </div>

      </div>
    </div>



  </seccion>

  <section class="seccion-6-responsivo oculto">

    <h2 class="seccion-6-responsivo__titulo monserrat-bold azul-poco-oscuro">Además, si compras el paquete <br>
      completo antes de <br>
      <?= $fecha_oferta_date ?>, <br>
      te daremos acceso gratuito a&colon;
    </h2>
    <p class="seccion-6-responsivo__parrafo  negro-claro">Acceso a varios embudos de ventas completamente <br>
      terminados y probados en clientes reales. El objetivo es que <br>
      puedas generar 30 prospectos de alta calidad al mes.</p>

    <div style="width: 100%; position:relative;">
      <div class="swiper mySwiper container" style="margin-top:5%;">
        <div class="swiper-wrapper content">

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content ">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_joel/pagina_como_viajar_barato_joel.jpg"
                  alt="" loading="lazy" class="carlos" tabindex="1">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image ">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Agenda.jpg"
                  class="carlos" alt="" loading="lazy" tabindex="2">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Video_2.jpg"
                  alt="" loading="lazy" tabindex="3" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Whatsapp.jpg"
                  alt="" loading="lazy" tabindex="4" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/LP_Viajes_Viajar_barato_2.jpg"
                  alt="" loading="lazy" tabindex="5" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agendar-cita.jpg" alt=""
                  loading="lazy" tabindex="6" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agradecimientos-v2.jpg" alt=""
                  loading="lazy" tabindex="7" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAGINA-COSMETICOS-JOEL-BAZAN.jpg"
                  alt="" loading="lazy" tabindex="8" class="carlos">

              </div>
            </div>
          </div>
          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAgina-Whatsapp.jpg" alt=""
                  loading="lazy" tabindex="9" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/Pagina-Youtube-V2.jpg" alt=""
                  loading="lazy" tabindex="10" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/agendar_cita.jpg" alt=""
                  loading="lazy" tabindex="11" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/GRACIAS_Video.jpg" alt=""
                  loading="lazy" tabindex="12" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/LP_Cosmeticos.jpg" alt=""
                  loading="lazy" tabindex="13" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/Plan_de_20_dias.jpg" alt=""
                  loading="lazy" tabindex="14" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/whatsapp_cosmetica.jpg"
                  alt="" loading="lazy" tabindex="15" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/youtube_cosmetica.jpg" alt=""
                  loading="lazy" tabindex="16" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/agendar_cita_ganar_dinero_viajando.jpg"
                  alt="" loading="lazy" tabindex="17" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/ejemplo-pop-up.jpg" alt=""
                  loading="lazy" tabindex="18" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/gracias_pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                  alt="" loading="lazy" tabindex="19" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                  alt="" loading="lazy" tabindex="20" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/Whatsapp_ganar_dinero_viajando.jpg"
                  alt="" loading="lazy" tabindex="21" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img
                  src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/youtube_ganar_dinero_viajando.jpg"
                  alt="" loading="lazy" tabindex="22" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/agradecimientos-nutricion.jpg"
                  alt="" loading="lazy" tabindex="23" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/pagina_nutricion_Joel_Bazan.jpg"
                  alt="" loading="lazy" tabindex="24" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/agendar_cita.jpg" alt=""
                  loading="lazy" tabindex="25" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/GRACIAS_Whastapp.jpg" alt=""
                  loading="lazy" tabindex="26" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/LP_Nutricion_3.jpg" alt=""
                  loading="lazy" tabindex="27" class="carlos">

              </div>

            </div>
          </div>

          <div class="swiper-slide card  margin-right-0">
            <div class="card-content">
              <div class="image">
                <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/youtube.jpg" alt=""
                  loading="lazy" tabindex="28" class="carlos">

              </div>

            </div>
          </div>

        </div>
      </div>

      <div class="swiper-button-next azul-poco-oscuro"></div>
      <div class="swiper-button-prev azul-poco-oscuro"></div>
    </div>


  </section>

  <section class="content-bonos">
    <div class="seccion-6__titulo fs-4 mT-9">

      <h2 class=" monserrat-bold azul-poco-oscuro">Además, si compras el paquete <br>
        completo antes del <br>
        <?= $fecha_oferta_date ?>, <br>
        te daremos acceso gratuito a&colon;
      </h2>
    </div>

    <div class="container mY-5  text-center d-flex justify-content-center align-items-center flex-direction-column">
      <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/bonos.png" class="seccion-2__imagenes__img bonos-principal "
        alt="Bonos" loading="lazy">
      <img src="/images/logos/iso2_ninja mlm.png" width="75" alt="Iso logo" loading="lazy"
        class="mT-4 estrella-ninja" />
      <h3 class="fs-7 text-center titulo-bonos pB-3 w-100">Bonos</h3>

    </div>
    <div>
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono1">
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/iFanel.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-100 img-bono1">
          </div>
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual azul-poco-oscuro">Suscripción a iFanel</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular descripcion-bono-individual line-height-md">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
              diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
            </p>
            <p class="azul-poco-oscuro fs-3 mB-2 monserrat-regular  text-transform-uppercase precio-bono-individual">
              (Valor de x €)</p>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono2">
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro">Suscripción a iRapyd</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular descripcion-bono-individual line-height-md">
              Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed
              diam nonummy nibh euismod tincidunt ut laoreet dolore
              magna aliquam erat volutpat. Ut wisi enim ad minim veniam.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">(Valor de
              x €)</p>
          </div>
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/iRapyd.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-100 img-bono2">
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono3">
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/embudo-de-ventas.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-75 img-bono3">
          </div>
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual azul-poco-oscuro">Embudos de venta</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular descripcion-bono-individual line-height-md">
              Acceso a varios embudos de ventas completamente
              terminados y probados en clientes reales. El objetivo es
              que puedas generar 30 prospectos de alta calidad al mes.
            </p>
            <p class="azul-poco-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">
              (Valor de 497 €)</p>
          </div>
        </div>
      </div>
    </div>


    <div class="contenedor-carrusel">
      <div class="container">
        <div style="width: 100%; position:relative; ">
          <div class="swiper mySwiper container">
            <div class="header-window w-100">
              <div class="mockup-button">&nbsp;&nbsp;</div>
              <div class="mockup-button">&nbsp;&nbsp;</div>
              <div class="mockup-button">&nbsp;&nbsp;</div>
            </div>
            <div class="swiper-wrapper content">
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content ">

                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_joel/pagina_como_viajar_barato_joel.jpg"
                      alt="" loading="lazy" class="carlos" tabindex="1">
                  </div>

                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">

                  <div class="image ">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Agenda.jpg"
                      class="carlos" alt="" loading="lazy" tabindex="2">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Video_2.jpg"
                      alt="" loading="lazy" tabindex="3" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/GRACIAS_Whatsapp.jpg"
                      alt="" loading="lazy" tabindex="4" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ahorrar_viajando_malena/LP_Viajes_Viajar_barato_2.jpg"
                      alt="" loading="lazy" tabindex="5" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agendar-cita.jpg" alt=""
                      loading="lazy" tabindex="6" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/agradecimientos-v2.jpg"
                      alt="" loading="lazy" tabindex="7" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAGINA-COSMETICOS-JOEL-BAZAN.jpg"
                      alt="" loading="lazy" tabindex="8" class="carlos">
                  </div>


                </div>
              </div>
              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/PAgina-Whatsapp.jpg" alt=""
                      loading="lazy" tabindex="9" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_joel/Pagina-Youtube-V2.jpg"
                      alt="" loading="lazy" tabindex="10" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/agendar_cita.jpg" alt=""
                      loading="lazy" tabindex="11" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/GRACIAS_Video.jpg" alt=""
                      loading="lazy" tabindex="12" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/LP_Cosmeticos.jpg" alt=""
                      loading="lazy" tabindex="13" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/Plan_de_20_dias.jpg"
                      alt="" loading="lazy" tabindex="14" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/whatsapp_cosmetica.jpg"
                      alt="" loading="lazy" tabindex="15" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/cosmeticos_malena/youtube_cosmetica.jpg"
                      alt="" loading="lazy" tabindex="16" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/agendar_cita_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="17" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/ejemplo-pop-up.jpg"
                      alt="" loading="lazy" tabindex="18" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/gracias_pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="19" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/pagina_gana_dinero_viajando_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="20" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/Whatsapp_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="21" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/ganar viajando_ joel/youtube_ganar_dinero_viajando.jpg"
                      alt="" loading="lazy" tabindex="22" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/agradecimientos-nutricion.jpg"
                      alt="" loading="lazy" tabindex="23" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img
                      src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_joel/pagina_nutricion_Joel_Bazan.jpg"
                      alt="" loading="lazy" tabindex="24" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/agendar_cita.jpg" alt=""
                      loading="lazy" tabindex="25" class="carlos">
                  </div>

                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/GRACIAS_Whastapp.jpg"
                      alt="" loading="lazy" tabindex="26" class="carlos">
                  </div>
                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/LP_Nutricion_3.jpg" alt=""
                      loading="lazy" tabindex="27" class="carlos">
                  </div>
                </div>
              </div>

              <div class="swiper-slide card  margin-right-0">
                <div class="card-content">
                  <div class="image">
                    <img src="/20-socios-al-mes/recursos/Imagenes-plantillas/nutricion_malena/youtube.jpg" alt=""
                      loading="lazy" tabindex="28" class="carlos">
                  </div>

                </div>
              </div>

            </div>

            <div class="swiper-pagination"></div>
          </div>

          <div class="swiper-button-next blanco"></div>
          <div class="swiper-button-prev blanco"></div>

        </div>

      </div>
    </div>


    <div class="content-bonos-individual">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono4">

          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro">Mentoría con Miguel Calvo: <span
                class="monserrat-regular">Autofinancia tu negocio</span></p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md descripcion-bono-individual">
              Formación en vivo y en directo con Miguel Calvo de 2 horas para
              que aprendas a autofinanciar tu negocio.
              Un porcentaje de tus prospectos nunca entrará a tu negocio pero
              Miguel te va a enseñar cómo poder generar grandes beneficios de
              todas las personas que rechacen tu negocio.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">(Valor de 900€)</p>
          </div>
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/mentoria-miguel-calvo.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-80  img-bono4">
          </div>
        </div>
      </div>
    </div>



    <div class="content-bonos-individual">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono5">
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/guru-del-mlm.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-75 img-bono5">
          </div>
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual azul-poco-oscuro">El gurú del Multinivel</p>
            <div class="d-flex justify-content-around contenedor-lista-descripcion">
              <div class="w-100 contenedor-lista-descripcion-guru ">

                  <ul class="negro-claro fs-3 mB-2 monserrat-regular   descripcion-bono-individual-2 ">
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>1: La alternativa del S . XXI</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>2: Historia del MLM</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>3: Multinivel VS Piramidal</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>4: Fiscalidad en MLM</p></li>
                  </ul>

              </div>
              <div class="w-100 contenedor-lista-descripcion-guru">

                  <ul class="negro-claro fs-3 mB-2 monserrat-regular   descripcion-bono-individual-2 ">
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>5: Planes de Compensación</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>6: Las mejores empresas</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>7: Conviértete en un líder</p></li>
                    <li class="d-flex  align-items-center justify-content-left fs-md mT-2"><p>8, 9 y 10: Cómo crear tu multinivel</p></li>
                  </ul>

              </div>
            </div>
           
            <p class="azul-poco-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">
              (Valor de 197€)</p>
          </div>
        </div>
      </div>
    </div>



    <div class="content-bonos-individual">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono6 ">
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro">1 año de software para seguimientos
            </p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular descripcion-bono-individual line-height-md">
              Software que te permitirá realizar seguimiento a todos tus
              prospectos, y te avisará el día que tienes que hacer una llamada, reunirte o cualquier actividad que
              tengas que realizar.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">(Valor de
              148 €)</p>
          </div>
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/software-seguimiento.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-80 img-bono6">
          </div>
        </div>
      </div>
    </div>



    <div class="content-bonos-individual">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono7">
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/software-contactos.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-75 img-bono7">
          </div>
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual azul-poco-oscuro">1 año de software para contactos
            </p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular descripcion-bono-individual line-height-md">
              Software que te permitirá gestionar todos los contactos
              y prospectos interesados en tu negocio.
            </p>
            <p class="azul-poco-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">
              (Valor de 148 €)</p>
          </div>
        </div>
      </div>
    </div>

    <div class="content-bonos-individual">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono8">
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro ">Software para gestionar la ruta de
              trabajo
              por 1 año</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
              Software que te permitirá realizar seguimiento de tu trabajo
              semanal y que en base a actividades que realices te puntuará
              en mayor o menor medida. Si todas las semanas te acercas a
              una puntuación de 100 subirás constantemente de rango.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">(Valor de
              148 €)</p>
          </div>
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/software-ruta-trabajo.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-80 img-bono8">
          </div>
        </div>
      </div>
    </div>


    <div class="content-bonos-individual-9">
      <div class="container">
        <div class="d-flex row-landscape align-items-start w-100 gap-5 align-items-center bono9">
          <div class="text-start w-30">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/acceso-a-la-comunidad.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-75 img-bono9">
          </div>
          <div class="w-70 contenedor-info-bono">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual azul-poco-oscuro">Acceso a la Comunidad Ninja de
              Ventas</p>
            <div class="mT-2 mB-2">
              <img src="/images/logos/iso2_ninja mlm.png" width="75" alt="Iso logo" loading="lazy" class="estrella-ninja mB-2">
              <img src="/images/logos/iso2_ninja mlm.png" width="75" alt="Iso logo" loading="lazy" class="estrella-ninja mB-2">
              <img src="/images/logos/iso2_ninja mlm.png" width="75" alt="Iso logo" loading="lazy" class="estrella-ninja mB-2">
            </div>
            
            <p class="azul-poco-oscuro fs-3 mB-2 monserrat-regular text-transform-uppercase precio-bono-individual">
              (Valor incalculable)</p>
          </div>
        </div>
      </div>
    </div>



  </section>

  <section class="contenedor-bonos-2 pY-10 ">
    <div class="container">
      <div class="d-flex justify-content-center flex-direction-column text-center contenedor-titulo-bonos-premium ">
        <div>
          <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/katana.png" alt="" class="img-katana">
        </div>
        <div class="fs-4 mT-1">
          <h2 class="monserrat-bold  negro">BONOS PREMIUM</h2>
        </div>
      </div>

      <div class="d-flex w-100 gap-14 contenedor-bonos-dobles mT-3">
        <div class="d-flex flex-direction-column w-100 gap-5 justify-content-around text-center w-100">
          <div class="text-center w-100">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/acompanamiento-personalizado.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-50 img-bono-acompañamiento">
          </div>
          <div class="w-100 contenedor-info-bono-acompañamiento">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro ">Acompañamiento personalizazdo</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
              Te acompañaremos de forma personalizada
              hasta que recuperes tu inversión.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-bold text-transform-uppercase precio-bono-individual">(VALOR DE
              997€)</p>
          </div>
        </div>

        <div class="d-flex flex-direction-column w-100 gap-5 justify-content-around text-center w-100">
          <div class="text-center w-100">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/hacemos-trabajo-por-ti.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-50 img-bono-acompañamiento">
          </div>
          <div class="w-100 contenedor-info-bono-acompañamiento">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro ">Hacemos el trabajo por ti</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
              <ul class="negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
                <li class="d-flex justify-content-center align-items-center"><span class="circulo-lista"></span><p>Definimos tu cliente ideal</p></li>
                <li class="d-flex justify-content-center align-items-center"><span class="circulo-lista"></span><p>Creamos tu promesa irresistible</p></li>
                <li class="d-flex justify-content-center align-items-center"><span class="circulo-lista"></span>La Estrategia para tu nicho</li>
              </ul>
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-bold text-transform-uppercase precio-bono-individual">(VALOR DE 697€)</p>
          </div>
        </div>
      </div>

      <div class="d-flex w-100 gap-14 contenedor-bonos-dobles mT-10">
        <div class="d-flex flex-direction-column w-100 gap-5 justify-content-around text-center w-100">
          <div class="text-center w-100">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/las-alas-del-exito.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-50 img-bono-acompañamiento">
          </div>
          <div class="w-100 contenedor-info-bono-acompañamiento">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro ">Las alas del éxito</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
              Programa con más de 7 horas de contenido.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-bold text-transform-uppercase precio-bono-individual">(VALOR DE
              468€)</p>
          </div>
        </div>

        <div class="d-flex flex-direction-column w-100 gap-5 justify-content-around text-center w-100">
          <div class="text-center w-100">
            <img src="/20-socios-al-mes/recursos/6_BONOS/recursos/emails-que-venden.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-50 img-bono-acompañamiento">
          </div>
          <div class="w-100 contenedor-info-bono-acompañamiento">
            <p class="fs-3 mB-2 monserrat-bold titulo-bono-individual gris-oscuro ">Emails que venden</p>
            <p class=" negro-claro fs-3 mB-2 monserrat-regular line-height-md  descripcion-bono-individual">
              Más de 30 emails hechos para que
              los apliques en tu negocio.
            </p>
            <p class="gris-oscuro fs-3 mB-2 monserrat-bold text-transform-uppercase precio-bono-individual">(VALOR DE 156€)</p>
          </div>
        </div>
      </div>


    </div>
  </section>

  <seccion class="seccion-7 fondo-gris">

    <div class="container">
      <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">

        <div class="flex-1">
          <p class="fs-3 mB-2">0000-00-00 00:00:00</p>
          <h2 class="monserrat-extrabold azul-poco-oscuro fs-4 mB-2">Es el día en el
            que esta oferta
            caducará. </h2>
          <p class=" negro-claro fs-3 mB-2">Todo lo bueno termina en algún
            momento, y esta oferta no va a ser
            menos. Si para el día 0000-00-00 00:00:00 no te has subido al
            barco, ya te puedes despedir de él.</p>
        </div>
        <div class="flex-1 text-center">
          <div class="seccion-12__imagenes">
            <img src="/20-socios-al-mes/recursos/11_LP/sobra_ilustracion_premio.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-80 position-absolute">
            <img src="/20-socios-al-mes/recursos/7_LP/ILUSTRACION_FECHA_CADUCARAZ.svg" alt="" loading="lazy"
              class="seccion-2__imagenes__fondo w-100">
          </div>
        </div>
      </div>
    </div>
  </seccion>

  <seccion class="seccion-8">

    <div class="container">
      <p class="seccion-8__parrafo monserrat-bold azul-poco-oscuro mB-2">Resumiendo&colon;</p>
      <div class="seccion-8__versus">
        <div class="seccion-8__versus__izquierda">
          <p class=" negro-claro">Si aprovechas <br>
            esta oferta, sólo <br>
            pagarás esto&colon;</p>
          <span class="" style="font-size: 8rem; color:#2A66BD;font-weight: bold;">497€ <br> Anual</span>
        </div>
        <img src="/20-socios-al-mes/recursos/8_LP/VS.svg" alt="" loading="lazy" class="seccion-8__versus__img">
        <div class="seccion-8__versus__derecha">
          <p class=" negro-claro">Y esto es lo <br>
            que pagarás si <br>
            la dejas escapar.</p>
          <span class=" " style="font-size: 8rem; color:#2A66BD;font-weight: bold;">3450€</span>
        </div>
      </div>
      <a class="seccion-14__boton blanco fs-3" href="https://ninjadeventas.com/promo" target="_blank">COMPRAR AHORA</a>
    </div>
  </seccion>

  <seccion class="seccion-9">
    <div class="seccion-9__titulo">
      <div class="container">
        <h2 class="monserrat-bold blanco fs-4">&iquest;Quién es Miguel Calvo&quest;</h2>
        <p class=" blanco fs-md">Miguel tiene más de 10 años de experiencia dirigiendo y asesorando
          a empresas de multinivel. Por sus manos han pasado más de 160
          empresas de multinivel. Fue el fundador más joven de la historia
          de España creando su empresa de venta directa a la edad de tan
          solo 21 años.</p>
      </div>
    </div>

  </seccion>

  <section class="fundador">
    <div class="seccion-9__bio__imagen">
      <!-- <div class="seccion-9__bio__texto">
        <h2 class="monserrat-bold azul-poco-oscuro">Fundador y CEO de<br>
          los siguientes proyectos&colon;</h2>
        <ul class="seccion-9__bio__texto__lista">
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/widitek.png" alt="" loading="lazy">
            <p class="negro-claro">Consultora de desarrollo de software</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/emprenya.png" alt="" loading="lazy">
            <p class="negro-claro">La revolución del emprendimiento</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/futurum.png" alt="" loading="lazy">
            <p class="negro-claro">Software gestión de empresas MLM</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/irapyd.png" alt="" loading="lazy">
            <p class="negro-claro">Software automatizaciones de email marketing</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/ifanel.png" alt="" loading="lazy">
            <p class="negro-claro">Software de embudos de venta</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/bloackchain.png" alt="" loading="lazy">
            <p class="negro-claro">Consultora blockchain</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/lanzaya.png" alt="" loading="lazy">
            <p class="negro-claro">Lanzamiento y escalar empresas</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/ninja.png" alt="" loading="lazy">
            <p class="negro-claro">Formación en ventas</p>
          </li>
          <li>
            <img src="/20-socios-al-mes/recursos/9_LP/crece_crypto.png" alt="" loading="lazy">
            <p class="negro-claro">Escuela de formación Blockchain y Criptomonedas
            </p>
          </li>
        </ul>
        <p class="seccion-9__bio__texto__parrafo monserrat-bold azul-poco-oscuro">Asesor y consultor
          de más <br> de 160 empresas
          de venta directa

          <br>
          <button class="seccion-14__boton blanco mT-2 fs-3" href="https://ninjadeventas.com<?= (isset($_SESSION['username']) ? '/' . $_SESSION['username'] : '') ?>/checkout/inicio147" target="_blank">COMPRAR AHORA POR 147€</button>
        </p>

      </div> -->
      <div class="container">
        <img src="/20-socios-al-mes/recursos/9_LP/Miguelcalvo.png" alt="" class="w-25 mB-2">
        <p class="monserrat-bold azul-poco-oscuro fs-5 mB-2">Asesor y consultor<br>
          de más de 160 empresas <br>
          de venta directa
          <br>

      </div>
    </div>
  </section>

  <section class="empresas fondo-azul2 pY-8">
    <div class="container">
      <div class="d-flex flex-direction-column row-landscape gap-5">

        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/widitek_iso.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Consultora de desarrollo de software</p>

        </div>
        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/1_iso.png" class="w-50" alt="">
          </div>
          <p class=" mT-2 fs-2">La revolución del emprendimiento</p>
        </div>
        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/iso.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Software gestión de empresas MLM</p>
        </div>
        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/3_iso_irapyd.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Software automatizaciones de email marketing</p>
        </div>


      </div>
      <div class="d-flex flex-direction-column row-landscape gap-5">
        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/ifanel_iso.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Software de embudos de venta</p>
        </div>

        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/2_iso_blockchainya.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Consultora blockchain</p>

        </div>

        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/3_iso_lanzaya.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Lanzamiento y escalar empresas</p>

        </div>

        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/iso_positivo.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Formación en ventas</p>

        </div>

        <div class="flex-1">
          <div class="circle">
            <img src="/20-socios-al-mes/recursos/9_LP/isotipo.png" class="w-50" alt="">
          </div>

          <p class=" mT-2 fs-2">Escuela de formación Blockchain y Criptomonedas</p>

        </div>


      </div>


    </div>

  </section>

  <seccion class="seccion-11">
    <div class="seccion-11__arriba">
      <div class="container">
        <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">
          <div class="flex-1">
            <div class="seccion-11__arriba__texto">
              <h2 class="seccion-11__arriba__texto__titulo monserrat-bold blanco fs-4">Además, vamos a
                premiar tu progreso </h2>
              <p class="seccion-11__arriba__texto__parrafo  blanco fs-3">
                Para darte darte un plus de motivación, hemos
                diseñado un plan de recompensas que se activará
                cada vez que alcances un cierto umbral de
                facturación con tus embudos de ventas.
              </p>
              <img src="/20-socios-al-mes/recursos/10_LP/Flecha-1.png" alt="" loading="lazy"
                class="seccion-11__arriba__texto__flecha">
            </div>
          </div>
          <div class="flex-1 text-center">
            <div class="seccion-12__imagenes">
              <img src="/20-socios-al-mes/recursos/11_LP/sobra_ilustracion_premio.png" alt="" loading="lazy"
                class="seccion-2__imagenes__img w-80 position-absolute">
              <img src="/20-socios-al-mes/recursos/11_LP/ilusracion_premio.svg" alt="" loading="lazy"
                class="seccion-2__imagenes__fondo w-80">
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="seccion-11__abajo text-center">
      <p class="seccion-11__arriba__texto__parrafo  negro-claro fs-3">Si quieres aumentar tus ventas y conseguir todas
        esas recompesas <br>
        por el camino, sólo tienes que apuntarte ahora a esta oferta.</p>
      <p class="seccion-11__arriba__texto__parrafo  negro-claro fs-3">Esta es una oferta única, pensada para aquellos
        que quieran <br>
        aumentar su facturación y conseguir todas esas recompesas <br>
        en el camino.</p>
      <a class="seccion-14__boton blanco fs-3" href="https://ninjadeventas.com/promo" target="_blank">COMPRAR AHORA</a>
    </div>

  </seccion>

  <seccion class="seccion-13">

    <div class="container">
      <h2 class="monserrat-bold azul-poco-oscuro fs-4">&iquest;Qué opinan nuestros clientes&quest;</h2>
      <div class="seccion-13__videos">
        <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">
          <div class="seccion-13__videos__video flex-1">


            <iframe src="https://player.vimeo.com/video/311504845" frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""
              style="width:100%;height:100%;border-radius: 5px;" title="Identidad corporativa .mp4"
              data-ready="true"></iframe>
            <script src="https://player.vimeo.com/api/player.js"></script>



            <p class="seccion-13__videos__video__nombre monserrat-semibold azul-poco-oscuro fs-4">Sálvador</p>
          </div>

        </div>
      </div>
    </div>
  </seccion>

  <seccion class="seccion-12">
    <div class="container">
      <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">

        <div class="flex-1">
          <div class="seccion-12__texto">

            <h2 class="seccion-12__texto__titulo monserrat-bold blanco fs-4">Garantía de
              devolución del dinero
              de 15 días</h2>
            <p class="seccion-12__texto__parrafo  blanco fs-3">
              Después de su compra, dentro de los 15 días,
              si ya no desea ser parte de la Comunidad, puede
              solicitar el reembolso de su pago. Pero si quieres
              entrar y ya estás pensando en la garantía,
              te recomiendo encarecidamente que NO
              lo compres.
            </p>

          </div>
        </div>

        <div class="flex-1 text-center">
          <div class="seccion-12__imagenes d-flex align-items-center justify-content-center">

            <img src="/20-socios-al-mes/recursos/12_LP/sticker_garantia.png" alt="" loading="lazy"
              class="seccion-2__imagenes__img w-50 position-absolute">
            <img src="/20-socios-al-mes/recursos/11_LP/sobra_ilustracion_premio.png" alt="" loading="lazy" srcset=""
              class="seccion-2__imagenes__fondo w-100">
          </div>
        </div>
      </div>
    </div>
  </seccion>

  <section class="seccion-14">
    <div class="fondo-gris pY-3">
      <div class="container">
        <div class="d-flex flex-direction-column row-landscape gap-5 align-items-center">

          <div class="flex-1">
            <h2 class="monserrat-bold azul-poco-oscuro fs-5">Respondemos
              tus dudas</h2>
          </div>
          <div class="flex-1 text-center">
            <div class="seccion-12__imagenes d-flex align-items-center justify-content-center">
              <img src="/20-socios-al-mes/recursos/14_LP/ILUSTRACION_DUDAS.svg" alt="" loading="lazy"
                class="seccion-2__imagenes__img w-50 position-absolute">
              <img src="/20-socios-al-mes/recursos/11_LP/sobra_ilustracion_premio.png" alt="" loading="lazy" srcset=""
                class="seccion-2__imagenes__fondo w-100">
            </div>
          </div>
        </div>
      </div>


    </div>
    <div class="seccion-14__preguntas">
      <div class="container">
        <div class="seccion-14__preguntas__cuadros">
          <div class="seccion-14__preguntas__cuadros__pregunta">
            <img src="/20-socios-al-mes/recursos/14_LP/CHECK_IN_PREGUNTAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__click">
            <div class="seccion-14__preguntas__cuadros__pregunta__contenido">
              <p class=" negro-claro">&iquest; Cuándo podré acceder a los servicios&quest;</p>
              <p class="oculto  negro-claro oculto">En cuanto realices el pago y nosotros confirmemos que todo es
                correcto.</p>
            </div>
            <img src="/20-socios-al-mes/recursos/14_LP/ICONO_MAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__signo">

          </div>
          <div class="seccion-14__preguntas__cuadros__pregunta">
            <img src="/20-socios-al-mes/recursos/14_LP/CHECK_IN_PREGUNTAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__click">
            <div class="seccion-14__preguntas__cuadros__pregunta__contenido">
              <p class=" negro-claro">Y &iquest;Cuándo podré acceder&quest;</p>
              <p class="oculto  negro-claro oculto">
                Tras haber comprobado que todo es correcto, te enviaremos tu usuario y tu contraseña. Para acceder a los
                diferentes servicios que has contratado, tendrás que introducirlos en:
                ifanel.com/login, si quieres acceder a tu embudo de ventas.
                irapyd.com/login, para entrar en el software de cierre de prospectos.
                academianinja/login, para acceder a todas nuestras formaciones.
                crececrypto.com/logo, si quieres entrar a nuestra escuela crypto.
              </p>
            </div>
            <img src="/20-socios-al-mes/recursos/14_LP/ICONO_MAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__signo">

          </div>
          <div class="seccion-14__preguntas__cuadros__pregunta">
            <img src="/20-socios-al-mes/recursos/14_LP/CHECK_IN_PREGUNTAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__click">
            <div class="seccion-14__preguntas__cuadros__pregunta__contenido">
              <p class=" negro-claro">En las formaciones, &iquest;Las clases son en directo o en diferido&quest;</p>
              <p class="oculto  negro-claro oculto">Nuestro objetivo es que aproveches todas nuestras formaciones al
                máximo, por eso subiremos todas las clases en directo a tu biblioteca de clases. De este modo podrás
                verlas tantas veces como quieras.</p>
            </div>
            <img src="/20-socios-al-mes/recursos/14_LP/ICONO_MAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__signo">

          </div>
          <div class="seccion-14__preguntas__cuadros__pregunta">
            <img src="/20-socios-al-mes/recursos/14_LP/CHECK_IN_PREGUNTAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__click">
            <div class="seccion-14__preguntas__cuadros__pregunta__contenido">
              <p class=" negro-claro">&iquest;Y si no estoy satisfecho&quest;</p>
              <p class="oculto  negro-claro oculto">Dispones de un periodo de 14 días para solicitar un reembolso.</p>
            </div>
            <img src="/20-socios-al-mes/recursos/14_LP/ICONO_MAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__signo">

          </div>
          <div class="seccion-14__preguntas__cuadros__pregunta">
            <img src="/20-socios-al-mes/recursos/14_LP/CHECK_IN_PREGUNTAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__click">
            <div class="seccion-14__preguntas__cuadros__pregunta__contenido">
              <p class=" negro-claro">&iquest;Cuánto tiempo tengo para pensármelo&quest;
              </p>
              <p class="oculto  negro-claro oculto">Esta oferta de lanzamiento sólo estará disponible hasta el 4 de
                novimebre. Pasada esa fecha, tendrás que comprar los servicios que te interesen uno a uno, a su precio
                habitual.</p>
            </div>
            <img src="/20-socios-al-mes/recursos/14_LP/ICONO_MAS.svg" alt="" loading="lazy"
              class="seccion-14__preguntas__cuadros__pregunta__signo">

          </div>
        </div>
      </div>

    </div>
    <div class="text-center"><a class="seccion-14__boton blanco mT-3 fs-3" href="https://ninjadeventas.com/promo"
        target="_blank">COMPRAR AHORA</a></div>

  </section>

  <footer class="footer fs-3">
    <div class="container">
      <div class="footer__contenido">
        <div class="footer__contenido__informacion blanco">
          <img src="/20-socios-al-mes/recursos/9_LP/emprenya.png" alt="" loading="lazy" class="mX-auto width-100">
          <p class="footer__contenido__informacion__parrafo-1 mT-2">
            La suite del emprendedor <br>
            formada por herramientas, <br>
            formación y servicios.
          </p>
        </div>
        <div class="footer__contenido__informacion blanco">
          <h3>AVISO LEGAL</h3>
          <a href="#" class="blanco">Términos y condiciones</a>
          <a href="#" class="blanco">Política de privacidad</a>
          <a href="#" class="blanco">Política de cookies</a>
        </div>
        <div class="footer__contenido__informacion blanco">
          <h3>AYUDA</h3>
          <p>Contacto</p>
          <p>Escríbenos a:</p>
          <a href="mailto:consultas@emprenya.com" class="blanco">consultas@emprenya.com</a>
        </div>
      </div>
    </div>
  </footer>


  <!-- Swiper JS -->
  <script src="/20-socios-al-mes/js/swiper.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {

      pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
          return '<span class="' + className + '">' + (index + 1) + "</span>";
        },
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });


    let iframe = document.getElementById("iframe");
    let itemsManual = document.getElementsByClassName("item-embudo");

    function urlFile(url, id) {
      iframe.setAttribute("src", url);

      for (var i = 0; i < itemsManual.length; i++) {
        itemsManual[i].classList.remove("active");
      }

      let element = document.getElementById("embudo" + id);

      element.classList.toggle("active");
    }
  </script>
  <script src="/20-socios-al-mes/js/codigo-js.js"></script>

  <script>
    (function (w, d, t, u, n, a, m) {
      w['iRapydTrackingObject'] = n;
      w[n] = w[n] || function () {
        (w[n].q = w[n].q || []).push(arguments)
      }, a = d.createElement(t),
        m = d.getElementsByTagName(t)[0];
      a.async = 1;
      a.src = u;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://emprenderendirecto.irapyd.com/mtc.js', 'mt');

    mt('send', 'pageview');
  </script>

</body>

</html>