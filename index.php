<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Calcula IMC</title>
</head>
<body>
    <div class="container-sm cont">
        <div class="jumbotron jumbotron-fluid jumb">
            <div class="container">
                <h1 class="display-4 texto">Calculo do IMC</h1>
                <p class="lead texto">Para fazer-mos o calculo é necessario informar a altura e o peso</p>
                <p class="lead texto">Caso você deseja fazer o calculo basta serguir a seguinte formula</p>
                <p class="lead texto">
                    altura = 1.90 peso = 80.5 <br>
                    
                    formula {peso / (alutra x altura)}
                </p>
                <p class="lead texto">
                    <h6 class="h6j vermelho">Resolva primeiro a multiplicação dentro dos parenteses e depois divida peso por altura</h6>
                </p>
            </div>
        </div>

        <?php if (!empty($_SESSION['mensagem'])): ?>
            <div class="alert alert-danger">
                <?= $_SESSION['mensagem']; ?>
            </div>
        <?php endif ?> 
        <?php
            unset($_SESSION['mensagem']);
            unset($_SESSION['tipo_mensagem']);
        ?>   
        <div class="d-flex bd-highlight">
            <div class="p-2 flex-fill bd-highlight">
            <div class="order-2 p-2 bd-highlight"><form method="post" action="resultado.php">
                <form method="post" action="resultado.php">
                    <div class="form-group">
                        <label for="disabledTextInput" class="branco">Altura:</label>
                        <input type="text" name="altura" id="disabledTextInput" class="form-control col-9" placeholder="ex.: 1.80">
                    </div>
                    <div class="form-group">
                        <label for="disabledTextInput" class="branco">Peso:</label>
                        <input type="text" name="peso" id="disabledTextInput" class="form-control col-9" placeholder="ex.: 80.5">
                    </div>
                    <button type="submit" class="btn btn-primary col-9">Calcular</button>     
                </form>
            </div>

        </div>

        <div class="d-flex flex-nowrap bd-highlight">

            <div class="order-3 p-2 bd-highlight"> 
                <div class="p-2 flex-fill bd-highlight">
                    <div class="card w-75 col-ls-5" style="width: 18rem;">
                        <div class="card-body">
                            <p class="card-tex">
                                <span class="vermelho">
                                    Não use virgula para separar o numero <br>
                                    ex.: 1,90
                                    ou
                                    ex.: 80,5
                                </span>
                            </p>
                            
                            <p class="card-tex">
                                <span class="verde">
                                    Use ponto <br>
                                    ex.: 1.90
                                    ou
                                    ex.: 80.5
                                </span>
                            </p>

                            <p class="card-tex">
                                <h6>Caso contrário o cálculo não será executado corretamente.</h6>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>