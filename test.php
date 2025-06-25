
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
                My Account
            </div>
            <div>
                Exchanges & Returns
            </div>
            <div>
                Order Tracker
            </div>
            <div>
                adiClub
            </div>
            <div>
                Gift Cards
            </div>
            <div>
                Store Locator
            </div>
            <div>
                Mobile Apps
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


    // megaMenu
const closeMegeMenu = () => {
    for (let i = 0; i < megaMenu.length; i++){
        megaMenu[i].classList.add('deactive')
    }
}
for (let i = 0;  i < headerLi.length ; i++){
    headerLi[i].addEventListener("mousemove", (event)=>{
        closeMegeMenu()
        megaMenu[i].classList.remove("deactive");
    })
}

for (let i = 0;  i < headerLi.length ; i++){
    headerLi[i].addEventListener("mouseleave", (event)=>{
        closeMegeMenu()
    })
}




// sidebar
listIcon.addEventListener("click", e=>{
    sidebar.classList.add("sidebarAnimation")
    body.style.overflow = "hidden"
    headerMain.style.opacity = .3
    main.style.opacity = .3 
})

crossSidebar.addEventListener("click", e=>{
    sidebar.classList.remove("sidebarAnimation")
    body.style.overflow = ""
    headerMain.style.opacity = 1
    main.style.opacity = 1
})
const closeSidebar = () => {
    sidebar.classList.remove("sidebarAnimation")
    body.style.overflow = ""
    headerMain.style.opacity = 1
    main.style.opacity = 1
}
// sider to sider

// open
for (let i = 0; i < titleSidebar.length; i++){
    titleSidebar[i].addEventListener("click", (e)=> {
        sidebarToInTo[i].style.display = 'flex'
        sidebarToInTo[i].classList.remove('animationSiderbarToinToReverse')
        sidebarToInTo[i].classList.add('animationSiderbarToinTo')
    })
}

const closeSiderToSider = () => {
    for (let i = 0; i < titleSidebar.length; i++){
        sidebarToInTo[i].classList.remove('animationSiderbarToinTo')
        sidebarToInTo[i].classList.add('animationSiderbarToinToReverse')
    }
}

// close 
for (let i = 0; i < backSider.length; i++ ){
    backSider[i].addEventListener("click", (e)=>{
        sidebarToInTo[i].classList.remove('animationSiderbarToinTo')
        sidebarToInTo[i].classList.add('animationSiderbarToinToReverse')
    })
}

// sidebar to sidebar
let siderContainer = document.querySelectorAll(".siderContainer")
let sidebarToSidebar = document.querySelectorAll('.sidebarToSidebar')
let sidebarToSidebarBack = document.querySelectorAll('.sidebarToSidebar-back')

for (let i = 0; i< siderContainer.length; i++){
    siderContainer[i].addEventListener("click", (e)=>{
        sidebarToSidebar[i].style.display = "flex"
        sidebarToSidebar[i].classList.remove('animationSiderbarToinToReverse')
        sidebarToSidebar[i].classList.add('animationSiderbarToinTo')
    })
}

const closeSliderToSlider = () => {
    for (let i = 0; i < sidebarToSidebar.length; i++){
        sidebarToSidebar[i].classList.remove('animationSiderbarToinTo')
        sidebarToSidebar[i].classList.add('animationSiderbarToinToReverse')
    }
}
for (let i = 0; i< sidebarToSidebarBack.length; i++){
    sidebarToSidebarBack[i].addEventListener("click", (e)=>{
        closeSliderToSlider()
        sidebarToSidebar[i].classList.remove('animationSiderbarToinTo')
        sidebarToSidebar[i].classList.add('animationSiderbarToinToReverse')
    })
}




