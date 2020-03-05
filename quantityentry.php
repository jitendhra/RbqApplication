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
  <a class="active" href="quantityentry.php"><i class="fa fa-fw fa-edit"></i>QuantityEntry</a>
  <a href="report.php"><i class="fa fa-fw fa-sticky-note"></i>Report</a>
  <a href="profile.php"><i class="fa fa-fw fa-user"></i>Profile</a>
  <a href="logout.php"><i class="fa fa-fw fa-power-off"></i>Logout</a>
</div>
   
<div >
  <img class="fixed-top-left fixed-top" style="margin-top: 0em; margin-left: 0em; height: 5.5em; width: 12.5em;" src="img/SP Logo.png" />
  <label class="text-center card-footer fixed-top" style="margin-left: 12.3em; text-align: center; height: 5.5em;">
      <b><h1><b>RBQ Application</b></h1></b>
  </label>
</div>
  <div class="box fixed-top" style="margin-left: 13em; margin-top: 6em; ">
  <select id="LoadProject" class="fixed-top-left" style="width: 10em;"></select>
  <input type="button" value="Load" onClick="search();">
  <input type="text" style="width: 10em;" placeholder="ProjectName" readonly>
    <input type="text" style="width: 10em;" placeholder="LastUpdatedOn" readonly>
    <input type="text" style="width: 10em;" placeholder="User" readonly>
  </div>
    <div ><br>
      <div class="box fixed-top" style="margin-left: 14em;  margin-top: 9em;"><br>
        <h2><b>QuantityEntry List</b></h2><br>
        <button class="btn btn-success">Add New</button>   <!-- data-toggle="modal" data-target="#myModalAdd" -->
      </div><br><br><br>
        <section class="container" style="margin-left: 14em; margin-top: 13em;">
                     <!--  <h2><b>QuantityEntry List</b></h2>
                      <button class="btn btn-success">Add New</button> data-toggle="modal" data-target="#myModalAdd" -->
                      <table class="table table-striped" id="mytable">
                        <thead>
                          <tr>
                            <th>Floors</th>
                            <th>Tender RaftFoundation</th>
                            <th>IFC RaftFoundation</th>
                            <th>Tender RetainingWall</th>
                            <th>IFC RetainingWall</th>
                            <th>Tender Columns</th>
                            <th>IFC Columns</th>
                            <th>Tender Water-TankWall</th>
                            <th>IFC Water-TankWall</th>
                            <th>Tender Core-Wall</th>
                            <th>IFC Core-Wall</th>
                            <th>Tender Shear-Wall</th>
                            <th>IFC Shear-Wall</th>
                            <th>Tender Ramp-Wall</th>
                            <th>IFC Ramp-Wall</th>
                            <th>Tender Parapet-Walls</th>
                            <th>IFC Parapet-Walls</th>
                            <th>Tender Upstands-Walls</th>
                            <th>IFC Upstands-Walls</th>
                            <th>Tender Beams</th>
                            <th>IFC Beams</th>
                            <th>Tender RCC Slabs</th>
                            <th>IFC RCC Slabs</th>
                            <th>Tender PT Slabs</th>
                            <th>IFC PT Slabs</th>
                            <th>Tender Ramp Slabs</th>
                            <th>IFC Ramp Slabs</th>
                            <th>Tender Staircase</th>
                            <th>IFC Staircase</th>
                            <th>Tender NonStructural</th>
                            <th>IFC NonStructural</th>
                            <th>Tender Total</th>
                            <th>IFC Total</th>
                            <th>Varience</th>
                            <th>Remark</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          {{#each results}}
                          <tr>
                            <td>{{ floors }}</td>
                            <td>{{ tender_raftfoundation }}</td>
                            <td>{{ ifc_raftfoundation }}</td>
                            <td>{{ tender_retainingwall }}</td>
                            <td>{{ ifc_retainingwall }}</td>
                            <td>{{ tender_columns }}</td>
                            <td>{{ ifc_columns }}</td>
                            <td>{{ tender_water_tankwall }}</td>
                            <td>{{ ifc_water_tankwall }}</td>
                            <td>{{ tender_corewall }}</td>
                            <td>{{ ifc_corewall }}</td>
                            <td>{{ tender_shearwall }}</td>
                            <td>{{ ifc_shearwall }}</td>
                            <td>{{ tender_rampwall }}</td>
                            <td>{{ ifc_rampwall }}</td>
                            <td>{{ tender_parapetwall }}</td>
                            <td>{{ ifc_parapetwall }}</td>
                            <td>{{ tender_upstandswall }}</td>
                            <td>{{ ifc_upstandswall }}</td>
                            <td>{{ tender_beam }}</td>
                            <td>{{ ifc_beam }}</td>
                            <td>{{ tender_rcc_slabs }}</td>
                            <td>{{ ifc_rcc_slabs }}</td>
                            <td>{{ tender_pt_slabs }}</td>
                            <td>{{ ifc_pt_slabs }}</td>
                            <td>{{ tender_ramp_slabs }}</td>
                            <td>{{ ifc_ramp_slabs }}</td>
                            <td>{{ tender_staircase }}</td>
                            <td>{{ ifc_staircase }}</td>
                            <td>{{ tender_nonstructural }}</td>
                            <td>{{ ifc_nonstructural }}</td>
                            <td>{{ tender_total }}</td>
                            <td>{{ ifc_total }}</td>
                            <td>{{ varience }}</td>
                            <td>{{ remark }}</td>
                            <td>
                              <a href="javascript:void(0);" class="btn btn-sm btn-info edit" data-id="{{ product_id }}" data-product_name="{{ product_name }}" data-product_price="{{ product_price }}">Edit</a>
                              <a href="javascript:void(0);" class="btn btn-sm btn-danger delete" data-id="{{ product_id }}">Delete</a>
                            </td>
                          </tr>
                          {{/each}}
                        </tbody>
                      </table>

  	                 <!-- Add New Product Modal-->
                    <form action="/save" method="post">
                      <div class="modal fade" id="myModalAdd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Add New Product</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="form-group">
                                <input type="text" name="product_name" class="form-control" placeholder="Product Name" required>
                            </div>

                            <div class="form-group">
                                <input type="text" name="product_price" class="form-control" placeholder="Price" required>
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save</button>
                          </div>
                        </div>
                      </div>
                      </div>
                </form>

            <!-- Edit Product Modal-->
            <form action="/update" method="post">
                <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="form-group">
                            <input type="text" name="product_name" class="form-control product_name" placeholder="Product Name" required>
                        </div>

                        <div class="form-group">
                            <input type="text" name="product_price" class="form-control price" placeholder="Price" required>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <input type="hidden" name="id" class="product_id">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </div>
                </div>
            </form>
                <!-- Delete Product Modal-->
                <form id="add-row-form" action="/delete" method="post">
                  <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="myModalLabel">Delete Product</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                  <strong>Are You Sure To Delete This Data?</strong>
                            </div>
                            <div class="modal-footer">
                                <input type="hidden" name="product_id" class="form-control product_id2" required>
                                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Delete</button>
                            </div>
                        </div>
                    </div>
                  </div>
              </form>
        </section> 
        <script src="/assets/js/jquery-3.3.1.js"></script>
        <script src="/assets/js/bootstrap.js"></script>
        <script>
          
        </script>
   </div>

</body>
    <footer class="text-center card-footer fixed-bottom">
        <p>&copy SPDesignStudio,Dubai</p>
    </footer>
</html>