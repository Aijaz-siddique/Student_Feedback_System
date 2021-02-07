
<?php

        if(isset($_POST['submit'])){
		  
		  $dbhost = "localhost";
		  $dbuser = "root";
		  $dbpass = "barsa";
		  $db = "feedbacksystem";
		  mysql_connect($dbhost,$dbuser,$dbpass);
		  mysql_select_db($db);
		  //$db = new mysqli($dbhost, $dbuser, $dbpass,$db);
			
		  if(isset($_POST['userid'])){
				//echo "conection success";
				$userid=$_POST['userid'];
				$password=$_POST['pass'];
				
				$query="select * from stafflogin where UserId = '".$userid."' AND StaffPassword = '".$password."' limit 1";
				
				$res=mysql_query($query);
				//echo $res; 
				if(mysql_num_rows($res) == 1){
					header("Location:StaffPage.php");
				}
				else {
					echo "<script> alert('Incorrect credentials'); window.location.href='';</script>";
				}
		   }
			else{
			echo "<script> alert('Something went wrong'); window.location.href='';</script>";
			}
        }
       
?>




<!-- student form page -->

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

<title>Staff</title>

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
                    <li class="active"><a href="index.php"><button type="button" class="btn btn-info btn-lg">Home</button></a></li>
					<!-- Home Button End Here -->
					
					
					<!-- Staff login Button -->
					 <li class="active"><a href="Staff.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Staff</button></a></li> 
					<!-- Staff login Button End here -->
					
					
					<!-- Student login Button -->
					 <li class="active"><a href="Student.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Student</button></a></li> 
					<!-- Student login Button End here -->
					
					
					<!-- Admin login button -->
                    <li class="active"><a href="Admin.php"> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Admin</button></a></li> 
				<!-- Admin login button End here -->

                </ul>
            </div>
        </div>
    </nav>
	<br/><br/><br/>
    <div class="container">
        <div class="jumbotron text-center">
			<div class="container">
					<h1>Staff Login</h1><br/>
					<form class="form-horizontal" action="Staff.php" method="post" name="r1">
					
						  <div class="form-group">
								<label class="control-label col-sm-5" >User Id:</label>
								<div class="col-sm-4">          
								  <input type="text" class="form-control" name="userid" placeholder="Enter the username" required>
								</div>
						   </div>
						
						<div class="form-group">
							<label class="control-label col-sm-5" >Password:</label>
							<div class="col-sm-4">          
							  <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
							</div>
						  </div>
						 
							<div class="form-group">
								<div class="col-sm-13">           
								  <input type="submit" name="submit" class="btn btn-primary" value="Login">
								</div>
						  </div>
					</form>
			</div>
		</div>    
    </div>
	<br/><br/>
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
