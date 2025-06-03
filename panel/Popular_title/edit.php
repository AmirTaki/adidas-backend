<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if(isset($_GET['id']) and $_GET['id'] !== ""){
        $account  = readTable ('adidas', "SELECT * FROM adidas.popular_title WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($account){
            if(isset($_POST['title']) and $_POST['title'] !== ""){
               $editTitle =  operationsDataBase ('adidas', "UPDATE adidas.popular_title SET title = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $_GET['id']]);
               $editTitle ? redirect('panel/popular_title') :"";
            }
        }
        else {
            redirect('panel/popular_title');
        }
    }
    else {
        redirect('panel/popular_title');
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
        <form action="<?= url('panel/popular_title/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>

            <input class = '' type="text" name="title" id="nameid" value = "<?= $account->title; ?>">
        
            <!-- submit -->
            <input type="submit" value="Update" class = 'sing_button'>
            
        </form>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>