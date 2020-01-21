<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
</head>
<body>
		<?php
			ob_start();

			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=document_name.doc");


			$file_name=$_FILES['file']['name'];
			$file_type=$_FILES['file']['type'];
			$file_size=$_FILES['file']['size'];
			$file_tem_loc=$_FILES['file']['tmp_name'];
			$file_store="/var/www/html/images/".$file_name;
			echo "<img height='100px' width='100px' src =".$file_store.">";
			echo "<br>"."<br>";

			echo "First Name:"." ";
			echo $_POST['artistfield_fname'];
			echo "<br>"."<hr>";
			echo "Last Name:"." ";
			echo $_POST['artistfield_lname'];
			echo "<br>"."<hr>";

			echo "Marks table: "."<br>";
			$data1=$_POST['text1'];//the text entered by the user is taken by the post and saved in the variable
			$data2=explode("\n",$data1);//splited the data with respect to the new line.
			$k=0;
			$m=0;
			$t=count($data2);//counted the no. of element in the array
			while($k<$t){//here all the characters except string is saved in another array.
				if(($data2[$k]==" ") OR ($data2[$k]=="\t") OR ($data2[$k]=="\r") OR ($data2[$k]=="\0") OR ($data2[$k]==" \x0B") OR ($data2[$k]=="  ") OR($data2[$k]=="  ")){
				}
				else{
				$data21[$m++]=$data2[$k];
				}
				$k++;
			
			}
			foreach($data21 as $data3){//the string is splited with the condition of "|"
				$data4[]=explode("|", $data3);
			}		
			$countA=count($data4);
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
				}
			?>
		</table> 
		<?php 


			header("Content-type: application/vnd.ms-word");
			header("Content-Disposition: attachment;Filename=downloaded_file.doc");

			echo "<br>"."<hr>";
			echo "Phone Number: "." ";
			echo $_POST['ph_no'];
			echo "<br>"."<hr>";
			echo "Email Address: "." ";
			echo $_POST['email'];
			echo "<br>";

			$temp=ob_get_contents();
			$fileName="/var/www/html/images/file.doc";
			$fp=fopen($fileName,"w");
			if($fp==false)
			{
				echo("Error in opening the uploaded file");
				exit();
			}
			fwrite($fp,$temp );
			fclose($fp);
			ob_end_flush();


			/*$file_name=$_FILES['file']['name'];
			$file_type=$_FILES['file']['type'];
			$file_size=$_FILES['file']['size'];
			$file_tem_loc=$_FILES['file']['tmp_name'];
			$file_store="/var/www/html/images/".$file_name;

			$data1=$_POST['artistfield_fname'];
			$data2=$_POST['artistfield_lname'];
			$data3=$_POST['ph_no'];
			$data4=$_POST['email'];
			$data5=
			

			$fp = fopen('./myfile.txt', "w");
			fwrite($fp, "First Name:"."\t".$data1."\n"."Last Name:".$data3."<img height='100px' width='100px' src =".$file_store.">"."\r\n");

			fclose($fp);*/
		?>


	
</body>
</html>