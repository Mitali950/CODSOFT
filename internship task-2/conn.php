<?php

$con=mysqli_connect("localhost","root","","test");

if(mysqli_connect_error())
{

echo"<script>alert('cannot connect to the database');</script>";
exit();


}

if(isset($_POST['login']))

{

$query="INSERT INTO login_users(username,password)values('$_POST[username]','$_POST[password]')";

	   if(mysqli_query($con,$query))
        {
        #if data inserted successfully
        echo"
         <script>
         alert('Login successfull');
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


?>