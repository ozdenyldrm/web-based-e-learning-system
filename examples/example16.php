<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Ipv4 Address:</i> 
  </h4><br>
  <pre style="font-size:20px;">
   #include <stdio.h> 
    int main(void){
     unsigned int ipAdres = 0xc0a80102;
     unsigned maske =Oxff000000; 
     int segmenti, segment2, segment3, segment4;
     int i, bit=32; 
     unsigned tmp; 
     for(i=1;i<=4;i++){
        tmp = ipAdres & maske;
       if(i!=4){
          maske = maske >> 8;
          tmp = tmp >> (bit-i*8); 
          printf("%d.", tmp);
        }
       else printf("%d", tmp);
    }
   getchar();
   return 0;
 }
  </pre>
  </div>
  <div id="d8">
   <h2>
   Example 2
   </h2><br>
   <pre style="font-size:20px;">
   <b> Binary Addition: </b>
    #include<stdio.h> 
    #include<stdlib.h>
     int main(){
      unsigned int x=3, v=1, sum, carry; 
      sum = x^y; 
      carry = x & y; 
      while(carry!=0){
        carry = carry « 1;
        x = sum; 
        y = carry; 
        sum = x^y; 
        carry = x & y;
      }
    printf("%d", sum); 
    getchar();
    return 0;
  }
  </pre>
 </div>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	