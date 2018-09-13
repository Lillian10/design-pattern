<?php
class English implements L {

    private $_price = 200;

    public function cost(Lesson $lesson){
        return "共花费：".$lesson->_num*$lesson->_discount*$this->_price;
    }

    public function type(Lesson $lesson){

        return "您购买的".$lesson->_type."英语课";
    }

}


