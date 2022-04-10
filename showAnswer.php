<?php
require_once "db.php";
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

<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>

<style>


.bgi {
    background-image: url("images/show1.jpg");
    height: 100%;
    background-repeat: no-repeat;
    background-size: cover;
   
}

.content-table{
   
    border-collapse: collapse;
    margin: 35px ;
    font-size: 1.2em;
    min-width:600px;
    background-color: white;
    border-radius: 5px 5px 0 0;
    overflow: hidden;
    box-shadow: 0 0 20px rgba(0,0,0,0.15);
  
}

.content-table thead tr{
   
    background-color: #7902F7;
    color:#ffff;
    font-weight: bold;
   
}
.content-table th,
.content-table td{
    padding: 10px 15px;
}

.content-table tbody tr {
    border-bottom: 1px solid #dddddd;
}
.content-table tbody tr:nth-of-type(even) {
    background-color: lightgrey;

}

.content-table tbody tr:last-of-type {
    border-bottom: 2px solid #7902F7;
}

.content-table tbody tr:nth-of-type(even) {
    font-weight: bold;
    color: #7902F7;
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
<br><br>

<br>
<?php
     $qn = $_GET['qn'];      
            

            $sql = "SELECT `aid`, `qno`, `query`,`reply`,`given_by`,`given_at` FROM `answer` Where qno='$qn'";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
               echo "<table class='content-table'>
                <thead>
                <tr>
                <th>ID</th>
                <th>QNO</th>
                <th>QUERY</th>
                <th>REPLY</th>
                <th>GIVEN_BY</th>
                <th>GIVEN_AT</th>
                </tr>
                </thead>
                <tbody>
                ";

                while($row = mysqli_fetch_array($result))
                  {
                    

                    echo "<tr class='trheader'>";
                    echo "<td>" . $row['aid'] . "</td>";
                    echo "<td>" . $row['qno'] . "</td>";
                    echo "<td>" . $row['query'] . "</td>";
                    echo "<td>" . $row['reply'] . "</td>";
                    echo "<td>" . $row['given_by'] . "</td>";
                    echo "<td>" . $row['given_at'] . "</td>";
                    echo "</tr>";
                    
                  }
               echo"</tbody>";
                echo "</table>";
            
            } else {
                echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>No Given Anyone Yet Please Check After Sometime. </strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>';
            }
        ?>
</div>
 </div>   
</body>
</html>