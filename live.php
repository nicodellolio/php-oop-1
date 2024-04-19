<?php
class User{

    public $name;
    public $lastname;
    public $age;
    public $discount;

    public function _construct(string $name,
    string $lastname){

        $this-> name = $name;
        $this->lastname = $lastname;
    }

    public function getFullName(){

        return $this->name . $this->lastname;
    }
};

$user = new User ('Nico', 'Barella');
var_dump ($user);
new User ('Nico','Barella');
var_dump ($user-> age);

?>