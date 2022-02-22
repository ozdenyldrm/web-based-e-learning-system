<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i> Square function</i>
  </h4><br>
  <pre style="font-size:20px;">
   #include <stdio.h>
    float takeSquare(float);
	
	int main()
  {
	  int counter;
	  for(counter=1; counter<=10; counter++){
		printf("Number:%d Square:%d\n",
		counter,takeSquare(counter));
	  }
	      printf("\n%.2f", takeSquare(4.5));
  }
    float takeSquare(float a){
		return a*a;
	}
  </pre>
  </div>
  <img src="../image/examp/cıktı14.png" id="d7" width="480px" height="300px"/>
   <div id="e1">
  <h2>
   Example2 
  </h2><br>
  <p style="font-size:23px;">
   <b><i> Exponent function:</i></b> 
  </p>
  <pre style="font-size:20px;">
    #include <stdio.h>
	 double takeBase(double, double);
     int main(void)
	{
      double a,b;
	  printf("Please enter base value:");
	  scanf("%1f %1f",&a,&b);
	  printf("%2.f", takeBase(a,b));
    }
	takeBase(double x, double y){
		int counter;
		double result = 1.0;
		for(counter=0; counter<y; counter++){
			result *= x;
		}
	   return result;
	}
  </pre>
 </div>
  <img src="../image/examp/cıktı15.png" id="e5" width="440px" height="140px"/>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	