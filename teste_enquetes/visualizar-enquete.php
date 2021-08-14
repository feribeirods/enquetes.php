<?php

    
    $dsn = 'mysql:host=localhost; dbname=teste_enquetes';
    $usuario = 'root';
    $senha = '';

    $conexao = new PDO($dsn, $usuario, $senha);

    $tb_opcoes = 'select * from tb_opcoes';
    
    $retorno_opcoes = $conexao->query($tb_opcoes);
    $lista_opcoes = $retorno_opcoes->fetchAll(PDO::FETCH_OBJ); 
    
    $tb_enquete = 'select * from tb_enquete';
    
    $retorno_enquete = $conexao->query($tb_enquete);
    $lista_enquete = $retorno_enquete->fetchAll(PDO::FETCH_OBJ);

    echo 'teste';
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enquetes</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .card-enquete {
            max-width: 700px;
            margin: 0 auto;
        }
    </style>

</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Enquetes</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="criar-enquete.php">Criar Enquetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Visualizar Enquetes</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>




<?php foreach($lista_enquete as $key => $value) { 
        $i = $value->opcoes
    ?>

    

    <div class="card-enquete">
    <div class="card mt-5">
    <div class="card-header">
        Enquete <?= $value->opcoes ?>
    </div>
    <div class="card-body">
        <h5 class="card-title"><?= $value->titulo ?></h5>

        <?php foreach($lista_opcoes as $key => $value) { ?>
        
        <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                
                <?php if( $value->id_enquete == $i) { ?>

                    <?= $value->texto_opcao ?>

                <?php } ?>

            </label>
        </div>

        <?php } ?>

        <a href="#" class="btn btn-info mt-3">Vote!</a>


    </div>
    </div>
    </div>

<?php } ?>        
    


    
</body>

</html>