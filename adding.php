<?php
 require_once "includes/autoloader.php";

if($_POST['action']==='insert'){
    $errors =[];
   
    function validation(Product $product){


        return $err = $product -> validateForm($_POST);

    }

    $type = $_POST['productType'];
    $product = new $type();
    $errors = validation($product);

    $process = new Process();

    if(empty($errors)){

        $process->saveProduct($_POST); 
    }

    print_r(json_encode($errors)) ;

}


?>