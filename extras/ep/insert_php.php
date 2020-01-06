<?php
if(isset($_POST["submit"])){
  $pname=$_POST["pname"];
  $pgender=$_POST["pgender"];
  $age=$_POST["age"];
  $pphone=$_POST["pphone"];
  $pcondition=$_POST["pcondition"];
  $pmedicine=$_POST["pmedicine"];
  $toa=$_POST["toa"];
  $result=mysqli_query($link,"insert into prescription values(")


}
?>
