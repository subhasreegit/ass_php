<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
       
	<!--<script>
		function SetFullName()
        {
         document.getElementById("Artist_fullname").value="";
         document.getElementById("Artist_fullname").value=document.getElementById("Artist_fname").value+" "+document.getElementById("Artist_lname").value;
        }
    </script>-->
    <script src="/ass_5.js"></script>

   

    </head>
    <body>
        <form action="http://localhost/hello6.php" method="POST" enctype="multipart/form-data">
          <label>Firstname</label><br>
            <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname" required/><br>
            <label>Lastname</label><br>
            <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
            <label>Full-Name</label><br>
            <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>


            <input type="file" name="file" id="file" height='50px' width='50px'><br><br>

            <label>Enter Marks in each Subject in Each row in the pattern "English|"Obtained Marks":</label><br>
            <textarea type="text" name="text1" id="text1" height='500';width='500'/></textarea><br>

            <label>Contact Number:</label><br><!--through this we have taken the input and checked with the pattern with the required fiels-->
            <input type="text" name="ph_no" id="ph_no" placeholder="+91" pattern="[+91]{3}[1-9]{1}[0-9]{9}"  required/><br><br>

            <lable>Input your Email:</lable><br>
            <input type="text" name="email" id="email" pattern="^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$"  required><br><br>
             <input type="submit"  name="upload"><br>
        </form>
        
    </body>    
</html>