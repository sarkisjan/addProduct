<?php
 require_once "includes/autoloader.php";
class Furniture extends Validation implements Product{    

    public function validateForm($post){
    $fields = ['sku', 'name', 'price', 'height', 'width', 'length'];
        foreach($fields as $field) {
            if(!isset($post[$field])){
                trigger_error("$field is not present in data");
            }
        }
        $this->validateSku($post);
        $this->validateName($post);
        $this->validatePrice($post);

        $this->validateHeight($post);
        $this->validateWidth($post);
        $this->validateLength($post);
        return $this->errors;
     }
} 

?>