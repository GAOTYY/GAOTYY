<?php

/**
*
*/
class Person
{
    public $name;
    public $age;
}
interface Walk
{

}

class Student extends Person implements Walk
{
    public function index($age,$name)
    {
        echo $age,$name;
    }
}

$one = new Student();
$one->index('20','1');
$one->index('22','2');
$one->index('23','3');
$one->index('24','4');
$one->index('25','5');
$one->index('26','6');
$one->index('27','7');
$one->index('28','8');