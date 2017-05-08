<html>
<head>
    <title>Site submission</title>
</head>
<body>
    <H1>
        sITE suBMITION RESULT
    </H1>
    <?php
    $url=$_REQUEST['url'];
    $email=$_REQUEST['email'];
    $url = parse_url($url);
    $host=$url['host'];
    if(!($ip=gethostbyname($host))){
        echo 'Host for URL not hace IP';
        exit;
    }
    echo "Host is at IP $ip <br>";
    $email=explode('@',$email);
    $emailhost=$email[1];
    if(!dns_get_mx($emailhost,$mxhostsarr)){
        }
    ?>

</body>
</html>
