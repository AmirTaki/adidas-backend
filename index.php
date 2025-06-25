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
            <?php foreach($TablePageMove as $item){
                if($item->status == 10){ 
            ?>
            <div>
                <h3><?= $item->title ?></h3>
                <p><?= $item->body ?></p>
                <a href=""><?= $item->link ?></a>
            </div>
            <?php }} ?>
        </div>
    </div>
   
    <header>
        <div class = "header-top">
            <div class = 'header-up'>
                <h3>FREE STANDARD SHIPPING WITH ADICLUB</h3>
                <i class="bi bi-chevron-down"></i>
            </div>
            <div class = "header-meddle" >
                <ul>
                    <?php foreach($TableItemHeader as $item){
                        if($item->status == 10) {
                    ?>
                        <li><?= $item->title ?></li>
                    <?php }} ?>
                </ul>
            </div>
            <div class = "header-down" >

                <div class="icon-query">
                    <div class="clickHeaderMenu">list</div>
                    <i class="bi bi-heart"></i>
                </div>

                <div class = "header-icon">
                    <svg role="img"  viewBox="100 100 50 32" xmlns="http://www.w3.org/2000/svg"><title>Homepage</title><path fill-rule="evenodd" clip-rule="evenodd" d="M 150.07 131.439 L 131.925 100 L 122.206 105.606 L 137.112 131.439 L 150.07 131.439 Z M 132.781 131.439 L 120.797 110.692 L 111.078 116.298 L 119.823 131.439 L 132.781 131.439 Z M 109.718 121.401 L 115.509 131.439 L 102.551 131.439 L 100 127.007 L 109.718 121.401 Z" fill="black"></path></svg>
                </div>
                <!--  -->
                <div class = "menuHeader">
                    <div class = "exitHeader">
                        <div class = "exitItem">
                            🔳
                        </div>
                    </div>
                    <!-- foreach -->
                    <?php foreach($tableHeader as $menu){ ?>
                        <div class = "menuItem">
                            <div class  = "titleMenuItem">
                                <div><?= $menu->title ?></div>
                                <div class = "iconTitleMenuItem">→</div>
                            </div>
                            <div class = "listContainer">
                                <div class = "backContainer">
                                    <div class ="backButtonList">back ⬅️</div>
                                    <div class = "crossButtonList">corss ❌</div>
                                </div>
                                <!-- foreach -->
                                <?php foreach($TableMegaMenuTitle as $category){
                                    if($category->title === $menu->title){ ?>
                                    <div class = "productContainer">
                                        <div class = "titleListMenu">
                                            <div><?= $category->category ?></div>
                                            <div class = "iconTitleMenuList">→</div>
                                        </div>
                                        <div class = "pageProduct">
                                            <div class = "backContainer">
                                                <div class ="backButtonProduct">back ⬅️</div>
                                                <div class = "crossButtonProduct">corss ❌</div>
                                            </div>
                                            <!-- foreach -->
                                            <div class = "titleProduct">
                                                <div>product</div>
                                            </div>
                                        </div>   
                                    </div>
                                <?php }} ?>
                            </div>
                        </div>
                    <?php } ?>
                </div>  
                <!--  -->
               
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

     
    <!-- BETTWEN header & main -->
    <div class = "header-main">
        <div class = "header-main-up" >
            <h3>Save big on summer essentials with up to 40% off.</h3>
          <i class="bi bi-arrow-right"></i>
        </div>
        <div class = 'header-img'>
            <?php {
                $link  = $background->link;
                $items = explode(",", $link);
              ;
                if ($background->status == 10) { ?>
                <img src="<?= $background->path ?>" alt="">
                <h1><?= $background->title ?></h1>
                <h4><?= $background->caption ?></h4>
                <p><?= $background->body ?></p>
                <ul>
                    <?php 
                        foreach($items as $item){
                    ?>
                    <li><?=  $item?><i class="bi bi-arrow-right"></i></li>
                    <?php } ?>
                </ul>
            <?php }} ?>
        </div>
    </div>

    <!-- main -->
    <main>
        <div class = "size-main">
            <!-- title -->
            <div class = "title-main">
                <div>
                    <h3>Still <br/>Interested?</h3>
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
                    <button>New Arrivals</button>
                    <button>Best Sellers</button>
                    <button>New to Sale</button>
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
            <h1>JOIN OUR ADICLUB & GET 15% OFF. </h1>
            <button>SIGN UP FOR FREE <i class="bi bi-arrow-right"></i></button>
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