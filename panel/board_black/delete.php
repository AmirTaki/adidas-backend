<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.board_black WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($table){
            operationsDataBase ('adidas', "DELETE FROM adidas.board_black WHERE id = ? ", $execute = [$_GET['id']]);
        }   
    }
    redirect("panel/board_black");