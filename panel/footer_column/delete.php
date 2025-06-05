<?php 
    require_once "../../functions/check_section.php";
    require_once "../../functions/helpers.php";
    require_once "../../functions/pdo_connection.php";

    if(isset($_GET['id']) and $_GET['id']!== ""){
        operationsDataBase ("adidas", "DELETE FROM adidas.footer_column WHERE id = ?", $execute = [$_GET["id"]]);
    }
    redirect("panel/footer_column");