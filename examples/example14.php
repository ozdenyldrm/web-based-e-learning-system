<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Creating a Sequential Access File:</i> 
  </h4><br>
  <pre style="font-size:20px;">
    int main(void){
     int hesapNo;
     char ad[30]; 
     double bakiye; 
     FILE *mfPtr; 
     if((mfPtr = fopen("musteri.dat", "w")) == NULL)
         printf("Dosya acilamadi\n"); 
     else{
         printf("Hesap no, isim ve bakiye girin \n"); 
         printf("Veri girisini bitirmek icin EOF gir"); 
         printf("?");
         scanf("%d%s%lf",&hesapNo, ad, &bakiye);
         while(!feof(stdin){
              fprintf(mfPtr,"%d % %.2f \n",hesapNo, ad, bakiye); 
              printf("? "); 
	      scanf("%d%s%17",&hesapNo, ad, &bakiye);
        }
     fclose(mfptr);
    }
   return 0;
 }
  </pre>
  </div>
    <img src="../image/examp/file.png" id="d7" width="460px" height="290px"/><br><br>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	