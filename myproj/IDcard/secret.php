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
}elseif (($name=="user")&&($password=='pass')){
    echo "<h1>Here it is</h1>>";

}else{
    echo "<h1>WRONG!</h1>";
}
?>