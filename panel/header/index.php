<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url('src/styles/panelAdimin.css')?>">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<body>
    <?php require_once '../layouts/navbar.php' ?>
    <?php require_once '../layouts/sidebar.php' ?>
        <div class = 'line_categroy' >
        <div>Header Table</div>
        <a href="<?= asset('panel/header/create.php') ?>" class = 'create_button'>Create</a>
    </div>


    
    
    <div class = 'table_catgory' >
        <table style = 'width : 95%'>
            <tr>
                <th>#</th>
                <th id = 'categroy_id'>title</th>
                <th id = 'title_id'>body</th>
                <th id = 'title_id'>button</th>
                <th id = 'status_th'>status</th>
                <th id = 'setting_th'>setting</th>
                
            </tr>

            <?php 
          
            $Table =   readTable ("adidas", "SELECT * FROM adidas.header", $sigle = false, $execute = null);
            var_dump($Table);
            foreach($Table as $item) {
                var_dump($item);
                }
            ?>

        </table>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>