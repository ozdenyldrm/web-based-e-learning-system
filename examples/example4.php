<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Question:</i>  According to entered midterm and final grade, <br>
   finding that students passed through the course.
  </h4><br>
  <pre style="font-size:20px;">
   – Pseudo Code:
   Step 1: Start
   Step 2: Write (“Enter visa grade”)
   Step 3: Read vize
   Step 4: Write (“Enter final grade”)
   Step 5: Read final
   Step 6: average = vize * 0.40 + final * 0.60
   Step 7: IF average >= 60 THEN
           Write “Student Passed”
   Step 8: ELSE
           Write “Student Failed“
   Step 9: End
  </pre>
  </div>
  <img src="../image/examp/vize-final.png" id="d2" width="500px" height="520px" /><br><br>
   <div id="e1">
  <h2>
   Example2
  </h2><br>
  <p style="font-size:23px;">
   <b><i>Question:</i> Print out greater number which are entered.</b> 
  </p>
  <pre style="font-size:20px;">
  Step 1: Start
  Step 2: Enter first number.(x)
  Step 3: Enter second number.(y)
  Step 4: If x>y then write 1. number
          is greater.
  Step 5: If y>x then write 2. number
          is greater..
  Step 6: Else write numbers are
          equal.
  Step 7: End
  </pre>
  </div>
  <img src="../image/examp/greater.png" id="d3" width="500px" height="520px" />
  </div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	