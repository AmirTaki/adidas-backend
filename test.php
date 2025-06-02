
<?php   
    require_once "functions/pdo_connection.php";
    require_once "functions/helpers.php"; 
   $tableHeader = readTable ('adidas', "SELECT * FROM adidas.header", $single = false, $execute = null);
    // megaMenu_title
    $TableMegaMenuTitle = readTable ("adidas", "SELECT * FROM adidas.megaMenu_title", $single = false, $execute = null);

    foreach($tableHeader as $item){
        foreach($TableMegaMenuTitle as $i){
            if ($item->title == $i->title){
        
        ?>
        <h1><?= $item->title ?> : <?= $i->category?></h1>
       
    <?php }}}



