<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    $tableHeader  =  readTable ("adidas", "SELECT * FROM adidas.menu_footer", $single = false, $execute = null);
    if ($_GET['id']!== "" and isset($_GET['id'])){
    
        $TableMegaMenu =  readTable ("adidas", "SELECT * FROM adidas.megamenu_footer WHERE id = ?", $single = true, $execute = [$_GET['id']]);
      
        if($TableMegaMenu){
            if(isset($_POST['category']) and $_POST['category']!== ""  and isset($_POST['title']) and $_POST['title'] !== "" )
            {
               $operation =  operationsDataBase ("adidas", "UPDATE adidas.megamenu_footer SET category = ?, title = ?,  updated_at = NOW() WHERE id = ?", $execute = [$_POST['category'], $_POST['title'], $_GET['id']]);
               $operation ? redirect("panel/megaMenu_footer"): "";
            }
            else {
                // redirect("panel/megaMenu_title");   
            }
        }
        else {
            redirect("panel/megaMenu_footer");   
        }
    }
    else {
        redirect("panel/megaMenu_footer");
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
        <form action="<?= url('panel/megaMenu_footer/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            <!-- Category  -->
            <label for="name" >Category</label>
            <input class = '' type="text" name="category" id="nameid" value = '<?= $TableMegaMenu->category ?>'>
  
            <label for="" >Title</label>
            <select class = 'select_class' name = 'title'>           
                <?php foreach($tableHeader as $item) {?>
                    <option value="<?= $item->title ?>" <?php  if($item->title == $TableMegaMenu->title) echo('selected'); ?> ><?= $item->title ?></option>
                <?php } ?>
            </select>
            <!-- submit -->
            <input type="submit" value="Update" class = 'sing_button'>
            
        </form>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>