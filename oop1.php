<?php 
function cit ($get_value,$get_value2){
    echo "Hello $get_value,$get_value2";
}
cit("shamim",22 );
echo "<br>";

class Human{
    function Talk(){
        echo "I can Talk ";
    }
    function Walk(){
        echo "I can Walking";
    }
}
$obj_of_human= new Human;
$obj_of_human-> Talk();
echo "<br>";
$obj_of_human-> Walk();
echo "<br>";
class calculator{
    function add($val_one,$val_two){
        echo $val_one+$val_two;
    }
    function minus($val_one,$val_two){
        echo $val_one-$val_two;
    }
    function multi($val_one,$val_two){
        echo $val_one*$val_two;
    }
    function div($val_one,$val_two){
        echo $val_one/$val_two;
    }
}
$object_of_calvculator= new calculator;
$object_of_calvculator-> add(12,13);
echo "<br>";
$object_of_calvculator-> minus(12,13);
echo "<br>";
$object_of_calvculator-> multi(12,13);
echo "<br>";
$object_of_calvculator-> div(12,13);
echo "<br>";
class Car{
    function __construct($greting_name){
        echo "Hello $greting_name";
    }
    function whell(){
        echo "This Is my Whell";
    }
    function __destruct(){
        echo "Thsi Is My Destructor";
    }
}
$obj_of_car= new Car("shamim");
$obj_of_car->whell();

?>

