
<!-- Staff form page -->

<?php

        if(isset($_POST['submit'])){
		  $name=$_POST['staffname'];
		  $staffid=$_POST['staffid'];
		  $department=$_POST['department'];

		  $dbhost = "localhost";
		  $dbuser = "root";
		  $dbpass = "barsa";
		  $db = "feedbacksystem";

		  $db = new mysqli($dbhost, $dbuser, $dbpass,$db);
			
		  if($db){
				//echo "conection success";
				$query1="insert into stafflogin(UserId,StaffName,StaffPassword,Department) values('$staffid','$name','cvrp','$department')";
				
				$res=mysqli_query($db,$query1);
				if($res){
				echo "<script> alert('Registered Successfully');</script>";
				//header("Location:#");
				}
		   }
			else{
				echo "<script> alert('Something went wrong'); window.location.href='#';</script>";
			}
        }
       
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<title>Staff Registration</title>

<body>
    <nav class="navbar navbar-default">
			
			<div class="container">
            <button type="button" class="navbar-toggle" name="button" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Tooglenavigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
          </button>
            <a href="index.php" class="pull-left"><img src="img/logo.jpg" height=80px align="left"/><h2>Online Feedback System</h2></a>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right"> 
				
					<!-- Home Button -->
                    <li class="active"><a href="AdminPage.php"><button type="button" class="btn btn-info btn-lg">Home</button></a></li>
					<!-- Home Button End Here -->
					
					
					<!-- Back Button -->
					 <li class="active"><a href="AdminPage.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Back</button></a></li> 
					<!-- Back Button End here -->
					
					
					<!-- Logout Button -->
					 <li class="active"><a href="Admin.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Logout</button></a></li> 
					<!-- Logout Button End here -->
				
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="jumbotron text-center">
		<div class="container">
                <h1>Registration Form</h1>
                <form class="form-horizontal" action="#" method="post" name="r1">
                
					  <div class="form-group">
						<label class="control-label col-sm-2" >Staff Id:</label>
						<div class="col-sm-10">          
						  <input type="text" class="form-control" name="staffid" placeholder="Enter Staff Id">
						</div>
					   </div>
					
					<div class="form-group">
						<label class="control-label col-sm-2" >Full Name:</label>
						<div class="col-sm-10">          
						  <input type="text" class="form-control" name="staffname" placeholder="Enter Staff Full Name">
						</div>
					  </div>
					  
					
						<div class="form-group">
						<label class="control-label col-sm-2" >Department:</label>
						<div class="col-sm-10">          
						  <input type="text" class="form-control" name="department" placeholder="Enter Staff Department">
						</div>
					  </div>

		</div>
					  
						<div class="form-group">
						
						<div class="col-sm-13">           
						  <input type="submit" name="submit" class="btn btn-primary" value="Submit">
						</div>
					  </div>
                  </form>
              </div>
     </div>    
    </div>
    <div class="container">
    <div class="navbar navbar-inverse">
        
            <div class="navbar-text pull-left">
                <p>Developed by Barsa Baisakhi Biswal - barshabaishakhibswl154@gmail.com</p>
            </div>
            <div class="navbar-text pull-right">
				
                <a href="https://www.google.com"><img src="img/google.png" height = "20px" alt="google.png"></a>
                <a href="https://www.twitter.com"><img src="img/twitter.png" height = "20px" alt="twitter.png"></a>
                <a href="https://www.facebook.com"><img src="img/facebook.png" height = "20px"  alt="facebook.png"></a>
               
            </div>
        </div>
    </div>

 
</body>
</html>
