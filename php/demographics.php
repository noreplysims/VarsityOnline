<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
<!--Navigation -->

<div id="mySidenav" class="sidenav">
<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="dashboard.php">Dashboard</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
<!-- End of nagivation-->

<head>
	<title>Personal Details</title>
  <link rel="stylesheet" type="text/css" href="css/Demographics.css">
</head>
<body>

	<h1>Personal Details</h1>

	<div>
		<form  action="PDemographics.php"  method="post">
			<input type="text" name="id_number" class="form-control" placeholder="ID Number"><br>
			<input type="text" name="cell_number" class="form-control" placeholder="Cellphone Number"><br>
			<select name="gender" class="form-control" >
				<option>Select a Gender</option>
					<option value="Male">Male</option>
					<option vlaue="Female">Female</option>
			</select><br>
			<h2>Date of Birth:</h2>
      <input type="date" class="form-control" name="DOB"><br>
			<select name="race" class="form-control">
				  <option selected hidden>Select a Race</option>
					<option value="Black">Black</option>
					<option vlaue="White">White</option>
					<option value="Indian">Indian</option>
					<option value="Coloured">Coloured</option>
					<option value="Asian">Asian</option>
			</select><br>
			<h2>Are you south african:</h2>
			<input type="radio" name="citizen" value="Yes"> Yes
  		<input type="radio" name="citizen" value="No"> No <br><br>

      <input type="submit" name="submit"><br>



		</form>
	</div>

</body>
</html>
