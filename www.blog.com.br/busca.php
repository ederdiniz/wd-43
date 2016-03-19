<!DOCTYPE html>
<html>
<head>
    <title>busca </title>
        <?php include("partial/head.php")?>
    <?php include("partial/cabecalho.php")?>

</head>
<body class="container">

<div class="jumbotron"> Busca da AuDi</div>
<div class="panel panel-default">
    <header class="panel-heading">
        
        <h1 class="panel-title"> Sua Busca: <?PHP print $_POST["busca"]?> </h1>

    </header>
    

<div class="panel-body">
    <h2>Post 1</h2>
    <h2>Post 2</h2>
</div>
</div>
  <?php include("partial/rodape.php")?>
  <script type="text/javascript" src="js/lab.js"></script>

</body>
</html>
