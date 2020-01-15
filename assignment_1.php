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
        <form action="http://localhost/hello.php" method="POST">
             <label>Firstname</label><br>
            <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname"   required/><br>
            <label>Lastname</label><br>
            <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
            <label>Full-Name</label><br>
            <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>
            <input type="submit">
        </form>
        
    </body>    
</html>
