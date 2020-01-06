<?php
$connect=mysqli_connect("localhost","root","","ep");
$request=mysqli_real_escape_string($connect,$_POST["query"]);
$query="
select * from diseases where name like '%".$request."%' 
";
$result=msqli_query($connect,$query);
$data=array();
if(mysqli_num_row($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$data[]=$row["diseases"];

	}
	echo json_encode($data);
}

?>