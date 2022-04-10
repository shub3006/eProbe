<?php
require_once "db.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php"); 


} 

$NM = $_GET['NM'];

if($_SESSION['username']== $NM){
   echo '<script>
  window.alert("You Cannot Give Your Own Question Answer");
  window.location.href="dashboard.php";
  </script>';
  
  
}

  


  








$question = $_GET['question'];
$qno = $_GET['QID'];

if (isset($_POST['submit'])){
$username = $_POST['username'];
$qid = $_POST['qno'];
$query = $_POST['query'];
$reply = $_POST['reply'];






if(empty($reply)){
  echo '<script>alert("Reply Field Cannot Be Empty")</sc>';
  
}

else{
  $sql = "INSERT INTO  answer (qno,query,reply,given_by	) VALUES ('$qid','$query','$reply','$username')";
  $result = mysqli_query($conn,$sql) or die('data not inserted');
   echo "<script>$('#myModal').modal('show');</script>

        <div class='modal fade' id='myModal' role='dialog'>
            <div class='modal-dialog modal-lg'>
              <div class='modal-content'>
                <div class='modal-body'>
                  <p>You didn't leave previous chatroom</p>
                </div>
                    <div class='modal-footer'>
                        <a href='dashboard.php'>
                            <button type='button' class='btn btn-default' data-dismiss='modal'>Leave</button>
                         </a>
                    </div>
                </div>
            </div>
        </div>";   
  


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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<style>


.bgi {
    background-image: url("images/answer.jpg");
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
   
}

.logo{
	width:94%;
  height:90%;
	color:white;
	background-image: linear-gradient( #EE82EE 40%,#FF00FF 60%);
	padding-left: 100px;
  padding-bottom: 10px;
	box-sizing: border-box;
}
.logo h1{
	text-transform: uppercase;
	font-size: 1.7rem;
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

textarea{
  resize: none;
}

marquee{
  font-size: 20px;
  font-weight: 800;
  color:#F1F406;
  
}




</style>

<title>eQuora Webpage</title>
</head>
<body class="bgi">
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

  <ul class="navbar-nav">
   <a href="question.php">  <button type="button" class="btn btn-warning mx-4">Ask Question </button> </a>
     
    </ul>
        </div>
</nav>
<br> <br>
<marquee direction="left">
  PLEASE DON'T GIVE WRONG ANSWER.. IF YOU DON'T KNOW THEN JUST LEAVE IT.
</marquee>

<br><br>

  <div class="col-lg-10 my-4">
   <div class="col-lg-8  mx-auto card">
   <div class="card-body">
     <div class ="logo">
   <h1>REPLY HERE</h1>
   </div>
    <br>
   <form action="" method="post">
   <div class="form-outline">
   
<div class="form-outline">
   
       <label class="form-label" for="username">Your Username</label>
  <input type="text" id="formControlLg" class="form-control form-control-lg"  name="username" value="<?php echo $_SESSION['username'] ;?>"readonly />

</div>
<br>
<div class="form-outline">
   
       <label class="form-label" for="qno"> Qno</label>
  <input type="text" id="formControlLg" class="form-control form-control-lg"  name="qno" value="<?php echo $qno ?>"readonly />

</div>
<br>
<div class="form-outline">
   
       <label class="form-label" for="query"> Query</label>
  <input type="text" id="formControlLg" class="form-control form-control-lg"  name="query" value="<?php echo $question ?>"readonly />

</div>


</div>
<br>
<div class="form-outline">
  <label for="exampleFormControlTextarea1">Reply</label>
    <textarea class="form-control" name="reply" id="exampleFormControlTextarea1" rows="5" col="50"></textarea>
  
</div>
<br>


<br>
<center>
<button type="submit" name ="submit" class="btn btn-outline-success btn-lg">POST</button>
</center>
        </form>
      </div>
     </div>
    </div> 
 
</body>
</html>
       