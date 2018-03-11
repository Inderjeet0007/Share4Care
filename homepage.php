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
	width: 200px;
	height: 50px;
	background-color: #3c3c3c ;
	border-radius: 30px;
	margin-left:40%;
	font-size: 20px;
	margin-top: -40px;
}
body{
	align:center;
	
	}
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Share_4_Care</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Logout</a></li>
      
    </ul>
  </div>
</nav>
  

<br><br>
<a href="#below"><button class="buttonstart">Donate money</button></a><br>

<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
/// next card

<div class="card2" style="width: 18rem;">
  <img class="card-img-top" src="1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
// next button
<div class="card2" style="width: 18rem;">
  <img class="card-img-top" src="1.jpg" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>

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
</body>
</html>