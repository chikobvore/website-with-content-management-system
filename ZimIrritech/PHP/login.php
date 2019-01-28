<?php
require '../dbh/dbh.php';

if (isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$Pass = $_POST['password'];

	$sql = "SELECT Password,Name,Surname,Role FROM system_adminstrators WHERE Email_address = '$email' ";
	$result = mysqli_query($Conn,$sql);
   	$confirm = mysqli_num_rows($result);

   	if ($confirm > 0)
         {
   			 while ($row = mysqli_fetch_assoc($result))
   			 {
   			 	$Password = $row['Password'];
   			 	$Name = $row['Name'];
   			 	$Surname = $row['Surname'];
   			 	$Role = $row['Role'];
   			 }
   			  if ($Pass == $Password)
   			  {
   			  	if ($Role == 'Administrator') {
   			  		    session_start();
               		$_SESSION['Name'] = $Name;
               		$_SESSION['Surname'] = $Surname;
                	header("location: ../templates/index-1.php");
   			  	}elseif ($Role = 'General') {
   			  		session_start();
               		$_SESSION['Name'] = $Name;
               		$_SESSION['Surname'] = $Surname;
                	header("location: ../templates/upload.html");
   			  	}else{
   			  		header("location: ../templates/login.php");
   			  	}

              
             }else{
             	header("location: ../templates/login.php");
             }
         }
         else{
         	echo "Error: " . $sql . "<br>" . $Conn->error;
         	//header("location: ../templates/signup.html");
         }
}else{
	echo "error_log(ldap_list(link_identifier, base_dn, filter))";
}