<?php

 include"mainInclude/header.php";
 include_once 'database.php';
 
  if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
 
 $query = "SELECT * FROM user WHERE email = '$email'";
 $result = $con->query($query);
 if($result->num_rows == 1){
	 $row = $result->fetch_assoc();
	 $email = $row["email"];
 }

 if(isset($_REQUEST['submitContactusBtn'])){
	if(($_REQUEST['c_content'] == "")){
	 // msg displayed if required field missing
	 $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert">Fill All Fileds</div>';	 
	} else{
	  $ccontent = $_REQUEST["c_content"];
	  $csubject = $_REQUEST["c_subject"];
	  $query = "INSERT INTO contactus (c_content, c_subject, email) VALUES ('$ccontent', '$csubject', '$email')";
	  if($con->query($query) == TRUE){
		// below msg display on form submit success
		$passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert">Submitted Successfully</div>';
	  } else{
		// below msg display on form submit failed
		$passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert">Unable to Submit</div>';
	  }
	}
 }

?>

   <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>Contact</span></h2>
          <div class="clr"></div>
          <p><strong>WE LOVE HEARING FROM YOU! <br><br>HERE ARE SOME SIMPLE WAYS TO GET IN TOUCH WITH US...</strong></p>
        </div>
        <div class="article">
          <h2><span>Send us</span> mail</h2><br>
          <div class="clr"></div>
           <form method="POST" enctype="multipart/form-data" id="c4">
	       <div class="form-group">
            <label for="stuName"><strong>E-mail</strong></label>
	        <input type="text" class="form-control" id="email" name="email" value=" <?php if(isset($email)) {echo $email;} ?>" >
           </div>
	       <div class="form-group">
            <label for="c_subject"><strong>Subject</strong></label>
	        <input type="text" class="form-control" id="c_subject" name="c_subject">
           </div>
           <div class="form-group">
            <label for="c_content"><strong>Write Message:</strong></label>
	        <textarea type="text" class="form-control" id="c_content" name="c_content" style="height:130px;" row=2></textarea>
           </div>
           <button type="submit" class="btn btn-primary" name="submitContactusBtn">Submit</button>
            <?php if(isset($passmsg)) {echo $passmsg;}?>
          </form>
        </div>
      </div>
      <div class="sidebar">
        <div class="searchform">
          <form id="formsearch" name="formsearch" method="post" action="#">
            <span>
            <input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search our ste:" type="text" />
            </span>
            <input name="button_search" src="images/search.gif" class="button_search" type="image" />
          </form>
        </div>
        <div class="clr"></div>
        <div class="g1">
          <div class="g2">
            <div class="gadget">
             <h2 class="star"><span>Sidebar</span> Menu</h2>
              <div class="clr"></div>
              <ul class="sb_menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="examples/example1.php">Examples</a></li>
                <li><a href="question.php">Ask Question</a></li>
                <li><a href="#">Notifications</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="blog.php">Blog</a></li>
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
        <img src="images/einstein.jpg" width="75" height="75" /><br>
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
 </div>
  
</div>  <!-- close row div from header file -->
  
 <?php
    include "mainInclude/footer.php"; 
 ?>