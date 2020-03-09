<?php
include('dbcon.php');
include('session.php');

$result = mysqli_query($con, "select * from users where user_id='$session_id'") or die('Error In Session');
$row = mysqli_fetch_array($result);

?>

<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="x-ua-compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>RbqApplication</title>
  <link rel="ICON" href="Css/img/ICon (2).ico" />
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

      .sidebar a {
        float: left;
      }

      div.content {
        margin-left: 0;
      }
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
  <a class="active" href="report.php"><i class="fa fa-fw fa-sticky-note"></i>Report</a>
  <a href="profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
</div>

<div>
  <div>
    <img class="fixed-top-left fixed-top" style="margin-top: 0em; margin-left: 0em; height: 5.5em; width: 12.5em;" src="img/SP Logo.png" />
    <label class="text-center card-footer fixed-top" style="margin-left: 12.3em; text-align: center; height: 5.5em;">
      <b>
        <h1><b>RBQ Application</b></h1>
      </b>
    </label>
  </div>
  <div class="box fixed-top" style="margin-left: 13em; margin-top: 6em; ">
    <select id="LoadProject" class="fixed-top-left" style="width: 10em;"></select>
    <input type="button" class="btn btn-success" style="background: grey" value="Load" onClick="search();">
    <input type="text" style="width: 13em;" placeholder="ProjectName" readonly>
    <input type="text" style="width: 13em;" placeholder="ReportLastGeneratedAt" readonly>
    <input type="text" style="width: 10em;" placeholder="User" readonly>
  </div>
  <div class="box fixed-top" style="margin-left: 14em;  margin-top: 9em;"><br>
    <h2><b>Report</b></h2>
    <button class="btn btn-success">GenerateReport</button> <!-- data-toggle="modal" data-target="#myModalAdd" -->
  </div>
  <section class="contents">
    <section id="panel" class="inner-sections">
      <!--  <div class="row" ></div>
                    <div class="col-md-3" style="margin-left: 5em; padding-left: 8em;">
                        <P class="text"><h1><b>Report</b></h1></P>
                    </div>
                </div> -->
    </section>
  </section>



  </body>
  <footer class="text-center card-footer fixed-bottom">
    <p>&copy SPDesignStudio,Dubai</p>
  </footer>

</html>