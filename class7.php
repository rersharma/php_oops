<?php 
abstract class Student
{
    abstract function info();
    abstract function Test();
    function Message()
    {
          echo "<br>Dav College Students";
    }
}

class tenth extends Student 
{
    function info()
    {
         echo "<br>10th class student";
    }
    function Test()
    {
         echo "<br>i am in Test Method";
    }
    function mohali()
    {
         echo "<br>I am From Mohali";
    }
}

$obj=new tenth();
$obj->info();
$obj->Test();
$obj->mohali();


?>