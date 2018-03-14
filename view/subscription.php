<?php 
        include '../model/subscriptionModel.php';
        $subscription = new Subscription();
        $subs=$subscription->getAllSubs();
        date_default_timezone_set ('Asia/Hong_Kong');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>Music Reservation</title>
    <link rel="icon" href="assets/img/icon.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="assets/css/pricing.css" rel="stylesheet"> -->
  </head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
      <nav class="my-2 my-md-0 mr-md-3">
      </nav>
      <a class="btn btn-outline-primary" href="../index.html">Home</a>
    </div>

    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
      <h1 class="display-4">Pricing</h1>
      <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example. It's built with default Bootstrap components and utilities with little customization.</p>
    </div>

    <div class="container">
      <div class="card-deck mb-3 text-center">
        <?php foreach($subs as $row){ ?>
        <div class="card mb-4 box-shadow">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal"><?php echo$row['subscription_name']?></h4>
          </div>
          <div class="card-body">
            <h1 class="card-title pricing-card-title">₱<?php echo$row['subscription_price']?> <small class="text-muted"></small></h1>
            <ul class="list-unstyled mt-3 mb-4">
            </ul>
            <button type="button" class="btn btn-lg btn-block btn-outline-primary" onclick="openmodal('<?php echo $row['subscription_id'];?>');">Subscribe now</button>
          </div>
        </div>
        <?php } ?>
        </div>
        </div>
        <!--  -->
      <footer class="pt-4 my-md-5 pt-md-5 border-top">
        <div class="container">
             <p class="m-0 text-center">Copyright &copy; Music Reservation 2018</p>
         </div>
      </footer>
      <!--  -->
      <!-- modal -->
    </div>
    <div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title">Add Admin</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="post" action="../controller/studioController/addStudio.php">
        <!-- kuwang og subscription ID and actions -->
      <div class="form-group">
        <div class="form-row">
		  <input class="form-control" name="subscription_start" type="hidden" value="<?php echo date("Y-m-d");?>">
      <input class="form-control" name="subscription_id" id="subsid" type="hidden" value="">
      
          <div class="col-md-6">
            <label for="exampleInputName">Studio name</label>
            <input class="form-control" name="studio_name" type="text" aria-describedby="nameHelp" placeholder="Studio name">
          </div>
          <div class="col-md-6">
            <label for="exampleInputLastName">Studio Description</label>
            <input class="form-control"  name="studio_desc" type="text" aria-describedby="nameHelp" placeholder="Studio Description">
          </div>
          <div class="col-md-6">
            <label for="exampleInputName">Studio Address</label>
            <input class="form-control"  name="studio_address" type="text" aria-describedby="nameHelp" placeholder="Studio Address">
          </div>
          <div class="col-md-6">
            <label for="exampleInputLastName">Studio Contact</label>
            <input class="form-control"  name="studio_contact" type="text" aria-describedby="nameHelp" placeholder="Studio Contact">
          </div>
          <div class="col-md-6">
            <label for="exampleInputPassword1">Hour Open</label>
            <input class="form-control"  name="hour_open" type="time" placeholder="Hour Open">
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmtext">Hour Close</label>
            <input class="form-control"   name="hour_close" type="time" placeholder="Hour Close">
          </div>
          <div class="col-md-6">
            <label for="exampleInputtext1">Owner First name</label>
            <input class="form-control"  name="owner_fname" type="text" placeholder="Owner First nametext">
          </div>
          <div class="col-md-6">
            <label for="exampleConfirmtext">Owner Last name</label>
            <input class="form-control"  name="owner_lname" type="text" placeholder="Owner Last name">
          </div>
          <div class="col-md-12">
            <label for="exampleInputtext1">Owner email</label>
            <input class="form-control"  name="owner_email" type="email" placeholder="Owner email">
          </div>
        </div>
        </div>
      </div>
      <div class="modal-footer">
      <input type="submit"  class="btn btn-primary" name="addStudio" value="Submit">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </form>
    </div>
  </div>
</div>
<!-- modal end -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <!-- <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script> -->
    <!-- <script src="assets/vendor/popper.min.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- <script src="assets/vendor/holder.min.js"></script> -->
    <!-- <script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
    </script> -->
  </body>

<script>
  function openmodal(id){
    $('#subsid').val(id);
    $('#myModal').modal();
  }
</script>

</html>
