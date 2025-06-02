
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


<div class="sidebar">
    <div class = "sidebar-container">
            <div class = "sidebar-item">
                <div>item 1 </div>
                <div><i class="bi bi-chevron-right"></i></div>
            </div>  
            <div class = "sidebar-item">
                <div>item 2 </div>
                <div><i class="bi bi-chevron-right"></i></div>
            </div>  
            <div class = "sidebar-item">
                <div>item 3 </div>
                <div><i class="bi bi-chevron-right"></i></div>
            </div>  
            <div class = "sidebar-item">
                <div>item 4 </div>
                <div><i class="bi bi-chevron-right"></i></div>
            </div>  
        </div>
    </div> 
</div>   