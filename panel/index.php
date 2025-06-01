<?php 
    require_once '../functions/helpers.php';
    require_once '../functions/pdo_connection.php';
    require_once '../functions/check_section.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel admin adidas</title>
    <link rel="stylesheet" href="../src/styles/panelAdimin.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>
<body>
    
    <?php require_once "./layouts/navbar.php"?>
    <?php require_once './layouts/sidebar.php' ?>
</body>
<script src = '<?= asset('src/script/panel.js') ?>'></script>

</html>