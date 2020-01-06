
<?php
include 'connection.php';
session_start();
//echo $_SESSION["name"];
?>
<script type="text/javascript">
  alert('',<?php echo $_SESSION["name"];?>)
</script>
<?php
$name=$_SESSION["name"];
$gender=null;
$age=null;
$phone=null;
$condition=null;
$medicine=null;
$htt=null;
$direction=null;
$condition1=null;
$medicine1=null;
$htt1=null;
$condition2=null;
$medicine2=null;
$htt2=null;
$result=mysqli_query($link,"select * from pdata where name='$name'");
while($row = mysqli_fetch_array($result)){ 
$name=$row['name'];
$gender=$row['gender'];
$age=$row['age'];
$phone=$row['phone'];
$condition=$row['condition'];
$medicine=$row['medicine'];
$htt=$row['htt'];
$direction=$row['direction'];
$condition1=$row['condition1'];
$medicine1=$row['medicine1'];
$htt1=$row['htt1'];
$condition2=$row['condition1'];
$medicine2=$row['medicine2'];
$htt2=$row['htt2'];
}
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <title>Consumer_Page</title>
  </head>
  <body><section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
  	<div class="row">
  		<div class="col-md-8">
        <div class="card">
<div class="card-body">
  			
  			<!--<img src="cs1.gif">-->
        <div class="container">
          <h1 align="center" style="color: red"> Consumer Electronic Prescription</h1>
          <br>
          <div class="row">
            <div class="col">

              <mark>name :  </mark><?php echo $name; ?>
            </div>
            <div class="col">
              <mark>gender : </mark><?php echo $gender; ?>
            </div>
            <div class="col">
             <mark>age :  </mark><?php echo $age; ?>
            </div>
            <div class="col">
             <mark>phone :  </mark><?php echo $phone; ?>
            </div>
          </div>
          <br>
          <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">Condition</th>
      <th scope="col">Medicine</th>
      <th scope="col">How To Take</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $condition; ?></td>
      <td><?php echo $medicine; ?></td>
      <td><?php echo $htt;?></td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><?php echo $condition1; ?></td>
      <td><?php echo $medicine1; ?></td>
      <td><?php echo $htt1;?></td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><?php echo $condition2; ?></td>
      <td><?php echo $medicine2; ?></td>
      <td><?php echo $htt2;?></td>
    </tr>
  </tbody>
</table>
<label><mark>directions:</mark></label>
<textarea rows="5" cols="100"><?php echo $direction;?></textarea>
        </div><!--container-->
        </div><!--card body-->
   		</div><!--card-->
  </div><!--col-md-8-->
  <!-------------------------------------------------------------------------------->

  <!--side nav -->
   <div class="col order-first">
   <div class="wrapper">
   	<nav id="sidebar">
   		<div class="sidebar-header">
   			<h3>ELECTRONIC PRESCRIPTION</h3>
   		</div>
   		
   		
   		<ul class="list-unstyled components">
   			<li><a href="">Medicines Available Drug Store</a></li>
   			<li><a href="">Prescription Stored</a></li>
   			<li class="active">
   				<a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Prescription Language Selection</a>
   				<ul class="collapse list-unstyled" id="homeSubmenu">
   					<li>
   						<a href="#">Telugu</a>
   					</li>
   					<li>
   						<a href="#">Hindi</a>
   					</li>
   					<li>
   						<a href="#">English</a>
   					</li>
   				</ul> 
   			</li>
   			
   			<li>
   				<a href="#">Share Prescription</a>
   			</li>
   			<li>
   		</li>
   			<li>
   				<a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Read Out Options</a>
   				<ul class="collapse list-unstyled" id="pageSubmenu">
   					<li>
   						<a href="#">read out medicines</a>
   					</li>
   					<li>
   						<a href="#">read out your disease condition</a>
   					</li>
   					<li>
   						<a href="#">read out how to take medicines</a>
   					</li>
   				</ul> 
   			</li>
   			<li>
   				<a href="#">Patients prescription history</a>
   			</li>
   			<li>
   				<a href="#">His family details</a>
   			</li>
   			<li><a href="">Emergency phone-number</a></li>

   		</ul>
   		
   		<ul class="list-unstyled CTAs">
   			<li>
   				<a href="#" class="download">Downloaded prescriptions</a>
   			</li>
   			<li>
   				<a href="#" class="article">article</a>
   			</li>
   		</ul>
   	</nav>
   	<div class="content">
   		<nav class="navbar navbar-expand-lg navbar-light bg-light">
   		<button type="button" id="sidebarCollapse" class="btn btn-info">
   			<i class="fa fa-align-justify"></i> <span>options</span>
   		</button>

   		
  <!--<a class="navbar-brand" href="#">Navbar</a> -->
 <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>-->
  <!--<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>-->
</nav>
</div>
</div>
</div>
<div class="col order-last">
</div>
</div>


  	
  	
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    
    <script>
	    $(document).ready(function(){
			$('#sidebarCollapse').on('click',function(){
				$('#sidebar').toggleClass('active');
			});
		});  
	</script>
    
    
    
    
    </section>
  </body>
</html>