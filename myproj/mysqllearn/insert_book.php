<html>
<head>
    <title>Entry Result</title>
</head>
<body>
    <h1>Entry Result</h1>
    <?php
    $isbn=$_POST['isbn'];
    $author=$_POST['author'];
    $title=$_POST['title'];
    $price=$_POST['price'];
    if(!$isbn|| !$author|| !$title|| !$price){
        echo "you have not entered all the required details.<br />";
        exit;
    }
    if(!get_magic_quotes_gpc()){
        $isbn=addslashes($isbn);
        $author=addslashes($author);
        $title=addslashes($title);
        $price=doubleval($price);

    }
        @ $db=new mysqli('localhost','bookhost','book','books');
    if(mysqli_connect_error()){
        echo "could not open mysql";
        exit;
    }
        $query = "insert into books VALUES ('".$isbn."','".$author."','".$title."','".$price."')";
        $result = $db->query($query);
        if($result){
            echo $db->affected_rows."book inserted into database.";

        }else{
            echo "an error has turned ";

        }
        $db->close();
    ?>
</body>
</html>