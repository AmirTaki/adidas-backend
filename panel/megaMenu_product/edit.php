<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    $headerTable = readTable ("adidas", "SELECT * FROM adidas.header", $single = false, $execute = null);
    $categoryTable = readTable ("adidas", "SELECT * FROM adidas.megamenu_title", $single = false, $execute = null);
    if(isset($_GET['id']) && $_GET["id"]!== ""){
        $productTable = readTable ("adidas", "SELECT * FROM adidas.megamenu_product WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($productTable){
            if(isset($_POST['product']) && $_POST['product'] !== "" && 
               isset($_POST['category']) && $_POST['category'] !== "" &&
               isset($_POST['title']) && $_POST['title'] !== ""
            ){
                $checkTitle = readTable ("adidas", "SELECT * FROM adidas.header WHERE title = ?", $single = true, $execute = [$_POST['title']]);
                $checkCategory = readTable ("adidas", "SELECT * FROM adidas.megamenu_title WHERE category = ?", $single = true, $execute = [$_POST['category']]);
                if($categoryTable && $checkCategory){
                    $operation =  operationsDataBase ("adidas", "UPDATE adidas.megamenu_product SET title = ?, category = ?, product = ?, updated_at = NOW() WHERE id = ?", $execute = [$_POST['title'], $_POST['category'], $_POST['product'], $_GET['id']]);
                    $operation ? redirect("panel/megaMenu_product") : "";
                }
                else {
                    redirect("panel/megaMenu_product");   
                }
            }
        }
        else {
            redirect("panel/megaMenu_product");   
        }
    }
    else {
        redirect("panel/megaMenu_product");
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
        <form action="<?= url('panel/megaMenu_product/edit.php?id='.$_GET['id']); ?>" method="post" class = 'form_create_category' enctype="multipart/form-data">

            <!-- Product  -->
            <label for="name" >Product</label>
            <input class = '' type="text" name="product" id="nameid" value = '<?= $productTable->product ?>'>
           <!-- Category  -->
            <label for="" >Category</label>
            <select class = 'select_class' name = 'category'>
           
                <?php foreach($categoryTable as $item) {?>
                
                <option value="<?= $item->category?>" <?php if($item->category == $productTable->category) echo('selected'); ?> ><?= $item->category ?></option>
            
                <?php } ?>
            </select>
            <!-- title  -->
            <label for="" >Title</label>
            <select class = 'select_class' name = 'title'>
                <?php foreach($headerTable as $items) {?>                
                    <option value="<?= $items->title?>" <?php if($items->title == $productTable->title)  echo ('selected'); ?>  ><?= $items->title ?></option>
                <?php } ?>
            </select>
            <!-- submit -->
            <input type="submit" value="Update" class = 'sing_button'>
            
        </form>
    </div>

    <script src = "<?= url('src/script/panel.js') ?>"></script>
</body>
</html>