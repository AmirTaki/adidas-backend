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
let megaMenu = document.querySelectorAll(".all-megaMenu")
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

// console.log(document.querySelectorAll('.').length)

const clickHeaderMenu =  document.querySelector(".clickHeaderMenu")
const menuHeader = document.querySelector(".menuHeader")
const exitItem = document.querySelector(".exitItem")
const titleMenuItem = document.querySelectorAll(".titleMenuItem")
const listContainer = document.querySelectorAll(".listContainer")
const backButtonList = document.querySelectorAll(".backButtonList")
const crossButtonList = document.querySelectorAll(".crossButtonList")
const menuItem = document.querySelectorAll(".menuItem")
const titleListMenu = document.querySelectorAll(".titleListMenu")
const pageProduct = document.querySelectorAll('.pageProduct')
const backButtonProduct = document.querySelectorAll('.backButtonProduct')
const crossButtonProduct = document.querySelectorAll('.crossButtonProduct')

crossButtonProduct.forEach((cross, index)=> {
    cross.addEventListener("click", (e)=> {
        pageProduct[index].style.animation = "moveListContainerReverse .5s linear forwards"  
        setTimeout(()=> {
            pageProduct[index].style.display = "none"
            closeListContainer()
            closeMenuHeader()
        }, 300)
        
    })
})

backButtonProduct.forEach((back, index)=> {
    back.addEventListener('click', (e)=> {
        pageProduct[index].style.animation = "moveListContainerReverse .5s linear forwards"
        setTimeout(() => {
            pageProduct[index].style.display = "none"  
        }, 500);
    })
})
titleListMenu.forEach((list, index)=> {
    list.addEventListener("click", (e)=> {
        if(window.innerWidth < 750){
            pageProduct[index].style.display = "flex"
            pageProduct[index].style.animation = "moveListContainer .5s linear forwards"
        }             
    })
})


menuItem.forEach((title, index)=> {
    title.addEventListener("mouseleave", (e)=> {
        if(window.innerWidth > 750){
            listContainer[index].style.display = "none"
        }
    })
})

const closePageProduct = () => {
    pageProduct.forEach(page=>{
        page.style.display = 'none'
    })  
}

menuItem.forEach((title, index)=> {
    title.addEventListener("mousemove", (e)=> {
        if(window.innerWidth > 750){
            listContainer[index].style.display = "flex"
            listContainer[index].style.animation = "listContainerTop .3s linear forwards" ; 
            const pages =  listContainer[index].querySelectorAll(".pageProduct")  
            pages.forEach(page => {
                page.style.display = "flex"
            });              
        }
    })
})

const closeListContainer = () => {
    listContainer.forEach((list, index)=> {
        list.style.display = "none"
    })
}
crossButtonList.forEach((cross, index)=>{
    cross.addEventListener("click", (e)=> {
        listContainer[index].style.animation = "moveListContainerReverse .5s linear forwards"
        setTimeout(()=> {
            listContainer[index].style.display = "none"
            closeMenuHeader()
        }, 300)
        
        
    })
})
backButtonList.forEach((back, index)=> {
    back.addEventListener("click", (e)=> {
        listContainer[index].style.animation = "moveListContainerReverse .5s linear forwards"
        setTimeout(() => {
            listContainer[index].style.display = "none"  
        }, 500);

    })
})

titleMenuItem.forEach((title, index)=> {
    title.addEventListener("click", (e)=>{
        if(window.innerWidth < 750){
            listContainer[index].style.display = "flex"
            listContainer[index].style.animation = "moveListContainer .5s linear forwards"
        }
    })
})

clickHeaderMenu.addEventListener("click",(e)=>{
    menuHeader.style.display = "flex"
    menuHeader.style.animation = "moveMenuHeader .5s linear forwards"
    menuHeader.style.height = window.innerHeight
    body.style.overflow = "hidden"
})

const closeMenuHeader = () => {
    menuHeader.style.animation = "moveMenuHeaderReverse .5s linear forwards"  
    body.style.overflow = "auto"
    setTimeout(()=> {
        menuHeader.style.display = "none"
        menuHeader.style.height = "100%"
    }, 500)
}
exitItem.addEventListener("click", (e)=>{
    closeMenuHeader()
})

// const scrollHeader = () => {
//     header.style.animation =  body.scrollTop > 100 ?   "headerUpper .5s linear forwards":"headerDown .5s linear forwards"
// }
// window.addEventListener("scroll", (e)=> {
//     scrollHeader()
// })
// scrollHeader()
window.addEventListener('resize', (e)=> {
    body.style.overflow = "auto"
    closeListContainer()
    closePageProduct()
    if(window.innerWidth < 750){
        menuHeader.style.display = "none" 
    }
    else {
        menuHeader.style.display = "flex"   
    }

})




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
        // sidebar.style.display = ""
    }
    else {
        iconQuery.style.display = "none"
        iconSearchHeart.classList = 'bi bi-heart'
        showListLi()
        footer.style.display = ""
        footerBlack.style.display = "none"
        hideBorderRight()
        // sidebar.style.display = "none"
        // closeSidebar()
    }
}
// resize
window.addEventListener("resize",(e)=> {
  resize_window()
  closeMegeMenu()
  closeSiderToSider()
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




