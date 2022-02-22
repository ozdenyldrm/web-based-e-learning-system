<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e3">
  <br><br>
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Arrays of Structures:</i> 
  </h4><br>
  <pre style="font-size:20px;">
   #include<stdio.h> 
    int main( void){
     int i;
     struct birthDate {
           int day;
           int month; 
           int year;
     };
     struct person data{
          char name[40]; 
	  int lenght; 
       // Define a variable of an other structure type inside 
          struct struct birthDate date;
          struct person data person[3]={ "Ali", 170, { 17, 2, 1976 },
                                       "Veli", 178, { 14, 4, 1980 }, 
                                       "Cenk", 176, { 4, 11, 1983 }};
      // Print all values of people defined in array 
         for(i = 0; i < 3; i++) {
           printf("Record No. : %d\n", ( i + 1));
           printf("Name: %s\n", person[i].name);
           printf("Length: %d\n", person[i].lenght); 
           printf("Birth Date: %d/%d/%d\n\n", per son[i].date.day,
           person[i].date.month, person[i].date. year);
       }
    return 0;
  }
  </pre>
  </div>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	