<?php
//抽象策略约束
interface  L {

     public function cost(Lesson $lesson);
     public function type(Lesson $lesson);
}


