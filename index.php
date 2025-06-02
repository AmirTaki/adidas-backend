<?php
    require_once "functions/pdo_connection.php";
    require_once "functions/helpers.php";
    // header
    $tableHeader = readTable ('adidas', "SELECT * FROM adidas.header", $single = false, $execute = null);
    // megaMenu_title
    $TableMegaMenuTitle = readTable ("adidas", "SELECT * FROM adidas.megaMenu_title", $single = false, $execute = null);
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
                        <i class="bi bi-handbag"></i>
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
                    <div><?= $title->title ?></div>
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
    <div class="sidebarToInTo">
        <div class = 'sidebar-back'>
            <i>left</i>
            <i class="bi bi-x-lg"></i>
        </div>
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
    
    <!-- MEGA MENU -->
    <?php foreach($tableHeader as $itemHeader) { ?>    
        <div class = 'all-megaMenu deactive' >
            <div class = "megaMenu">
                <?php  foreach($TableMegaMenuTitle as $itemMM) {
                    if ($itemMM->title == $itemHeader->title){
                        if($itemMM->status == 10){ 
                ?>
                    <div>
                        <ul><?= $itemMM->category ?> 
                            <li>column1</li>
                            <li>column2</li>
                            <li>column3</li>
                            <li>column4</li>
                            <li>column5</li>
                            <li>column6</li>
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
                <div class = "window-img">
                    <!-- <img src="" alt=""> -->
                    <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                    <h4>$44</h4>
                    <h3>Lorem ipsum dolor sit.</h3>
                    <p>Sportswear</p>
                    <i class="bi bi-heart heart-click"></i>                
                </div>

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
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>                  
                    </div>
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>  
                    </div>
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>  
                    </div>
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>  
                    </div>
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>  
                    </div>
                    <div class = "window-img">
                        <img src="https://assets.adidas.com/images/w_600,f_auto,q_auto/2d201b536166482aa83e2c04002e8245_9366/House_of_Tiro_Pants_Black_JI6173_000_plp_model.jpg" alt="">
                        <h4>$44</h4>
                        <h3>Lorem ipsum dolor sit.</h3>
                        <p>Sportswear</p>
                        <i class="bi bi-heart heart-click"></i>  
                    </div>
           
                    <i class="bi bi-arrow-left-square"></i>
                    <i class="bi bi-arrow-right-square"></i>

                </div>
            </div>
            <!-- video scroll -->
            <div class = "postion-video-scroll" >
                <i class="bi bi-arrow-left-circle"></i>
                <i class="bi bi-arrow-right-circle"></i>
                 
                <div class = "img-main scroll-vidoe"> 
                
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>
                    <div class = "window-img">
                        <div>
                            <video src="https://brand.assets.adidas.com/video/upload/f_auto:video,q_auto/if_w_gt_800,w_800/global_roland_garros_tennis_ubersonic_tennis_ss25_launch_hp_navigation_card_teaser_d_c2694a1754.mp4" alt="">
                        </div>
                        <div>
                            <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque inventore dolorem excepturi!</p>
                        </div>
                        <div>
                            <a href="">SHOP NOW</a>
                        </div>        
                    </div>

                </div>
            </div>
           
            <!-- title popular -->
            <div class = "popular">
                <h2>Popular right now</h2>
            </div>

            <!-- title table -->
            <div class="table">
                <div>   <h1>title1</h1></div>
                <div>   <h1>title2</h1></div>
                <div>   <h1>title3</h1></div>
                <div>   <h1>title4</h1></div>
                <div>   <h1>title5</h1></div>
                <div>   <h1>title6</h1></div>
            </div>

            <!-- related-resources slider image -->
            <div class = "related-resources-container">
                <!-- title related resources -->
                <div class = "related-resources">
                    <h1>related resources</h1>
                </div>

                <!-- slider img   -->
                <div class = "container-slider-img">
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>
                    <div class = "item-slider-img">                     
                        <img src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto:best,fl_lossy/ED_087_How_to_Clean_Shoes_mh_d_f0806a86f8.jpg" alt="">
                        <div class = "board-slider-img">
                            <h4>Lorem ipsum dolor sit amet consectetur.</h4>
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odio, officiis?</p>
                        </div>
                    </div>

                </div>
            </div>

           <!-- list main -->
            <div class = "list-main-container">
                <div class = "list-main-item">
                    <ul class = "list-main-item-title">
                        <div class = 'title-ul'> title <i class="bi bi-chevron-down"></i></div> 
                        <div class = 'item-li'>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                        </div>
                    </ul>
                </div>     
                <div class = "list-main-item">
                    <ul class = "list-main-item-title">
                    <div class = 'title-ul'> title <i class="bi bi-chevron-down"></i></div> 
                        <div class = 'item-li'>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                        </div>
                   
                    </ul>
                </div>     
                <div class = "list-main-item">
                    <ul class = "list-main-item-title">
                        <div class = 'title-ul'> title <i class="bi bi-chevron-down"></i></div> 
                        <div class = 'item-li'>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                        </div>
                   
                    </ul>
                </div>     
                <div class = "list-main-item">
                    <ul class = "list-main-item-title">
                       <div class = 'title-ul'> title <i class="bi bi-chevron-down"></i></div> 
                        <div class = 'item-li'>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                            <li>item</li>
                        </div>
                   
                    </ul>
                </div>     
                
            </div>
        </div>
    </main>

    <!-- board black -->
    <div class="board-black">
        <div>  
            <h1>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quas.</h1>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem obcaecati sed voluptas magni facere, consequuntur ex tempore inventore nulla nesciunt optio in ipsum hic modi autem veniam natus incidunt beatae?
            Ipsam nesciunt vitae perspiciatis vero possimus eos quas commodi! Fugiat natus obcaecati dolor, facere autem eius. Dignissimos totam non obcaecati error placeat id impedit expedita! Eveniet ratione asperiores repudiandae rerum!
            Et nesciunt assumenda quam nulla aliquid, voluptatum ipsam numquam voluptate ducimus animi ut maxime adipisci earum quibusdam error, quae rem. Natus, voluptatum. Maiores, veritatis. Praesentium pariatur quam voluptates enim laborum.
            Numquam ea quasi magnam aut nihil enim quae? Libero placeat ex quidem voluptas nihil maiores veritatis, reprehenderit beatae sit mollitia animi dolore quasi voluptatibus harum in delectus, error suscipit voluptatem!
            Alias nemo incidunt rerum, sunt cum natus eaque itaque dolore beatae, maxime aut in eius at quas odit delectus tempore velit? Ex assumenda quod laboriosam beatae, voluptatem dolores ipsam molestiae?
            Quae magni culpa eligendi officia quasi assumenda earum fuga ratione accusantium molestias! Esse, tempora nesciunt? Iusto sed quia consequuntur ducimus at perferendis qui dicta illo, optio magni similique soluta perspiciatis!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, eum iste! Harum beatae, aut sed iure repellat nesciunt maiores quod numquam fugit ducimus porro saepe reprehenderit consequuntur impedit necessitatibus corrupti.
            Est, animi rerum. Unde eos commodi voluptate aperiam similique, reprehenderit laboriosam odio ex, quos distinctio ad esse! Est, exercitationem enim ducimus doloremque nam, cupiditate maiores, nobis ipsam amet molestias quo!
            Explicabo voluptas magni quod obcaecati modi asperiores dignissimos ipsam nostrum placeat, eius enim quas deserunt repellendus! Voluptatem ea non cumque dicta reprehenderit perferendis temporibus molestias et autem. Adipisci, soluta tempora!</p>
            
            <i>icon</i>
        </div>
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
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>title
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
        </div>
        <div class = 'footer-black'>
            <div>
                <ul>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
            <div>
                <ul>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                    <li>item</li>
                </ul>
            </div>
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