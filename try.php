<!DOCTYPE html>
<html lang="en">
<head>
  <title>User Homepage</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">

	.buttonstart{
	width: 250px;
	height: 50px;
	background-color: grey ;
	border-radius: 30px;
	font-size: 20px;
	margin-top: -40px;
  color:white;
}
.body{
	align:center;

	}
  </style>
</head>
<body class="body">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Share_4_Care</a>
    </div>
    <ul class="nav navbar-nav">

    </ul>
  </div>
</nav>


<br><br>
<div class="container-fluid" align="center">
<a href="#below"><button class="buttonstart">Donate money</button></a><br>
<br><br>
<div class="card" style="width: 30rem; border:2px solid black" >
  <img class="card-img-top" src="img/clothing.png" height="120px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Clothes</h5>
    <p class="card-text"></p>

	<!-- Trigger the modal with a button -->
  <button type="button" class="clothes btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Donate Clothes</button>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Clothes Detail</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="clothes_server.php">

			<p>Gender</p>
			<select id="gender" name="gender">
				<option value="M">M</option>
				<option value="F">F</option>
				<option value="Both">Both</option>
			</select><br>
			<p> Age</p>
				<input type="checkbox" name="age[]" value="onetofive">1-5<br>
				<input type="checkbox" name="age[]" value="sixtoten">6-10<br>
				<input type="checkbox" name="age[]" value="eleventoeighteen" >11-18<br>
			<br>

			<p> Quantity</p>
			<input type="text" name="quantity" placeholder="Enter quantity">
			<br>
			<input type="submit" name="Submit" value="Submit">
		</form>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>

    </div>
  </div>
  </div>
</div>
<br><br>
<div class="card2" style="width: 30rem; border: 2px solid black">
  <img class="card-img-top" src="img/ST.jpg" height="150px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Stationary</h5>

	<!-- Trigger the modal with a button -->
  <button type="button" class="Stationary btn btn-info btn-lg" data-toggle="modal" data-target="#myModal1">Donate Stationary</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
   <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Stationary Detail</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="books_server.php">

			<p>Books</p>
				<input type="checkbox" name="book[]" value="educational">Educational<br>
				<input type="checkbox" name="book[]" value="noneducational" >Non-Educational<br>
				<input type="checkbox" name="book[]" value="others" >Other Stationary<br>
			</select><br>

			<p> Quantity</p>
			<input type="text" name="quantity" placeholder="Enter quantity">
			<br>
			<input type="submit" name="Submit" value="Submit">
		</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
  </div>
  </div>
</div>
</div>
<br><br>
<div class="card2" style="width: 30rem; border:2px solid black">
  <img class="card-img-top" src="img/bear.jpg" height="150px" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Toys</h5>

	<!-- Trigger the modal with a button -->
  <button type="button" class="toys btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Donate Toys</button>
  <!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
   <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Toys Details</h4>
        </div>
        <div class="modal-body">
          <form method="POST" action="toys_server.php">

			<p> Quantity</p>
			<input type="text" name="quantity" placeholder="Enter quantity">
			<br>
			<input type="submit" name="Submit" value="Submit">
		</form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

      </div>
  </div>
  </div>
</div>
</div>
</div>
</div>
<br><br>
</body>
</html>
