<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
</head>
<body>
	<?php
		/*if(isset($_POST['upload'])){
			$file_name=$_FILES['file']['name'];
			$file_type=$_FILES['file']['type'];
			$file_size=$_FILES['file']['size'];
			$file_tem_loc=$_FILES['file']['tmp_name'];
			$file_store="images/".$file_name;
			if(move_uploaded_file($file_tem_loc, $file_store)){
				echo "<img src=".$file_store." width='150px' height='150px'>";
			}		
		}
		echo "<br>";
		echo "Hello ";
		echo $_POST["artistfield_fname"]," " , $_POST["artistfield_lname"];
		echo "<br>";*/

		/*$comments=array($_POST['text1']);
		$data1=str_split($commments);
		echo var_dump($data1);
		echo "<br>";
		echo var_dump($comments);
		echo "<br>";*/

		$data1=$_POST['text1'];
		echo $data1;
		echo "<br>";
		$data2=explode("\n",$data1);
		print_r($data2);
		echo "<br>";
		foreach($data2 as $data3){
			$data4[]=explode("|", $data3);
		}		
		print_r($data4);
		echo "<br>";
		$countA=count(data4);
		echo $i;
		for ($i=0; $i <=$countA ; $i++) { 
			# code...
			foreach ($data4[$i] as $value) {
				# code...
				echo $value." ";
			}
			echo "<br>";
		}
		/*$i=0;*/
		//print_r($data4);
		/*echo "<br>";
		echo $data4[++$i];
		echo "<br>";
		echo "<br>";*/
		//echo $data4;
		//Print_r($data4);
		//echo "<hr>";
		/*foreach($data4 as $key => $value)
		{
  			echo $key." has the value". $data4;
		}*/
		/*echo "<br>";
		print_r($data2);
		echo $data1;*/
		/*$data2=explode("|", $data1);
		print_r($data2);*/
		/*echo var_dump($data2);*/






		/*echo "$comments";
		echo "<br>";
		$i=0;
		while($i<sizeof($comments)){
			cho $comments[$i];
			$i++;
		}*/
		/*$data1=explod(" ",$comments);
		print_r($data1);
		echo "<br>";
		list($name,$marks)=explode(" ",$comments);
		print_r($name);*/
		/*echo "<br>";
		print_r($marks);*/
		/*echo $marks;
		echo "<br>";*/
		/*for ($num =0; $num <=3; $num += 1) { 
    		 echo $name;
		} */ 
		/*echo $name."<br>";
		echo $marks."<br>";*/
		/*echo "done";
		if($comments){
			echo "done2";
		}*/
		/*echo "The comment that you entered is:" . "<br><br>" . $comments;*/

		/*<table class="table table-bordered">
		<tr class="thead-light">
		<th>Sr No</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		</tr>


		$i=1;
		$query=$pdo->query("select * from users");
		while($result=$query->fetch(PDO::FETCH_ASSOC))
		{
				echo "<tr>";
				echo "<td>".$i."</td>";
		echo "<td>".$result['name']."</td>";
		echo "<td>".$result['email']."</td>";
		echo "<td>".$result['mobile']."</td>";
		echo "</tr>";
		$i++;
		}
</table>*/
	
	 ?>
	
</body>
</html>