<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Music Reservation</title>
  <link rel="icon" href="../assets/img/icon.png">
  <!-- Bootstrap core CSS-->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../assets/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../assets/css/sb-admin.css" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Music Reservation</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="index.html">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer">
          <a class="nav-link" href="customer.html">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Customer</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer">
            <a class="nav-link" href="room.php">
              <i class="fa fa-fw fa-music"></i>
              <span class="nav-link-text">Music Room</span>
            </a>
          </li>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer">
          <a class="nav-link" href="customer.html">
            <i class="fa fa-fw fa-credit-card"></i>
            <span class="nav-link-text">Payments</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer">
            <a class="nav-link" href="customer.html">
              <i class="fa fa-fw fa-calendar"></i>
              <span class="nav-link-text">Schedule</span>
            </a>
          </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customer">
            <a class="nav-link" href="customer.html">
              <i class="fa fa-fw fa-th-list"></i>
              <span class="nav-link-text">Reservation</span>
            </a>
          </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Music Studio">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Reports</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseMulti">
            <li>
              <a href="#">Detailed Report</a>
            </li>
            <li>
              <a href="#">Summarized Report</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">        
        <li class="nav-item">
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controller/loginController/logoutOwner.php">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>
<!-- end nav -->


  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Music Room</li>
        <li><button class="btn btn-primary" type="button" data-toggle="modal" data-target="#addDepartment">Add Department</button></li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
      

      </div>
      <!-- Area Chart Example-->
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <!-- modal satart-->
    <div class="modal fade" tabindex="-1" role="dialog" id="addDepartment">
				<div class="modal-dialog" style="width:40%" role="document">
					<div class="modal-content">
						<div class="modal-header"><h3 class="modal-title">Add Department</h3>
							<button type="button" class="close" data-dismiss="modal"> <span>&times;</span> </button> </div>
							
						<div class="modal-body">
							<form class="form-horizontal form-label-left" method="post" action="../controller/departmentController/addDept.php">
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Code <span class="required">*</span> </label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" name="dept_code" required="required" class="form-control"> </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Department Description<span class="required">*</span> </label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" name="dept_description" required="required" class="form-control"> </div>
								</div>
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Office Location<span class="required">*</span> </label>
									<div class="col-md-9 col-sm-9 col-xs-12">
										<input type="text" name="office_location" required="required" class="form-control"> </div>
								</div>
								<div class="modal-footer">
									<button class="btn button-secondary" data-dismiss="modal" type="button">Cancel</button>
									<button class="btn btn-primary" name="addDept" type="submit">Submit</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
    <!-- modal end -->
    <footer class="sticky-footer">
      <div class="container">
        <div class="text-center">
          <small>Copyright © Your Website 2018</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../index.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
   
    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="../assets/vendor/chart.js/Chart.min.js"></script>
    <script src="../assets/vendor/datatables/jquery.dataTables.js"></script>
    <script src="../assets/vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="../assets/js/sb-admin-datatables.min.js"></script>
    <script src="../assets/js/sb-admin-charts.min.js"></script>
  </div>

</body>

</html>
