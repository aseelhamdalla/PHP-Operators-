<?php 
///question 1
$a="aseel hamdalla";
echo strtoupper("$a");
echo"<hr>";
///question 2
echo strtolower("Hello WORLD!");
echo"<hr>";
///question 3
echo ucfirst("hello world!");
echo"<hr>";
///question 5
echo ucwords("hello world");
echo"<hr>";
///question 6
$a="806541";
$b=(str_split($a,2)); 
echo implode(':', $b);
echo"<hr>";
///question 7
$word = "jumps";
$mystring = "The quick brown fox jumps over the lazy dog";
 if(strpos($mystring, $word) !== false){
    echo "$word";
} else{
    echo "Word Not Found!";
}
echo "<hr>";
///question 7
$var_name = 22.5; 

echo strval($var_name);
echo "<hr>";
///question 8
$a="806541";
$b=(str_split($a,2)); 
echo implode(':', $b);
echo"<hr>";
///question 9

$A= "asaxscdvvfbebeetnymt21b6f46515151";
echo substr(str_shuffle($A),5,10);
echo "<br>";
echo"<hr>";
///question 10
$str1 = 'football';
$str2 = 'footboll';
$str_pos = strspn($str1 ^ $str2, "\0");
printf('First difference between two strings at position %d: "%s" vs "%s"',
$str_pos, $str1[$str_pos], $str2[$str_pos]);
printf("\n");
echo"<hr>";

///question 11

$str = "Twinkle, twinkle, little star,\nHow I wonder what you are.\nUp above the world so high,\nLike a diamond in the sky.";
$arra1 = explode("<br>", $str);
var_dump($arra1);
echo"<hr>";

///question 12
$Sample_path="https://www.orange.com/index.php";
echo substr($Sample_path,-9,-4)."<br>";
echo"<hr>";

///question 14
$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";
echo"<hr>";

///question 14
$email='rayy@example.com';
echo substr($email,4);
echo"<hr>";

///question 15
$str = 'rayy@example.com';
echo bin2hex($str)."\n";
echo"<hr>";

///question 16
$original = 'The brown fox';
$new='quick';
$insert_pos = 4;
$new_string = substr_replace($original, $new.' ', $insert_pos, 0);
echo $new_string."\n";

echo"<hr>";

///question 17
$x = '000547023.24';
$str1 = ltrim($x, '0');
echo $str1."\n";
echo"<hr>";

///question 19
$my_str = 'The quick brown fox jumps over the lazy dog///';
echo rtrim($my_str, '/')."\n";
echo"<hr>";

///question 20
$myEmail = 'http://www.example.com/5478631';
echo substr($myEmail, strrpos($myEmail, '/' )+1);

echo"<hr>";

///question 21
$my_str = '\"\1+2/3*2:2-3/4*3';
echo str_replace(str_split('\\/:*?"<>|+-'), ' ', $my_str);
echo"<hr>";

///question 24
$str1 = "2,543.12";
echo $str1."<br>";
$x = str_replace( ',', '', $str1);
  echo $x."\n";
  echo"<hr>";

  ///question 25

for ($x = ord('a'); $x <= ord('z'); $x++)
echo chr($x);
echo "<hr>";


?>




