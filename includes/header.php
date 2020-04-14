<?php
$url=$_SERVER['PHP_SELF'];
$pagina=basename($url);


    // Verifica em qual servidor está a aplicação
$server = $_SERVER['SERVER_NAME'];
if ($server == 'localhost'){
  $server = $_SERVER['SERVER_NAME'].'/artattack';
}else{
  $server = $_SERVER['SERVER_NAME'];
}
?>
<nav class="navbar navbar-expand-sm sticky-top navbar-dark bg-info py-2 navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="index.php"><img class="logo" src="img/logo.svg"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar1">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar1">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="quemsomos.php">quem somos</a>
                </li>

               

                <li class="nav-item ">
                    <a class="nav-link" href="servicos.php">serviços </a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="#">blog</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="contato.php">contato</a>
            </li>
        </ul>
    </div>
</div>
</nav>