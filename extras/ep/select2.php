<?php
include 'connection.php';
?>
<html lang="en">


<head>


    <title>Jquery Select2 - Select Box with Search Option</title>  


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>


</head>


<body>


<div style="width:520px;margin:0px auto;margin-top:30px;height:500px;">


  <h2>Select Box with Search Option Jquery Select2.js</h2>


  <select class="myselect"  style='width: 500px;'>
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


</div>


<script type="text/javascript">
      $(".myselect").select2();
</script>


</body>


</html>