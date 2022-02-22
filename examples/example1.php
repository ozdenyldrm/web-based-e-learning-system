<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Implementation of Operators:</i> 
  </h4><br>
  <pre style="font-size:20px;">
   #include< stdio.h >
    int main()
   {
     int a = 20;
     int b = 10, x = 36;
     int y, sum;
     y = a + b >= 20 || a-b <= 10;
     if(x+y < 10){
        printf("Value of y = %d", y);
     else{
        sum = x + y;
        printf("Value of x+y=%d",sum);
    }
   return 0;
  }
  </pre>
  </div>
    <img src="../image/examp/examp.png" id="d2" width="500px" height="520px"/><br><br>
  <div id="e1">
   <h2>
   Example 2
   </h2><br>
   <pre style="font-size:20px;">
   <b> Implementation of Operators: </b>
    #include< stdio.h >
     int main()
   {
     int a = 15;
     int x;
     x = a >= 10 && a <= 20;
     printf("Value of x = %d", x);
   }
  </pre>
 </div>
  <img src="../image/examp/cıktı13.png" id="d9" width="500px" height="300px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	