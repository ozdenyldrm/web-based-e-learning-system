<?php

 include('./exInclude/header.php');
 include_once('../database.php');
 
?>

 <div class="sag_icerik">
  <div id="e1">
  <h2>
   Example1 
  </h2><br>
  <h4> <i>C code of creating node:</i> 
  </h4>
  <img src="../image/examp/linked.png" id="e2" width="500px" height="320px"/>
  </div>
    <img src="../image/examp/node.png" id="d7" width="540px" height="360px"/><br><br><br><br><br>
   <div id="e1">
  <h2>
   Example2 
  </h2><br>
  <p style="font-size:23px;">
   <b><i> Add Node:</i></b>
  </p>
   <img src="../image/examp/node1.png" id="e6" width="500px" height="300px"/>
 </div>
  <pre id="d3" style="font-size:20px;">
   <b> C code of add node: </b>
    node* addNode(node* head){
       int stdNo; 
       node *p, *q;
       node *newNode = (node *) malloc(sizeof (node)); 
       printf("Enter new student number: "); 
	   scanf("%d",&newNode->no); 
	   printf("Enter new student name: "); 
	   scanf("%s", newNode->name); 
       printf("Press 0 to add to the end of list\n");  
	   scanf("%d",&stdNo);
       p = head; 
	   if (p->no == stdNo){
          newNode->next = p;
          head = newNode;
      }
  </pre>
</div>
  
 </div> <!-- close row div from header file -->
  
  <?php 
    
	include('./exInclude/footer.php');
  ?>
	