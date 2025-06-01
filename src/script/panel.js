let clickOpen = document.getElementById("click_open")
let sidebar = document.querySelector("sidebar")
clickOpen.addEventListener("click",(e)=> {
    sidebar.className = "active";
})
console.log(clickOpen)










function all (staticClass, row , deacitve , active, flash = null, flash_up = null, flash_down = null,){

    if( document.querySelectorAll(staticClass)[row].className == deacitve){
        let list = document.querySelectorAll(staticClass)
        for(let i = 0; i<list.length ; i++){
            list[i].className = deacitve
        
        }     
        document.querySelectorAll(staticClass)[row].className = document.querySelectorAll(staticClass)[row].className == deacitve ? active : deacitve
    }
    else{
        document.querySelectorAll(staticClass)[row].className = document.querySelectorAll(staticClass)[row].className == deacitve ? active : deacitve
    }
    if (flash){
        if (document.querySelectorAll(flash)[row].className == flash_down){
            
            let list2 = document.querySelectorAll(flash)

            for (let k = 0; k < list2.length; k++){
                list2[k].className = flash_down
                list2[k].style.color = 'gray'
            }



            document.querySelectorAll(flash)[row].className = document.querySelectorAll(flash)[row].className == flash_up ? flash_down : flash_up ;
            document.querySelectorAll(flash)[row].style.color = document.querySelectorAll(flash)[row].className == flash_up ? 'red' :'gray'
        }
        else{
            document.querySelectorAll(flash)[row].className = document.querySelectorAll(flash)[row].className == flash_up ? flash_down : flash_up ;
            document.querySelectorAll(flash)[row].style.color = document.querySelectorAll(flash)[row].className == flash_up ? 'red' :'gray'
        }
    }
}
    

let list_item_sidebar = document.querySelectorAll('.item_sidebar')
console.log(list_item_sidebar)

for (let i = 1; i < list_item_sidebar.length ;  i++){

    document.querySelectorAll('.item_sidebar')[i].addEventListener('click',()=>{
    all('.static_item',i-1,'deactive static_item', 'nested_item static_item' , '.flash_js', 'bi bi-chevron-compact-up flash_js', 'bi bi-chevron-compact-down flash_js')
})
}


function close_nested_item(){
    let list = document.querySelectorAll('.static_item')
    for (let i  = 0; i < list.length; i++){
        list[i].className = 'deactive static_item'
    }

    
    let list1 = document.querySelectorAll('.flash_js')
        for(let j = 0 ; j < list1.length; j++){
            list1[j].className = 'bi bi-chevron-compact-down flash_js'
        }
    }



document.querySelector('#click_open').addEventListener('click',()=>{
    document.querySelectorAll('sidebar div')[0].className = 'sidebar_class'
    close_nested_item()
})

document.querySelectorAll('.item_sidebar div')[1].addEventListener('click', ()=>{
    document.querySelectorAll('sidebar div')[0].className = 'deactive'
})

document.querySelector('sidebar').addEventListener('mouseleave',()=>{
    document.querySelectorAll('sidebar div')[0].className = 'deactive'
})

function changeHeader(){
    let list = document.querySelectorAll('.header_class a')
    if (window.innerWidth  < 900 ){
       for (let i = 0; i < list.length ; i++){
        list[i].style.display = 'none'
       }
    }
    else{
        for (let i = 0; i < list.length ; i++){
        list[i].style.display = 'inline'
    }
}
}
window.addEventListener('resize',()=>{
    changeHeader()
    close_nested_item()
    document.querySelectorAll('sidebar div')[0].className = 'deactive'
})
changeHeader()
