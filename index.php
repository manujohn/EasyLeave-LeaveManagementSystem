<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Easy Leave</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i,700,700i,900,900i" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/coming-soon.min.css?v=16762" rel="stylesheet">

  </head>

  <body style="background-image:url('img/mits.jpg'); background-size: cover;">

    <div class="overlay"></div>

    <div class="masthead">
      <div class="masthead-bg"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-12 my-auto">
            <div class="masthead-content text-white py-5 py-md-0">
              <h1 class="mb-3">Easy Leave</h1>
              <p class="mb-5"></strong>Muthoot Institute of Technology & Science</p>
			  <form action="login/v.php" method="post">
              <div style="padding-right:8em">
			  <?php 
			  if(isset($_GET['error']))
			  {
				if($_GET['error']==1)
				{
					echo "Invalid login";
				}
			  
			  } 
			  ?>
				<input type="text" class="form-control" placeholder="College ID" name="id"  aria-describedby="basic-addon"> <br>
				<input type="password" class="form-control" placeholder="Password" name="pass"   aria-describedby="basic-addon"> <br>
                <div class="input-group-append">
                <input class="btn btn-secondary" type="submit" value="Login">
              </div>
			  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
	

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
   <!-- <script src="vendor/vide/jquery.vide.min.js"></script> -->

    <!-- Custom scripts for this template -->
    <script src="js/coming-soon.min.js"></script>

  </body>

</html>
