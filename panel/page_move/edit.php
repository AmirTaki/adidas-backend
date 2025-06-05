<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.page_move WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if(
          isset($_POST['title']) && $_POST['title'] !== "" &&
          isset($_POST['link']) && $_POST['link'] !== "" && 
          isset($_POST['body']) && $_POST['body'] !== ""
        ){
            $operation =  operationsDataBase ('adidas', "UPDATE adidas.page_move SET title = ?, link = ?, body = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $_POST['link'], $_POST['body'], $_GET['id']]);
            $operation ? redirect('panel/page_move') : "";
        }          
    }
    else {
        redirect('panel/page_move');
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
        <form action="<?= url('panel/page_move/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" value  = '<?= $table->title ?>'>
            <!-- link  -->
            <label for="name" >link</label>
            <input class = '' type="text" name="link" id="nameid" placeholder = 'enter the link ...' value = "<?= $table->link ?>">
            <!-- body -->
            <label for="" >Body</label>
            <textarea name = 'body' placeholder = 'Enter the caption  ..... '><?= $table->body ?></textarea>
            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>

    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>