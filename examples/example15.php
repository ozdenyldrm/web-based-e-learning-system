<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>Writng to the Random Access Files:</i> 
  </h4><br>
  <pre style="font-size:20px;">
   #include <stdio.h>
     struct musteri{
           int hesapNo; 
           char soyad[25]; 
           char ad[20];
           double bakiye; 
     };
     int main(void){
        struct musteri hesapBilgi = {0,"","",0.0}; 
        FILE *myPtr; 
        if((myPtr = fopen("musteri.dat","r+")) == NULL)
             printf("Dosya acilamadi\n"); 
        else{
            printf("Hesap no gir (1-100 arasi deger) \n"
		  "Veri girisini bitirmek icin o gir"); 
            scanf("%d",&hesapBilgi.hesapNo); 
            while(hesapBilgi.hesapNo!=){
               printf("Soyad Ad ve Bakiye girin?"); 
               fscanf(stdin, "%s%s%lf", hesapBilgi.soyad,
		     hesapBilgi.ad, khesapBilgi.bakiye);
	       fseek(myPtr, (hesapBilgi.hesapNo-1)*
                     sizeof(struct musteri), SEEK_SET);
           fwrite(&hesapBilgi,sizeof(struct musteri),1,my Ptr);
           printf("Hesap no girin?"); 
		   scanf("%d",&hesapBilgi.hesapNo);
        }
      fclose(myPtr);
    }
   return0;
 }
  </pre>
  </div>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	