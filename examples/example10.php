<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2>
  <h4> <i>Recursion Multiply Function:</i> 
  </h4>
  <pre style="font-size:20px;">
    #include <stdio.h>
    unsigned int multiply(unsigned int x, unsigned int y){
     if (x == 1){
      /* Terminating case */
     return y;
    }
     else if (x > 1){
      /* Recursive step */
     return y + multiply(x-1, y);
    }
      /* Catch scenario when x is zero */
     return 0;
    }
    int main() {
      printf("7 times 5 is %d", multiply(7, 5));
      return 0;
    }
  </pre>
  </div>
  <img src="../image/examp/cıktı7.png" id="d7" width="440px" height="260px"/>
   <div id="e1">
  <h2>
   Example2: 
  </h2>
  <p style="font-size:23px;">
   <b><i> Recursion Sum Function:</i></b>
  </p>
  <pre style="font-size:20px;">
    int sum (int num){
     if (num != 0){
      return (num % 10 + sum (num / 10));
    }
    else{
       return 0; } }
   int main(){
     int num, result;
     printf("Enter the number: ");
     scanf("%d", &num);
     result = sum(num);
     printf("Sum of digits in %d is %d\n", num, result);
    return 0;
   }
  </pre>
 </div>
  <img src="../image/examp/cıktı8.png" id="e5" width="500px" height="230px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	