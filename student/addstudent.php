<?php
if(!isset($_SESSION)){
	session_start();
}
include_once('../config.php');

// checking email already registered
 if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
   $stuemail = $_POST['stuemail'];
   $sql = "SELECT email FROM users WHERE email = '".
   $stuemail."'";
   $result = $conn->query($sql);
   $row = $result->num_rows;
   echo json_encode($row);
 }
 
// Insert Student

if(isset($_POST['stusignup']) && isset($_POST['stuname']) && isset
($_POST['stuemail']) && isset($_POST['stupass'])){
	
 $stuname = $_POST['stuname'];
 $stuemail = $_POST['stuemail'];
 $stupass = $_POST['stupass'];
 
 $sql = "INSERT INTO users(username, email, password) VALUES 
 ('$stuname', '$stuemail', '$stupass')";
 
 if($conn->query($sql) == TRUE){
	 echo json_encode("OK");
 } 
 else{
	 echo json_encode("Failed");
 }
}

?>