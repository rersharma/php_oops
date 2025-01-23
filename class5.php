<?php 
interface A 
{
     function get_info();
}
interface B 
{
     function Message();
}
interface C 
{
     function twos();
}
class Test implements A,B,C
{
   function get_info()
   {
        echo "<br>i am in get_info";
   }
   function Message()
   {
    echo "<br>i am in Message";
   }
   function twos()
   {
    echo "<br>i am in twos";
   }
}
$obj=new Test();
$obj->get_info();
$obj->Message();
$obj->twos();
?>