<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.background WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($table){
            deleteFiles($table->path);
            operationsDataBase ('adidas', "DELETE FROM adidas.background WHERE id = ? ", $execute = [$_GET['id']]);
        }
    }
    redirect("panel/background");