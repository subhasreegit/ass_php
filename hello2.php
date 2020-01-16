<!DOCTYPE html>
<html>
<head>
	<title>PHP first ssignment</title>
</head>
<body>
	<?php
		if(isset($_POST['upload'])){//we are checking the variable is set or not
			/*$file= $_FILES['file'];
			print_r($file);*/
			//here we are checking and storing the detail about the uploaded file.
			$file_name=$_FILES['file']['name'];
			$file_type=$_FILES['file']['type'];
			$file_size=$_FILES['file']['size'];
			$file_tem_loc=$_FILES['file']['tmp_name'];
			$file_store="images/".$file_name;
			//Through this uploaded file is stored in the folder and displayed through the concatination in the field of echo
			if(move_uploaded_file($file_tem_loc, $file_store)){
				echo "<img src=".$file_store." width='150px' height='150px'>";
			}		
		}
		echo "<br>";
		echo "Hello ";
		echo $_POST["artistfield_fname"]," " , $_POST["artistfield_lname"];
	 

		/*$folder="images/";
		if(is_dir($folder))
		{
			if($open=opendir($folder))
			{
				while(($file=readdir($open))!= false){
					if($file=="." || $file=="..")continue;
					echo '<img src="images/$file_name.$file_type'.$file.'" width="150px" height="150px">';
				}
				closedir($open);
			}
		}*/


	 ?>
	
</body>
</html>
