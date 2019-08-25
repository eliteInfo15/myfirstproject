<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="text" name="roll"><br><br>
		<input type="text" name="name"><br><br>
		<input type="text" name="class"><br><br>
		<input type="text" name="marks"><br><br>
		<input type="text" name="id"><br><br>
		<input type="submit" name="btn">
	</form>
</body>
</html>


<?php 

	if(isset($_POST["btn"])){

	$servername="localhost";
	$username="root";
	$dbname="college";
	$password="";

	try{
$conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);

$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	



	$roll=$_POST["roll"];
	$name=$_POST["name"];
	$class=$_POST["class"];
	$marks=$_POST["marks"];
	$tid=$_POST["id"];

	$qry=" insert into student values (:roll,:name,:class,:marks,:id)   ";


	$stmt=$conn->prepare($qry);

	$stmt->bindParam(':roll',$roll);
	$stmt->bindParam(':name',$name);
	$stmt->bindParam(':class',$class);
	$stmt->bindParam(':marks',$marks);
	$stmt->bindParam(':id',$tid);

	$rs=$stmt->execute();
	var_dump($rs);




	}
	catch(PDOException $e){
		echo "error occured ".$e;
	}

}	



 ?>