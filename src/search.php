<!doctype html>
<html lang="pt-br">

    <head>
        <!-- meta tags requeridos -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <title>Search</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="../node_modules/bootstrap/compiler/style.css">

        <!-- Meus Css -->
        <link rel="stylesheet" href="../public/styles/main.css">
        <link rel="stylesheet" href="../public/styles/index.css"> 
        <link rel="stylesheet" href="../public/styles/search.css"> 
        <link rel="stylesheet" href="../public/styles/responsive.css">


        <!-- Icone CSS -->
        <link rel="icon" href="../public/img/Icone-novo.png">

    </head>

    <body>
        <?php
                require_once('../functions/client_functions.php');
                require_once('global.php');

            //caminho  desse arquivo até o public/
            $path = '../';
            

            function noResult(){
                echo('<h1 style="color:white">Nenhum resultado encontrado</h1>');
            }


        ?>

        <div class="porfora">

            <div class="container pordentro">

                <br>
                <ul class="nav nav-tabs ">
                    <li class="nav-item">
                        <a class="nav-link disabled active" href="#">Pesquisa</a>
                    </li>
                </ul>

                <br>

               <?php

                    $products = new Product();


                    if (isset($_GET['search']))
                    {

                        $search = $_GET['search'];

                        $productsSearch = $products->searchGenreConsoleProducts($search);
                        

                        if(sizeof($productsSearch) == 0){
                            noResult();
                        }else{
                            listProducts($path, $productsSearch);
                            
                        }
                        

                    } else if(isset($_GET['searchgame']))
                    {

                        $searchgame = trim($_GET['searchgame']);

                        $game = $products->searchGame($searchgame);    

                        if(sizeof($game) == 0){
                            noResult();
                        }else{
                            listProducts($path, $game);
                        }

                    } else {
                        noResult();
                    }
                    
                

                    // se tiver logado voltar para o index de cliente logadp
                    //se não, votar o index de cliente não logado
                    
                    if (session_status() == PHP_SESSION_NONE)  {
                        echo("
                            </div>
                                <div class='back'>
                                <a href='../private/client/index.php'>
                                    <h3>Voltar</h3>
                                    
                                </a>
                            </div>
                        ");
                    }else{
                        echo("
                            </div>
                                <div class='back'>
                                <a href='../index.php'>
                                    <h3>Voltar</h3>
                                    
                                </a>
                            </div>
                        ");

                    }
    
                ?>
              
            </div>
        </div>


        <div class="trasicion"></div>


        <?php
            footer_client();
            
            scripts($path);

            contact_modal();
       ?>

    </body>
</html>
