<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if (isset($_POST['title']) && $_POST['title'] !== "" &&
        isset($_FILES['image']) && $_FILES['image']['name'] !== "" &&
        isset($_POST['caption']) && $_POST['caption'] !== "" &&
        isset($_POST['body']) && $_POST['body'] !== ""&&
        isset($_POST['link']) && $_POST['link'] !== ""
    ){
        if(checkImg('image')){
            $path =  saveFiles("/src/img/background/", 'image', "avif");
            if($path !== false){
                $operation =   operationsDataBase ("adidas", "INSERT INTO adidas.background SET title = ?, path = ?, caption = ?, body = ?, link = ?, created_at = NOW()", $execute = [$_POST['title'], $path, $_POST['caption'], $_POST['body'], $_POST['link']]);
                $operation ? redirect('panel/background') : "";
            }
            else {
                var_dump("warning :The photo has not been saved! ");
            }
        }
        else {
            redirect("panel/background");
        }
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
        <form action="<?= url('panel/background/create.php'); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" placeholder = 'image title ...'>

            <!-- image URL  -->
            <label for="" >Image URL</label>
            <input  type = 'file' name = 'image' class = 'input_create_category'>
        
            <!-- price  -->
            <label for="name" >caption</label>
            <input class = '' type="text" name="caption" id="nameid" placeholder = 'enter the price ...'>
        
            <!-- body -->
            <label for="" >Body</label>
            <textarea name = 'body' placeholder = 'Enter the caption  ..... '></textarea>
            
            <!-- link -->
            <label for="" >Link</label>
            <textarea name = 'link' placeholder = 'Enter the link  ..... '></textarea>

            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>