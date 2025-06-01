<?php  

    session_start();

    require_once "../functions/helpers.php";
    require_once "../functions/pdo_connection.php";

    if(!isset($_GET['value'])){
        $_GET['value'] = 1;
    }
   
    if(isset($_SESSION['user'])){
        unset($_SESSION['user']);
    }
    // login
   if (
        isset($_POST["emailLogin"]) and $_POST['emailLogin']!== "" and
        isset($_POST['passwordLogin']) and $_POST['passwordLogin']!== ""
    ){
        $user = readTable ("adidas", "SELECT *  FROM adidas.users WHERE email = ?", true, [$_POST["emailLogin"]]);
        if($user !== false){
            if($user->status == 10){
                if(password_verify($_POST['passwordLogin'], $user->password)){
                   $_SESSION['user'] = $user->email;
                    redirect('panel');
                }
                else {
                    // not password 
                    redirect('auth/sign.php?value=13');
                }
            }
            else {
                // not status
                redirect('auth/sign.php?value=12');
            }
        }
        else {
            //  not email 
            redirect('auth/sign.php?value=13');
        }
    }
// register
    if (
        isset($_POST['name']) and $_POST['name'] !== "" and (preg_match("/^[A-Za-z]*\s{1}[A-Za-z]*$/", $_POST['name'])) and
        isset($_POST['email']) and $_POST['email'] !== ""  and (preg_match("/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/",$_POST['email'])) and
        isset($_POST['password']) and $_POST['password'] !== "" and (preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/",$_POST['password'])) and
        isset($_POST['repeat-password']) and $_POST['repeat-password'] !== ""  and (preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/",$_POST['repeat-password']))  
        ){
            if ($_POST['password'] === $_POST['repeat-password']) {
                
                createUserTable('adidas');
                if(readTable ("adidas", "SELECT * FROM adidas.users WHERE email = ?", $sigle = true, $execute = [$_POST['email']])){                  
                    redirect('auth/sign.php?value=11');
                }
                else {
                    $passwordHash =  password_hash($_POST['password'], PASSWORD_DEFAULT);
                    createAccountToUserTable ($_POST['name'], $_POST['email'], $passwordHash, 'adidas', 'users');
                    redirect('panel');
                }
            }           
            else {
                redirect('');
            }
        } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../src/styles/sign.css">
</head>
<body>
    <div class = 'form-register '>
        <form  action ="<?= url('auth/sign.php?value=')  ?>" method = "post">
            <h1>Register</h1>
            <h3>To Login</h3>
            <label for="name">Full Name</label>
            <input type="text" id = "name" name = 'name'  >
            <span></span>
            <i  style="top : 159px"></i>

            <label for="email">Email</label>
            <input type="email" id = 'email' name = 'email'>
            <span></span>
            <i class="" style="top : 282px"></i>


            <label for="password">Password</label>
            <input type="password" id = 'password' name = 'password'> 
            <span></span>
            <i class="" style="top : 397px"></i>
        


            <label for="repeat_password">Repeat Password</label>
            <input type="password" id = "repeat-password" name = 'repeat-password'>
            <span></span>
            <i class="" style="top : 518px"></i>
         
            <div>
                <label for="">show password</label>
                <input type="checkbox" id = 'showPassword'>
            </div>
       
            <input type="submit" value = "SIGN UP" class = 'button' id = 'button'>
     
        </form>
    </div>
  
    <div class = 'form-login' >
        <form method = "post"  action ="<?= url('auth/sign.php?value=')  ?>" >
            <h1>Login</h1>
            <h3>To Register</h3>
            <label for="Email">Email</label>
            <input type="email" id = "emailLogin" name = "emailLogin">  
            <span></span>
            <i style="top : 159px"></i>
         

            <label for="password">Password</label>
            <input type="password" id = 'passwordLogin' name = "passwordLogin"> 
            <span></span>
            <i style="top : 277px"></i>

            <div>
                <label for="">show password</label>
                <input type="checkbox" id = 'showPasswordLogin'>
            </div>

            <input type="submit" value = "Login" class = 'button' id = 'button-login'>
        
        </form>
    </div>
    
    <script src = "../src/script/sign.js"></script>
    <script>
        let value = 0 ;
    </script>
    <?php 
        if($_GET["value"] == 11){
    ?>
        <script>
            value = 11;
        </script>
    <?php }
        elseif($_GET['value'] == 12) { 
    ?>
        <script>
            value = 12;
        </script>
    <?php } 
        elseif($_GET['value'] == 13){
    ?>
        <script>
            value = 13;
        </script>
    <?php } ?>
    <script>       
        if (value == 11){
            document.querySelectorAll('span')[1].innerText = "This email has already been registered!"
            document.querySelectorAll('span')[1].style.color = 'orange'
            document.querySelectorAll('input')[1].style.borderColor = "orange"
            document.querySelectorAll('i')[1].className = "bi bi-exclamation-circle"
            document.querySelectorAll('i')[1].style.color = "orange"
            document.querySelectorAll('i')[1].style.top = "268px"
        }
        else if (value == 12){
            document.querySelectorAll('span')[4].innerText = "You are not allowed to access."
            document.querySelectorAll('span')[4].style.color = 'orange'
            document.querySelectorAll('input')[5].style.borderColor = "orange"
            document.querySelectorAll('i')[4].className = "bi bi-exclamation-circle"
            document.querySelectorAll('i')[4].style.color = "orange"
        }
        else if (value == 13){
            document.querySelectorAll('span')[4].innerText = "You entered the wrong email."
            document.querySelectorAll('span')[4].style.color = 'red'
            document.querySelectorAll('input')[6].style.borderColor = "red"
            document.querySelectorAll('i')[4].className = "bi bi-x-circle"
            document.querySelectorAll('i')[4].style.color = "red"

            document.querySelectorAll('span')[5].innerText = "You entered the wrong password."
            document.querySelectorAll('span')[5].style.color = 'red'
            document.querySelectorAll('input')[7].style.borderColor = "red"
            document.querySelectorAll('i')[5].className = "bi bi-x-circle"
            document.querySelectorAll('i')[5].style.color = "red"
        }
    </script>
    
</body>
</html>