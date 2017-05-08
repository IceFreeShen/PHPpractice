<?php
/**
 * Created by PhpStorm.
 * User: shenpu
 * Date: 4/20/17
 * Time: 3:51 PM
 */

$name = trim($_POST['name']);
$email = trim($_POST['email']);
$feedback = trim($_POST['feedback']);

$toaddress = "446364487@qq.com";
$subject = "Feedback from web site";
$maincontent = "Customer name:".$name."\n".
                "Customer email:".$email."\n".
                "Customer comments:".$feedback."\n";

$fromaddress = "From:web@example.com";
mail($toaddress,$subject,$maincontent,$fromaddress);
?>
<html>
    <head>
        <title>Bob's Auto Parts - Feedback Submitted</title>

    </head>
    <body>
    <h1>Feedback submitted</h1>
    <p>Your feedback has been sent!</p>
    <p><?php echo $maincontent ?></p>
    <p><br><br>/p>
     <p>This is nl2br maincontent:<br>
        <?php echo nl2br($maincontent) ?>
    </p>


    <?php

    ?>
    </body>

</html>
