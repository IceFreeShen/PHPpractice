<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/19/17
 * Time: 3:57 PM
 */
$DOCUMENT_ROOT =$_SERVER['DOCUMENT_ROOT'];
?>
<html>
<head>
    <meta charset="utf-8">
    <title>员工查订单界面</title>
</head>、
    <body>
    <h1>Bob's Auto Parts
    </h1>
    <h2>Custom Orders</h2>
    <?php
    @$fp = fopen("$DOCUMENT_ROOT/order.txt",'rb');
    while(!feof($fp)){
        $order =fgets($fp,999);
        echo $order."<br>";
    }
    fclose($fp);
    ?>

    </body>
</html>
