<?php

    class Database {
        private $servername;
        private $username;
        private $password;
        private $dbname;
        protected $tbname;

        // public $post;
        // public $sku;
        // public $name; 
        // public $price; 
        // public $size = NULL; 
        // public $weight = NULL; 
        // public $height = NULL; 
        // public $width = NULL; 
        // public $length = NULL; 
        // public $productType; 
        // public $productSave;
        public $errors = [];


        protected function connect() {
            $this->servername = "localhost";
            $this->username ="root";
            $this->password = "";
            $this->dbname = "products";
            $this->tbname = "producttable";

            $conn = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
            return $conn;
        }
    }
?>