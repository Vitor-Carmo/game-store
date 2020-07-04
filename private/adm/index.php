<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../../node_modules/bootstrap/compiler/style.css">

    <!-- Meus Css -->
    <link rel="stylesheet" href="../../public/styles/main.css">
    <link rel="stylesheet" href="../../public/styles/adm-index.css">
    <link rel="stylesheet" href="../../public/styles/responsive.css">

    <link rel="icon" href="../../public/img/Icone-novo.png">

</head>

<body>


    <?php
        include_once("validate.php");
    ?>  


    <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-primary">

    <!--organizar os elementos em um container-->
    <div class="container">


        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">


            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarSite">


            <ul class="navbar-nav mr-auto">


                <li class="nav-item active">
                    <a class="nav-link" href="#">Home </span></a>
                </li>


                <li class="nav-item active">
                    <a class="nav-link" href="#">Clientes </span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Produtos </span></a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="#">Vendas </span></a>
                </li>
            </ul>


            <ul class="navbar-nav ml-auto">
                <div class="adm-complements">
                    <img class= "adm-profile" src="../../public/img/adm.png" alt="perfil" >
                    <p>Olá, Administrador!</p>
                </div>
                
            </ul>
            

            <!--Logout-->
            <a href="../logout.php">
                <img class="logout" src="../../public/img/logout.svg" alt="">
            </a>
    </nav>

   

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>