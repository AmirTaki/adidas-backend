<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.scroller_video WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        if($table){
            deleteFiles($table->path);
            operationsDataBase ('adidas', "DELETE FROM adidas.scroller_video WHERE id = ? ", $execute = [$_GET['id']]);
        }
    }
    redirect("panel/scroller_video");