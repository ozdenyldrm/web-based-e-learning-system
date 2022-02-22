<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Implementation of Typedef:</i> 
  </h4><br>
  <pre style="font-size:20px;">
    #include<stdio.h> 
     int main( void ){
		 
    // Define new data type 
     enum boolean {
         false = 0, 
         true = 1
     };
    // With this definition we can create boolean 
     type variables with 
     typedef enum boolean bool;
     bool isTrue;
     isTrue = true;
     if( isTrue == true )
      printf( "True \n" ); 
      return 0;
    }
  </pre>
  </div>
  <div id="d8">
   <h2>
   Example 2
   </h2><br>
   <pre style="font-size:20px;">
   <b> Implementation of Struct: </b>
    #include<stdio.h>
     int main( void ){
		 
      struct {
         int year;
         int month;
         int day; 
      }birth_day; 
	  
      printf("Enter your birth day");
      printf(" in MM-DD-YYYY format> ");
      scanf("%d-%d-%d", &birth_day month,
           &birth_day day,&birth_day .year); 
		   
      printf("Your birth day: "); 
      printf("%d/%d/%d\n", birth_day, month,
          birth_day, day,birth_day, year); 
    return 0;
  }
  </pre>
 </div>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	