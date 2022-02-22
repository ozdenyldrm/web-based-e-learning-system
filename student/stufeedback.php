<?php
 
 include('../mainInclude/header.php');
 include_once('../config.php');
 
 if(isset($_SESSION['user'])){
	 $txt_uname = $_SESSION['user'];
 } else{
	 echo "<script> location.href='../login.php'; </script>";
 }
 
 $query = "SELECT * FROM users WHERE username = '$txt_uname'";
 $result = $conn->query($query);
 if($result->num_rows == 1){
	$row = $result->fetch_assoc();
	$stuId = $row["id"];
 }

 if(isset($_REQUEST['submitFeedbackBtn'])){
	if(($_REQUEST['f_content'] == "")){
	 // msg displayed if required field missing
	 $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';	 
	} else{
	  $fcontent = $_REQUEST["f_content"];
	  $query = "INSERT INTO feedback (f_content, id) VALUES ('$fcontent', '$stuId')";
	  if($conn->query($query) == TRUE){
		// below msg display on form submit success
		$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted Successfully</div>';
	  } else{
		// below msg display on form submit failed
		$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Submit</div>';
	  }
	}
 }

?>

 <div class="sag_icerik">
  <form class="mx-5" method="POST" enctype="multipart/form-data" id="c3">
   <div class="form-group">
    <label for="stuId">Student ID</label>
	<input type="text" class="form-control" id="stuId" name="stuId" value=" <?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
   </div>
   <div class="form-group">
    <label for="f_content">Write Feedback:</label>
	<textarea type="text" class="form-control" id="f_content" name="f_content" style="height:120px;" row=2></textarea>
   </div>
   <button type="submit" class="btn btn-primary" name="submitFeedbackBtn">Submit</button>
   <?php if(isset($passmsg)) {echo $passmsg;}?>
  </form>
 </div>
 
</div> <!-- close row div from header file -->

<?php
    include ('../mainInclude/footer.php'); 
 ?>
	