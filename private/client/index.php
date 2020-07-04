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


            require_once('partials/header.php');
        ?>
            <div class="login">
                <p>
                    <?php echo($_SESSION['login-session']);?>
                </p>
            </div>

        <?php
            header_client();
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



                <!--  ----------------------------------------DEATH STRANDING--------------------------------------------- -->
                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/death-stranding.jpg" class="img-dentro img-fluid " alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">Death Stranding</h2>


                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color">R$ 239,00</button></p>
                        </div>
                    </div>
                </div>

     

                <!--  ---------------------------------------- GOD OF WAR --------------------------------------------- -->


                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/god-of-war.jpg" class="img-dentro img-fluid " alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">God of War</h2>


                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color">R$
                                    77,90</button></p>
                        </div>
                    </div>
                </div>

                <!--  ---------------------------------------- SKYRIM --------------------------------------------- -->


                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/skyrim.jpg" class="img-dentro img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h2 style="margin: 10px 0; color: white; font-size: 20pt">The Elder Scrolls V: Skyrim</h2>



                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color"> R$
                                    169,90&nbsp;</button></p>
                        </div>
                    </div>
                </div>



                <!--  ---------------------------------------- Fortnite --------------------------------------------- -->

                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/fortnite.jpg" class="img-dentro img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">Fortnite</h2>


                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color"> R$
                                    19,90&nbsp;&nbsp;</button></p>
                        </div>
                    </div>
                </div>

                <!--  ---------------------------------------- MINECRAFT --------------------------------------------- -->


                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/minecraft.jpg" class="img-dentro img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">Minecraft</h2>


                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color">R$
                                    149,99&nbsp;</button></p>
                        </div>
                    </div>
                </div>

                <!--  ---------------------------------------- DOTA 2 --------------------------------------------- -->


                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/dota-2.jpg" class="img-dentro img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">Dota 2</h2>




                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color"> R$
                                    9,99&nbsp;&nbsp;&nbsp;</button></p>
                        </div>
                    </div>
                </div>

                <!--  ---------------------------------------- DIABLO III --------------------------------------------- -->


                <div class="corzinha">

                    <div class="row">

                        <div class="col-sm">
                            <img src="../../public/img/diablo-3.jpg" class="img-dentro img-fluid" alt="">
                        </div>
                        <div class="col-sm">
                            <h2 class="titulo-jogos">Diablo III</h2>




                        </div>
                        <div class="col-sm">
                            <p class="preco">Carrinho<button type="button" class="btn btn-default-color"> R$
                                    49,99&nbsp;</button></p>
                        </div>
                    </div>
                </div>






            </div>

        </div>


        <div class="trasicion"></div>



        <!-- Footer -->
        <footer class="page-footer font-small unique-color-dark">

            <div class="footer-content">
                <div class="container">

                    <!-- Grid row-->
                    <div class="row py-4 d-flex align-items-center">

                        <!-- Grid column -->
                        <div
                            class="col-md-12 col-lg-12 text-center text-md-left mb-4 mb-md-0 d-flex align-items-center justify-content-center form-register">         
                        </div>
                        <!-- Grid column -->

                    </div>
                    <!-- Grid column -->
                    <hr>
                </div>



                <!-- Grid row-->
                <div class="container text-center text-md-left ">

                    <!-- Footer -->
                    <footer class="page-footer font-small blue pt-4">

                        <!-- Footer-Links -->
                        <div class="container-fluid text-center text-md-left">

                            <!-- Grid row -->
                            <div class="row">

                                <!-- Grid column -->
                                <div class="col-md-6 mt-md-0 mt-3">

                                    <!-- Content -->

                                    <h5 class="text-uppercase">Contate-nos!</h5>
                                    <h6>Redes sociais</h6>
                                    <p>Twitter: <a class="minhacor" href="#!">@MaetsOfficial</a></p>
                                    <p>Facebook: <a class="minhacor" href="#!">MaetsOfficial</a></p>

                                </div>
                                <!-- Grid column -->



                                <!-- Grid column -->
                                <div class="col-md-3 mb-md-0 mb-3">

                                    <!-- Links -->
                                    <h5 class="text-uppercase">Informações extras</h5>

                                    <ul class="list-unstyled minhacor">
                                        <li>
                                            <a class="minhacor" href="#!">Carreiras</a>
                                        </li>
                                        <li>
                                            <a class="minhacor" href="#!">Anunciantes</a>
                                        </li>
                                        <li>
                                            <a class="minhacor" href="#!">Organizações</a>
                                        </li>
                                        <li>
                                            <a class="minhacor" href="#!">Nossa sede</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Grid column -->

                                <!-- Grid column -->
                                <div class="col-md-3 mb-md-0 mb-3">

                                    <!-- Links -->
                                    <h5 class="text-uppercase"></h5>

                                    <ul class="list-unstyled minhacor">
                                        <li>
                                            <a class="minhacor" href="#!">Política de privacidade</a>
                                        </li>
                                        <li>
                                            <a class="minhacor" href="#!">Termos legais</a>
                                        </li>

                                        <li>
                                            <a class="minhacor" href="#!">Reembolsos</a>
                                        </li>
                                    </ul>

                                </div>
                                <!-- Grid column -->

                            </div>
                            <!-- Grid row -->

                        </div>
                        <!-- Footer-Links -->
                    </footer>
                </div>
            </div>

        </footer>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalScrollable" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalScrollableTitle">Preencha o formulário
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">Endereço de E-mail</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="e-mail@example.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Mensagem</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                    placeholder="Digite aqui sua mensagem "></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default-color">Enviar</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="../../node_modules/jquery/dist/jquery.js"></script>
        <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>

    </body>
</html>