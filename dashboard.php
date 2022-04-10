<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
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
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<link rel="stylesheet" href="css/das.css">
<style>


.bgi {
    background-image: url("images/dash.jpg");
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
}

@font-face{
	font-family:shubham;
	src:url("ChelseaMarket-Regular.ttf");
    }

  .color{
	animation: colorchangeshubham 3s infinite;
}

@keyframes colorchangeshubham{
  0%{color:blueviolet;}
	50%{color:orangered;}
	100%{color:yellow;}
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
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                    </ul>
</div>

  <ul class="navbar-nav">
   <a href="question.php">  <button type="button" class="btn btn-warning mx-4">Ask Question </button> </a>
      
    </ul>
       
  
  
   </div>
    </nav>

    <div class="container my-4">
      <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong> <?php echo "Welcome ".$_SESSION['username']?> You Have logged in successfully !........ </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
 
</div>
<div class="tab col text-center">
<h1 style="color:white; font-family:shubham;"> <span class="color">Dashboard</span> </h1>



<?php
            include('db.php');
            

            $sql = "SELECT `qno`, `username`, `query`,`posted_at` FROM `question`";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
               echo "<table class='content-table'>
                <thead>
                <tr>
                <th>QNO</th>
                <th>USERNAME</th>
                <th>QUERY</th>
                <th>ANSWER STATUS</th>
                <th>POSTED_AT</th>
                </tr>
                </thead>
                <tbody>
                ";

                while($row = mysqli_fetch_array($result))
                  {
                    

                    echo "<tr class='trheader'>";
                    echo "<td>" . $row['qno'] . "</td>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['query'] . "</td>";
                    echo "<td> <a href='answer.php?question=".$row['query'] ."&QID=".$row['qno']."&NM=".$row['username']." '> <button type='button' class='btn-sm btn-success btn-rounded px-2'><b>Give Answer</b></button> </a>
                    <a href='showAnswer.php?qn=".$row['qno']."'> <button type='button' class='btn-sm btn-primary btn-rounded px-2'><b>Show Answer</b></button> </a>    </td>";
                    echo "<td>" . $row['posted_at'] . "</td>";
                    echo "</tr>";
                    
                  }
               echo"</tbody>";
                echo "</table>";
            
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>No Record Found </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>';
            }
        ?>
</div>
 </div>   
 
 


   
 </body>
</html>