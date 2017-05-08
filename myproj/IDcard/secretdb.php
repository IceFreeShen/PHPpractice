<?php
$name=$_POST['name'];
$password = $_POST['password'];
if((!isset($name))||(!isset($password))){
    ?>
    <h1>Please Log In</h1>
    <p>This Page issecret.</p>
    <form action="secret.php" method="post">
        <table>
            <tr>
                <td>UserName:</td>
                <td><input type="text" name="name" size="15"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" name="password" size="15"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Log in" name="submit"></td>
            </tr>
        </table>
    </form>
    <?php
}else{
    $mysql=mysqli_connect('localhost','shenpu','shenpu','id');
    if(!$mysql){
        echo "cannot connect to mysql";
        exit;
    }
    $query = "select count(*) from user where name='".$name."' and password='".$password."'";
    $result = mysqli_query($mysql,$query);
    if(!$result){
        echo "<h1>cannot run query</h1>";
        exit;
    }
    $row = mysqli_fetch_row($result);
    $count=$row[0];
    if($count>0){
        echo "<h1>Here it is</h1>>";
    }else{
        echo "WRONG!";
    }


}
?>