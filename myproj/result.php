<html>
<head>
    <title>Search Result</title>
</head>
<body>
    <h1>Search Result</h1>
    <?php
        $searchtype=$_POST['searchtype'];
        $searchterm=trim($_POST['searchterm']);
        if(!$searchterm|| !$searchtype){
            echo "you have not entered search details.";
            exit;

        }
        if(!get_magic_quotes_gpc()){
            $searchtype = addslashes($searchtype);
            $searchterm= addslashes($searchterm);

        }
        @ $db = new mysqli('localhost','bookhost','book','books');
        if(mysqli_connect_error()){
            echo'error could not connect to database';
            exit;
        }
        $query = "select * from books where ".$searchtype." like '%".$searchterm."%'";
        $result = $db->query($query);
        $num_results = $result->num_rows;
        echo "<p>Number of books found: ".$num_results."</p>";
        for($i=0;$i<$num_results;$i++){
            $row = $result->fetch_assoc();
            echo "<p><strong>".($i+1).". Title:";
            echo htmlspecialchars(stripslashes($row['title']));
            echo "</strong><br />Author:";
            echo stripslashes($row['author']);
            echo "<br />ISBN: ";
            echo stripslashes($row['isbn']);
            echo "<br />Price:";
            echo stripslashes($row['price']);
            echo "</p>";

        }



        $result->free();
        $db->close();

    ?>
</body>
</html>