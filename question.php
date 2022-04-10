<?php
require_once "db.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
} 

if (isset($_POST['submit'])){
$username = $_POST['username'];
$query = $_POST['query'];
$query_err ="";

if(empty($query)){
  $query_err = "Query Cannot be Empty Please ask question!";
  
}
else{
$sql = "INSERT INTO  question (username,query) VALUES ('$username','$query')";

$result = mysqli_query($conn,$sql) or die('data not inserted');
header("location: dashboard.php");
echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> Your Question Submited Successfully ! </strong> 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div> ';

}

}


 











?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
             <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">





   <style>
*{
    margin:0;
    padding:0;
}

.bgg {
  background-image: url("images/q2.jpg");
  height: 100%;
  width:100%;
  background-repeat: no-repeat;
  background-size: cover;
}

.logo{
	width:94%;
  height:60%;
	color:#E4F50F;
	background-image: linear-gradient(#0C4DE7 40%, #0819F0 60%);
	padding-left: 100px;
	box-sizing: border-box;
}
.logo h1{
	text-transform: uppercase;
	font-size: 1.6rem;
	animation: shubham 3s linear infinite;
	animation-direction: alternate;
}

@keyframes shubham{
	from{padding-left: 230px;}
	to{padding-right: 230px;}
}
.leftside h1{
	margin-top: 50px;
	font-size: 80px;
	margin-bottom: 35px;
}

</style>
 
  


    <title>eQuora Webpage</title>
</head>
<body class="bgg">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
           <h4><a class="navbar-brand text-danger" href="#">eProbe</a></h4>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.php">Contact Us</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="dashboard.php">Dashboard</a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
</div>

  
   </div>
    </nav>



    <div class="col-lg-10 my-4">
   <div class="col-lg-8  mx-auto card">
   <div class="card-body">
     <div class ="logo">
   <h1>Ask Your Question Here</h1>
   </div>
    <br>
   <form action="" method="post">
   <div class="form-outline">
   
<div class="form-outline">
   
       <label class="form-label" for="username">Your Username</label>
  <input type="text" id="formControlLg" class="form-control form-control-lg"  name="username" value="<?php echo $_SESSION['username'] ;?>"readonly />

</div>


</div>
<br>
<div class="form-outline">
  <label for="exampleFormControlTextarea1">Ask Question</label>
    <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="4"></textarea>
  
</div>
<br>


<br>
<center>
<button type="submit" name ="submit" class="btn btn-outline-info btn-lg">SUBMIT</button>
</center>
        </form>
      </div>
     </div>
    </div>
  


</body>
</html>