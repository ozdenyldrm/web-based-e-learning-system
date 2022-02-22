<?php
    include_once ('../database.php');
    session_start();
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
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Courses</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="../css/coin-slider.css" />
<script type="text/javascript" src="../js/cufon-yui.js"></script>
<script type="text/javascript" src="../js/cufon-titillium-250.js"></script>
<script type="text/javascript" src="../js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="../js/script.js"></script>
<script type="text/javascript" src="../js/coin-slider.min.js"></script>
</head>
<body>
<div class="main">
  <div class="header">
    <div class="header_resize">
      <div class="logo">
        <h1><a href="../index.html">WOLS<small>Learn and Implement</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="../index.php"><span>Home Page</span></a></li>
          <li class="active"><a href="course.php"><span>Courses</span></a></li>
          <li><a href="../exercise.php"><span>Exercises</span></a></li>
          <li><a href="../student/studentProfile.php"><span>User Profile</span></a></li>
		  <li><a href="../contact.php"><span>Contact Us</span></a></li>
		    <li><?php echo''; ?> <a href="../logout.php?q=courses/course.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider">
		<a href="#"><img src="../images/slide2.png" width="935" height="307" alt="" /></a> 
		<a href="#"><img src="../images/slidee.png" width="935" height="307" alt="" />
		</a> <a href="#"><img src="../images/slide3.jpg" width="935" height="307" alt="" /></a>
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
          <h2><span>History of C</span> Language</h2>
          <p class="infopost">Posted on <span class="date">11 sep 2018</span> by <a href="#">Admin</a> 
		  &nbsp;&nbsp;|&nbsp;&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com"><span>1</span></a>
		  </p>
          <div class="clr"></div>
          <div class="img"><img src="../images/resim1.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p>C language has evolved from three different structured language ALGOL, BCPL and B Language. It uses many concepts from these languages
			while introduced many new concepts such as datatypes, struct, pointer etc. In 1988, the language was formalised by <b>American National 
			Standard Institute</b>(ANSI). In 1990, a version of C language was approved by the <b>International Standard Organisation</b>(ISO) and that 
			version of C is also referred to as C89.
			</p>
            <p>C language has evolved from three different structured language ALGOL, BCPL and B Language. It uses many concepts from these languages 
			while introduced many new concepts such as datatypes, struct, pointer etc. In 1988, the language was formalised by <b>American National 
			Standard Institute</b>(ANSI). In 1990, a version of C language was approved by the <b>International Standard Organisation</b>(ISO) and that 
			version of C is also referred to as C89.</p>
          </div>
          <div class="clr"></div>
        </div>
        <div class="article">
          <h2><span>Why C Language</span>  is so popular?</h2>
          <p class="infopost">Posted on <span class="date">29 aug 2016</span> by <a href="#">Admin</a> &nbsp;&nbsp;|&nbsp;&nbsp; Filed under 
		  <a href="#">templates</a>, <a href="#">internet</a> <a href="#" class="com"><span>2</span></a>
		  </p>
          <div class="clr"></div>
          <div class="img"><img src="../images/resim2.jpg" width="177" height="213" alt="" class="fl" /></div>
          <div class="post_content">
            <p></p>
            <p><strong>C language is a very good language to introduce yourself to the programming world, as it is a simple procedural language which is 
			capable of doing wonders.</strong> Programs written in C language takes very less time to execute and almost executes at the speed of assembly language
			instructions.Initially C language was mainly used for writing system level programs, like designing operating systems, but there are other 
			applications as well which can be very well designed and developed using C language, like Text Editors, Compilers, Network Drivers etc.</p>
          </div>
          <div class="clr"></div>
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
              <center><h2 class="star"><span>C Programming</span> Lectures</h2></center>
              <div class="clr"></div>
              <ul class="sb_menu">
                <center><li><a href="operators.php">Operators</a></li></center>
                <center><li><a href="datatypes.php">Data Types</a></li></center>
                <center><li><a href="variables.php">Variables</a></li></center>
                <center><li><a href="inputoutput.php">Input/Output</a></li></center>
                <center><li><a href="decision.php">Decision</a></li></center>
                <center><li><a href="switch.php">Switch</a></li></center>
              </ul>
            </div>
          </div>
        </div>
        <div class="g1">
          <div class="g2">
            <div class="gadget">
              <h2 class="star"><span></span></h2>
              <div class="clr"></div>
              <ul class="sb_menu">
                <center><li><a href="loops.php">Loops</a></li></center>
				<center><li><a href="arrays.php">Arrays</a></li></center>
				<center><li><a href="strings.php">Strings</a></li></center>
				<center><li><a href="functions.php">Functions</a></li></center>
				<center><li><a href="structures.php">Structures</a></li></center>
				<center><li><a href="pointers.php">Pointers</a></li></center>
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
		<img src="../images/einstein.jpg" width="75" height="75" />
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
   