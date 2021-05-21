<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.83.1">
    <title>Signin Template · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

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
    <link href="signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
    <main class="form-signin">
      <button class="troca-de-Api" type="button"><a href="../viewL/index.php">Troca para Api-league</a></button>
      <form action="../controller/inf.php" method="POST">
        <img class="img-covid" src="../utils/img/foto-1-getty-images.jpg">
        <h1 class="h3 mb-3 fw-normal">Pesquisa sobre os numeros da COVID-19 no mundo a partir das datas</h1>

        <div class="form-floating">
          <input type="date" class="form-control" id="" name="data1">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="date" class="form-control" id="" name="data2">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <select name="pais" id="" class="form-control">
            <option value="brazil">Brasil</option>
            <option value="south africa">Africa do Sul</option>
            <option value="australia">Australia</option>
            <option value="switzerland">Islandia</option>
            <option value="afghanistan">Afeganistão</option>
          </select>
          <label for="floatingPassword">Escolha um pais</label>
        </div>
        <br>
        <br>
        <!-- <div class="checkbox mb-3">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <button class="w-100 btn btn-lg btn-primary" type="submit">Pesquisar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2020–2021</p>
      </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    
  </body>
</html>
