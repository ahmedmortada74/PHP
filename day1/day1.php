<!DOCTYPE html>
<html>
    <head>
        <style>
            body{
                background:gray;
            }
        </style>
    </head>
<body>
 
<?php
$habo="Welcome to php <br>";
echo$habo;
echo "<br>";
echo "<br>";

$x = 5;
$habo1 = "Welcome";
$y = True;
// $f=False;
echo $x;
echo "<br>";
echo $habo1;
echo "<br>";
echo $y;
echo "<br>";
// echo $f;
echo "<br>";

echo gettype($x);
echo "<br>";
echo gettype($habo1);
echo "<br>";
echo gettype($y);

echo "<br>";
echo "<br>";

for($i=0; $i<=15; $i++):
        echo $i;
    endfor;
    echo "<br>";
    echo "<br>";
    $i = 0;
    while ($i <= 15) {
        echo $i ;
        $i++;
    }

    // echo "<br>";
    // $i = 0;
    // if($i <=15){
    //   echo $i;
    //  $i++;
    // }
    echo "<br>";
    echo "<br>";

     const AHMEDD ="ITI";
       echo AHMEDD;
       echo "<br>";

define("AHMAD", "ITI");
echo AHMAD;
echo "<br>";

define("HAMO", "ITI");
function myconst() {
  echo HAMO;
}
myconst();
echo "<br>";
echo "<br>";

$Z = 20; 
    if(isset($Z)){
            echo "There Is Value";
        }else{
            echo "no value";
        }
echo "<br>";
$Y = 5;
        if(empty($Y)){
                echo "Yes";
            }else{
                echo "No";
            }
            echo "<br>";
            $m=10;
            $n=20;
            $result =$m+$n;
            echo $result;
            echo "<br>";
            if($result>50){
                echo "Accepted";
            }else{
                echo "NoAcceptedt";
            }

            
  
 $name = "salary Mortada";
$salary = "1000$";

$name2 = "salary Labeeb";
$salary2 = "1200$";

$name3 = "salary Adam ";
$salary3 = "1400$";
 $color="green";
?>

    <table border="5px ">
        <tr>
            <th>Name </th>
            <th>Salary</th>
        </tr>
        <tr>
            <td style="color: <?php echo $color; ?>"><?php echo $name ?></td>
            <td><?php echo $salary ?></td>
        </tr>
        <tr>
            <td><?php echo $name2 ?></td>
            <td><?php echo $salary2 ?></td>
        </tr>
        <tr>
            <td><?php echo $name3 ?></td>
            <td><?php echo $salary3 ?></td>
        </tr>
        <tr>
            <td><?php echo $name3 ?></td>
            <td><?php echo $salary3 ?></td>
        </tr>
    </table>



</body>
</html>
