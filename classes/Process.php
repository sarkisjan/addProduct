<?php
 require_once "includes/autoloader.php";
class Process extends Database { 
    public function saveProduct($data){
        $fields = ['sku', 'name', 'price', 'size', 'weight', 'width', 'height', 'length'];
        foreach($fields as $field) {
            if (!isset($data[$field])) {
                $data[$field] = 0;
            } 
        }
        $sku = $data['sku'];
        $name = $data['name'];
        $price = $data['price'];
        $size = $data['size'];
        $weight = $data['weight'];
        $height = $data['height'];
        $width = $data['width'];
        $length = $data['length'];
        $productType = $data['productType'];

        $conn = $this->connect();
        mysqli_query($conn, "insert into ".$this->tbname."(
            sku, name, price, size, weight, height, width, length, productType) 
            values('$sku', '$name', '$price', NULLIF($size, 0), NULLIF($weight, 0), NULLIF($height, 0), NULLIF($width, 0), NULLIF($length, 0), '$productType')") or die(
            mysqli_error($conn));
     }
    public function getAllProducts(){
        $conn = $this->connect();
        $array =[];
        $result = mysqli_query($conn, "SELECT * FROM $this->tbname ORDER BY `productType`");
        while($row = mysqli_fetch_assoc($result)){
            $array[] = $row;           
        }
        return $array;
     }
    public function delete($all_id){

        $conn = $this->connect();
        $id = implode(',', $all_id);
        $result = mysqli_query($conn, "DELETE FROM $this->tbname WHERE id IN (".$id.")");
        if($result){
            return true;
        }else {
            return false;
                
        }
    }

    

}
?>