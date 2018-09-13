<?php
class Chinese implements L {

    private $_price = 300;

    public function cost(Lesson $lesson){
        return "共花费：".$lesson->_num*$lesson->_discount*$this->_price;
    }

    public function type(Lesson $lesson){

        return "您购买的".$lesson->_type."中文课";
    }

}



