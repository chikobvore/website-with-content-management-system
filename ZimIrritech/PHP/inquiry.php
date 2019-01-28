
<?php
 require '../dbh/dbh.php';

if (isset($_POST['Name']) && isset($_POST['Email']) && isset($_POST['Phone']) &&  isset($_POST['Message']))
{
	     $Name         = $_POST['Name'];
         $Email	       = $_POST['Email'];
         $Phone		   = $_POST['Phone'];
         $Message      = $_POST['Message'];

          $sql = "INSERT INTO visitors_inquiries (visitors_name,Email,phone_number,Message) VALUES ('$Name','$Email','$Phone','$Message')";

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