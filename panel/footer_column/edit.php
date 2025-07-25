<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if ($_GET['id']!== "" and isset($_GET['id'])){
        $TableMegaMenu =  readTable ("adidas", "SELECT * FROM adidas.footer_column WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($TableMegaMenu){
            if(isset($_POST['category']) and $_POST['category']!== ""  and isset($_POST['title']) and $_POST['title'] !== "" )
            {
               $operation =  operationsDataBase ("adidas", "UPDATE adidas.footer_column SET category = ?, title = ?,  updated_at = NOW() WHERE id = ?", $execute = [$_POST['category'], $_POST['title'], $_GET['id']]);
               $operation ? redirect("panel/footer_column"): "";
            }
            else {
                // redirect("panel/megaMenu_title");   
            }
        }
        else {
            redirect("panel/footer_column");   
        }
    }
    else {
        redirect("panel/footer_column");
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
        <form action="<?= url('panel/footer_column/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            <!-- Category  -->
            <label for="name" >Category</label>
            <input class = '' type="text" name="category" id="nameid" value = '<?= $TableMegaMenu->category ?>'>
  
            <label for="" >Title</label>
            <select class = 'select_class' name = 'title'>           
                <option value="column Left">Column Left</option>
                <option value="column Right">Column Rigth</option>
            </select>
            <!-- submit -->
            <input type="submit" value="Update" class = 'sing_button'>
            
        </form>
    </div>
    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>