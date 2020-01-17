<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script> 
	<script>
		function SetFullName()
        {
         document.getElementById("Artist_fullname").value="";
         document.getElementById("Artist_fullname").value=document.getElementById("Artist_fname").value+" "+document.getElementById("Artist_lname").value;
        }
    </script>

    </head>
    <body>
        <form action="http://localhost/hello3.php" method="POST" enctype="multipart/form-data">
           <label>Firstname</label><br>
            <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname"  required/><br>
            <label>Lastname</label><br>
            <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
            <label>Full-Name</label><br>
            <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>


            <input type="file" name="file"><br><br>
            <!--Through this tag the user input is taken and the format is also mentioned.-->
            <label>Enter Marks in each Subject in Each row in the pattern "English|"Obtained Marks":</label><br>
            <textarea type="text" name="text1" id="text1" height='500';width='500'/></textarea><br>

             <input type="submit"  name="upload"><br>
        </form>
        
    </body>    
</html>