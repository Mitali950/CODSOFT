<?php 
require('conn.php');

?>




<html>
    <head>
        <meta charset="UTF">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
		
    </head>
    
<body>
    <div class="box">
        <form method="POST" action="conn.php">
            <h1>Log In</h1>
            <div class="inputbox">
                <input type="email" required="required" name="username">
                <span>Username</span>
                <i></i>
            </div>
            <div class="inputbox">
            <span>Password</span>
                <input type="password" required="required" name="password" spellcheck="false" id="email-field" onkeyup="validateEmail()"><br>
                   <span id="email-error"></span> 
                
                <i></i></div>
                <br><br><br>
                <input type="submit" value="Login" name="login"><br><br>
                <b>Dont'n Have An Account</b>
                
                <a href="regis.php"> Register Now</a>
            
                
        

        </form>
        
    </div>

    <script>

var emailField = document.getElementById("email-field"); 

var emailError = document.getElementById("email-error"); 


function validateEmail(){

                    if(!emailField.value.match(/[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
					
					emailError.innerHTML = "please enter a valid password";
					return false;

}

emailError.innerHTML = "";
return true;
}
    
	
</script>
    
	


</body>
</html>