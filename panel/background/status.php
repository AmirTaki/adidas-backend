<?php
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";
    if(isset($_GET['id']) && $_GET['id'] !== ""){
        $table = readTable('adidas', "SELECT * FROM adidas.background WHERE id = ?", true, [$_GET['id']] );
        if ($table){
            $status = $table->status == 10 ? 0 : 10;
            operationsDataBase ("adidas", "UPDATE adidas.background SET status = ? WHERE id = ?", $execute = [$status, $_GET["id"]]);
        }
    }
    redirect('panel/background');