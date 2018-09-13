<?php
class Lesson {
    //购买的人数
    public $_num;

    private $_strategy;

    public function __construct($_num, $_strategy){
        $this->_num = $_num;
        $this->_strategy = $_strategy;
    }


    public function __get($key){
        return $key;
    }

    public function cost(){
        return $this->_strategy->cost($this);
    }

    public function type(){
        return $this->_strategy->type($this);
    }
}


