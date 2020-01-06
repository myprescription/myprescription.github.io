<?php
include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>import_csv</title>
</head>
<body>
	<h1 align="center">
	import and csv file</h1>
	<center>
		<form method="post" action="" enctype="multipart/form-data">
	<input type="file" name="file" value="choose_file">
	<br>
	<hr>
	<br>
	<input type="submit" name="submit1" value="submit" >
	</form>
</center>
<?php
    if(isset($_POST["submit1"])) {
        if($_FILES['file']['name']) {
            $filename = explode(".", $_FILES['file']['name']);
            if($filename[1] == 'csv') {
                $handle = fopen($_FILES['file']['tmp_name'], "r");
                while($data = fgetcsv($handle)) {
                    ini_set('max_execution_time', 300);
                    //$id=mysqli_real_escape_string($link, $data[0]);
                    $medicines = mysqli_real_escape_string($link, $data[0]);
                    mysqli_query($link, "insert into medicines values('$medicines')");
                }
                fclose($handle);
                echo "uploaded successfully";
            }
        }
    }
                ?>
</body>
</html>