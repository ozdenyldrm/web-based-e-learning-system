<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e2">
  <h2>
   Example1: 
  </h2><br>
  <h4> <i>Question:</i> Enter grade from keyboard and convert it into <br> letter form 
  </h4>
   <pre style="font-size:20px;">
  1. Start
  2. evenCounter = 0
  3. oddCounter = 0
  4. counter = 1
  5. while counter < = 10 repeat
	    Enter number from keyboard
	    number
	      if number % 2 == 0
			evenCounter++
		  else
			oddCounter++
		    counter++
  6. Print evenCounter
  7. Print oddCounter
  8. End
  </pre>
  </div>
  <img src="../image/examp/while1.png" id="d4" width="500px" height="520px" />
  <br><br>
  <div id="e2">
  <h2>
   Example2: 
  </h2><br>
  <p style="font-size:23px;">
   <b><i>Question:</i></b> Draw a flowchart of an algorithm that calculates <br> the area of a square when
   the input value is 1 from keyboard <br> and calculates round measure when the
   input value is 2. <br> If user puts out of 1 or 2 it will give "wrong input message".<br>
   The edge length of square is also put from keyboard.
  </p>
  </div>
  <img src="../image/examp/loop2.png" id="d5" width="520px" height="520px" />
  </div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	