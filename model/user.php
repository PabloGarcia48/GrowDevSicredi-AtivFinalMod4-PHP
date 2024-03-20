<?php

require_once('./utils/next_id.php');

class User {
    private $id;
    private $name;
    private $email;
    private $userName;
    private $password;

       public function __construct($name, $email, $userName, $password)
        {
            $this->id = createId();
            $this->name = $name;
            $this->email = $email;
            $this->userName = $userName;
            $this->password = $password;
        }

        public function getId()
        {
            return $this->id;
        }

        public function getUserName()
        {
            return $this->userName;
        }

        public function add($userData)
        {
            array_push($userData, $this);
            return $userData;
        }

        public static function list($userData)
        {
            echo "Lista de usuários<br><hr>";
            foreach ($userData as $value) {
                echo "Nome: " . $value->name . "<br>";
                echo "E-mail: " . $value->email . "<br>";
                echo "ID: " . $value->id . "<br>";
                echo "<hr>";
            }
        }
        
}

?>