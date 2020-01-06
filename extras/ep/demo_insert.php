<?php
include 'connection.php';
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>demo_prescription</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
	
</head>
<body style="background-color:; ;">
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
  <div class="overlay-mf">
<div class="container">
  <div class="animated bounce infinite">
<div class="card">
<div class="card-body">
<h1 style="color:black" align="center"><img src="plus.jpg" height="25" width="25"> Electronic Prescription</h1>
<center>
<p>
Dr. Sudhir Kumar,
Well being Nursing Home,<br>
Opp to Panjagutta Metro Station
Hyderabad - 500013<br>
Registration Number : 2039-1902-1188-2019<br>
</p>
</center>
<img src="RX.png" height="70" width="80">
<hr>

<div class="row justify-content-around">
<p><strong>Date:-<?php echo "".date("d-m-Y")?></strong></p>
</div>
<form method="post" action="">
	<div class="container">
  <div class="form-row">
  	<div class="form-group col-md-4"></div>
    <div class="form-group col-md-4">
      <label for="inputEmail4"><strong>Patient Name</strong></label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Patient Name" name="pname" required>
    </div>
</div>
	<div class="form-row">
	<div class="form-group col-md-4" ></div>
    <div class="form-group col-md-4" >
      <label for="inputState"><strong>Gender</strong></label>
      <select id="inputState" class="form-control" name="pgender" required>
        <option selected>Choose...</option>
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="others">others</option>
      </select>
    </div>
</div>
	<div class="form-row">
    <div class="form-group col-md-4" > </div>
    <div class="form-group col-md-4">
      <label for="inputState"><strong>Age</strong></label>
     <input type="text" class="form-control" id="inputEmail4" placeholder="Age" name="page" required>
    </div>
</div>
    <div class="form-row">
    	<div class="form-group col-md-4" ></div>
    <div class="form-group col-md-4">
      <label for="inputEmail4"><strong>Phone Number</strong></label>
        <input type="text" class="form-control" id="inputEmail4" placeholder="Phone Number" name="pphone" required>
    </div>
</div>
</div>
<div class="form-row">
 
  <div class="form-group col-md-2">
<table class="table table-striped" style="width: 10%">
  <thead class="table-primary">
    <tr>
      <th scope="col">S.No</th>
      <th scope="col">Patient Disease Condition</th>
      <th scope="col">Medicines For Disease</th>
      <th scope="col">Time of Administeration</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><select class="myselect"  style='width: 315px;' name=pcondition11>
            <option value="" disabled="" selected>Patient Disease Condition</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select diseases from diseases order by diseases");
            while($row = mysqli_fetch_array($result)) {
              $diseases = $row["diseases"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$diseases."</option>";
            }
          ?>
          
          </select>
          </td>
          <td><select class="myselect"  style='width: 315px;' name="pmedicine12">
            <option value="" disabled="" selected>Medicines for Disease</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from medicines");
            while($row = mysqli_fetch_array($result)) {
              $medicines = $row["medicines"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$medicines."</option>";
            }
          ?>
          
          </select></td>

      <td><select class="myselect"  style='width: 315px;' name="phtt13">
            <option value="" disabled="" selected>How To Take</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from time_of_administration");
            while($row = mysqli_fetch_array($result)) {
              $htt = $row["toa"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$htt."</option>";
            }
          ?>
          
          </select>
          </td>
          
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><select class="myselect"  style='width: 315px;' name="pcondition21">
            <option value="" disabled="" selected>Patient Disease Condition</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select diseases from diseases order by diseases");
            while($row = mysqli_fetch_array($result)) {
              $diseases = $row["diseases"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$diseases."</option>";
            }
          ?>
          
          </select></td>
      <td><select class="myselect"  style='width: 315px;' name="pmedicine22">
            <option value="" disabled="" selected>Medicines for Disease</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from medicines");
            while($row = mysqli_fetch_array($result)) {
              $medicines = $row["medicines"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$medicines."</option>";
            }
          ?>
          
          </select></td>
      <td><select class="myselect"  style='width: 315px;' name="phtt23">
            <option value="" disabled="" selected>How To Take</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from time_of_administration");
            while($row = mysqli_fetch_array($result)) {
              $htt = $row["toa"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$htt."</option>";
            }
          ?>
          
          </select></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><select class="myselect"  style='width: 315px;' name="pcondition31">
            <option value="" disabled="" selected>Patient Disease Condition</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select diseases from diseases order by diseases");
            while($row = mysqli_fetch_array($result)) {
              $diseases = $row["diseases"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$diseases."</option>";
            }
          ?>
          
          </select></td>
      <td><select  class="myselect"  style='width: 315px;' name="pmedicine32">
            <option value="" disabled="" selected>Medicines for Disease</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from medicines");
            while($row = mysqli_fetch_array($result)) {
              $medicines = $row["medicines"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$medicines."</option>";
            }
          ?>
          
          </select></td>
      <td><select class="myselect"  style='width: 315px;' name="phtt33">
            <option value="" disabled="" selected>How To Take</option>
          <?php
            $eid = "";
            $result = mysqli_query($link, "select * from time_of_administration");
            while($row = mysqli_fetch_array($result)) {
              $htt = $row["toa"];
              //$name = $row["fname"]." ".$row["lname"];
              //$show = $name." (".$durgs.")";
              echo "<option>".$htt."</option>";
            }
          ?>
          
          </select></td>
    </tr>
  </tbody>
</table>
</div>
<div class="form-group col-md-4"></div>
</div>
<br><hr><label><strong>Directions</strong></label>
<textarea rows="5" cols="150" name="directions" required></textarea>
<p><strong>prescription validity : 24/12/2019 to 4/1/2020</strong></p>
	<div class="row justify-content-center">
	<input type="submit" name="submit" value="submit" align="right" >
	</div>
</form>
</div>
</div><!--card body-->
</div><!--card -->
</div><!--card container-->
</body>
<script type="text/javascript">
      $(".myselect").select2();
</script>
</div>
</section>
<footer></footer>
</html>
<?php
if(isset($_POST["submit"])){
  $id;
  $pname=$_POST["pname"];
  $pgender=$_POST["pgender"];
  $page=$_POST["page"];
  $pphone=$_POST["pphone"];
  $pcondition=$_POST["pcondition11"];
  $pmedicine=$_POST["pmedicine12"];
  $htt=$_POST["phtt13"];
  $directions=$_POST["directions"];
  $_SESSION["name"]=$pname;
   $sql="insert into pdata values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
   $result=mysqli_prepare($link,$sql);
   if($result){
    mysqli_stmt_bind_param($result,'issiissssssssss',$id,$pname,$pgender,$page,$pphone,$pcondition,$pmedicine,$htt,$directions,$_POST[pcondition21],$_POST[pmedicine22],$_POST[phtt23],$_POST[pcondition31],$_POST[pmedicine32],$_POST[phtt33]);
    mysqli_stmt_execute($result);
   }
   ?>
   <script>
  window.location="consumer_page.php";
  </script>
  <?php
}
?>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>