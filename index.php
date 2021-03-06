<?php
include 'molop/mconfig.php';
?>
<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title><?= $nome . ' ' .  $descricao ?></title>
  </head>
  <body>
   
<?php
include 'molop/nav.php'; ?>



<div class="container">
  <div class="row">
    <div class="col">
      <div class="card" style="width: 18rem;">
  <img src="/molop/imagens/molop.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Bem vindo(a), a rede <?= $nome ?></h5>
    <p class="card-text">Junte-se aos NUN registrados na nossa rede social.</p>
    <a href="#" class="btn btn-primary">Começar agora</a>
  </div>
</div>

    </div>
    <div class="col">
      <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Faça login</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Insira seu e-mail.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  
  <button type="submit" class="btn btn-success">Entrar</button>



  <a class="btn btn-danger" href="/registro.php">Criar uma conta
</a>
</form>
    </div>
    
  </div>
</div>

