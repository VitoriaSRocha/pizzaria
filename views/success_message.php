<!DOCTYPE html>
<html>
<head>

    
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Crimson+Text&family=Rubik:ital,wght@0,400;0,500;1,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>
<body>
 



<nav class="nav">
      <a class="navbar-brand" href="#">
        <img src="imagem/Pizza.png" width="100" height="100" class="logo" alt="">
        <strong class="nomelogo">Pizzaria Pizza</strong>
      </a>
    </nav>

    <h1 class="centro1">Pedido Salvo</h1>
    <p class="centro1">O seu pedido de pizza foi salvo com sucesso!</p>


    

    <form method="post" action="redireciona.php">
    <a href="index.php?action=list" id="centro1"  class="btn btn-outline-primary" >Ver todos os pedidos</a>
        <input type="submit" id="centro2" class="btn btn-outline-primary" name="redirecionar" value="Adicone um pedido">
    </form>

</body>
</html>
