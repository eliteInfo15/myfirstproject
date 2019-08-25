<?php 



	$sname="localhost";
	$unm="root";
	$pass="";
	$dbname="college";
$conn=mysqli_connect($sname,$unm,$pass,$dbname);
		
	$select_qry="select * from student";
	$res=mysqli_query($conn,$select_qry);
	/*print_r($res);
	var_dump($res);	*/

	$n=mysqli_num_rows($res);
	//echo "no of rows are ".$n;

	if($n>0){

		while($arr=mysqli_fetch_assoc($res)){
			echo $arr["name"]  ."<br>";
			echo $arr["roll"]  ."<br>";
		}
		

	}

	 ?>