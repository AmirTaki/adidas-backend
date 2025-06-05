<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if (isset($_POST['title']) && $_POST['title'] !== "" &&
        isset($_POST['link']) && $_POST['link'] !== "" &&
        isset($_POST['body']) && $_POST['body'] !== ""
    ){
        $operation =   operationsDataBase ("adidas", "INSERT INTO adidas.page_move SET title = ?,   link = ?, body = ?, created_at = NOW()", $execute = [$_POST['title'], $_POST['link'], $_POST['body']]);
        $operation ? redirect('panel/page_move') : "";
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
        <form action="<?= url('panel/page_move/create.php'); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" placeholder = 'image title ...'>
        
            <!-- link  -->
            <label for="name" >Link</label>
            <input class = '' type="text" name="link" id="nameid" placeholder = 'enter the price ...'>
        
            <!-- body -->
            <label for="" >Body</label>
            <textarea name = 'body' placeholder = 'Enter the caption  ..... '></textarea>

            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>