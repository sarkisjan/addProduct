<?php
 require_once "includes/autoloader.php";
class Book extends Validation implements Product{    

    public function validateForm($post){
    $fields = ['sku', 'name', 'price', 'weight'];
    foreach($fields as $field) {
        if(!isset($post[$field])){
            trigger_error("$field is not present in data");
        }
    }
    $this->validateSku($post);
    $this->validateName($post);
    $this->validatePrice($post);

    $this->validateWeight($post);

    return $this->errors;
}
}
?>