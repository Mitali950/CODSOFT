<?php 
require('connect.php');

?>




<html>
    <head>
        <meta charset="UTF">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> UserRigister</title>
        <link rel="stylesheet" href="rigsty.css" type="text/css";>
       
    </head>
    
<body>

<div class="container">
<div class="pop">
<form method="POST" action="login_register.php">
        <h2>
            <span>User Rigister</span>
            <button type="reset">x</button>
        </h2>
        <input type="text" placeholder="Full Name" required="required" name="fullname">
        <input type="text" placeholder="Username" required="required" name="username">
         <input type="email" placeholder="E-mail" required="required" name="email" spellcheck="false" id="email-field" onkeyup="validateEmail()">
          <span id="email-error"></span>         
        <input type="password" placeholder="Password" required="required" name="password">
        <button type="submit" class="register-btn" name="register">Register</button>
    </form>
</div>
</div>

<script>

var emailField = document.getElementById("email-field"); 

var emailError = document.getElementById("email-error"); 


function validateEmail(){

                    if(!emailField.value.match(/[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
					
					emailError.innerHTML = "please enter a valid email";
					return false;

}

emailError.innerHTML = "";
return true;

}
</script>




	
	





</body>
</html>