<?php
if (isset($_POST['redirecionar'])) {
    // Redireciona o usuário para outra página
    header("Location: order_form.php");
    exit;
}
?>
