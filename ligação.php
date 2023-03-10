<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>ligação</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-static/">

    

    <!-- Bootstrap core CSS -->
<link href="https://getbootstrap.com/docs/5.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top.css" rel="stylesheet">
  </head>
  <body>
    

<main class="container">
  <div class="bg-light p-5 rounded">
    <h1>Usuários</h1>
    <?php
      $sql= "SELECT COUNT(*) FROM usuario ";
    ?>
    <a class="btn btn-lg btn-primary" href="usuario/TelaListagem.php" role="button">Lista de Usuários &raquo;</a>
  </div>

  <div class="bg-light p-5 rounded">
    <h1>Fornecedores</h1>
    <?php
      $sql= "SELECT COUNT(*) FROM fornecedores ";
    ?>
    <a class="btn btn-lg btn-primary" href="fornecedores/TelaListagemFornecedor.php" role="button">Lista de Fornecedores &raquo;</a>
  </div>
</main>


    <script src="https://getbootstrap.com/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  </body>
</html>