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
<title>Home</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
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
          <li class="active"><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="courses/course.php"><span>Courses</span></a></li>
          <li <?php if(@$_GET['q']==1) ?> ><a href="exercise.php?q=1"><span>Exercises</span></a></li>
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
  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          <h2><span>It’s Time To Start</span> Learn Software</h2>
          <p class="infopost">Posted on <span class="date">11 sep 2021</span> by <a href="#">Admin</a> 
		  &nbsp;&nbsp;|&nbsp;&nbsp; Learning <a href="#">System</a>, <a href="#" class="com"><span>1</span></a>
		  </p>
          <div class="clr"></div>
          <div class="img"><img src="images/resim1.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p>WOLS is a Web-based online learning system, this tutorial system has been developed for students to gain an interactive learning 
			 software experience. This website offer to you many tutorials, and exercises for the C programming language course. Start learning 
			 to C programming with the contents and exercises explained with WOLS. 
			</p>
            <p><strong>Research shows that students and employees can access more information and learn faster with online education.</strong> 
			At the same time, users can learn at their own learning speed with online training; they can speed up and slow down training according
			to their own level, go back and reread a topic that they do not understand, or skip a topic they know.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>Learn to program with step-by-step,</span>  real world tutorials.</h2>
          <p class="infopost">Posted on <span class="date">29 oct 2020</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Learning
		  <a href="#">System</a>, <a href="#" class="com"><span>2</span></a>
		  </p>
          <div class="clr"></div>
          <div class="img"><img src="images/resim2.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p></p>
            <p><strong>When the application is presented with understandable designs by a professional team, it not only saves users a lot of 
			time but also prevents student accumulation.</strong> Concise and concise knowledge under a certain discipline, with a focus on your 
			goal. This e-learning method, which allows you to access by offering it, has become one of the most powerful learning tools of our age.</p>
            <p class="spec"><a href="#" class="rm">Read more &raquo;</a></p>
          </div>
          <div class="clr"></div>
        </div>
        <p class="pages"><small>Page 1 of 2</small> <span>1</span> <a href="#">2</a> <a href="#">&raquo;</a></p>
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
          <li><a href="#">We develop wols for you</a></li>
          <li><a href="#">Go to about us</a></li>
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
