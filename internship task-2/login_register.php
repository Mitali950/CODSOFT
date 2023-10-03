<?php

require('connect.php');

if(isset($_POST['register']))

{
   
   $user_exist_query="SELECT * FROM registered_users WHERE username='$_POST[username]' OR email='$_POST[email]'";
   $result = mysqli_query($con, $user_exist_query);

   if($result)
   {
      if(mysqli_num_rows($result)>0) #it will be executed if username or email is already taken
      {
        
         $result_fetch=mysqli_fetch_assoc($result);
         if($result_fetch['username']==$_POST['username'])
         {
            #error for username already registered 
            echo"
            <script>
            alert('$result_fetch[username] - Username already taken');
            window.location.href='regis.php';
            </script>
            ";
         }
         else

         {
            #error for email already registered
            echo"
            <script>
            alert('$result_fetch[email] - email registered');
            window.location.href='regis.php';
            </script>
            ";
         }
     
        }
      
        else #it will be executed if no one has taken username or email before
      {
        //$query=" INSERT INTO meet (`fullname`, `username`, `email`, `password`) VALUES ('$POST[fullname]','$POST[username]','$POST[email]','$POST[password]')";
      //$query = " INSERT INTO meet (`fullname`, `username`, `email`, `password`) VALUES($_POST[name],$_POST['username'],$_POST['email'],$_POST['password'])";     
       
$query="INSERT INTO registered_users(fullname,username,email,password)values('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";

	   if(mysqli_query($con,$query))
        {
        #if data inserted successfully
        echo"
         <script>
         alert('Registration successfull');
         window.location.href='index.php';
         </script>
    ";
        }
        else
        {
            #if data cannot inserted 
            echo"
            <script>
            alert('Cannont Run Query');
            window.location.href='index.php';
            </script>
       "; 
    
        }
     }
   }
   
   
 }

else
   {
     
    echo"
         <script>alert('Cannont Run Query');
         window.location.href='index.php';
         </script>
    ";
   }
?>