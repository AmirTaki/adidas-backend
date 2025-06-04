<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.board_black WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if(
          isset($_POST['title']) && $_POST['title'] !== "" &&
          isset($_POST['caption']) && $_POST['caption'] !== "" &&
          isset($_POST['icon']) && $_POST['icon'] !== "" && 
          isset($_POST['body']) && $_POST['body'] !== ""
        ){
            $operation =  operationsDataBase ('adidas', "UPDATE adidas.board_black SET title = ?, body = ?, icon = ?, body = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $_POST['caption'], $_POST['icon'], $_POST['body'], $_GET['id']]);
            $operation ? redirect('panel/board_black') : "";
        }
    }
    else{
        redirect('panel/board_black');
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
        <form action="<?= url('panel/board_black/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" value  = '<?= $table->title ?>'>
            <!-- caption  -->
            <label for="name" >Caption</label>
            <textarea name = 'caption' placeholder = 'Enter the caption  .....'><?= $table->caption ?></textarea>
            <!-- body -->
            <label for="" >Body</label>
            <textarea name = 'body' placeholder = 'Enter the body  ..... '><?= $table->body ?></textarea>
            <!-- icon  -->
            <label for="name" ></label>
            <input class = '' type="text" name="icon" id="nameid" placeholder = 'enter the price ...' value = "<?= $table->icon ?>">
            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>

    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>