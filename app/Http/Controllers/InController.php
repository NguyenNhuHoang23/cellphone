<?php
    class dd{
        public $name;
        public $email;
        public $accress;

        public function set_name($value){
            $this -> name = $value;
        }

        public function get_name(){
            return $this -> name;
        }
    }
?>