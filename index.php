<?php
    require_once "functions/pdo_connection.php";
    require_once "functions/helpers.php";
    require_once "functions/tablesDataBase.php";
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./src/styles/styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <title>project adidas</title>
</head>
<body>
    <!-- header -->
    <div class = 'page-move'>
        <div class="cross-page-move">
            <i class="bi bi-x-square"></i>
        </div>
        <div class = "board-page-move">
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, beatae?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil porro, suscipit error, magni eaque natus reprehenderit sint, quod omnis assumenda facilis ut dolor tenetur itaque similique. Harum officiis maxime repudiandae.</p>
                <a href="">Lorem ipsum, dolor sit amet consecte</a>
            </div>
            <div>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum, beatae?</h3>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nihil porro, suscipit error, magni eaque natus reprehenderit sint, quod omnis assumenda facilis ut dolor tenetur itaque similique. Harum officiis maxime repudiandae.</p>
                <a href="">Lorem ipsum, dolor sit amet consecte</a>
            </div>
        </div>
    </div>
   
    <header>
        <div class = "header-top">
            <div class = 'header-up'>
                <h3>Lorem ipsum dolor sit amet consectetur, adipisicing</h3>
                <i class="bi bi-chevron-down"></i>
            </div>
            <div class = "header-meddle" >
                <ul>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div class = "header-down" >

                <div class="icon-query">
                    <i class="bi bi-list"></i>
                    <i class="bi bi-heart"></i>
                </div>

                <div class = "header-icon">
                    <svg role="img"  viewBox="100 100 50 32" xmlns="http://www.w3.org/2000/svg"><title>Homepage</title><path fill-rule="evenodd" clip-rule="evenodd" d="M 150.07 131.439 L 131.925 100 L 122.206 105.606 L 137.112 131.439 L 150.07 131.439 Z M 132.781 131.439 L 120.797 110.692 L 111.078 116.298 L 119.823 131.439 L 132.781 131.439 Z M 109.718 121.401 L 115.509 131.439 L 102.551 131.439 L 100 127.007 L 109.718 121.401 Z" fill="black"></path></svg>
                </div>
                
                <div class = 'header-item' >
                    <ul>
                        <?php foreach($tableHeader as $title){
                            if ($title->status == 10) {?>
                                <li><?= $title->title; ?></li>
                            <?php } 
                            } 
                        ?>
                    </ul>
                </div>
                 
               
                
                <div class = "header-search">
                    <input type="search" placeholder="search">
                    <div>
                        <i class="" id = "icon-search-heart"></i>
                    </div>

                    <div>
                        <a href="./auth/sign.php"> <i  class="bi bi-person"></i></a>
                       
                    </div>
                    <div>
                        <i class="bi bi-handbag" id = 'bag'></i>
                    <div>
                </div>
            </div>
        </div>
    </header>

    <!-- SIDE BAR -->
    <div class="sidebar">
        <div class = 'sidebar-svg-cross'>
            <svg role="img"  viewBox="100 100 50 32" xmlns="http://www.w3.org/2000/svg"><title>Homepage</title><path fill-rule="evenodd" clip-rule="evenodd" d="M 150.07 131.439 L 131.925 100 L 122.206 105.606 L 137.112 131.439 L 150.07 131.439 Z M 132.781 131.439 L 120.797 110.692 L 111.078 116.298 L 119.823 131.439 L 132.781 131.439 Z M 109.718 121.401 L 115.509 131.439 L 102.551 131.439 L 100 127.007 L 109.718 121.401 Z" fill="black"></path></svg>
            <i class="bi bi-x-lg"></i>
        </div>

        <div class = "sidebar-container">
            <?php foreach($tableHeader as $title){
                if ($title->status == 10) {?>
                <div class = "sidebar-item">
                    <div class = 'title-sidebar'><?= $title->title ?></div>
                    <div><i class="bi bi-chevron-right"></i></div>
                </div>
            <?php }
            }
            ?>
        </div>

        <div class = "siderbar-list">
            <div>
                item
            </div>
            <div>
                item
            </div>
            <div>
                item
            </div>
            <div>
                item
            </div>
            <div>
                item
            </div>
            <div>
                item
            </div>
        </div>

        <div class = "sidebar-languge">
            United States
        </div>
    </div>   
        
    <!-- sidebar intointo -->
    <?php foreach($tableHeader as $header) { ?>     
        <div class="sidebarToInTo">
            <div class = 'sidebar-back'>
                <i class="bi bi-chevron-left backSider"> &nbsp;<?= $header->title ?></i>
                <i class="bi bi-x-lg"></i>
            </div>
            <div class = "sidebar-container">
                <?php  foreach($TableMegaMenuTitle as $category) {
                    if ($category->title == $header->title){
                        if($category->status == 10){ 
                ?>
                    <div class = "siderContainer">
                        <div><?= $category->category ?> </div>
                            <div><i class="bi bi-chevron-right"></i></div>
                        </div>         
                <?php }}}?>
            </div> 
        </div>   
    <?php } ?>
    
    <!-- sidebarToSidebar -->
    <?php 
    foreach ($tableHeader as $title){
        foreach($TableMegaMenuTitle as $category){
                if($title->title == $category->title){
                    if($category->status == 10){
    ?>    
        <div class="sidebarToSidebar">
            <div class = 'sidebarToSidebar-back'>
                <i class="bi bi-chevron-left backSider"> &nbsp;<?= $category->category ?></i>
                <i class="bi bi-x-lg"></i>
            </div>
            <div class = "sidebar-container">
                <?php 
                    foreach($TableMegaMenuProduct as $product){
                        if($product->category == $category->category && $product->title == $title->title){
                            if($product->status == 10){
                ?>
                    <div class = "sidebarToSidebarItem">
                        <div><?= $product->product ?> </div>
                    </div>      
                
                <?php }} } ?>    
            </div>
        </div>   
    <?php } }}}?>
    
    <!-- MEGA MENU -->
    <?php foreach($tableHeader as $title) { ?>    
        <div class = 'all-megaMenu deactive' >
            <div class = "megaMenu">
                <?php  foreach($TableMegaMenuTitle as $category) {
                    if ($category->title == $title->title){
                        if($category->status == 10){ 
                ?>
                    <div>
                        <ul><?= $category->category ?> 
                            <?php foreach($TableMegaMenuProduct as $product){ 
                                if($product->category == $category->category && $product->title == $title->title ) {
                                    if($product->status == 10) {?> 
                                        <li><?= $product->product ?></li>
                            <?php } } }?>
                        </ul>
                    </div>
                <?php }}} ?>
            </div>
            <div class = 'title-megaMenu'>
                <div>one</div>
                <div>two</div>
                <div>three</div>
                <div>four</div>
                <div>five</div>
                <div>six</div>
            </div>
        </div>
    <?php } ?>
    <!-- BETTWEN header & main -->
    <div class = "header-main">
        <div class = "header-main-up" >
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint.</h3>
          <i class="bi bi-arrow-right"></i>
        </div>
        <div class = 'header-img'>
            <img src="./src/img/photo-1588110679566-158c6dea107c.avif" alt="">
            <h1>title</h1>
            <h4>another</h4>
            <p>Lorem ipsum dolor sit amet consectetur.</p>
            <ul>
                <li>item <i>icon</i></li>
                <li>item <i>icon</i></li>
                <li>item <i>icon</i></li>
            </ul>
        </div>
    </div>

    <!-- main -->
    <main>
        <div class = "size-main">
            <!-- title -->
            <div class = "title-main">
                <div>
                    <h3>Lorem ipsum dolor sit</h3>
                </div>
            </div>
            <!-- image -->
            <div class = img-main>
                <?php foreach($TableAdvertMain as $item) {
                    if ($item->status == 10) {  ?>
                    <div class = "window-img">
                        <!-- <img src="" alt=""> -->
                        <img src="<?= $item->path ?>" alt="">
                        <h4>$<?= $item->price ?></h4>
                        <h3><?= $item->body ?> </h3>
                        <p><?= $item->title ?> </p>
                        <i class="bi bi-heart heart-click"></i>                
                    </div>
                <?php }} ?>
            </div>
            <!-- button & scroll -->
            <div class = 'button-scroll'>
                <!-- button -->
                <div class = 'size-button'>
                    <button>button</button>
                    <button>button</button>
                    <button>button</button>
                    <a href="">view all</a>
                </div>
                <!-- image scroll -->
                <div class = "img-main scroll-img">
                    <?php foreach($TableScrollerImage as $item) {
                        if ($item->status == 10){
                    ?>
                        <div class = "window-img">
                            <img src="<?= $item->path ?>" alt="">
                            <h4>$<?= $item->price ?></h4>
                            <h3><?= $item->body ?></h3>
                            <p><?= $item->title ?></p>
                            <i class="bi bi-heart heart-click"></i>                  
                        </div>
                    <?php }} ?>
                    <i class="bi bi-arrow-left-square"></i>
                    <i class="bi bi-arrow-right-square"></i>
                </div>
            </div>
            <!-- video scroll -->
            <div class = "postion-video-scroll" >
                <i class="bi bi-arrow-left-circle"></i>
                <i class="bi bi-arrow-right-circle"></i>
                 
                <div class = "img-main scroll-vidoe"> 
                    <?php foreach($TableScrollerVideo as $item){
                        if($item->status == 10){ ?>
                            <div class = "window-img">
                                <div>
                                    <video src="<?= $item->path ?>" scale="tofit"  controls %poster="vorschaubild.jpg" alt="">
                                </div>
                                <div>
                                    <h3><?= $item->title ?></h3>
                                    <p><?= $item->body ?></p>
                                </div>
                                <div>
                                    <a href=""><?= $item->link ?></a>
                                </div>        
                            </div>
                    <?php }} ?>
                </div>
            </div>
           
            <!-- title popular -->
            <div class = "popular">
                <h2>Popular right now</h2>
            </div>

            <!-- title table -->
            <div class="table">
                <?php foreach($TablePopularTitle as $item){
                    if ($item->status == 10){ ?>
                <div>   <h1><?= $item->title ?></h1></div>
                <?php }} ?>
            </div>

            <!-- related-resources slider image -->
            <div class = "related-resources-container">
                <!-- title related resources -->
                <div class = "related-resources">
                    <h1>related resources</h1>
                </div>

                <!-- slider img   -->
                <div class = "container-slider-img">
                    <?php 
                    foreach($TableRelatedResources as $item){
                        if($item->status == 10){
                    ?>
                        <div class = "item-slider-img">                     
                            <img src="<?= $item->path ?>" alt="">
                            <div class = "board-slider-img">
                                <h4><?= $item->title ?></h4>
                                <p><?= $item->body ?></p>
                            </div>
                        </div>
                    <?php }} ?>
                </div>
            </div>

           <!-- list main -->
            <div class = "list-main-container">
                <?php foreach($TableMenuMain as $title){
                    if ($title->status == 10){
                ?>
                <div class = "list-main-item">
                    <ul class = "list-main-item-title">
                        <div class = 'title-ul'> <?= $title->title ?> <i class="bi bi-chevron-down"></i></div> 
                        <div class = 'item-li'>
                            <?php foreach($TableMegaMenuMain as $category) {
                                if($category->title == $title->title){
                                    if($category->status == 10){
                            ?>
                                <li><?= $category->category ?></li>
                            <?php }}} ?>
                        </div>
                    </ul>
                </div>   
                <?php }} ?>   
            </div>
        </div>
    </main>

    <!-- board black -->
    <div class="board-black">
        <?php 
        foreach ($TableBoardBlack as $item){
            if ($item->status == 10){
        ?>
        <div>  
            <h1><?= $item->title ?></h1>
            <p><?= $item->caption ?></p>
            <p><?= $item->body ?></p>
            <i class = "<?= $item->icon ?>"></i>
            <!-- <?= $item->icon ?> -->
        </div>
        <?php }} ?>
    </div>

    <!-- OUR ADICLUB  -->
    <div class="our-adiclub">
        <div>
            <h1>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </h1>
            <button>button sign up <i>icon</i></button>
        </div>
    </div>
       
    <footer>
        <div class="container-footer">
            <?php 
                foreach($TableMenuFooer as $title){
                    if ($title->status == 10){
            ?>
            <div>
                <ul><?=  $title->title ?>
                    <?php
                        foreach($TableMegaMenuFooter as $category){
                            if($category->title == $title->title){
                                if($category->status == 10){
                    ?>
                        <li><?= $category->category ?></li>
                    <?php }}} ?>
                </ul>
            </div>
            <?php }} ?>
        </div>
        <div class = 'footer-black'>
            <?php
                $list = ["column Left", "column Right"];
                foreach($list as $index){         
            ?>
            <div>
                <?php 
                    foreach($TableFooterColumn as $item) {
                        if($item->title == $index){
                            if($item->status == 10){
                ?>
                <ul>
                    <li><?= $item->category ?></li>
                </ul> 
                <?php }}} ?>
            </div>
            <?php } ?>
        </div>
    </footer>
    <div class = 'upper-footer'>
        <div>Cookie Settings</div>
        <div>Your Privacy Choices</div>
        <div>Privacy Policy</div>
        <div>Terms and Conditions</div>
    </div>

    
    
    <script src = "./src/script/main.js"></script>
</body>
</html>