<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.scroller_video WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if(
          isset($_POST['title']) && $_POST['title'] !== "" &&
          isset($_FILES['video']) && $_FILES['image']['video'] !== "" &&
          isset($_POST['link']) && $_POST['link'] !== "" && 
          isset($_POST['body']) && $_POST['body'] !== ""
        ){
            if(checkImg ('video')){
                deleteFiles($table->path);
                $path = saveFiles ("/src/img/video/", "image", "mp4");
                if($path !== false){
                    $operation =  operationsDataBase ('adidas', "UPDATE adidas.scroller_video SET title = ?, path = ?, link = ?, body = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $path, $_POST['link'], $_POST['body'], $_GET['id']]);
                    $operation ? redirect('panel/scroller_video') : "";
                }
                else {
                var_dump("warning :The video has not been saved! ");
            }
            }
            else {
                redirect('panel/scroller_video');
            }
        }
        elseif(          
            isset($_POST['title']) && $_POST['title'] !== "" &&
            isset($_POST['link']) && $_POST['link'] !== "" && 
            isset($_POST['body']) && $_POST['body'] !== ""
        ){
            $operation = operationsDataBase ("adidas", "UPDATE adidas.scroller_video SET title = ?, link = ?, body = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $_POST['link'], $_POST['body'], $_GET['id']]);
            $operation ? redirect('panel/scroller_video') : "";
        }
    }
    else {
        redirect('panel/scroller_video');
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
        <form action="<?= url('panel/scroller_video/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            
            <!-- title  -->
            <label for="name" >Title</label>
            <input class = '' type="text" name="title" id="nameid" value  = '<?= $table->title ?>'>
            <!-- video -->
            <td><video  src="<?= $item->path ?>"  style = "width:75px; height : 48px" scale="tofit"  controls %poster="vorschaubild.jpg"></video></td>
            <!-- input video -->
            <label for="" >video</label>
            <input  type = 'file' name = 'video' class = 'input_create_category'>
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