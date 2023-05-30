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
<h1 class="centro1">Lista de Pedidos</h1>
<?php if (!empty($pizzas)): ?>
    <ul>
        <?php foreach ($pizzas as $id => $pizza): ?>
            <li class="centro1">
                <strong>Nome:</strong> <?php echo $pizza->getName(); ?><br>
                <strong>Tefone:</strong> <?php echo $pizza->getTelefone(); ?><br>
                <strong>Tamanho:</strong> <?php echo $pizza->getSize(); ?><br>
                <strong>Sabor:</strong> <?php echo implode(', ', $pizza->getSabores()); ?><br>
                

            </li>
        <?php endforeach; ?>
    </ul>

<?php else: ?>
    <p class="centro1">Nenhum pedido de pizza encontrado.</p>
<?php endif; ?>
</body>
</html>
