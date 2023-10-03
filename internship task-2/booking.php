<?php

$con=mysqli_connect("localhost","root","","book");

if(mysqli_connect_error())
{

echo"<script>alert('cannot connect to the database');</script>";
exit();


}

if(isset($_POST['boo']))
	
{
	 $date_exist_query="SELECT * FROM booking WHERE date='$_POST[date]'OR name='$_POST[name]'";
	 
   $result = mysqli_query($con, $date_exist_query);

   if($result)
   {
      if(mysqli_num_rows($result)>0) #it will be executed if username or email is already taken
      {
        
         $result_fetch=mysqli_fetch_assoc($result);
         if($result_fetch['date']==$_POST['date'])
         {
            #error for username already registered 
            echo"
            <script>
            alert('$result_fetch[date] - date is already taken');
            window.location.href='book.php';
            </script>
            ";
         }
         else

         {
            #error for email already registered
            echo"
            <script>
            alert('$result_fetch[name] - name is already registered by someone enter your whole name');
            window.location.href='book.php';
            </script>
            ";
         }
     
        }
      
        else #it will be executed if no one has taken username or email before
		{

$query="INSERT INTO booking(name,place,people,date,phone,id)values('$_POST[name]','$_POST[place]','$_POST[people]','$_POST[date]','$_POST[phone]','$_POST[id]')";

	 if(mysqli_query($con,$query))
        {
        #if data inserted successfully
        echo"
         <script>
         alert('Booking successfull');
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
         window.location.href='book.php';
         </script>
    ";
   }

?>