<!DOCTYPE html>
<html>
    <head>
        <title>My Page</title>
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
	    <!-- Through this function we are trying to concatinae each word sumultaniously. at first i take the value as null. then as the user give the input the updated data is concatinated simultaniously.-->
	<script>
	function SetFullName()
        {
         document.getElementById("Artist_fullname").value="";
         document.getElementById("Artist_fullname").value=document.getElementById("Artist_fname").value+" "+document.getElementById("Artist_lname").value;
        }
    </script>

    </head>
    <body>
        <form action="http://localhost/hello2.php" method="POST" enctype="multipart/form-data">
            <label>Firstname</label><br>
            <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname"  required/><br>
            <label>Lastname</label><br>
            <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
            <label>Full-Name</label><br>
            <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>


            <input type="file" name="file"><br><br>
            <input type="submit"  name="upload"><br>
		<!--through the pattern we are restricting the input inserted field. and through the submit button we are triggering the page to do the action and go to the next page. -->
        </form>
        
    </body>    
</html>
