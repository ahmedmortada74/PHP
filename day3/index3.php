<?php

// function custom_ord($char) {
//     return ord($char);
// }


// $ahmed = 'a';
// $ascii= custom_ord($ahmed);
// echo "Ascii='$ahmed' is $ascii";
// echo "<br>";
// ////////////////////////////////////////////////////////


// $num = 3994.9;
// $formattedNum = number_format($num)."<br>";
// echo $formattedNum;
// $formattedNum = number_format($num,1);
// echo $formattedNum;
// echo "<br>";
// ////////////////////////////////////////////////

// $habo = array('ahmed','omar','hosam','khaled');
// echo join(" ",$habo)."<br>";
// echo join("~",$habo)."<br>";
// echo join("_",$habo)."<br>";
// echo join("@",$habo);
// echo "<br>";
// //////////////////////////

// $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA","Aged"=>"48","Agey"=>"45");
// print_r(array_values($a));
// echo "<br>";
// ///////////////////////////

// function myfunction(&$value,$key)
// {
// $value="yellow";
// }
// $ahmed3=array("a"=>"red","b"=>"green","c"=>"blue");
// array_walk($ahmed3,"myfunction");
// print_r($ahmed3);



// echo "<br>";
    $imgName = $_FILES['img']['name'];
    $tmpName = $_FILES['img']['tmp_name'];
    $size = $_FILES['img']['size'];
    $allowedExt = ['png','jpg','jpeg','JPG'];
    $explodFile = explode('.', $imgName);
    $fileExt = end($explodFile);
    $encryptName = md5($imgName);
    move_uploaded_file($tmpName, 'img/'. $imgName);


?>

<img src="<?= 'img/' . $imgName ?>" alt="" width="200" height="200"/> 