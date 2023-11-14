<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background:gray;
        }
    </style>
</head>
<body>
<?php 
$arr=["PHP","HTML","CSS","JavaScript"];
foreach($arr as $habo){
    echo $habo ."<pre> ";
}


$habo2 = ["PHP", "HTML", "CSS", "JavaScript"];

$length = count($habo2);
for ($i = 0; $i < $length; $i++) {
    echo $habo2[$i] . "<br>";
}

$am=[
     "name" =>"Ahmed mortada",
"age"=> "24",
"Email"=> "Ahmedmortada@gmail.com",
"colage" => "SVU ",
 ];

echo"<table border='5'>";

 foreach($am as $key =>$value  ){
 echo" <tr> <td>$key</td> <td>$value</td></tr>";
 }
echo"</table>";



// $integer = 42;
// $string = strval($integer);
// $integer = 42;
// $string = $integer . "  get typ";
// $integer = 42;
// $string = (string)$integer;
// echo $string;


// $int = ahmed1;
 function ahmed($ahmed1){
return (string)$ahmed1;
}
echo gettype(ahmed(55));
// echo " IS STRING";
?>





</body>
</html>