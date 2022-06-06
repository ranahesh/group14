<?php
//1 - Write a PHP function to print the next character of a specific character.
//input : 'a'
//Output : 'b'
//input : 'z'
//Output : 'a'

$cha = 'a';
$next_cha = ++$cha; 
if (strlen($next_cha) > 0) 
{
 $next_cha = $next_cha[0];
 }
 echo"<br>";
echo $next_cha."\n";

echo"<br>";

$cha = 'Z';
$next_cha = ++$cha; 
if (strlen($next_cha) > 1) 
{
 $next_cha = $next_cha[0];
 }
echo $next_cha."\n";


//2 - Write a PHP function to get the characters after the last '/' in an url. Go to the editor
//Sample URL : 'http://www.example.com/5478631'
//Expected Output : '5478631'
$url ='http://www.example.com/5478631';
$index = strrpos($url,'/');
echo "<br>";
echo substr ($url,$index+1);


//3 - Write PHP function that takes an HTML tag as string and returns its ID value if existed or false if it has no ID
//example: When calling
//getTagID('<div id="container">');
//it will return the string: container

?>

<!DOCTYPE html>
<html>
<head>    
 <meta charset ="utf-8">
</head>
<body>
    <?php 
    $test="";
    function lest(){
        $test = '<div id= container>
             <h1> What ever HTML you want</h1>
        </div>';
        echo $test;
        
    }
    lest();
    return $test;
    ?>
</body>       
 </html>   







