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
    <!-- Through the input tag the input is taken nd it send to the next php page through the post method and in the action section of the from the address of the php file is given to go to the file when the user click on the submit buttonn.-->
    <body>
        <form action="http://localhost/hello.php" method="POST">
             <label>Firstname</label><br>
            <input type="text" pattern="[a-zA-Z]{1,}"  name="artistfield_fname" id="Artist_fname"   required/><br>
            <label>Lastname</label><br>
            <input type="text"  pattern="[a-zA-Z]{1,}" name="artistfield_lname" id="Artist_lname" onchange="SetFullName()" required/><br>       
            <label>Full-Name</label><br>
            <input type="text" name="artistfield_fullname" id="Artist_fullname" Disabled required/><br><br>
            <input type="submit">
            <!--through the pattern we are restricting the input inserted field. and through the submit button we are triggering the page to do the action and go to the next page. -->
        </form>
        
    </body>    
</html>
