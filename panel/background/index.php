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
        <div class = 'line_categroy'>
        <div>BACKGROUND MAIN</div>
        <a href="<?= asset('panel/background/create.php') ?>" class = 'create_button'>Create</a>
</div>
    <div class = 'table_catgory' >
        <table style = 'width : 95%'>
            <tr>
                <th>#</th>
                <th id = 'categroy_id'>title</th>
                <th id = 'title_id'>image</th>
                <th id = 'title_id'>caption</th>
                <th id = 'title_id'>body</th>
                <th id = 'title_id'>link</th>
                <th id = 'status_th'>status</th>
                <th id = 'setting_th'>edit</th>
                <th id = 'setting_th'>delete</th>
            </tr>

            <?php 
            $Table =   readTable ("adidas", "SELECT * FROM adidas.background", $sigle = false, $execute = null);
            foreach($Table as $item) {
            ?>
            <tr>
                <!-- id -->
                <td><?= $item->id; ?></td>
                
                <!-- product -->
                <td><?= $item->title ?></td>
                
                <!-- img -->
                <td><img src="<?= $item->path ?>" alt="" style = "width:75px; height : 48px"></td>

                <!-- price -->
                <td><?= $item->caption ?></td>
                
                <!-- body -->
                <td><?= substr($item->body, 0, 20)." ..." ?></td>
                
                <!-- link -->
                <td><?= substr($item->link, 0, 20)." ..." ?></td>
                
        
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
                    <a href="<?= asset('panel/background/status.php?id='.$item->id);?>" class = 'changeStatus_button' >Change Status</a>
                </td>
                <td>
                    <a href="<?= asset('panel/background/edit.php?id='.$item->id); ?>" class = 'edit_button'>Edit</a>
                </td>
                <td>
                    <a href = '<?= asset('panel/background/delete.php?id='.$item->id); ?>' class = 'delete_button' onclick = 'functionCheck()'>Delete</a>
                </td>
            </tr>
           <?php  }  ?>

        </table>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>