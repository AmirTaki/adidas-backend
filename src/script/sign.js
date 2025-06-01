let form = document.querySelectorAll('form')
let name = document.getElementById("name")
let email = document.getElementById('email')
let password = document.getElementById('password')
let repeatPassword = document.getElementById("repeat-password")
let button = document.getElementById("button")
let span = document.querySelectorAll("span")
let input = document.querySelectorAll("input")
let icon = document.querySelectorAll("form i")
let showPassword = document.getElementById("showPassword")
let loginRigester = document.querySelectorAll('h3')
let formRegister = document.querySelector('.form-register')
let formLogin = document.querySelector(".form-login")
let buttonLogin = document.getElementById("button-login")
let emailLogin = document.getElementById('emailLogin')
let passwordLogin = document.getElementById('passwordLogin')
let showPasswordLogin = document.getElementById('showPasswordLogin')

// register

loginRigester[0].addEventListener('click',(e)=>{
    formLogin.classList.remove('animationLoginReverse')
    formRegister.classList.add("animationRigsteraReverse")
    formLogin.classList.add('animationLogin')
})

loginRigester[1].addEventListener("click", (e)=> {
    formRegister.classList.remove("animationRigsteraReverse")
    formLogin.classList.add('animationLoginReverse')
})


showPassword.addEventListener("click",()=>{
    if  (showPassword.checked === true) {
    
        password.type = 'text'
        repeatPassword.type = 'text'
    }
    else {
        password.type = 'password'
        repeatPassword.type = 'password'
    } 
})


const checkName = () => {
    if (name.value.length == 0){
        span[0].innerText = "Name is required"
        span[0].style.color = 'red'
        input[0].style.borderColor = "red"
        icon[0].className = "bi bi-x-circle"
        icon[0].style.color = "red"
        return false
    }
    else if(!name.value.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
        span[0].innerText = "Write full Name"
        span[0].style.color = 'red'
        input[0].style.borderColor = "red"
        icon[0].className = "bi bi-x-circle"
        icon[0].style.color = "red"
        return false
    }
    else {
        span[0].innerText = "veryGood"
        span[0].style.color = 'green'
        input[0].style.borderColor = "black"
        icon[0].className = "bi bi-check-circle"
        icon[0].style.color = "green"
        return true
    }
}

const checkEmail = (email, number, inputNumber) => {
    if (email.value.length == 0){
        span[number].innerText = "Email is required"
        span[number].style.color = 'red'
        input[inputNumber].style.borderColor = "red"
        icon[number].className = "bi bi-x-circle"
        icon[number].style.color = "red"
        document.querySelectorAll('i')[1].style.top = "282px"
        return false
    }
    else if(!email.value.match(/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/)){
        span[number].innerText = "Write full Email"
        span[number].style.color = 'red'
        input[inputNumber].style.borderColor = "red"
        icon[number].className = "bi bi-x-circle"
        icon[number].style.color = "red"
        document.querySelectorAll('i')[1].style.top = "282px"
        return false
    }
    else {
        span[number].innerText = "veryGood"
        span[number].style.color = 'green'
        input[inputNumber].style.borderColor = "black"
        icon[number].className = "bi bi-check-circle"
        icon[number].style.color = "green"
        document.querySelectorAll('i')[1].style.top = "282px"
        return true
    }
}

const checkPassword = (password, number, inputNumber) => {
    if (password.value.length == 0){
        span[number].innerText = "Password is required"
        span[number].style.color = 'red'
        input[inputNumber].style.borderColor = "red"
        icon[number].className = "bi bi-x-circle"
        icon[number].style.color = "red"
        document.querySelectorAll('i')[1].style.top = "282px"
        return false
    }
    else if(!password.value.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/)){
        span[number].innerText = "Password should contain 1Uppercase, 1Lowecase, 1 Digit & 1Alphabet "
        span[number].style.color = 'red'
        input[inputNumber].style.borderColor = "red"
        icon[number].className = "bi bi-x-circle"
        icon[number].style.color = "red"
        return false
    }
    else {
        span[number].innerText = "veryGood"
        span[number].style.color = 'green'
        input[inputNumber].style.borderColor = "black"
        icon[number].className = "bi bi-check-circle"
        icon[number].style.color = "green"
        return true
    }
}

const checkRepeatPassword = () => {
    if (repeatPassword.value.length == 0){
        span[3].innerText = "Repeat Password is required"
        span[3].style.color = 'red'
        input[3].style.borderColor = "red"
        icon[3].className = "bi bi-x-circle"
        icon[3].style.color = "red"
        return false
    }
    else if(password.value !== repeatPassword.value){
        span[3].innerText = "Repeating the password is not the same as the password."
        span[3].style.color = 'red'
        input[3].style.borderColor = "red"
        icon[3].className = "bi bi-x-circle"
        icon[3].style.color = "red"
        return false
    }
    else {
        span[3].innerText = "veryGood"
        span[3].style.color = 'green'
        input[3].style.borderColor = "black"
        icon[3].className = "bi bi-check-circle"
        icon[3].style.color = "green"
        return true
    }
}

const  checkEmailPassword = (result, number, inputNumber, message) => {
     if (result.value.length == 0){
        span[number].innerText = message;
        span[number].style.color = 'red';
        input[inputNumber].style.borderColor = "red";
        icon[number].className = "bi bi-x-circle";
        icon[number].style.color = "red";
        return false
    }
    else {
        return true;
    }
}

// register
button.addEventListener('click', (e)=>{
 
    flag =  checkName() && checkEmail(email, 1, 1) && checkPassword(password, 2, 2) && checkRepeatPassword() ? true : false
    flag ?  ""  : e.preventDefault()
   
})


// login

buttonLogin.addEventListener('click',(e)=>{

    flag =  checkEmailPassword (emailLogin, 4, 6, "Email is required") &&  checkEmailPassword (passwordLogin, 5, 7, "Password is required")  ? true : false;
    flag ? "" :  e.preventDefault()


})

showPasswordLogin.addEventListener("click",(e)=>{

    passwordLogin.type = showPasswordLogin.checked === true ? "text" : 'password'

})