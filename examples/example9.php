<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Random Number Generator:</i> 
  </h4>
  <pre style="font-size:20px;">
   #include <stdio.h> 
   #include <stdlib.h>
   
    int main( void ) {
    int i; /* counter */
    for (i = 1; i <= 20; i++)
   {
    /* pick random number from 1 to 6 and output it */ 
     printf("%10d", 1 + ( rand() % 6 ) );
    /* if counter is divisible by 5, begin new line of output */
     if ( i % 5 == 0 ) {
          printf("\n"); 
		} 
	} 
    return 0; /* indicates successful termination */
 }
  </pre>
  </div>
  <img src="../image/examp/cıktı5.png" id="d7" width="440px" height="260px"/>
   <div id="e1">
  <h2>
   Example2 
  </h2>
  <p style="font-size:23px;">
   <b><i> Random Number Generator:</i></b>
  </p>
  <pre style="font-size:20px;">
   /* Randomizing die-rolling program */ 
    int main( void ){
     int i; 
     printf("Enter seed: "); 
     scanf("%u", &seed ); 
     srand( seed );
   /* seed random number generator */
     for (i = 1; i <= 10; i++) {
     printf("%10d", 1 + ( rand() % 6 ) );
	 if(i%5 == 0){
		 printf("\n"); }
	}
	return 0;
   }
  </pre>
 </div>
  <img src="../image/examp/cıktı6.png" id="e5" width="540px" height="230px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	