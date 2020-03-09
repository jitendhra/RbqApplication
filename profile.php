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

    /*Profilke picture*/
    .picture-container {
      position: relative;
      cursor: pointer;
      text-align: center;
    }

    .picture {
      width: 106px;
      height: 106px;
      background-color: #999999;
      border: 4px solid #CCCCCC;
      color: #FFFFFF;
      border-radius: 50%;
      margin: 0px auto;
      overflow: hidden;
      transition: all 0.2s;
      -webkit-transition: all 0.2s;
    }

    .picture:hover {
      border-color: #2ca8ff;
    }

    .content.ct-wizard-green .picture:hover {
      border-color: #05ae0e;
    }

    .content.ct-wizard-blue .picture:hover {
      border-color: #3472f7;
    }

    .content.ct-wizard-orange .picture:hover {
      border-color: #ff9500;
    }

    .content.ct-wizard-red .picture:hover {
      border-color: #ff3b30;
    }

    .picture input[type="file"] {
      cursor: pointer;
      display: block;
      height: 100%;
      left: 0;
      opacity: 0 !important;
      position: absolute;
      top: 0;
      width: 100%;
    }

    .picture-src {
      width: 100%;

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
<div>
  <div>
    <img class="fixed-top-left" style="margin-top: 0em; margin-left: 0em; height: 5.5em; width: 12.5em;" src="img/SP Logo.png" height="85" />
    <label class="text-center card-footer fixed-top" style="margin-left: 12.5em; text-align: center; height: 5.5em;">
      <b>
        <h1><b>RBQ Application</b></h1>
      </b>
    </label>
  </div>
  <section class="box fixed-top" style="margin-left: 8em; margin-top: 10em;">
    <section id="panel" class="inner-sections">
      <form class="form form-vertical" action="/site/avatar-upload/1" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-sm-4 text-center">
            <div class="picture-container">
              <div class="picture">
                <img src="Css/img/Profile.png" class="picture-src" id="wizardPicturePreview">
                <input type="file" id="wizard-picture">
              </div>
              <h6 class="label">
                <h4>Choose Picture</h4>
              </h6>
            </div>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="email">Email Address<span class="j-reqd">*</span></label>
                  <input type="email" class="form-control" name="email" style="width: 500" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="pwd">Password<span class="j-reqd">*</span></label>
                  <input type="password" class="form-control" name="pwd" style="width: 500" required>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" name="fname" style="width: 500" required>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" name="lname" style="width: 500" required>
                </div>
              </div>
            </div>
            <div class="form-group">
              <hr>
              <div class="text-right">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </div>
          </div>
        </div>
      </form>
      <div id="j-avatar-errors-1" class="center-block" style="width:800px;display:none"></div>

      <!-- the fileinput plugin initialization -->
      <script>
        $(document).ready(function() {
          // Prepare the preview for profile picture
          $("#wizard-picture").change(function() {
            readURL(this);
          });
        });

        function readURL(input) {
          if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
              $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
            }
            reader.readAsDataURL(input.files[0]);
          }
        }
      </script>
    </section>
  </section>
  </body>
  <footer class="text-center card-footer fixed-bottom">
    <p>&copy SPDesignStudio,Dubai</p>
  </footer>

</html>