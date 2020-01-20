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
		</table> 
		<?php
			// printed the contact no. given by the user with+91 
			$data10=$_POST['ph_no'];
			echo "<br>";
			echo "Contact Number:";
			echo $data10;
			echo "<br>";

			$access_key = '94e2188292a97602e09dabb9a8ec2781';//access key of the api checking
			$email_address = $_POST['email'];// taking the emai address from the user
			$ch = curl_init('http://apilayer.net/api/check?access_key='.$access_key.'&email='.$email_address.'');  //here a curl session is initialized
			/*$mn*/curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);// to set an option for curl transfer
			//echo ($mn);
			//echo "<br>";
			$json_response = curl_exec($ch);// it performs a curl session
			//echo $json_response;
			//echo "<br>";
			//echo floatval($mn);
			//echo "<br>";
			//echo floatval($json_response);
			//echo "<br>";
			$result = json_decode($json_response,true);
			//$hh=floatval($result['score']);
			//echo $hh;
			//curl_close($ch);
			//$result = json_decode($json_response,true);
			//print_r($result);
			//echo "<br>";
			//$result = json_decode($json_response);
			//print_r($result);
			if ($result = json_decode($json_response, true)) { //it returns a std class object array
				if (floatval($result['score']) >= 0.8) { // or 0.65 for transactional emails and checked it by the score associative key value
					echo 'The e-mail address '.$result['email'].' is valid.';
				} 
				else {
					echo 'The entered e-mail address isn\'t valid.';
					//if ($result['did_you_mean'] != '') {
						//echo ' Did you mean "'.$result['did_you_mean'].'"?';
					//}
				}
			}	
			else {
				echo 'Error, something went wrong';
			}

			
			
			/*echo "Email: ";
			$data11=$_POST['email'];
			echo $data11;
			echo "<br>";*/
		?>
	
</body>
</html>