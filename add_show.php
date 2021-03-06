<?php
include 'session.php';
include 'connect.php';
include 'ifmanager.php';
?>
<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<title><?php echo $title?> | Add Movie</title>
	<style type="text/css">
		input, select{
			display: block;
			width: 10%;
			box-sizing : border-box;
		}
		option{
			text-transform: capitalize;
		}
	</style>
</head>
<body>
	<div>
		<form method="post" action="insertshow.php">
			<label>Movie Title
				<select name="mid" id="mid">
					<?php
					$sql="SELECT * FROM movies";
					$result=mysql_query($sql);
					while($row = mysql_fetch_assoc($result)) {
						echo '<option value="'.$row["id"].'">'.$row["title"].'</option>';
					}
					?>
				</select>
			</label>
			<label>Theatre
				<select name="tid" id="tid">
					<?php
					$tsql="SELECT * FROM theatres";
					$tresult=mysql_query($tsql);
					while($trow = mysql_fetch_assoc($tresult)) {
						echo '<option value="'.$trow["id"].'">'.$trow["tname"].'</option>';
					}
					?>
				</select>
			</label>
			<label>Start Date
				<input name="startdate" id="startdate" min="<?php echo date("Y-m-d");?>" placeholder="startdate" type="date" required>
			</label>
			<label>End Date
				<input name="enddate" id="enddate" min="<?php echo date("Y-m-d");?>" placeholder="enddate" type="date" required>
			</label>
			<input name="premiumseatnumber" min="0" placeholder="Premium Seat Numbers" type="Number" required>
			<input name="premiumseatprice" min="0" placeholder="Premium Seat Price" type="Number" required>
			<input name="regularseatnumber" min="0" placeholder="Regular Seat Numbers" type="Number" required>
			<input name="regularseatprice" min="0" placeholder="Regular Seat Price" type="Number" required>
			<input name="length" min="0" placeholder="Length in minutes" type="Number" required>
			<label>Showtime
				<input name="showtime" placeholder="Show Time" type="time" required>
			</label>
			<input type="submit">
		</form>
	</div>
</div>
</body>
</html>