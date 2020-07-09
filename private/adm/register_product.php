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
    <link rel="stylesheet" href="../../public/styles/register_product.css">
    <link rel="stylesheet" href="../../public/styles/responsive.css">

    <link rel="icon" href="../../public/img/Icone-novo.png">

</head>

<body>


    <?php
        //validate login
        include_once("validate.php");
        
        if(isset($_GET['sucess'])){
            if($_GET['sucess'] == 'true'){
            echo "
                <script>  
                    setTimeout(() => {
                        alert('Produto cadastrado com sucesso!')
                    }, 500)
                </script>";
            }
        }

        require_once('../../functions/adm_functions.php');

        header_adm();
    
    ?>
    <div class="container">
        <div class="body">
            <form action="../../src/controller/register-product.php" enctype="multipart/form-data"  method="post" class="register">
                <h1>Cadastro de produtos</h1>
                <h2>Cadastre um jogo na loja.</h2>
    
               
                    <div class="form-group">
                        <label for="exampleInputEmail1">Descrição</label>
                        <input type="text" name="txtdesc" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
        
                    <div class="form-group">
                        <label for="exampleInputEmail1">Valor do produto</label>
                        <input type="number" name="txtvalor"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        min="0" step="any" required>
                    </div>
    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Quantidade em estoque</label>
                        <input type="number" name="txtqtde" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" min="0" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Genero</label>
                        <select required name="slgenero" class="form-control" id="exampleFormControlSelect1">
                                <option value="Aventura">Aventura</option>
                                <option value="Ação">Ação</option>
                                <option value="Corrida">Corrida</option>
                                <option value="Esportes">Esportes</option>
                                <option value="Estratégia">Estratégia</option>
                                <option value="Indie">Indie</option>
                                <option value="Multiplayer">Multiplayer</option>
                                <option value="RPG">RPG</option>
                                <option value="Simulação">Simulação</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Console</label>
                        <select required name="slconsole" class="form-control" id="exampleFormControlSelect1">
                                <option value="Playstation">Playstation</option>
                                <option value="Xbox">Xbox</option>
                                <option value="Nintendo">Nintendo</option>
                                <option value="Mobile">Mobile</option>
                                <option value="Pc Gamer">Pc Gamer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">Foto</label>

                        <input type="file" name="foto" class="form-control-file" id="exampleFormControlFile1 foto" accept="image/*">
                    </div>
    
                
    
                <button type="submit" class="btn btn-primary">Cadastrar</button>
    
            </form>
    
    
        </div>
    </div>
 



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
</body>

</html>