<?php

 include"stuInclude/header.php";
 include_once('../database.php');
 
  if(!(isset($_SESSION['email'])))
    {
        header("location:../login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once ('../database.php');
    }

 
 $query = "SELECT * FROM user WHERE email = '$email'";
 $result = $con->query($query);
 if($result->num_rows == 1){
	 $row = $result->fetch_assoc();
	 $stuName = $row["name"];
	 $stuColl = $row["college"];
	 $stuGen = $row["gender"];
	 $stuDep = $row["department"];
	 $stuImg = $row["images"];

 }
 
 if(isset($_REQUEST['updateStuNameBtn'])){
	 if(($_REQUEST['stuName'] == "")){
		$passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fields </div>';
	 } else{
		 $stuName = $_REQUEST["stuName"];
		 $stuColl = $_REQUEST["stuColl"];
		 $stuDep = $_REQUEST["stuDep"];
		 $stuGen = $_REQUEST["stuGen"];
		 $stu_image = $_FILES['stuImg']['name'];
		 $stu_image_temp = $_FILES['stuImg']['tmp_name'];
		 $img_folder = '../image/stu/'. $stu_image;
		 
		 move_uploaded_file($stu_image_temp, $img_folder);
		 $query = "UPDATE user SET name = '$stuName', images = '$img_folder', 
		 department = '$stuDep', gender = '$stuGen' WHERE email = '$email'";
		 
		 if($con->query($query) == TRUE){
			 $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
		 } else{
			 $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
		 }
	 }
 }
?>
 
<div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <img src="../image/stu/student.jpg" width="250px" height="260px" alt="studentimage" class="img-thumbnail rounded-circle"> &emsp;&emsp;
          <div class="clr"></div>
           <h2><span>Profile</span> Settings</h2>
        </div>
        <div class="article">
         <div class="clr"></div>
          <form method="POST" enctype="multipart/form-data">
	       <div class="form-group">
           <label for="stuName"><strong>Name and Surname</strong></label>
	       <input type="text" class="form-control" id="stuName" name="stuName" value="<?php if(isset($stuName)) {echo $stuName;} ?>">
	       </div>
	       <div class="form-group">
           <label for="stuColl"><strong>College</strong></label>
	       <input type="text" class="form-control" id="stuColl" name="stuColl" value="<?php if(isset($stuColl)) {echo $stuColl;} ?>">
	       </div>
	       <div class="form-group">
           <label for="stuDep"><strong>Department</strong></label>
	       <input type="text" class="form-control" id="stuDep" name="stuDep" value="<?php if(isset($stuDep)) {echo $stuDep;} ?>">
	       </div>
	       <div class="form-group">
           <label for="stuGen"><strong>Gender</strong></label>
	       <input type="text" class="form-control" id="stuGen" name="stuGen" value="<?php if(isset($stuGen)) {echo $stuGen;} ?>">
	       </div>
	       <div class="form-group">
           <label for="stuImg"><strong>Upload Image</strong></label>
	       <input type="file" class="form-control-file" id="stuImg" name="stuImg">
	       </div>
	       <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Update</button>
	       <?php if(isset($passmsg)) {echo $passmsg; } ?> 
	       <button type="submit" class="btn btn-success" name="studentChangePass.php">Change Password</button>
	      </form>
        </div>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="../images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="g1">
          <div class="g2">
            <div class="gadget">
              <h2 class="star"><span>Sidebar</span> Menu</h2>
              <div class="clr"></div>
              <ul class="sb_menu">
                <li><a href="../index.php">Home</a></li>
                <li><a href="../examples/example1.php">Examples</a></li>
                <li><a href="../question.php">Ask Question</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="../about.php">About Us</a></li>
                <li><a href="../blog.php">Blog</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="g1">
          <div class="g2">
            <div class="gadget">
              <h2 class="star"><span>Notifications</span></h2>
              <div class="clr"></div>
              <ul class="ex_menu">
                <li><a href="#">Teacher Notes</a><br />
                  First exercise active now.</li>
                <li><a href="#">Teacher Notes</a><br />
                  You should do the exercise before 18.05.21</li>
                <li><a href="#"></a><br />
                  Tellus eleifend magna eget</li>
                <li><a href="#">Feedback</a><br />
                  Leave a comment now.</li>
                <li><a href="#">Suspendisse bibendum</a><br />
                  Cras id urna orbi tincidunt orci ac</li>
                <li><a href="#">Donec mattis</a><br />
                  purus nec placerat bibendum</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="fbg">
    <div class="fbg_resize">
      <div class="col c1">
        <h2><span>Quote</span> of The Day</h2>
        <img src="../images/einstein.jpg" width="75" height="75" /><br>
            <blockquote>
             <p>You never fail until you stop trying.</p>
             <footer>- The Scientist: <cite title="Source Title">Albert Einstein</cite></footer>
            </blockquote>
		</div>
      <div class="col c2">
        <h2><span>About</span> Us</h2>
        <p>WOLS is a dynamic web based e-Learning system. The aim of developing the WOLS is students to gain an interactive software learning experience.</p>
        <ul class="fbg_ul">
          <li><a href="#">Lorem ipsum dolor labore et dolore.</a></li>
          <li><a href="#">Excepteur officia deserunt.</a></li>
          <li><a href="#">Integer tellus ipsum tempor sed.</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2><span>Contact</span> Us</h2>
        <p>Give us feedback, we will be glad to improve ourselves.</p>
        <p class="contact_info"> <span>Address:</span> 1453 TemplateAccess, TUR<br />
          <span>Telephone:</span> +216-317-66-00<br />
          <span>FAX:</span> +458-4578<br />
          <span>Others:</span> +301 - 0125 - 01258<br />
          <span>E-mail:</span> <a href="#">mail@wols.com</a> </p>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright &copy; <a href="#">www.wols.com.tr</a>. All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="#">ProjectTeam</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
  </div>
 </div>
 </div>
  
</div>  <!-- close row div from header file -->
  
 <?php
    include"stuInclude/footer.php"; 
 ?>
  
