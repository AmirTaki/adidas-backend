<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if(isset($_GET['id']) and $_GET['id'] !== ""){
        $table = readTable ("adidas", "SELECT * FROM adidas.footer_column WHERE id = ?", $single = true, $execute = [$_GET['id']]);
        $status = $table->status == 10 ? 0 : 10; 
        operationsDataBase ("adidas", "UPDATE adidas.footer_column SET status = ? WHERE id = ?", $execute = [$status, $_GET['id']]);
    }
    redirect('panel/footer_column');