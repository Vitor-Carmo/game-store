               
<?php
    //códigos htmls ou php que são usados varias vezes ao lado do cliente;
    
    function header_client($path, $notHome){
        echo('     

        <img src="'.$path.'public/img/banner.jpg" class="banner img-fluid card-img-top" alt="">
        

        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <!--organizar os elementos em um container-->
        <div class="container">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSite">


                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item">

                        <li class="nav-item dropdown">
                            <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Jogos</a>

                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Gênero de jogos</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item  search">Aventura</a>
                                <a class="dropdown-item  search">Ação</a>
                                <a class="dropdown-item  search">Corrida</a>
                                <a class="dropdown-item  search">Esportes</a>
                                <a class="dropdown-item  search">Estratégia</a>
                                <a class="dropdown-item  search">Indie</a>
                                <a class="dropdown-item  search">Multiplayer</a>
                                <a class="dropdown-item  search">RPG</a>
                                <a class="dropdown-item  search">Simulação</a>
                            </div>
                        </li>
                    </li>


                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Consoles</a>

                        <div class="dropdown-menu">

                            <h6 class="dropdown-header">Tipos de Consoles</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item  search" href="#">Playstation</a>
                            <a class="dropdown-item  search" href="#">Xbox</a>
                            <a class="dropdown-item  search" href="#">Nintendo</a>
                            <a class="dropdown-item  search" href="#">Mobile</a>
                            <a class="dropdown-item  search" href="#">Pc Gamer</a>
                        </div>
                    </li>
                    </li>

                    <li class="nav-item">

                        <a class="nav-link modale" data-toggle="modal" data-target="#exampleModalScrollable">
                            Contato
                        </a>


                    </li>
                </ul>


                <ul class="navbar-nav ml-auto">


                    <li class="nav-item dropdown">
                        <div class="btn-group dropleft">
                            <a class="nav-link d-none d-md-block" dropdown="toggle" href="#" data-toggle="dropdown"
                                id="navDrop"><img src="'.$path.'public/img/github.png" alt=""></a>

                            <!--div para as opções do social-->
                            <div class="dropdown-menu">
                                <h6 class="dropdown-header">Github dos Desenvolvedores</h6>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Vitor-Carmo">Vitor</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Julio6666">Julio</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/Beatriz016">Beatriz
                                    Vitória</a>
                                <a class="dropdown-item" target="_blank" href="https://github.com/JoseNiltonCosta">José
                                    Nilton</a>
                            </div>
                        </div>
                    </li>

                </ul>
                
                <div class="reponsive">
                    <form action="'.$path.'src/search.php"class="form-inline ml-0 ml-lg-2">

                        <input class="form-control ml-0 mr-2" name="searchgame" type="search" placeholder="Buscar na loja">

                        <button class="btn btn-default-color d-none d-md-block" type="Submit">Buscar</button>
                    </form>

                ');

                if(!$notHome){
                    echo ('
                    <a href="../logout.php">
                        <img class="logout" src="'.$path.'public/img/logout.svg" alt="" width="30p">
                    </a>
                ');
                }
                

            echo("
                    </div>
                </div>
            </div>
            </nav>
                "
            );


    }


    function listProducts($path, $product){
        require_once($path."src/global.php");
        $queryAllProducts = $product;

        foreach($queryAllProducts as $product){
            echo("
            <div class='corzinha'>
    
                <div class='row'>
    
                    <div class='col-sm'>
                        <img src='".$path."public/".$product['fotoproduto']."' class='img-dentro img-fluid ' alt=''>
                    </div>
                    
                    <div class='col-sm'>
                        <h2 class='titulo-jogos'>".$product['descproduto']."</h2>
                    </div>
    
                    <div class='col-sm'>
                        <p class='preco'>Carrinho<button type='button' class='btn btn-default-color'>R$ ".number_format($product['valorproduto'], 2, ',', '.')."</button></p>
                    </div>
                </div>
            </div>
        
            ");
        }
    }
    

    function footer_client(){
        echo('
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
        
        ');
    }


    function contact_modal($email=''){
        echo('
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
                                        <input type="email" class="form-control" id="exampleFormControlInput1" value="'.$email.'"
                                            placeholder="">
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
        ');
    }

    function scripts($path){
        echo('
            <script src="'.$path.'node_modules/jquery/dist/jquery.js"></script>
            <script src="'.$path.'node_modules/popper.js/dist/umd/popper.js"></script>
            <script src="'.$path.'node_modules/bootstrap/dist/js/bootstrap.js"></script>
            <script src="'.$path.'public/js/dropdown.js"></script>
        ');
    }

?>
                