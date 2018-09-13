<?php
/*
 * 策略模式要由于继承的代码，在未来不断扩展和组合上，代码更少。
 *
 *
 */
//角色分析：
//　　抽象策略角色：策略类，通常由一个接口或者抽象类实现。 L.class.php
//　　具体策略角色：包装了相关的算法和行为。            English.class.php Chinese.class.php
//　　环境角色：持有一个策略类的引用，最终给客户端调用。   Lesson.class.php

include_once 'Lesson.class.php';
include_once 'L.class.php';
include_once 'Science.class.php';
include_once 'Art.class.php';
include_once 'Adult.class.php';
include_once 'English.class.php';
include_once 'Chinese.class.php';


$scienceEnglish = new Science(5, new English());
echo $scienceEnglish->type();
echo $scienceEnglish->cost();

echo '<br/>';
$artEnglish = new Art(5, new English());
echo $artEnglish->type();
echo $artEnglish->cost();

echo '<br/>';
$scienceChinese = new Science(5, new Chinese());
echo $scienceChinese->type();
echo $scienceChinese->cost();

echo '<br/>';
$artChinese = new Art(5, new Chinese());
echo $artChinese->type();
echo $artChinese->cost();

echo '<br/>';
$adultChinese = new Adult(5, new Chinese());
echo $adultChinese->type();
echo $adultChinese->cost();





