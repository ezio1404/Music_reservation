<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body>
    <div class=" col-lg-6">
    <form class="form-horizontal" action="../../controller/loginController/loginOwner.php" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Email:</label>
        <div class="col-sm-10">
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="pwd">Password:</label>
        <div class="col-sm-10"> 
        <input type="password" class="form-control" name="password" id="pwd" placeholder="Enter password">
        </div>
    </div>

    <div class="form-group"> 
        <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default" name="login">Submit</button>
        </div>
    </div>
    </form>
    </div>
</body>
</html>