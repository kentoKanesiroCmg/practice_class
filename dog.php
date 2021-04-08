<?php
require_once "./animals.php";

class dog extends animals
{
    private $voice;

    function __construct($v)
    {
        $this->voice = $v;   
    }

    public function bark(){
        return $this->voice.'と鳴く';
    }

    public function set_name($nm){
        $this->name = $nm;
        if($this->name==null && $this->name != $nm){
            return false;
        }else{
            return true;
        }
    }

    public function get_name(){
        if(isset($this->name)){
            return $this->name;
        }
        return '名前ありません';
    }
    

}