<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1
  </h2><br>
  <h4> <i> String Length:</i>
  </h4><br>
  <pre style="font-size:20px;">
   #include <stdio.h>
    int main(void)
   {
    char s[40];
    int k = 0;
   /* read array */
    printf("Write something : ");
    gets(s);
   /* count character until terminator character */
    while( s[k]!='\0' )
          k++;
          printf("Array length : %d\n" ,k);
    return 0;
  }
  </pre>
  </div>
  <img src="../image/examp/cıktı1.png" id="d6" width="440px" height="140px"/>
   <div id="e1">
  <h2>
   Example2 
  </h2><br>
  <p style="font-size:23px;">
   <b><i> String Reverse:</i></b>
  </p>
  <pre style="font-size:20px;">
    #include <stdio.h>
     int main(void)
	{
      char s[40], temp;
      int i, n;
    /* read array */
      printf("Write something : ");
      gets(s);
    /* until terminator character */
      for(n=0; s[n] != '\0'; n++);
      for(i=0; i<n/2; i++){
          temp = s[n-i-1];
          s[n-i-1] = s[i];
          s[i] = temp;}
          printf("Reverse : %s\n", s);
        return 0;
    }
  </pre>
 </div>
  <img src="../image/examp/cıktı2.png" id="e5" width="440px" height="140px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	