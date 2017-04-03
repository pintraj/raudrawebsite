<?php
/**
 * Created by PhpStorm.
 * User: JackSparrow
 * Date: 15/02/2017
 * Time: 01:25
 */

?>
<form method="post">
    <input type="text" name="name" id="name" placeholder="name">
    <input type="text" name="college" id="college" placeholder="college">
    <input type="text" name="city" id="city" placeholder="city">
    <input type="number" name="mobile" id="mobile" placeholder="mobile">
    <input type="submit" name="submit">

</form>
<?php
if(isset($_POST['submit'])) {
    require "dbconnect.php";
    mysql_select_db("email", $con);
    $sql = INSERT INTO `emaildata` (`id`, `name`, `college`, `city`, `mobile`) VALUES(NULL, $_POST['name'], $_POST['college'], $_POST['city'], $_POST['mobile']);
mysql_query($sql, $con);
mysql_colse($con)
}
?>

