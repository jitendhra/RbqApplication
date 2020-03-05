<?php 
include('dbcon.php');
include('session.php'); 

$result=mysqli_query($con, "select * from users where user_id='$session_id'")or die('Error In Session');
$row=mysqli_fetch_array($result);

 ?>

<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RbqApplication</title>
    <link rel="ICON" href="img/ICon (2).ico"/>
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="Css/main.css" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: "Comfortaa";
  color: #555;
  image-orientation: unset;
}

.sidebar {
  margin-top: 5.5em;
  padding: 0;
  width: 200px;
  background-color: #e6e6e6;
  position: fixed;
  height: 84.3%;
  overflow: auto;
}

.sidebar a {
  display: block;
  color: #3a3939;
  padding: 20px;
  text-decoration: none;
}
 
.sidebar a.active {
  background-color: #676e67;
  color: white;
}

.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

div.content {
  margin-left: 200px;
  padding: 1px 16px;
  position: fixed;
  height: 1000px;
}

@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;} 
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
</style>
</head>
<div class="sidebar">
  <a href="dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <a href="quantityentry.php"><i class="fa fa-fw fa-edit"></i>QuantityEntry</a>
  <a href="report.php"><i class="fa fa-fw fa-sticky-note"></i>Report</a>
  <a class="active" href="profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
</div>
<div >
        <div >
            <img class="fixed-top-left" style="margin-top: 0em; margin-left: 0em; height: 5.5em; width: 12.5em;" src="img/SP Logo.png" height="85" />
            <label class="text-center card-footer fixed-top" style="margin-left: 12.5em; text-align: center; height: 5.5em;">
                <b><h1><b>RBQ Application</b></h1></b>
            </label>
        </div>
        <section class="contents">
            <section id="panel" class="inner-sections">
                <div class="row" ></div>
                    <div class="box" style="margin-left: 10em; margin-top: 1em; padding-left: 6em;">
                        <label class="text" ><h1><b>Profile</b></h1></label>
                        <div class="box"  style="margin-left: 2em; margin-top: 2em;">
                          <h2>FullName</h2>
                          <img src="img/Profile.png" alt="Avatar" style="width:200px">
                        </div><br>
                        <div class="card-block" >
                          <label for="email"><b>Name</b></label><br>
                          <input type="text" placeholder="EnterFullName" name="FullName" required><br>
                          <label for="email"><b>Email</b></label><br>
                          <input type="text" placeholder="Enter Email" name="email" required><br>
                          <label for="psw"><b>Password</b></label><br>
                          <input type="password" placeholder="Enter Password" name="psw" required><br>
                          <label for="psw-repeat"><b>RepeatPassword</b></label><br>
                          <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br><br>
                          <button type="submit" class="btn btn-success">Update</button>
                       </div> 
                       <!--  <hr>
                        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
                    
                        <button type="submit" class="registerbtn">Update</button> -->
                    </div>
                </div>
            </section>
        </section>   	


</body>
    <footer class="text-center card-footer fixed-bottom">
        <p>&copy SPDesignStudio,Dubai</p>
    </footer>
</html>