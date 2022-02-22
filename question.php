<?php

 include"mainInclude/header.php";
 include_once('database.php');
 
  if(isset($_SESSION['user'])){
	 $txt_uname = $_SESSION['user'];
 } else{
	 echo "<script> location.href='/login.php'; </script>";
 }
 
 $query = "SELECT * FROM users WHERE username = '$txt_uname'";
 $result = $conn->query($query);
 if($result->num_rows == 1){
	$row = $result->fetch_assoc();
	$stuId = $row["id"];
 }

 if(isset($_REQUEST['submitQuestionBtn'])){
	if(($_REQUEST['q_content'] == "")){
	 // msg displayed if required field missing
	 $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';	 
	} else{
	  $qcontent = $_REQUEST["q_content"];
	  $query = "INSERT INTO question (q_content, id) VALUES ('$qcontent', '$stuId')";
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
    <div class="sol_taraf">
	 <br><br>
     <center>
	  <div class="card bg-light mb-3" style="max-width: 15rem;">
       <div class="card-header">Teacher Notes &nbsp;
	    <i class="fas fa-chalkboard-teacher"></i>
	   </div>
       <div class="card-body">
        <p class="card-text">First exercise active now.</p>
		<a href="exercise1.php" class="btn btn-primary">More</a>
       </div>
       </div>
      </center><br>
	  <center>
	   <div class="card bg-light mb-3" style="max-width: 15rem;">
        <div class="card-header">Important Notice &nbsp; 
		 <i class="fas fa-bullhorn"></i>
		</div>
        <div class="card-body">
         <p class="card-text">You should do the first exercise before 12.02.20</p>
		 <a href="exercise1.php" class="btn btn-primary">Go to Exercise</a>
        </div>
        </div>
       </center>
	 </div>	
     <div class="sag_icerik">
      <form class="mx-5" method="POST" enctype="multipart/form-data" id="c3">
      <div class="form-group">
       <label for="stuId">Student ID</label>
	   <input type="text" class="form-control" id="stuId" name="stuId" value=" <?php if(isset($stuId)) {echo $stuId;} ?>" readonly>
      </div>
      <div class="form-group">
       <label for="q_content">Write Your Question:</label>
	   <textarea type="text" class="form-control" id="q_content" name="q_content" style="height:120px;" row=2></textarea>
      </div>
      <button type="submit" class="btn btn-primary" name="submitQuestionBtn">Submit</button>
      <?php if(isset($passmsg)) {echo $passmsg;}?>
      </form>
     </div>
 
</div> <!-- close row div from header file -->

<?php 
 include"mainInclude/footer.php";
?>
	