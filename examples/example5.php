<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Maximum Element:</i> 
  </h4><br>
  <pre style="font-size:20px;">
    #include < stdio.h >
    #define SIZE 5
     int main(void)
   {
     int i;
     double a[SIZE] = { 1.2, 3.4, 5.6, 7.8, 9.0 };
     double max = 0.0;
    /* Find max. elements of array*/
     for(i = 0; i < SIZE; i++)
      if (a[i] > max)
       max = a[i];
       printf("max = %.2lf\n", max);
       return 0;
   }
  </pre>
  </div>
  <img src="../image/examp/cıktı.png" id="d6" width="340px" height="100px" />
   <div id="e1">
  <h2>
   Example2
  </h2><br>
  <p style="font-size:23px;">
   <b><i> Sum of Two Array: </i></b> 
  </p>
  <pre style="font-size:20px;">
      int main(void){
        int i, N, A[100], B[100], C[100];
        printf("Enter size of array:\n");
        scanf("%d", &N);
        for(i = 0; i < N; i++){ /* Read array elements*/
            printf("A[%d]=",i);
            scanf("%d",&A[i]); }
        for(i = 0; i < N; i++){ /* Read array elements*/
            printf("B[%d]=",i);
            scanf("%d",&B[i]); }
        for(i = 0; i < N; i++){ /* Print out sum of array */
            C[i] = A[i] + B[i];
            printf("C[%d]=%d\n", i, C[i]); }
        return 0;
    }
  </pre>
  </div>
 </div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	