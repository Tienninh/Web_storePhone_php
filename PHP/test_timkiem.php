<?php 
include 'connect.php';
if(isset($_POST['btn'])){
    $tim = $_POST['txt_tim'];
}

?>

<form method="POSt">

<input type="text" name="txt_tim">
<input  name ="btn "type="submit" VALUE="tim">
</form>