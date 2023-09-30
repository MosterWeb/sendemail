 

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>CECC Pedregal, Licenciaturas, Maestrias, Especialidades, Talleres, Diplomados</title>
     
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <!-- style -->
     
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/blog-1.min.css">
    <link rel="stylesheet" href="/css/blog-articles.min.css">
    <link rel="stylesheet" href="/css/calc.min.css">
    <link rel="stylesheet" type="text/css" href="/css/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    
    <!--styles -->
    
    <style>
        @keyframes blink {
            0% {
                opacity: 0;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        #sendingMessage {
            animation: blink 2s linear infinite;
        }

        .input-container.file {
            width: 100%;
            border: 1px solid #ccc;
            height: 46px;
            display: flex;
            align-items: center;


        }





        .notPlaceholder.file {
            width: 100%;
            border: none;
            outline: none;
            padding: 10px;
        }

        #logo-form {
            padding: 40px 0 0 0 !important;
        }

        .cws-button.calc {
            margin-bottom: 14px !important;
        }

        #close_master_ind {
            position: absolute;
            font-size: 40px;
            color: rgb(110, 110, 110);
            width: 25px;
            height: 25px;
            border-radius: 25px;
            background: rgb(228, 230, 235);
            padding: 10px;
            z-index: 100000;
            line-height: 0.5;
            top: 4px !important;
            right: 4px !important;
        }

        /* wrapper de vacantes  */
        .cecc_vacante_wrapper {
            display: flex;
            gap: 20px;
            margin-top: -32px;
        }

        /* Boton atras  */
        .cws-button {
            border: 2px solid #007cbd !important;
            border-radius: 10px 0px 10px 0px;
        }

        .cws-button.postulate {
            margin-top: 10px;
        }

        /* icon separte  */
        .cecc_vacante_icon {
            display: flex;
            justify-content: start;
            gap: 4px;
        }

        /* Checlist  */
        ul li::before {
            content: "\f00c";
            font-family: "FontAwesome";
            font-size: inherit;
            position: absolute;
            left: -4px;
        }

        /* Contenedor Principal */
        .blog-articulo_title h1 {
            line-height: 1;
        }

        .cecc_vacante_container {
            width: 50%;
            margin: 36px auto;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: solid 0.1px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .cecc_vacante_container_list {
            width: 50%;
            margin: 36px auto;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: solid 0.1px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        .cecc_vacante_container,
        .cecc_vacante_container_list {
            height: 100vh;
            /* O cualquier altura que desees */
            overflow-y: auto;
            /* Habilita el desplazamiento vertical */
        }

        /* Cajas de publicaciones */
        .cecc_vacante_card {
            display: flex;
            border-radius: 5px;

            margin-bottom: 20px;
        }

        .cecc_vacante_img {
            flex-basis: 15%;
            margin-top: 5px;
        }

        .cecc_vacante_img img {
            width: 100%;
            box-shadow: 0.5px 0.5px 3px grey;
        }

        .cecc_vacante_content {
            flex-basis: 75%;
            padding: 0px 15px;
        }

        .cecc_vacante_title {
            color: #007dbb;
            font-size: 28px;
        }

        .cecc_vacante_title_detail {
            color: #007dbb;
            font-size: 28px;
        }



        /* Separador */
        .cecc_vacante_separator {
            border-bottom: 1px solid lightgrey;
            margin: 0 15px;
        }

        /* Menú */
        .cecc_vacante_menu {
            position: fixed;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px;
            margin-right: 20px;
        }

        @media screen and (max-width: 768px) {

            .cecc_vacante_title,
            .cecc_vacante_title_detail {
                padding-top: 15px;
            }

            .cws-button {
                min-width: fit-content;
            }

            .cecc_vacante_card {
                flex-direction: column;
            }

            .cecc_vacante_wrapper {
                display: flex;
                gap: 20px;
                flex-direction: column;
            }

            .cecc_vacante_container_list {
                height: fit-content;
                overflow-y: hidden;
            }

            .cecc_vacante_container {
                display: none;
            }

            .cecc_vacante_container_block {
                display: block !important;
            }

            .cecc_vacante_container_list {
                width: 80%;
            }

            .cecc_vacante_menu {
                display: none;
            }

            .cecc_vacante_container {
                width: 80%;
                margin: 10px;
            }
        }

        /* Modo detalles  */
    </style>
</head>

<body class="shop">

           
          
        </header>

        <div class="page-content woocommerce">
            <div class=" clear-fix">
                <div style="max-width: 90%; margin: -10px auto;" class="grid-col-row">
                    <div style="display: block!important;" class="page-content">
                        <!-- blog item -->
                        <div>

                            <section>
                                <div>

                                    <!-- Contenedor Principal -->

                                    <div class="cecc_vacante_wrapper">

                                                                                 

                                            <div>
                                                <div class="cont">
                                                    <!-- widget contact form -->
                                                    <aside class="widget-contact-form ">
                                                         
                                                        <div style="text-align: center; font-weight:600; margin: 20px 0;" id="result"></div>

                                                        <form id="formdatavacante" novalidate="novalidate" data-result-id="result" enctype="multipart/form-data">

                                                            <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
                                                            <div class="input-container">
                                                                <input class="notPlaceholder" type="text" name="name" placeholder="Nombre:" value="" size="40" aria-invalid="false" aria-required="true">
                                                            </div>
                                                            <div class="input-container">
                                                                <input class="notPlaceholder" type="text" name="apellido" placeholder="Apellido:" value="" size="40" aria-required="true">
                                                            </div>

                                                            <div class="input-container">
                                                                <input class="notPlaceholder" type="text" name="email" placeholder="Correo electrónico:" value="" size="40" aria-required="true">
                                                            </div>

                                                            <div class="input-container">
                                                                <input class="notPlaceholder" type="text" name="telefono" placeholder="Teléfono:" value="" size="40" aria-required="true">
                                                            </div>

                                                            <div class="input-container file">
                                                                <input class="notPlaceholder file" type="file" name="cv" value="" size="40" aria-required="true">

                                                            </div>


                                                            <small>* Solo se admiten archivos PDF para el
                                                                CV.</small>
                                                            <div style="display: flex; justify-content:center; gap: 10px; margin-top: 10px">
                                                                <!-- check box -->
                                                                <div class="checkbox">
                                                                    <input type="checkbox" id="checkbox1" value="" name="vacante" checked>
                                                                    <label for="checkbox1"></label>
                                                                </div>
                                                                <span>Desarrollador web</span>
 
                                                            </div>

                                                            <button type="submit" class="cws-button border-radius calc alt small icon-right">Enviar<i class="fa fa-angle-right"></i>
                                                            </button>
                                                        </form>
                                                    </aside>

                                                    <!-- / widget contact form -->
                                                </div>

                                            </div>                                 



                                    </div>

                                    <!-- Fin de Contenedor Individual-->


                                    <div style="margin: 40px 0">
                                        <p style="font-style:italic; font-size: 0.9rem">*Las vacantes de esta sección
                                            son revisadas y aprobadas por nuestro equipo especializado en recursos
                                            humanos. La disponibilidad de los puestos podría variar según las
                                            necesidades de la empresa y el calendario de selección. Por ello, le
                                            recomendamos mantenerse al tanto de las actualizaciones y renovaciones en la
                                            lista de trabajos disponibles.</p>
                                    </div>
                                    <div style="max-width: 100%; margin: 0 auto 0 auto;" class="grid-col-row">
                                        <hr style="height: 3px; z-index:  10000!important; background: #ededed!important; margin: 10px 0 30px 0 " />
                                    </div>

                                </div>

                            </section>

                            

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <script src="./vacante.js"></script>
</body>
</html>



        
 
