<?php

 include('../mainInclude/header.php');
 include_once('../config.php');
 
 if(isset($_SESSION['user'])){
	 $txt_uname = $_SESSION['user'];
 } else{
	 echo "<script> location.href='../login.php'; </script>";
 }
 
  $query = "SELECT * FROM users WHERE username='$txt_uname'";
  $result = $conn->query($query);
   if($result->num_rows == 1){
	 $row = $result->fetch_assoc();
	 $stuEmail = $row["email"];
	 $stuImg = $row["images"];
   }
 
 if(isset($_REQUEST['stuPassUpdateBtn'])){
	 if(($_REQUEST['stuNewPass'] == "")){
		//msg displayed if required fiels missing
		 $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
	 } else{
		 $stuPass = $_REQUEST['stuNewPass'];
		 $query = "UPDATE users SET password = '$stuPass' WHERE email = '$stuEmail'";
		 if($conn->query($query) == TRUE){
		   //below msg display on form submit sucess
			$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Updated Successfully</div>';
		 } else{
		   //below msg display on form submit failed
			$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Update</div>';
		 }
     }
 }

?>

 <div class="sag_icerik">
   <form class="mt-5 mx-5" method="POST" id="c2">
    <div class="form-group">
     <label for="stuEmail">Email</label>
     <input type="email" class="form-control" id="stuEmail" value=" <?php echo $stuEmail ?>" readonly>
    </div>
	<div class="form-group">
     <label for="inputnewpassword">New Password</label>
     <input type="password" class="form-control" id="inputnewpassword" placeholder="New Password" name="stuNewPass">
    </div>
	<button type="submit" class="btn btn-primary mr-4 mt-4" name="stuPassUpdateBtn">Update</button>
	<button type="reset" class="btn btn-secondary mt-4">Reset</button>
    <?php if(isset($passmsg)) {echo $passmsg;} ?>
   </form>
 </div>
 
</div> <!-- close row div from header file -->

<?php
    include ('../mainInclude/footer.php'); 
 ?>