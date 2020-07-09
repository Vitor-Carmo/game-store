<!doctype html>
<html lang="pt-br">

    <head>
        <!-- meta tags requeridos -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Bem-vindo(a) ao Maets</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/style.css">

        <!-- Meus Css -->
        <link rel="stylesheet" href="../../public/styles/main.css">
        <link rel="stylesheet" href="../../public/styles/client-index.css">
        <link rel="stylesheet" href="../../public/styles/responsive.css">


        <!-- Icone CSS -->
        <link rel="icon" href="../../public/img/Icone-novo.png">

    </head>

    <body>
        <?php
            include_once("validate.php");
            require_once("../../src/global.php");
            
            require_once('../../functions/client_functions.php');

            $path = '../../';

            $client = new Client();
            $user = $client->getClientData($_SESSION['id'])
            
        ?>
            <div class="login">
                <p>Bem-vindo(a),
                    <?php echo($user['nomecliente']);?>!
                </p>
            </div>

        <?php
            header_client($path, false);
        ?>        

        <div class="bd-example">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../../public/img/death.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>DESTAQUES DA SEMANA</h3>
                            <p>De graça após a compra</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../public/img/lastofus.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h3>DESTAQUES DA SEMANA </h3>
                            <p>"I've struggled a long time with survivin', but no matter what you have to find something to
                                fight for" -Joel</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="../../public/img/thewitcher.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <div class="porfora">
            <div class="container pordentro">

                <br>
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link disabled active" href="#" >Novos e Populares</a>
                    </li>
                </ul>


                <br>


                <?php
                    $products = new Product();
                    listProducts($path, $products->list());
                ?>

            </div>
        </div>


        <div class="trasicion"></div>

        <?php
            footer_client();


            contact_modal($user['emailcliente']);
        ?>


        


        <!-- Optional JavaScript -->
        
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php
            scripts($path);
        ?>

    </body>
</html>


