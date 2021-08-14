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
          <a class="nav-link active" aria-current="page" href="#">Criar Enquetes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Visualizar Enquetes</a>
        </li>        
      </ul>
    </div>
  </div>
</nav>

<?php if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>

<div class="bg-success pt-2 text-white d-flex justify-content-center"><h5>Enquete Criada com Sucesso!</h5></div>

<?php }?>

<div class="card-enquete">
    <div class="card mt-5">

        <div class="card-header">
            Criar Enquete
        </div>

        <form action="enquete_controller.php" method="post">
          <div class="card-body" id="cria-enquete">

              <div class="input-group mb-3">
                  <span style="background-color: grey; color: white;" class="input-group-text" id="inputGroup-sizing-default">Título</span>
                  <input name ="titulo" type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira o título da enquete">        
              </div>

              <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Opção</span>
                  <input type="text" name="texto_opcao" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira a primeira opção">        
              </div>

              <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Opção</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira a segunda opção">        
              </div>

              <div class="input-group mb-3">
                  <span class="input-group-text" id="inputGroup-sizing-default">Opção</span>
                  <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" placeholder="Insira a terceira opção">        
              </div>   
          
              
          </div>

            <div class="input-group mb-3">
                <span class="input-group-text ml-5" id="inputGroup-sizing-default">Início</span>
                <input type="date" name="data_ini">

                <span class="input-group-text ml-5" id="inputGroup-sizing-default">Fim</span>
                <input type="date" name="data_fim">        
            </div> 

            <a href="#" class="btn btn-warning ml-5" onclick="adicionaCampo()">Adicionar Opção + </a>

            <input type="submit" class="btn btn-info mt-3 mb-3">
            
            
          </form>

    </div>
    
</div>

<script>

        function adicionaCampo() {

            var campo = document.getElementById('cria-enquete')

            var div = document.createElement("div")
            div.className = "input-group mb-3";
            campo.appendChild(div)

            var span = document.createElement("span");
            span.className = "input-group-text";
            div.appendChild(span)            
            
            span.innerHTML = `Opção`

            var input = document.createElement("input");
            input.type = "text";
            input.className = "form-control";
            div.appendChild(input)

        }


</script>
    
</body>

</html>