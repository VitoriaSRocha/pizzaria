
<?php
// index.php


// Incluir os arquivos necessários
require_once "controllers/PizzaController.php";
require_once "models/Pizza.php";


// Instanciar o controlador
$controller = new PizzaController();


// Verificar a ação solicitada pelo usuário
if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'index';
}


// Roteamento de ações
switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'save':
        $controller->save();
        break;
    case 'list':
        $controller->list();
        break;
    default:
        $controller->index();
        break;
}
?>


