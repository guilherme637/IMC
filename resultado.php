<?php 
    session_start();
    $altura = $_POST['altura'];
    $peso = $_POST['peso'];

    if (empty($altura)) {
        header('Location: index.php');
        $_SESSION['mensagem'] = 'Por favor, informe a altura.';
        return;
    }

    if (empty($peso)) {
        header('Location: index.php');
        $_SESSION['mensagem'] = "Por favor, informe o peso.";
        return;
    }
    $calc =  $peso / pow($altura, 2);
    $respota = number_format($calc, 1 , ",", ".");

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container-sm cont">
        <div class="jumbotron jumbotron-fluid bord">
            <h2 class="h2 mb-4">
                Dados informados
            </h2>
            <div class="container">
                <table class="table table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Atura</th>
                            <th scope="col">Peso</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?= $altura;?>cm</th>
                            <td><?= $peso;?>kg</td>
                        </tr>
                    </tbody>
                </table>
                <div class="row d-flex justify-content-center">
                    <div class="card col-md-4 mb-3" style="width: 18rem;">
                        <div class="card-body">
                            O seu IMC: <span class="text-center"><?php echo $respota?></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="jumbotron jumbotron-fluid bord">
            <h2 class="h2 mb-4">
                Resultado
            </h2>
            <?php  if ($respota < 18.5) : ?>
                <p class="font-weight-normal">
                    Peso abaixo do normal. Neste caso, é necessária a busca por um especialista, para verificar a existência de algum problema de saúde causador do índice abaixo do normal, ou analisar se sua saúde não está sendo afetada.
                </p>
            <?php endif; ?>

            <?php if ($respota >= 18.5 && $respota <= 24.9) : ?>
                <p class="font-weight-normal">
                    São pesos considerados normais pela OMS. No entanto, mesmo nesta faixa de peso, deve-se ter atenção e cuidado com possíveis problemas metabólicos, principalmente se houver acúmulo de gordura na região interna do abdômen.
                </p>
            <?php endif; ?>

            <?php if ($respota > 24.9 && $respota <= 29.9) : ?>
                <p class="font-weight-normal">
                    Peso em pré-obesidade ou acima do peso, representando um risco maior para a saúde.
                </p>
            <?php endif; ?>

            <?php if ($respota > 29.9 && $respota <= 34.9) : ?>
                <p class="font-weight-normal">
                    Este índice indica obesidade grau um.Este peso aumenta riscos para várias doenças, como diabetes, hipertensão arterial, o infarto do miocárdio e diversos tipos de câncer.
                </p>
            <?php endif; ?>  
            
            <?php if ($respota > 34.9 && $reposta <= 39.9) : ?>
                <p class="font-weight-normal">
                    Indica obesidade grau dois. Este peso já representa risco elevado para as doenças supracitadas.
                </p>
            <?php endif; ?>

            <?php if ($resposta > 40) : ?>
                <p class="font-weight-normal">
                    Indica obesidade grau três ou mórbida
                </p>
            <?php endif; ?>
            
            <h6><span class="font-italic">fonte</span>:https://www.unimedfortaleza.com.br/blog/cuidar-de-voce/como-calcular-imc.</h6>
            
        </div>

    </div> 
</body>
</html>