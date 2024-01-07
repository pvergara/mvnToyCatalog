<?php
    class Toy {
        private $toy;
        private $db;

        public function __construct(){
            $this->toy=array();
            $this->db = new PDO('mysql:host=localhost;dbname=toy_catalog', "toy_user", "toy_user_password");

        }

        public function getToy(){
            $sql = "SELECT toy_id, name, price, provider, discount, image FROM Toy";
            foreach ($this->db->query($sql) as $res){
                $this->toy[] = $res;
            }
            return $this->toy;
        }


    }