.sidebar{
    width: 100%;
    /* height: 100vh; */
    background-color: rgb(255, 255, 255);
    position: fixed;
    top : 0;
    z-index: 12;
    display: flex;
    flex-flow: column nowrap;
    animation: siderAnimReverse .5s linear forwards;
}
.sidebarAnimation {
    animation: siderAnim .5s linear forwards;
} 
@keyframes siderAnim {
    0%{
        transform: translateX(-1000px);
    }
    100%{
        transform: translateX(0px);
    }
}
.sidebarAnimationReverse {
    animation: siderAnimReverse .5s linear forwards;
} 
@keyframes  siderAnimReverse{
    0%{
        transform: translateX(0px);
    }
    100%{
        transform: translateX(-1000px);
    }
}
.sidebar-svg-cross{
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: center;
    border-bottom: 1px solid rgb(240, 240, 240) ;
    padding: 15px ;
    position: relative;
}
.sidebar-svg-cross svg {
    width: 50px;
}
.sidebar-svg-cross i {
    position: absolute;
    right: 10px;
    font-weight: 1000;
    font-size: 25px;
    padding: 10px;
}
.sidebar-container {
    background-color: transparent;
    border-bottom: 1px solid rgb(240, 240, 240) ;
    display: flex;
    flex-flow: column nowrap;
    padding: 10px 0;
}
.sidebar-item, .siderContainer {
    background-color: transparent;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 13px 35px;
    font-size:  20px;
}
.siderContainer {
    background-color: transparent;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 13px 35px;
    font-size:  20px;
}
.sidebarToSidebarItem {
    background-color: transparent;
    display: flex;
    flex-flow: row nowrap;
    justify-content: space-between;
    align-items: center;
    padding: 13px 35px;
    font-size:  20px;
}
.sidebar-item div i, .siderContainer div i  {
    font-size: 14px;
}
.sidebar-item:hover, .siderContainer:hover {
    cursor: pointer;
}
.siderbar-list{
       background-color: transparent;
    display: flex;;
    flex-flow:column nowrap ;
    align-items: start;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid rgb(240, 240, 240) ;
}

.siderbar-list div {
    background-color: transparent;
    padding: 10px 35px;
    width: 100%;
    font-size:  20px;
    font-weight: 350;
}
.siderbar-list div:hover {
    cursor: pointer;
}
.sidebar-languge {
    background-color: transparent;
    padding: 10px 30px ;
}
/* sidebar to in to */
.sidebarToInTo{
    width: 100%;
    height: 100vh;
    background-color: rgb(255, 255, 255);
    position: fixed;
    top : 0;
    z-index: 14;
    display: flex;
    flex-flow: column nowrap;
    transform: translateX(+1000px);
    display: none;
}
.sidebarToSidebar{
    width: 100%;
    height: 100vh;
    background-color: rgb(255, 255, 255);
    position: fixed;
    top : 0;
    z-index: 14;
    display: flex;
    flex-flow: column nowrap;
    transform: translateX(+1000px);
    display: none;
}

.animationSiderbarToinTo{
   animation: animationMoveSidebar  linear .4s forwards ; 
}
@keyframes animationMoveSidebar {
    0% {
        display: flex;
    }
    100%{
        transform: translateX(0);
    }
}
.animationSiderbarToinToReverse{
    animation: animationMoveSidebarReverse  linear .4s forwards ; 
}
@keyframes animationMoveSidebarReverse {
    0%{
        transform: translateX(0px);    
    }
    100% {
        transform: translateX(+1000px);
        display: none;
    }
}
.sidebar-back {
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    border-bottom: 1px solid rgb(238, 238, 238) ;
    background-color: rgb(255, 255, 255);
    padding: 15px ;
    height: 70px;
    position: relative;
    font-size: 19px;
}
.sidebarToSidebar-back{
    display: flex;
    align-items: center;
    text-align: center;
    justify-content: space-between;
    border-bottom: 1px solid rgb(238, 238, 238) ;
    background-color: rgb(255, 255, 255);
    padding: 15px ;
    height: 70px;
    position: relative;
    font-size: 19px;
}
/* sidbar to sidebar */

/* MEGA MENU */
.all-megaMenu{
    background-color: white;
    display: flex;
    flex-flow: column nowrap;
    position: fixed;
    top: 136px;
    width: 100%;
    z-index: 4;
}
.megaMenu {
  background-color: transparent; 
  display: flex;
  flex-flow: row nowrap;
  justify-content: start;
  border-bottom: 1px solid rgb(235, 235, 235);
}
.megaMenu div {
    border-right: 1px solid rgb(235, 235, 235);
    padding: 20px;
    height: 400px;
    width: 300px;
}
.megaMenu ul {
    display: flex;
    flex-flow : column nowrap ;
    gap: 16px;
    color : black;
    font-weight: 600;
}

.megaMenu ul li {
    list-style-type: none;
    color : rgb(85, 85, 85);
    font-weight: 300;
    font-size: 15px;
}
.megaMenu ul li:hover {
    text-decoration: underline;
    cursor: pointer;
}


.title-megaMenu {
    display: flex;
    flex-flow:  row nowrap;
    justify-content: space-around;
    background-color: transparent; 
}
.title-megaMenu div {
    width: 300px;
    padding: 20px;

}
.deactive {
    display: none;
}