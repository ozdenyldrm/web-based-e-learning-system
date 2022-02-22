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
<title>Distorted | Blog</title>
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
        <h1><a href="index.html">Distor<span>ted</span> <small>Company Slogan Here</small></a></h1>
      </div>
      <div class="menu_nav">
        <ul>
          <li><a href="index.php"><span>Home Page</span></a></li>
          <li><a href="support.html"><span>Support</span></a></li>
          <li><a href="about.php"><span>About Us</span></a></li>
          <li class="active"><a href="blog.php"><span>Blog</span></a></li>
          <li><a href="contact.php"><span>Contact Us</span></a></li>
		   <li><?php echo''; ?> <a href="logout.php?q=blog.php"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
      <div class="slider">
        <div id="coin-slider"><a href="#"><img src="images/slide2.png" width="935" height="307" alt="" /></a> <a href="#"><img src="images/slidee.png" width="935" height="307" alt="" /></a> <a href="#"><img src="images/slide3.jpg" width="935" height="307" alt="" /></a></div>
        <div class="clr"></div>
      </div>
      <div class="clr"></div>
    </div>
  </div>
   <div class="content">
    <div class="content_resize">
          <div class="mainbar">
        <div class="article">
          <h2><span>3</span> Responses</h2>
          <div class="clr"></div>
          <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#">admin</a> Says:<br />
              April 20th, 2020 at 2:17 pm</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum.</p>
          </div>
          <div class="comment"> <a href="#"><img src="images/userpic.gif" width="40" height="40" alt="" class="userpic" /></a>
            <p><a href="#">Admin</a> Says:<br />
              April 20th, 2021 at 3:21 pm</p>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo.</p>
          </div>
        </div>
        <div class="article">
          <h2><span>Leave a</span> Reply</h2>
          <div class="clr"></div>
          <form action="#" method="post" id="leavereply">
            <ol>
              <li>
                <label for="name">Name (required)</label>
                <input id="name" name="name" class="text" />
              </li>
              <li>
                <label for="email">Email Address (required)</label>
                <input id="email" name="email" class="text" />
              </li>
              <li>
                <label for="website">Website</label>
                <input id="website" name="website" class="text" />
              </li>
              <li>
                <label for="message">Your Message</label>
                <textarea id="message" name="message" rows="8" cols="50"></textarea>
              </li>
              <li>
                <input type="image" name="imageField" id="imageField" src="images/submit.gif" class="send" />
                <div class="clr"></div>
              </li>
            </ol>
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
</div>
</body>
</html>
