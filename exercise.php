<?php
    include_once 'database.php';
    session_start();
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
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercises</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
	<link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>  
	
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js"  type="text/javascript"></script>
    <script type="text/javascript" src="js/cufon-yui.js"></script>
    <script type="text/javascript" src="js/cufon-titillium-250.js"></script>
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/coin-slider.min.js"></script>
</head>
<body>
 <div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="index.html">WOLS<small>Learn and Implement</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="courses/course.php"><span>Courses</span></a></li>
          <li <?php if(@$_GET['q']==1) echo'class="active"'; ?> ><a href="exercise.php?q=1"><span>Exercises</span></a></li>
          <li><a href="student/studentProfile.php"><span>User Profile</span></a></li>
		  <li><a href="contact.php"><span>Contact Us</span></a></li>
          <li><?php echo''; ?> <a href="logout.php?q=index.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
		<a href="#"><img src="images/slide2.png" width="935" height="307" alt="" /></a> 
		<a href="#"><img src="images/slidee.png" width="935" height="307" alt="" /></a>
		<a href="#"><img src="images/slide3.jpg" width="935" height="307" alt="" /></a>
		</div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
  <br>
  <div class="content">
   <div class="content_resize">
     <div class="mainbar">
      <div class="container">
        <div class="row">
          <div class="col-md-12"> <br />
                <?php if(@$_GET['q']==1) 
                {
                    $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                    echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                    <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</center></b></td><td><center><b>Action</b></center></td></tr>';
                    $c=1;
                    while($row = mysqli_fetch_array($result)) {
                        $name = $row['name'];
                        $total = $row['total'];
                        $good = $row['good'];
                        $eid = $row['eid'];
                    $q12=mysqli_query($con,"SELECT score FROM history WHERE eid='$eid' AND email='$email'" )or die('Error98');
                    $rowcount=mysqli_num_rows($q12);	
                    if($rowcount == 0){
                        echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$total.'</center></td><td><center>'.$good*$total.'</center></td><td><center><b><a href="exercise.php?q=quiz&step=2&eid='.$eid.'&n=1&t='.$total.'" class="btn sub1" style="color:black;margin:0px;background:#1de9b6"><span class="glyphicon glyphicon-new-window" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Start</b></span></a></b></center></td></tr>';
                    }
                    else
                    {
                    echo '<tr style="color:#99cc32"><td><center>'.$c++.'</center></td><td><center>'.$name.'&nbsp;<span title="This quiz is already solve by you" class="glyphicon glyphicon-ok" aria-hidden="true"></span></center></td><td><center>'.$total.'</center></td><td><center>'.$good*$total.'</center></td><td><center><b><a href="update.php?q=quizre&step=25&eid='.$eid.'&n=1&t='.$total.'" class="pull-right btn sub1" style="color:black;margin:0px;background:red"><span class="glyphicon glyphicon-repeat" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Restart</b></span></a></b></center></td></tr>';
                    }
                    }
                    $c=0;
                    echo '</table></div></div>';
                }?>

                <?php
                    if(@$_GET['q']== 'quiz' && @$_GET['step']== 2) 
                    {
                        $eid=@$_GET['eid'];
                        $sn=@$_GET['n'];
                        $total=@$_GET['t'];
                        $q=mysqli_query($con,"SELECT * FROM questions WHERE eid='$eid' AND sn='$sn' " );
                        echo '<div class="panel" style="margin:5%">';
                        while($row=mysqli_fetch_array($q) )
                        {
                            $qns=$row['qns'];
                            $qid=$row['qid'];
                            echo '<b>Question &nbsp;'.$sn.'&nbsp;::<br /><br />'.$qns.'</b><br /><br />';
                        }
                        $q=mysqli_query($con,"SELECT * FROM options WHERE qid='$qid' " );
                        echo '<form action="update.php?q=quiz&step=2&eid='.$eid.'&n='.$sn.'&t='.$total.'&qid='.$qid.'" method="POST"  class="form-horizontal">
                        <br />';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $option=$row['option'];
                            $optionid=$row['optionid'];
                            echo'<input type="radio" name="ans" value="'.$optionid.'">&nbsp;'.$option.'<br /><br />';
                        }
                        echo'<br /><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span>&nbsp;Submit</button></form></div>';
                    }

                    if(@$_GET['q']== 'result' && @$_GET['eid']) 
                    {
                        $eid=@$_GET['eid'];
                        $q=mysqli_query($con,"SELECT * FROM history WHERE eid='$eid' AND email='$email' " )or die('Error157');
                        echo  '<div class="panel">
                        <center><h1 class="title" style="color:#660033">Result of exercise</h1><center><br /><table class="table table-striped title1" style="font-size:20px;font-weight:1000;">';

                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            $w=$row['wrong'];
                            $r=$row['good'];
                            $qa=$row['level'];
                            echo '<tr style="color:#66CCFF"><td>Total Questions</td><td>'.$qa.'</td></tr>
                                <tr style="color:#99cc32"><td>right Answer&nbsp;<span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span></td><td>'.$r.'</td></tr> 
                                <tr style="color:red"><td>Wrong Answer&nbsp;<span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></td><td>'.$w.'</td></tr>
                                <tr style="color:#66CCFF"><td>Score&nbsp;<span class="glyphicon glyphicon-star" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        $q=mysqli_query($con,"SELECT * FROM rank WHERE  email='$email' " )or die('Error157');
                        while($row=mysqli_fetch_array($q) )
                        {
                            $s=$row['score'];
                            echo '<tr style="color:#990000"><td>Overall Score&nbsp;<span class="glyphicon glyphicon-stats" aria-hidden="true"></span></td><td>'.$s.'</td></tr>';
                        }
                        echo '</table></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']== 2) 
                    {
                        $q=mysqli_query($con,"SELECT * FROM history WHERE email='$email' ORDER BY date DESC " )or die('Error197');
                        echo  '<div class="panel title">
                        <table class="table table-striped title1" >
                        <tr style="color:black;"><td><center><b>S.N.</b></center></td><td><center><b>Quiz</b></center></td><td><center><b>Question Solved</b></center></td><td><center><b>Right</b></center></td><td><center><b>Wrong<b></center></td><td><center><b>Score</b></center></td>';
                        $c=0;
                        while($row=mysqli_fetch_array($q) )
                        {
                        $eid=$row['eid'];
                        $s=$row['score'];
                        $w=$row['wrong'];
                        $r=$row['good'];
                        $qa=$row['level'];
                        $q23=mysqli_query($con,"SELECT name FROM quiz WHERE  eid='$eid' " )or die('Error208');

                        while($row=mysqli_fetch_array($q23) )
                        {  $name=$row['name'];  }
                        $c++;
                        echo '<tr><td><center>'.$c.'</center></td><td><center>'.$name.'</center></td><td><center>'.$qa.'</center></td><td><center>'.$r.'</center></td><td><center>'.$w.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo'</table></div>';
                    }

                    if(@$_GET['q']== 3) 
                    {
                        $q=mysqli_query($con,"SELECT * FROM rank ORDER BY score DESC " )or die('Error223');
                        echo  '<div class="panel title"><div class="table-responsive">
                        <table class="table table-striped title1" >
                        <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Email</b></center></td><td><center><b>Score</b></center></td></tr>';
                        $c=0;

                        while($row=mysqli_fetch_array($q) )
                        {
                            $e=$row['email'];
                            $s=$row['score'];
                            $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                            while($row=mysqli_fetch_array($q12) )
                            {
                                $name=$row['name'];
                            }
                            $c++;
                            echo '<tr><td style="color:black"><center><b>'.$c.'</b></center></td><td><center>'.$name.'</center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td></tr>';
                        }
                        echo '</table></div></div>';
                    }
                ?>
			 </div>
		   </div>
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
                <li><a href="#">Important Notice</a><br />
                  You should do the exercise before 18.05.21</li>
                 <li><a href="#">Feedback</a><br />
                  Leave a comment now.</li>
                <li><a href="#">Fringilla velit magna</a><br />
                  Curabitur vel urna in tristique</li>
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
		<img src="images/einstein.jpg" width="75" height="75" />
            <blockquote>
             <p>You never fail until you stop trying.</p>
             <footer>- The Scientist: <cite title="Source Title">Albert Einstein</cite></footer>
            </blockquote>
	  </div>
      <div class="col c2">
        <h2><span>About</span> Us</h2>
        <p>WOLS is a dynamic web based e-Learning system. The aim of developing the WOLS is students to gain an interactive software learning experience. </p>
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
      <p class="lf">Copyright &copy; <a href="#">www.wols.com.tr</a> All Rights Reserved</p>
      <p class="rf">Design by <a target="_blank" href="#">ProjectTeam</a></p>
      <div style="clear:both;"></div>
    </div>
  </div>
</div>
</body>
</html>