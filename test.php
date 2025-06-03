
<?php   
    require_once "functions/pdo_connection.php";
    require_once "functions/helpers.php"; 
   $tableHeader = readTable ('adidas', "SELECT * FROM adidas.header", $single = false, $execute = null);
    // megaMenu_title
    $TableMegaMenuTitle = readTable ("adidas", "SELECT * FROM adidas.megaMenu_title", $single = false, $execute = null);
    $TableMegaMenuProduct = readTable ("adidas", "SELECT * FROM adidas.megamenu_product", $single = false, $execute = null);

foreach($tableHeader as $title){ ?>
    <div style = "background-color : red"><?= $title->title ?> </div>
    <?php foreach($TableMegaMenuTitle as $category){ 
        if($category->title == $title->title){?>
        <div style = "background-color : yellow"> <?= $category->category ?></div>
        <?php foreach($TableMegaMenuProduct as $product) {
           if($product->category == $category->category && $product->title == $title->title){ ?>
           <div style = 'background-color : blue'><?= $product->product ?> </div>
<?php }}}}}

?>
<br><br><br><br>
<br><br><br><br>

<?php foreach($TableMegaMenuTitle as $category){ 
        if($category->title){?>
        <div style = "background-color : yellow"> <?= $category->category ?></div>
        <?php foreach($TableMegaMenuProduct as $product) {
           if($product->category == $category->category && $product->title == $category->title){ ?>
           <div style = 'background-color : blue'><?= $product->product ?> </div>
<?php }}}}