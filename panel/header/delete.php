<?php     
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if(isset($_GET['id']) and $_GET['id'] !== ""){
        operationsDataBase("adidas", "DELETE FROM adidas.header WHERE id = ?", [$_GET['id']]);
    }
    redirect('panel/header');