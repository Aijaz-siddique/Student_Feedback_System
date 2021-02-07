<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        /*.modal-dialog{
                background-color: red;
                width: 70%; /* desired relative width */
                left: 5%; /* (100%-width)/2 */
                /* place center */
                margin-left:auto;
                margin-right:auto; 
                }*/
        </style>
</head>

<title>Online Feedback System</title>

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

                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Login</h4>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal" action="login.php" method="post" name="r2">
                                        <div class="form-group">
                                            <label class="control-label col-sm-2" >Username:</label>
                                            <div class="col-sm-10">          
                                            <input type="text" class="form-control" name="username" placeholder="Username">
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label class="control-label col-sm-2" >Password:</label>
                                            <div class="col-sm-10">          
                                            <input type="text" class="form-control" name="password"placeholder="Password">
                                            </div>
                                        </div>
                                         <div class="form-group">
                    
                                            <div class="col-sm-13">          
                                            <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                            </div>
                                        </div>

                                    </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>

                    </div>
                </div>
                


                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div id="mycarousel" class="carousel slide" data-ride="carousel" data-interval="1500">
            <ol class="carousel-indicator">
				<li data-target="#mycarousel" data-slide-to="0"></li>
                <li data-target="#mycarousel" data-slide-to="1"></li>
                <li data-target="#mycarousel" data-slide-to="2"></li> 
				
            </ol>
            <div class="carousel-inner">
                <div class="item active">
                    <img src="img/polytechnicBuilding2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/cvrceBuilding.jpg" alt="">
                </div>
                <div class="item">
                    <img src="img/adminBuilding.jpg" alt="">
                </div>

            </div>
            <a class="left carousel-control" href="#mycarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#mycarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
        <div class="jumbotron text-center">
            <h1>Student Feedback System</h1>
			
			
			<p style="margin-left:30px;text-align:justify">C. V. Raman Polytechnic, a sister concern of C. V. Raman College of Engineering is built on a 
			sprawling beautifully landscaped area just on the outskirts on beautiful city of Bhubaneswar. 
			CVRP is committed to impart "Quality Education & Training" and aims to be a global institution through continual improvement. 
			The institute facilitates faculty and support staff to work as a team and update their knowledge and skills to match the global 
			industrial and technological development through defined objectives.
			</p>
			
			<p style="margin-left:30px;text-align:justify">C.V. Raman Polytechnic has become a progressive institution in Orissa, 
			setup to promote the highest standards of technical education in the state. 
			The institution aims at molding a new breed of technocrats with the competitive edge to match both national and international standards. 
			The college aims at educating the students to become not only competent professionals but also excellent human beings, who would contribute 
			towards the welfare of the society and help in raising the quality of life of its people.
			</p>
			
            
           <h2>MISSION</h2>
            <p style="margin-left:30px;text-align:justify">To provide State-of-art technical education in the undergraduate and is there any post graduate class in CVRP?

				To work collaboratively with technical Institutes/Universities/Industries of National and International repute. 
				To keep abreast with latest technological advancements to enhance the R and D activities.

				The Institution"s distinctive characteristics are reflected through its goals and objectives.</p>
			<br>
			<h2>VISION </h2>
            <p style="margin-left:30px;text-align:justify">
				To emerge as a global leader in the area of technical education commensurate with the dynamic global scenario for the benefit of mankind.
			</p>
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



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
     <?php
     
     ?>
</body>

</html>
