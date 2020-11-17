// <!-- /////OPERATORE Questions  -->
<?php
//question1 
function year_check($my_year)
{
   if ($my_year % 400 == 0)
      print("It is a leap year");
   if ($my_year % 4 == 0)
      print("It is a leap year");
   else if ($my_year % 100 == 0)
      print("It is not a leap year");
   else
      print("It is not a leap year");
}
$my_year = 2020;
year_check($my_year);
echo "<hr>";

//question 2 
function tempreture($degree){
    if($degree <= 20){
        echo "its winter"; 
    }else{
     echo "its summer";  
    }   
}
tempreture(25);
echo "<hr>";
//question 3
function test($a,$b){
    $sum=$a+$b;
    if($a==$b){
        return ($sum*3); 
    }else{
        return $sum;
    }
}
echo test(3,3)."<br>";
echo test(3,2)."<br>";
echo "<hr>";

//question 4
function test1($n){
    $x=100;
    $sub=$n-$x;
    if($n>$x){

     return($sub*3);
    }else{
     return $sub;
    }
}
   echo test1(200);
   echo "<hr>";
//question 5 
function test2($x, $y) 
{
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(test2(30, 0));
echo "<hr>";
//question 6
function test3($x) 
{
   if(abs($x - 100) <= 10 || abs($x - 200) <= 10)
            return true;
     return false;
}

var_dump(test3(103));
echo "<hr>";



//question 7
function zain($s) 
{
  if ( substr($s,0, 2) == "if")
            {
                return $s;
            }
      return "if ".$s;
}
echo zain("if my bamdk");

echo "<hr>";
//question 8

function test($n) 
{
   return $n % 3 == 0 || $n % 7 == 0;
}
echo "<hr>";
//question 9
$str="Hello World";
$str1 = substr($str,0,4);
$str2 = substr($str,5,7);
echo $str1.$str2;
echo "<hr>";



//question 10
function test10($x, $y) 
{
    return ($x >= 100 && $x <= 200) || ($y >= 100 && $y <= 200);
}

var_dump(test10(100, 199));
echo "<hr>";




//question 12 
$num1=20;
$num2=15;
$num3=22;
if($num1>$num2 && $num1>$num3){
  echo $num1;
}
else{
  if($num2>$num1 && $num2>$num3){
    echo $num2;
  }
  else
    echo $num3;
}
echo "<hr>";


//question 13 
function com($x, $y) 
{
   $n = 100;
   $val = abs($x - $n);
   $val2 = abs($y - $n);
   if($val == $val2){
       return 0;
   }elseif($val < $val2){
return $y;
   }else{
    return $x; 
   }
}
var_dump(com(90, 80));
echo "<hr>";

//question 14 
function test5($x, $y)
{
   return $x == 5 || $y == 5 || $x + $y == 5 || abs($x - $y) == 5;
 }

var_dump(test5(5, 4));
echo "<hr>";

?>