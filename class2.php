<?php

class A // A is a parent class
{
     function Test()
     {
          echo "<br>I am In Test Function";
     }   
}
class B extends A   // extends means you are inherit from A class
{
     function Bye()
     {
          echo "<br>I am in Bye Function";
     }
}
class c extends B 
{
     function How()
     {
          echo "<br>i am in How function";
     }
}
class e extends c
{
    function k()
    {
         $this->Test();
         $this->Bye();
         $this->How();
         echo "<br>I am in K Function";
    }
}
 
$chd=new e();
//$chd->Bye();
//$chd->Test();
//$chd->How();
$chd->k();
?>