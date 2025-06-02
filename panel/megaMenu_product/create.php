<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    $TableHeader = readTable ("adidas", "SELECT * FROM adidas.header", $single = false, $execute = null);
    $TableCategory = readTable ("adidas", "SELECT * FROM adidas.megamenu_title", $single = false, $execute = null);
    if(isset($_POST['product']) and $_POST['product']!== "" and
       isset($_POST['title']) and $_POST['title'] !== "" and 
       isset($_POST['category']) and $_POST['category']!== ""
    ){
        $checkTitle =    readTable ("adidas", "SELECT * FROM adidas.header WHERE title = ?", $single = true, $execute = [$_POST['title']]);
        $checkCategory = readTable ("adidas", "SELECT * FROM adidas.megamenu_title WHERE category = ?", $single = true, $execute = [$_POST['category']]);
        if($checkTitle && $checkCategory){
           $operation =  operationsDataBase ("adidas", "INSERT INTO adidas.megamenu_product SET title = ?, category = ?, product = ?, created_at = NOW()", $execute = [$_POST['title'], $_POST['category'], $_POST['product']]);
           $operation ? redirect("panel/megaMenu_product") : ""; 
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
        <form action="<?= url('panel/megaMenu_product/create.php'); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">
            <!-- title  -->
            <label for="" >Title</label>
            <select class = 'select_class' name = 'title'>
           
                <?php foreach($TableHeader as $item) {?>
                
                <option value="<?= $item->title?>"><?= $item->title ?></option>
            
                <?php } ?>
            </select>


     
            <!-- category  -->
            <label for="" >Category</label>
            <select class = 'select_class' name = 'category'>
           
                <?php foreach($TableCategory as $item) {?>
                
                <option value="<?= $item->category?>"><?= $item->category ?></option>
            
                <?php } ?>
            </select>

            <!-- product  -->
            <label for="name" >Product</label>
            <input class = '' type="text" name="product" id="nameid" placeholder = 'product name ...'>


       
        
            <!-- submit -->
            <input type="submit" value="Create" class = 'sing_button'>
            
        </form>
    </div>


    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>