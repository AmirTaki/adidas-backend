<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.related_resources WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($table){
            deleteFiles($table->path);
            operationsDataBase ('adidas', "DELETE FROM adidas.related_resources WHERE id = ? ", $execute = [$_GET['id']]);
        }
    }
    redirect("panel/related_resources");