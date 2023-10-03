<html>
    <head>
        <meta charset="UTF">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <link rel="stylesheet" href="boo.css" type="text/css"/>
		
    </head>
    
<body>
    <div class="box">
	<div class="image"><img src="book.jpg" alt=""></div>
	<form method="POST" action="booking.php">
	<span>Name</span>  
	<input type="text" required="required" name="name"><br>
            
	<span> Where to go </span>
	
	<input type="text" required="required" name="place"><br>
	   
           <span>No. of people</span>     
	<input type="number" required="required" name="people"><br>
                  
	<span>Booking Date</span>
	<input type="date" required="required" name="date"><br>
	  
               
			   <span>Phone No</span>
		<input type="text" required="required" name="phone"><br>
                  
				
				<span>E-mail</span>
	<input type="email" required="required" name="id" spellcheck="false" id="email-field" onkeyup="validateEmail()"><br>
          <span id="email-error"></span>         
	 <button type="submit" class="boo-btn "name="boo">Book Now</button>
	
	
	</form>
        
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