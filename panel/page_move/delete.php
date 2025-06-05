<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.page_move WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($table){
            deleteFiles($table->path);
            operationsDataBase ('adidas', "DELETE FROM adidas.page_move WHERE id = ? ", $execute = [$_GET['id']]);
        }
    }
    redirect("panel/page_move");