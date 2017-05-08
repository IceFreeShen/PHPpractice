<html>
<head>
    <title>Uploading..</title>
</head>
<body>
    <h1>Uploading file...</h1>
    <?php
    if ($_FILES['userfile']['error']>0){
        echo 'problem:';

    }
    ?>
</body>
</html>