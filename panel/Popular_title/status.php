<?php     
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    
    if(isset($_GET['id']) and $_GET['id']!== ""){
       $table =  readTable ("adidas", "SELECT * FROM adidas.popular_title WHERE id = ?", $single = true, $execute = [$_GET['id']]);
    
       if($table){
            $status =  $table->status == 10 ? 0 : 10;
            operationsDataBase ('adidas', "UPDATE adidas.popular_title SET status = ? WHERE id = ?", $execute = [$status, $_GET['id']]);
        }
    }
    redirect('panel/popular_title');