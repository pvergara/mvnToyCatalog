<?php
    class Toy {
        private $toy;
        private $db;

        public function __construct(){
            $this->toy=array();
            $this->db = new PDO('mysql:host=localhost;dbname=toy_catalog', "toy_user", "toy_user_password");

        }

        public function getToy(){
            $sql = "SELECT toy_id, name, price, provider, discount, image FROM Toy;";
            foreach ($this->db->query($sql) as $res){
                $this->toy[] = $res;
            }
            return $this->toy;
        }

        public function getToyBy($toy_id)
        {
            $sql = "SELECT toy_id, name, price, provider, discount, image FROM Toy WHERE toy_id = $toy_id;";
            return $this->db->query($sql)->fetch();
        }

        public function delete($toy_id)
        {
            $sql = "DELETE FROM Toy WHERE toy_id = $toy_id;";
            $this->db->query($sql);
        }

        public function update($toy_id, $name, $price, $provider, $discount, $image)
        {
            $sql = "UPDATE Toy SET name = '$name',price = '$price',provider = '$provider',discount = '$discount', image = '$image' WHERE toy_id ='$toy_id';";

            $this->db->query($sql);

        }


    }
