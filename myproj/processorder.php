<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/19/17
 * Time: 2:49 PM
 */

$tireqty = $_POST['tireqty'];
$oilqty = $_POST['oilqty'];
$sparkqty = $_POST['sparkqty'];
$address = $_POST['address'];
$DOCUMENT_ROOT = $_SERVER['DOCUMENT_ROOT'];
$date =date('H:i, jS F Y');
?>

<html>
<head>
    <title>bob's auto parts</title>
</head>
<body>
<h1>Bob's auto parts
</h1>
<h2>Order Result</h2>
<?php

echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
echo "<p>your order is as follows:</p>";
$totalqty = 0;
$totalqty = $tireqty + $oilqty +$sparkqty;
echo "<p>Items ordered: ".$totalqty."<br>";
if($totalqty ==0){
    echo "you did not order anything on the previous page!<br></p>";
}else{
    if($tireqty > 0 ){
        echo $tireqty." tires<br/>";
    }
    if($oilqty > 0){
        echo $oilqty." oil<br>";
    }
    if($sparkqty>0){
        echo $sparkqty." spark plugs<br>";

    }
    echo "</p>";
}
$totalamount = 0.00;
define('TIREPRICE',100);
define('OILPRICE',10);
define('SPARKPRICE',4);
$totalamount=TIREPRICE*$totalqty +OILPRICE*$oilqty +SPARKPRICE*$sparkqty;
$totalamount=number_format($totalamount,2,'.','');
echo "<p>Total of order is $".$totalamount."</p>";
echo "<p>Address to ship to is ".$address."</p>";
$outputstring = $date."\t".$tireqty."tires\t".$oilqty."oil\t".$sparkqty."\t".$totalamount." amount\taddress".$address."\n";
@ $fp= fopen("$DOCUMENT_ROOT/order.txt",'ab');
flock($fp,LOCK_EX);
fwrite($fp,$outputstring,strlen($outputstring));
flock($fp,LOCK_UN);
fclose($fp);
echo "<p>order written</p>";






?>

</body>
</html>
