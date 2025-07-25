<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_POST['title']) and $_POST['title'] !== ""){
        operationsDataBase("adidas", "INSERT INTO adidas.menu_main SET title = ?, created_at = NOW() ",[$_POST['title']]) ? redirect("panel/menu_main") : "";
    }
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
        
    <div style = 'padding-top:150px'>

        <form action="<?= url('panel/menu_main/create.php'); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" placeholder = 'name ...'>
        
            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>

 
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>