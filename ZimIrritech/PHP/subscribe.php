
<?php
 require '../dbh/dbh.php';

if (isset($_POST['Email']))
{
	  
         $Email	       = $_POST['Email'];
         $Date         = date(format);

          $sql = "INSERT INTO subscriptions (Email) VALUES ('$Email')";

          if ($Conn->query($sql) === True)
          {
                                     header("location: ../templates/home.php");
           }
           else{
           	echo "Error: " . $sql . "<br>" . $Conn->error;
           }
                              
}else
{
	echo "error";
}