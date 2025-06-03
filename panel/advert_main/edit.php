<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.advert_main WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if(
          isset($_POST['title']) && $_POST['title'] !== "" &&
          isset($_FILES['image']) && $_FILES['image']['name'] !== "" &&
          isset($_POST['price']) && $_POST['price'] !== "" && 
          isset($_POST['body']) && $_POST['body'] !== ""
        ){
            if(checkImg ('image')){
                deleteFiles($table->path);
                $path = saveFiles ("/src/img/advertMain/", "image", "avif");
                if($path !== false){
                    $operation =  operationsDataBase ('adidas', "UPDATE adidas.advert_main SET title = ?, path = ?, price = ?, body = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $path, $_POST['price'], $_POST['body'], $_GET['id']]);
                    $operation ? redirect('panel/advert_main') : "";
                }
            }
            else {
                redirect('panel/advert_main');
            }
        }
        // elseif()
    }
    else {
        redirect('panel/advert_main');
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
        <form action="<?= url('panel/advert_main/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" value  = '<?= $table->title ?>'>
            <!-- image -->
            <img src="<?= $table->path ?>" style = 'margin:25px;width:15%' alt="picture">
            <!-- input image -->
            <label for="" >Image</label>
            <input  type = 'file' name = 'image' class = 'input_create_category'>
            <!-- price  -->
            <label for="name" >Price</label>
            <input class = '' type="text" name="price" id="nameid" placeholder = 'enter the price ...' value = "<?= $table->price ?>">
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