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
        <div>MENU FOOTER TABLE</div>
        <a href="<?= asset('panel/menu_footer/create.php') ?>" class = 'create_button'>Create</a>
    </div>    
    <div class = 'table_catgory' >
        <table style = 'width : 95%'>
            <tr>
                <th>#</th>
                <th id = 'categroy_id'>title</th>
                <th id = 'title_id'>button</th>
                <th id = 'status_th'>status</th>
                <th id = 'setting_th'>setting</th>
            </tr>
            <?php 
            $Table =   readTable ("adidas", "SELECT * FROM adidas.menu_footer", $sigle = false, $execute = null);
            foreach($Table as $item) {
            ?>
            <tr>
                <!-- id -->
                <td><?= $item->id; ?></td>
                
                <!-- title -->
                <td><?= $item->title ?></td>
                   
                <!-- status -->
                <td class = 'status_hidden'>
                    <?php if ($item->status == 10) { ?>
                    <a href="" class = 'enable_click'>enable</a>
                    <?php } else { ?>
                    <a href="" class = 'disable_click'>disable</a>
                    <?php } ?>
                </td>

                <!-- settings -->
                <td id = 'setting_td'>
                    <a href="<?= asset('panel/menu_footer/status.php?id='.$item->id);?>" class = 'changeStatus_button' >Change Status</a>
                </td>
                <td>
                    <a href="<?= asset('panel/menu_footer/edit.php?id='.$item->id); ?>" class = 'edit_button'>Edit</a>
                </td>
                <td>
                    <a href = '<?= asset('panel/menu_footer/delete.php?id='.$item->id); ?>' class = 'delete_button' onclick = 'functionCheck()'>Delete</a>
                </td>
            </tr>
           <?php  }  ?>
        </table>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>