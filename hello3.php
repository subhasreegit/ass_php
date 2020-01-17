<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
</head>
<body>
	<?php
		if(isset($_POST['upload'])){
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
		echo "<br>";

		
		$data1=$_POST['text1'];//the text entered by the user is taken by the post and saved in the variable
		//echo $data1;
		//echo "<br>";
		$data2=explode("\n",$data1);//splited the data with respect to the new line.
		//print_r($data2);
		//echo "<br>";
		$k=0;
		$m=0;
		$t=count($data2);//counted the no. of element in the array
		//echo $t;
		//echo "<br>";
		while($k<$t){//here all the characters except string is saved in another array.
			if(($data2[$k]==" ") OR ($data2[$k]=="\t") OR ($data2[$k]=="\r") OR ($data2[$k]=="\0") OR ($data2[$k]==" \x0B") OR ($data2[$k]=="  ") OR($data2[$k]=="  ")){
			
			//echo "task1"."<br>";
			}
			else{
			$data21[$m++]=$data2[$k];
			//echo "task2"."<br>";
			}
			$k++;
			
		}
		//print_r($data21);
		//echo "<br>";
		foreach($data21 as $data3){//the string is splited with the condition of "|"
			$data4[]=explode("|", $data3);
		}		
		//print_r($data4);
		//echo "<br>";
		$countA=count($data4);
		//echo $i;
		?>

		<br><!--here we created a table using the multidimentional index array to print the data in terms of table.-->
		<table border="1" cellspadding="5" cellpadding="5">
			<tr>
				<td><b>SUBJECT</b></td>
				<td><b>MARKS</b></td>
			</tr>
			<?php
			for ($i=0; $i<=$countA ; $i++) { 
			# code...
				echo "<tr>";
				foreach ($data4[$i] as $value) {
					# code...
					echo "<td>".$value."</td>";
				}
				echo "</tr>";
			}?>
			 
	
</body>
</html>