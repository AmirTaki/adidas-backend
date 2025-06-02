let body = document.querySelector("body")
let pageMove = document.querySelector(".page-move")
let crossPage = document.querySelector('.cross-page-move i')
let headerUp = document.querySelector(".header-up")
let header = document.querySelector("header")
let iconQuery = document.querySelector('.icon-query')
let iconSearchHeart = document.getElementById("icon-search-heart")
let listUl = document.querySelectorAll(".title-ul")
let listLi = document.querySelectorAll(".item-li")
let iconListUl = document.querySelectorAll('.title-ul i')
let headerMain = document.querySelector(".header-main")
let main = document.querySelector('main')
let footer = document.querySelector(".container-footer")
let footerBlack = document.querySelector(".footer-black")
let upperFooter = document.querySelectorAll(".upper-footer div")
let headerLi = document.querySelectorAll(".header-item li")
let megaMenu = document.querySelectorAll(".all-megaMenu")
let headerItem = document.querySelector('.header-item')
let  iconHeart = document.querySelectorAll(".heart-click")
let arrowLeft = document.querySelector(".bi-arrow-left-square")
let arrowRight = document.querySelector(".bi-arrow-right-square")
let scrollImg = document.querySelector(".scroll-img")
let arrowLeftCircle = document.querySelector(".bi-arrow-left-circle")
let arrowRigthCircle = document.querySelector(".bi-arrow-right-circle")
let scrollVidoe = document.querySelector(".scroll-vidoe")
let containerSliderImg = document.querySelector('.container-slider-img')
let listIcon = document.querySelector('.bi-list')
let sidebar = document.querySelector(".sidebar")
let crossSidebar = document.querySelector(".sidebar-svg-cross i")
let titleSidebar = document.querySelectorAll(".sidebar-item")
let sidebarToInTo = document.querySelectorAll('.sidebarToInTo')
let backSider = document.querySelectorAll(".backSider");

// Page Move
headerUp.addEventListener("click", (evnet)=> {
    pageMove.classList.remove("page-move-animation-reverse")
    pageMove.classList.add("page-move-animation")
    body.style.overflow = "hidden"
    headerMain.style.opacity = .3
    main.style.opacity = .3 
    
})
crossPage.addEventListener("click", (evnet)=> {
    pageMove.classList.remove("page-move-animation")
    pageMove.classList.add("page-move-animation-reverse")
    body.style.overflow = ""
    headerMain.style.opacity = 1
    main.style.opacity = 1 
})

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
let bag = document.querySelector("#bag")

// open
for (let i = 0; i < titleSidebar.length; i++){
    titleSidebar[i].addEventListener("click", (e)=> {
        sidebarToInTo[i].style.display = 'flex'
        sidebarToInTo[i].classList.remove('animationSiderbarToinToReverse')
        sidebarToInTo[i].classList.add('animationSiderbarToinTo')
    })
}

// close 
for (let i = 0; i < backSider.length; i++ ){
    backSider[i].addEventListener("click", (e)=>{
        sidebarToInTo[i].classList.remove('animationSiderbarToinTo')
        sidebarToInTo[i].classList.add('animationSiderbarToinToReverse')
    })
}


// icon Heart
for (let i = 0; i< iconHeart.length ; i++){
    iconHeart[i].addEventListener("click",()=>{
        iconHeart[i].className = iconHeart[i].className === "bi bi-heart-fill heart-click" ? "bi bi-heart heart-click" : "bi bi-heart-fill heart-click"
    })
}



// arrow left & arrow right scroll image
arrowLeft.addEventListener("click", e =>{
    scrollImg.style.scrollBehavior = "smooth"
    scrollImg.scrollLeft -= 900
})
arrowRight.addEventListener("click", e =>{
    scrollImg.style.scrollBehavior = "smooth"
    scrollImg.scrollLeft += 900
})

// scroll sidebar wheel
scrollImg.addEventListener("wheel", e => {
    e.preventDefault();
    scrollImg.scrollLeft += e.deltaY
})

//  arrow left & arrow right scroll Vidoe
arrowLeftCircle.addEventListener("click", e => {
    scrollVidoe.style.scrollBehavior = "smooth"
    scrollVidoe.scrollLeft -= window.innerWidth < 850 ? 300 : 900
   
})
arrowRigthCircle.addEventListener("click", e => {
    scrollVidoe.style.scrollBehavior = "smooth"
   scrollVidoe.scrollLeft += window.innerWidth < 850 ? 300 : 900
})


// hide icon chevron down
const hiddenListLi = ()=> {
    for (let i = 0; i < listLi.length; i++){
        listLi[i].style.display = 'none'
        iconListUl[i].className = "bi bi-chevron-down"
    }
}

// container Slider Img : wheel scroll mouse
containerSliderImg.addEventListener("wheel", e => {
    e.preventDefault()
    containerSliderImg.scrollLeft += e.deltaY
})
// show list li
const showListLi = ()=> {
      for (let i = 0; i < listLi.length; i++){
        listLi[i].style.display = ''
    }
}

// footer hide border rigth
const hideBorderRight = () => {
    for(let i = 0; i < upperFooter.length ; i++)
        if (i === upperFooter.length - 1){
            upperFooter[i].style.borderRight = "none"
        }
}

// resize
const resize_window = () => {
    if (window.innerWidth < 850){
        iconQuery.style.display = ""
        iconSearchHeart.className = "bi bi-search"
        hiddenListLi ()
        footer.style.display = "none"
        footerBlack.style.display = ""
        sidebar.style.display = ""
    }
    else {
        iconQuery.style.display = "none"
        iconSearchHeart.classList = 'bi bi-heart'
        showListLi()
        footer.style.display = ""
        footerBlack.style.display = "none"
        hideBorderRight()
        sidebar.style.display = "none"
        closeSidebar()
    }
}
// resize
window.addEventListener("resize",(e)=> {
  resize_window()
  closeMegeMenu()
})
resize_window()
hideBorderRight()

//scroll
window.addEventListener("scroll", ()=> {
    if (document.documentElement.scrollTop >= 155){
        
        header.className ="header-animation"
        megaMenu.classList.add("deactive")
        
    }
    else {
        header.className ="header-animation-reverse"    
    }
})


for (let i = 0; i< listUl.length; i++ ){
    listUl[i].addEventListener("click", (event)=>{
        if (window.innerWidth < 850){
            listLi[i].style.display = listLi[i].style.display === "none" ? "" : "none"
            iconListUl[i].className = iconListUl[i].className === "bi bi-chevron-up" ? "bi bi-chevron-down" : "bi bi-chevron-up"
        }
       
    })
}




