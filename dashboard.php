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
    <link rel="stylesheet" type="text/css" href="/css/dataTables.bootstrap.min.css">
    <link href="Css/main.css" rel="stylesheet">
<style>
body {
  margin: 0;
  font-family: "Comfortaa";
  color: #555;
  background: whitesmoke;
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
  <a class="active" href="dashboard.php"><i class="fa fa-fw fa-home"></i>Dashboard</a>
  <a href="quantityentry.php"><i class="fa fa-fw fa-edit"></i>QuantityEntry</a>
  <a href="report.php"><i class="fa fa-fw fa-sticky-note"></i>Report</a>
  <a href="profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
</div>
    <div >
        <div >
            <img class="fixed-top-left" style="margin-top: 0em; margin-left: 0em; height: 5.5em; width: 12.5em;" src="img/SP Logo.png" height="85" />
  <label class="text-center card-footer fixed-top" style="margin-left: 12.5em; text-align: center; height: 5.5em; color: #555 ;">
                <b><h1><b>RBQ Application</b></h1></b>
            </label>
        </div>
     
		<!-- main contents starts here -->
		<section class="content" style="padding: 3em; margin-left:13em">
			<!--panels section starts here -->
			<section id="panel" class="inner-sections">
				<div class="row">
					<!-- CARDS/PANELS HERE -->
					<div class="col-md-3" style="margin-left: 0em; padding-left: 0em; line-height: 2em;">
						<div class="card card-red">
							<div class="card-block">
								<div class="stats">
									<h5 class="figures">WarnerBrothers-UAE</h5>
									<p class="stat">PROJECTNAME</p>
                  <hr class="w-25p">
                  <i class="fa fa-clipboard fa-2x"></i>
									<small>Last Week: 5</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="line-height: 1.5em;">
						<div class="card card-purple">
							<div class="card-block">
								<div class="stats">
									<h3 class="figures">150</h3>
									<p class="stat">TENDER QUANTITY VALUES</p>
                                    <hr class="w-25p">
                                    <i class="fa fa-calculator fa-2x"></i>                
									<small>Last Week: 5</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3" style="line-height: 1.5em;">
						<div class="card card-orange">
							<div class="card-block">
								<div class="stats">
									<h3 class="figures">120</h3>
									<p class="stat">IFC QUANTITY VALUES</p>
                                    <hr class="w-25p">
                                    <i class="fa fa-calculator fa-2x"></i>
									<small>Last Week: 5</small>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="card card-green">
							<div class="card-block">
								<div class="stats">
									<h3 class="figures">3</h3>
									<p class="stat">TOTAL PROJECTS</p>
                                    <hr class="w-25p">
                                    <i class="fa fa-clipboard fa-2x"></i>
									<small>Last Week: 5</small>
								</div>
							</div>
						</div>
					</div>
				</div>
            </section>          
            <div class="col-md-4" >
                <div class="card card-black" style="width: 25em;  margin-top: 1em; margin-left:-2em">
                    <div class="card-block">
                        <div class="stats">
                            <h3 class="figures">30</h3>
                            <p class="stat">TOTAL Varience</p>
                            <hr class="w-25p">
                            <i class="fa fa-calculator fa-2x"></i>
                            <small>Last Week: 5</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
			<!-- panels section ends here -->

</body>
    <footer class="text-center card-footer fixed-bottom" style="color: #555">
        <p>&copy SPDesignStudio,Dubai</p>
    </footer>
</html>