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

abstract class tenth extends Student 
{
    function info()
    {
         echo "<br>10th class student";
    }
    function mohali()
    {
         echo "<br>I am From Mohali";
    }
}
class w extends tenth 
{
    function Test()
    {
         echo "<br>Test Method";
    }
}
$obj=new w();
$obj->info();
$obj->Test();
$obj->mohali();
?>