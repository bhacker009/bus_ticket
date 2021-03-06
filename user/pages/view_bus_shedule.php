<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ticket</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../css/font-awesome.min.css">
  <link rel="stylesheet" href="../css/style.css" >

</head>
	
<body>
	<div class="header_area">
		<!-- navbar-->
		<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
					<a class="navbar-brand" href="../../index.php"><small><b>Get </b></small><strong class="text-primary">Ticket</strong></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../../index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">User <span class="caret"></span>
							</a>
              <ul class="dropdown-menu">
                <li><a href="my_tickets.php">My Tickets</a></li>
                <li><a href="../../login.php">Log-out</a></li>
                <li><a href="../../sign_up.php">Register</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
	</div>
	<div class="content_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3><strong>Available Buses for you</strong></h3>
				</div>
				<div class="col-md-10 col-md-offset-1 main_content_area">
					<div class="table-responsive">
							<table class="table table-striped table-bordered text-center ">
								<thead>
									<tr>
										<th>Bus#</th>
										<th>Route</th>
										<th>Date</th>
										<th>Time</th>
										<th>Total Seats</th>
										<th>booked Seats</th>
										<th>Available Seats</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a href="../../login.php" class="btn btn-warning">Log-in to reserve seats</a>
										</td>
									</tr>
									<tr>
										<td>2</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a  href="reserve_seats.php" class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
									<tr>
										<td>3</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a  href="reserve_seats.php" class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
									<tr>
										<td>4</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a  href="reserve_seats.php"  class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
									<tr>
										<td>5</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a  href="reserve_seats.php"  class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
									<tr>
										<td>6</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
									<tr>
										<td>7</td>
										<td>place(A) to place(B)</td>
										<td>04/03/2017</td>
										<td>1.30 P.M.</td>
										<td>40</td>
										<td>5</td>
										<td>35</td>
										<td>
											<a  href="reserve_seats.php"  class="btn btn-success">Reserve Seats</a>
										</td>
									</tr>
								</tbody>
							</table>
						</div>
				</div>
			</div>
		</div>
	</div>
	<footer class="footer_area">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<p class="text-center"> &copy; All right reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	
	
	
<!-- jQuery 2.2.3 -->
<script src="../js/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../js/bootstrap.min.js"></script>
<!--main js-->
<script src="../js/main.js"></script>
</body>
</html>
