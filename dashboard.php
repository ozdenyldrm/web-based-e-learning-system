<?php
    include_once 'database.php';
    session_start();
    if(!(isset($_SESSION['email'])))
    {
        header("location:login.php");
    }
    else
    {
        $name = $_SESSION['name'];
        $email = $_SESSION['email'];
        include_once 'database.php';
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link  rel="stylesheet" href="css/bootstrap.min.css"/>
    <link  rel="stylesheet" href="css/bootstrap-theme.min.css"/>    
    <link rel="stylesheet" href="css/dashboard.css">
    <link  rel="stylesheet" href="css/font.css">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
	
	<!-- font -->
	<link rel="stylesheet" href="css/all.min.css">
	   
	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap" rel="stylesheet">
	   
	<style>
	  
	 .navbar-brand {
               font-family: 'Ubuntu Condensed', sans-serif;
               font-size: 2em;
               font-weight: bold;
               color: #000000
        }
        .custom-nav .custom-nav-item a {
	        color: #000000 important;
        }
        .custom-nav-item:hover {
	              background-color: #68cafd;
		          border: solid #68cafd 1px;
	              border-radius: 10px;	
        }
		.secondrow > .row {
                  border: 1px solid #ddd;
                 /*padding: 5px 30px;*/
                  text-align: center; 
                  margin: 20px;
                  min-height: 50px;
                  border-radius: 50%;
        }
        .imgstretch{ 
                  padding: 10px 30px;
        }
        .imgstretch img {
                  width: 100%;
                  height: 100px;
                  object-fit: contain;
        }
		#a{margin-left:25%}
		#a1{margin-left:20%}
		#b{margin-left:60%}
	  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light pl-5" >
   <a class="navbar-brand" href="Javascript:void(0)"> &nbsp; Control Panel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" 
	 aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
     <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
     <ul class="navbar-nav custom-nav pl-5 ">
       <li class="nav-item custom-nav-item" <?php if(@$_GET['q']==0) echo'class="active"'; ?>><a href="dashboard.php?q=0" class="nav-link">Home<span class="sr-only">(current)</span></a></li>
       <li class="nav-item custom-nav-item" <?php if(@$_GET['q']==1) echo'class="active"'; ?>><a href="dashboard.php?q=1" class="nav-link">User</a></li>
       <li class="nav-item custom-nav-item" <?php if(@$_GET['q']==2) echo'class="active"'; ?>><a href="dashboard.php?q=2" class="nav-link">Ranking</a></li>
       <li class="dropdown <?php if(@$_GET['q']==4 || @$_GET['q']==5) echo'active"'; ?>">
       <li class="nav-item custom-nav-item"><a href="dashboard.php?q=4" class="nav-link">Add Exercise</a></li>
       <li class="nav-item custom-nav-item"><a href="dashboard.php?q=5" class="nav-link">Remove Exercise</a></li>
      </ul>
    </div>
	<ul class="nav justify-content-end">
	 <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal">Admin Profile</a>
     <li class="nav-item" <?php echo''; ?> > <a href="logout1.php?q=dashboard.php" class="nav-link"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Log out</a></li>
    </ul>
  </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php if(@$_GET['q']==0)
                {
                   echo '<br /> <span class="title1" style="margin-left:30%;font-size:30px;color:#fff;"><b>Welcome To Administrator Panel</b></span>
				   <div class="row"> 
                    <div class="col-md-6 secondrow">
                     <div class="row">
                      <a href="#" title="Lessons"> 
                       <div class="imgstretch">
                        <img src="image/lesson1.gif"> 
                       </div>
                       <label>Lessons</label>
                      </a>
                     </div>
                    </div> 
                    <div class="col-md-6 secondrow">
                     <div class="row">
                      <a href="dashboard.php?q=5" title="Exercises"> 
                       <div class="imgstretch">
                        <img src="image/exercises.jpg"> 
                       </div>
                       <label>Exercises</label>
                      </a>
                     </div>
                    </div> 
                   </div>
                  <div class="row">
                   <div class="col-md-6 secondrow">
                    <div class="row">
                     <a href="dashboard.php?q=1" title="Manage Users" id="a1"> 
                      <div class="imgstretch">
                       <img src="image/user.png"> 
                      </div>
                     <label>Manage Users</label>
                    </a>
                   </div>
                  </div>
                  <div class="col-md-6 secondrow">
                   <div class="row">
                    <a href="dashboard.php?q=2" title="Reports"> 
                     <div class="imgstretch">
                      <img src="image/report1.png"> 
                     </div>
                     <label>Reports</label>
                    </a>
                   </div>
                  </div> 
                 </div>';
					
                }

                if(@$_GET['q']== 2) 
                {
                    $q=mysqli_query($con,"SELECT * FROM rank  ORDER BY score DESC " )or die('Error223');
                    echo  '<div class="panel title"><div class="table-responsive">
                    <table class="table table-striped title1" >
                    <tr style="color:red"><td><center><b>Rank</b></center></td><td><center><b>Name</b></center></td><td><center><b>Score</b></center></td></tr>';
                    $c=0;
                    while($row=mysqli_fetch_array($q) )
                    {
                        $e=$row['email'];
                        $s=$row['score'];
                        $q12=mysqli_query($con,"SELECT * FROM user WHERE email='$e' " )or die('Error231');
                        while($row=mysqli_fetch_array($q12) )
                        {
                            $name=$row['name'];
                            $college=$row['college'];
                        }
                        $c++;
                        echo '<tr><td style="color:#99cc32"><center><b>'.$c.'</b></center></td><td><center>'.$e.'</center></td><td><center>'.$s.'</center></td>';
                    }
                    echo '</table></div></div>';
                }
                ?>
                <?php 
                    if(@$_GET['q']==1) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM user") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Name</b></center></td><td><center><b>College</b></center></td><td><center><b>Email</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) 
                        {
                            $name = $row['name'];
                            $email = $row['email'];
                            $college = $row['college'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$college.'</center></td><td><center>'.$email.'</center></td><td><center><a title="Delete User" href="update.php?demail='.$email.'"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']==4 && !(@$_GET['step']) ) 
                    {
                        echo '<br /><br /><div class="row"><span class="title1" style="margin-left:37%;font-size:30px;color:#fff;"><b>Enter Exercise Details</b></span><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6" id="a">   
                        <form class="form-horizontal title1" name="form" action="update.php?q=addquiz"  method="POST">
                            <fieldset>
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="name"></label>  
                                    <div class="col-md-12">
                                        <input id="name" name="name" placeholder="Enter exercise title" class="form-control input-md" type="text">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="total"></label>  
                                    <div class="col-md-12">
                                        <input id="total" name="total" placeholder="Enter total number of questions" class="form-control input-md" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="right"></label>  
                                    <div class="col-md-12">
                                        <input id="right" name="right" placeholder="Enter marks on right answer" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-12 control-label" for="wrong"></label>  
                                    <div class="col-md-12">
                                        <input id="wrong" name="wrong" placeholder="Enter minus marks on wrong answer without sign" class="form-control input-md" min="0" type="number">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-md-12 control-label" for=""></label>
                                    <div class="col-md-12"> 
                                        <input  type="submit" style="margin-left:45%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                    </div>
                                </div>

                            </fieldset>
                        </form></div>';
                    }
                ?>

                <?php
                    if(@$_GET['q']==4 && (@$_GET['step'])==2 ) 
                    {
                        echo '<br />
                        <div class="row">
                        <span class="title1" style="margin-left:40%;font-size:30px;color:#fff;"><b>Enter Question Details</b></span><br /><br /><br />
                        <div class="col-md-3"></div><div class="col-md-6"><form class="form-horizontal title1" name="form" action="update.php?q=addqns&n='.@$_GET['n'].'&eid='.@$_GET['eid'].'&ch=4 "  method="POST">
                        <fieldset>
                        ';
                
                        for($i=1;$i<=@$_GET['n'];$i++)
                        {
                            echo '<p style="margin-left:63%;font-size:15px;color:#fff;"><b>Question number&nbsp;'.$i.'&nbsp;:</p><!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="qns'.$i.' "></label>  
                                        <div class="col-md-12" id="b">
                                            <textarea rows="3" cols="5" name="qns'.$i.'" class="form-control" placeholder="Write question number '.$i.' here..."></textarea>  
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'1"></label>  
                                        <div class="col-md-12" id="b">
                                            <input id="'.$i.'1" name="'.$i.'1" placeholder="Enter option a" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'2"></label>  
                                        <div class="col-md-12" id="b">
                                            <input id="'.$i.'2" name="'.$i.'2" placeholder="Enter option b" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'3"></label>  
                                        <div class="col-md-12" id="b">
                                            <input id="'.$i.'3" name="'.$i.'3" placeholder="Enter option c" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 control-label" for="'.$i.'4"></label>  
                                        <div class="col-md-12" id="b">
                                            <input id="'.$i.'4" name="'.$i.'4" placeholder="Enter option d" class="form-control input-md" type="text">
                                        </div>
                                    </div>
                                    <br />
                                    <p style="margin-left:63%;font-size:15px;color:#fff;"><b>Correct answer</b>:<br /></p>
									<div class="col-md-12" id="b">
                                    <select id="ans'.$i.'" name="ans'.$i.'" placeholder="Choose correct answer " class="form-control input-md" >
                                    <option value="a">Select answer for question '.$i.'</option>
                                    <option value="a"> option a</option>
                                    <option value="b"> option b</option>
                                    <option value="c"> option c</option>
                                    <option value="d"> option d</option> </select><br /><br /> </div>'; 
                        }
                        echo '<div class="form-group">
                                <label class="col-md-12 control-label" for=""></label>
                                <div class="col-md-12"> 
                                    <input  type="submit" style="margin-left:105%" class="btn btn-primary" value="Submit" class="btn btn-primary"/>
                                </div>
                              </div>

                        </fieldset>
                        </form></div>';
                    }
                ?>

                <?php 
                    if(@$_GET['q']==5) 
                    {
                        $result = mysqli_query($con,"SELECT * FROM quiz ORDER BY date DESC") or die('Error');
                        echo  '<div class="panel"><div class="table-responsive"><table class="table table-striped title1">
                        <tr><td><center><b>S.N.</b></center></td><td><center><b>Topic</b></center></td><td><center><b>Total question</b></center></td><td><center><b>Marks</b></center></td><td><center><b>Action</b></center></td></tr>';
                        $c=1;
                        while($row = mysqli_fetch_array($result)) {
                            $name = $row['name'];
                            $total = $row['total'];
                            $good = $row['good'];
                            $eid = $row['eid'];
                            echo '<tr><td><center>'.$c++.'</center></td><td><center>'.$name.'</center></td><td><center>'.$total.'</center></td><td><center>'.$good*$total.'</center></td>
                            <td><center><b><a href="update.php?q=rmquiz&eid='.$eid.'" class="pull-right btn sub1" style="margin:0px;background:red;color:black"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span>&nbsp;<span class="title1"><b>Remove</b></span></a></b></center></td></tr>';
                        }
                        $c=0;
                        echo '</table></div></div>';
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>
