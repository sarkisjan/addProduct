<?php
 require_once "includes/autoloader.php";

// getting all the products

if($_GET['action'] === 'getProducts'){
    $process = new Process();
    $getData = $process->getAllProducts();
    echo json_encode($getData);
}

?>