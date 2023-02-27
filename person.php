<?php


class Person{
    public $name;
    public $email;
    function __construct($name="",$email=""){
        $this->name = $name;
        $this->email = $email;
    }
    function get_name(){
        return $this->name;
    }
    function set_name($name){
        $this->name = $name;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function person_details(){
        echo "<h5>Name: {$this->get_name()}</h5>\n";
        echo "<h5> Email : {$this->get_email()} </h5>\n";
        
    }
}


?>