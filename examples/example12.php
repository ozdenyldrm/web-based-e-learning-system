<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i> Strlen Function: </i>
  </h4><br>
  <pre style="font-size:20px;">
    #include <stdio.h>
    #include <string.h>
     int main()
   {
     char str[50];
     int len;
     strcpy(str,"This is tutorialspoint.com");
     len = strlen(str);
     printf("Length of |%s| is |%d|\n", str, len);
   return(0);
  }
  </pre>
  </div>
    <img src="../image/examp/cıktı11.png" id="d7" width="480px" height="300px"/><br><br>
   <div id="e1">
   <br>
  <h2>
   Example2 
  </h2><br>
  <p style="font-size:23px;">
   <b><i>Strcpy Function:</i>  </b>
  </p>
   <pre style="font-size:20px;">
    #include <stdio.h>
    #include <string.h>
     int main()
   {
     char src[40];
     char dest[100];
     strcpy(src,"This is tutorialspoint.com");
     strcpy(dest, src);
     printf("Final copied string : %s\n", dest);
   return(0);
  }
  </pre>
 </div>
  <img src="../image/examp/cıktı12.png" id="d5" width="500px" height="300px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	