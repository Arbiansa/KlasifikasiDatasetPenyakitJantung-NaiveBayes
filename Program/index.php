<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM tb_statlog ORDER BY id ASC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>NB</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<!-- <a href="add.html">Add New Data</a><br/><br/> -->

<div class="container-fluid">
	<div class="row">
		<div class="col-8">
			<table class="table table-striped">
				<thead>
    				<tr>
						<th scope="col">Age</th>
						<th scope="col">Sex</th>
						<th scope="col">CP</th>
						<th scope="col">RBP</th>
						<th scope="col">SC</th>
						<th scope="col">FBS</th>
						<th scope="col">RER</th>
						<th scope="col">MHRA</th>
						<th scope="col">EIA</th>
						<th scope="col">Oldpeak</th>
						<th scope="col">STS</th>
						<th scope="col">NV</th>
						<th scope="col">T</th>
						<th scope="col">Heart Desease</th>
    				</tr>	
  				</thead>
				  <tbody>
				  	<tr>
					  <?php 
						//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
						while($res = mysqli_fetch_array($result)) { 		
						echo "<tr>";
						echo "<td>".$res['Age']."</td>";
						echo "<td>".$res['Sex']."</td>";
						echo "<td>".$res['CPT']."</td>";	
						echo "<td>".$res['RBP']."</td>";
						echo "<td>".$res['SC']."</td>";
						echo "<td>".$res['FBS']."</td>";
						echo "<td>".$res['RER']."</td>";
						echo "<td>".$res['MHRA']."</td>";
						echo "<td>".$res['EIA']."</td>";
						echo "<td>".$res['Oldpeak']."</td>";
						echo "<td>".$res['TSofTPESTS']."</td>";
						echo "<td>".$res['NoMV']."</td>";
						echo "<td>".$res['Thal']."</td>";
						echo "<td>".$res['Label']."</td>";
						// echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a> | <a href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
						}
						?>
					</tr>
				  </tbody>
			</table>
		</div>

		<div class="col-4">	
		<br>
			<h3>Input Nilai</h3>
			<form action="proses.php" method="post" name="form1">
				<table width="50%" border="0">
				<tr> 
					<td>Age</td>
					<td><input type="number" name="age"></td>
				</tr>
				<tr> 
					<td>Sex</td>
					<td><input type="number" name="sex"></td>
				</tr>
				<tr> 
					<td>Chest Pain Type</td>
					<td><input type="number" name="cpt"></td>
				</tr>
				<tr> 
					<td>Resting Blood Pressure</td>
					<td><input type="number" name="rbp"></td>
				</tr>
				<tr> 
					<td>Serum Cholestoral in mg/dl </td>
					<td><input type="number" name="sc"></td>
				</tr>
				<tr> 
					<td>Fasting Blood Sugar > 120 mg/dl </td>
					<td><input type="number" name="fbs"></td>
				</tr>
				<tr> 
					<td>Resting Electrocardiographic Results (values 0,1,2)</td>
					<td><input type="number" name="rer"></td>
				</tr>
				<tr> 
					<td>Maximum Heart Rate Achieved</td>
					<td><input type="number" name="mhra"></td>
				</tr>
				<tr> 
					<td>Exercise Induced Angina</td>
					<td><input type="number" name="eia"></td>
				</tr>
				<tr> 
					<td>Oldpeak</td>
					<td><input type="text" step="any" name="oldpeak"></td>
				</tr>
				<tr> 
					<td>ST Segment</td>
					<td><input type="number" name="tsoftpests"></td>
				</tr>
				<tr> 
					<td>Number of Major Vessels</td>
					<td><input type="number" name="nomv"></td>
				</tr>
				<tr> 
					<td>Thal</td>
					<td><input type="number" name="thal"></td>
				</tr>
				<tr></tr>
				<td></td>
				<td></td>
				<tr> 
					<td></td>
					<td><a href="proses.php"><input type="submit" class="btn btn-primary" name="Submit" value="Proses"></a><br/><br/></td>
				</tr>
				</table>
			</form>
		
			
		</div>
	</div>
</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</body>
</html>
