<?php
    function header_client(){
        echo('     

        <img src="../../public/img/banner.jpg" class="banner img-fluid card-img-top" alt="">
        

        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">
        <!--organizar os elementos em um container-->
        <div class="container">


            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


                <span class="navbar-toggler-icon"></span>

            </button>


            <div class="collapse navbar-collapse" id="navbarSite">


                <ul class="navbar-nav mr-auto">

                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>


                    <li class="nav-item">

                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Jogos</a>

                        <div class="dropdown-menu">
                            <h6 class="dropdown-header">Gênero de jogos</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Aventura</a>
                            <a class="dropdown-item" href="#">Ação</a>
                            <a class="dropdown-item" href="#">Corrida</a>
                            <a class="dropdown-item" href="#">Esportes</a>
                            <a class="dropdown-item" href="#">Estratégia</a>
                            <a class="dropdown-item" href="#">Indie</a>
                            <a class="dropdown-item" href="#">Multiplayer</a>
                            <a class="dropdown-item" href="#">RPG</a>
                            <a class="dropdown-item" href="#">Simulação</a>
                        </div>
                    </li>
                    </li>


                    <li class="nav-item">
                    <li class="nav-item dropdown">
                        <a class="nav-link" dropdown="toggle" href="#" data-toggle="dropdown" id="navDrop">Consoles</a>

                        <div class="dropdown-menu">

                            <h6 class="dropdown-header">Tipos de Consoles</h6>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Playstation</a>
                            <a class="dropdown-item" href="#">Xbox</a>
                            <a class="dropdown-item" href="#">Nintendo</a>
                            <a class="dropdown-item" href="#">Pc Gamer</a>
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
                                id="navDrop"><img src="../../public/img/github.png" alt=""></a>

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
                    <form class="form-inline ml-0 ml-lg-2">

                        <input class="form-control ml-0  mr-2" type="search" placeholder="Buscar na loja">

                        <button class="btn btn-default-color d-none d-md-block" type="Submit">Buscar</button>
                    </form>
                    <a href="../logout.php">
                        <img class="logout" src="../../public/img/logout.svg" alt="">
                    </a>
                </div>
                

            </div>
        </div>

    </nav>');


    }


?>