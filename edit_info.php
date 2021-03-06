<html>
<head>
	<title>Luke Foundation, Inc</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="script/backToIndex.js" type="text/javascript" ></script>
	<link href="images/favi.png" type="image/png" rel="icon" />
</head>
<body>
	<div class="header">
		<div class="handle">
			<span onclick="back()"><h1><img src="images/LukeLogo.png" width="40px" style="float:left" /></h1>
			<h1>uke Foundation, Inc</h1></span>
		</div>
	</div>
	<div class="content"><div class="left-panel">
			<a href="index.php">&nbsp;&nbsp;<img src="images/home.png">&nbsp; Home</a>
			<a href="view_recs.php">&nbsp;&nbsp;<img src="images/folder.png">&nbsp; View Records</a>
			<a href="search.php">&nbsp;&nbsp;<img src="images/search.png">&nbsp; Search Records</a>
			<a href="add_rec.php">&nbsp;&nbsp;<img src="images/add.png">&nbsp; New Record</a>
			<a href="intake.php">&nbsp;&nbsp;<img src="images/file.png">&nbsp; New Intake Form</a>
		</div>
		<div class="right-panel">
		<center>
			<form action='update_info.php' method='post'>
			<?php 
				include 'link.php';
				$id = $_POST['pid'];
				$query = "SELECT * FROM clsurgery WHERE patient_id = $id";
				$query2 = "SELECT * FROM patient WHERE patient_id = $id";
				$result = mysqli_query($link, $query);
				$result2 = mysqli_query($link, $query2);
				$open = mysqli_fetch_array($result);
				$open2 = mysqli_fetch_array($result2);

				echo "
				<h1>Edit Surgery Information for ".$open2['patient_fname']." ".$open2['patient_lname']."</h1>
				<input type='submit' value='Save details' id='save'><input type='hidden' name='pid' value='".$id."'>
				<table>
				<tr>
					<th colspan='2'>Details</th>
				</tr>
				<tr>
					<td><b>Type of cleft lip</b></td>
					<td><input type='text' name='clip' value='".$open['Cl_Lip']."'></td>
				</tr>
				<tr>
					<td><b>Type of cleft palate</b></td>
					<td><input type='text' name='cpalate' value='".$open['Cl_Palate']."'></td>
				</tr>
				<tr>
					<td><b>Type of operation</b></td>
					<td><input type='text' name='operation' value='".$open['Operation']."'></td>
				</tr>
				<tr>
					<td><b>Type of repair</b></td>
					<td><input type='text' name='repair' value='".$open['Repair']."'></td>
				</tr>
				<tr>
					<td><b>Surgeons</b></td>
					<td><input type='text' name='surgeon' value='".$open['Surgeon']."'></td>
				</tr>
			</table>
			<br />
			<table>
				<tr>
					<th colspan='2'>Fees</th>
					<th colspan='2'>Dates</th>
				</tr>
				<tr>
					<td><b>Hospital</b></td>
					<td><input type='number' step='any' name='hospital' value='".$open['Hospital_Bill']."'></td>
					<td><b>Evaluation Date</b></td>
					<td><input type='date' name='eval' value='".$open['Evaluation_Date']."'></td>
				</tr>
				<tr>
					<td><b>Laboratory</b></td>
					<td><input type='number' step='any' name='lab' value='".$open['Lab_fee']."'></td>
					<td><b>Admission Date</b></td>
					<td><input type='date' name='admission' value='".$open['Admission_Date']."'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Surgery Date</b></td>
					<td><input type='date' name='surgery' value='".$open['Surgery_Date']."'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Discharge Date</b></td>
					<td><input type='date' name='discharge' value='".$open['Discharge_Date']."'></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td><b>Follow-Up Date</b></td>
					<td><input type='date' name='follow' value='".$open['Follow_Up_Date']."'></td>
				</tr>
			</table>"
			?>
			</form>
		</center>
		&nbsp;<br />&nbsp;
		</div>
	</div>
</body>
</html>
