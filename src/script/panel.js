
window.addEventListener('resize',()=>{

    opacity_table('#status_th','#status_td', "#setting_th", "#setting_td")
})

opacity_table('#status_th','#status_td', "#setting_th", "#setting_td")


// 


function opacity_table(id_th1, id_td1, id_th2 = null , id_td2 = null , id_th3 = null, id_td3 = null){

    if (window.innerWidth < 850){
        document.querySelector(id_th1).style.display = 'none'
        document.querySelector(id_td1).style.display = 'none'
        if (id_td2 ){
            document.querySelector(id_th2).style.display = 'none'
            document.querySelector(id_td2).style.display = 'none'
           
            }
        
    }
    else{
        document.querySelector(id_th1).style.display = ''
        document.querySelector(id_td1).style.display = ''
        if (id_td2 ){
            document.querySelector(id_th2).style.display = ''
            document.querySelector(id_td2).style.display = ''
        
        }
    }


}
