<!DOCTYPE html>
	<hmtl>
	<link rel="stylesheet" type="text/css" href="css/TheModGarage.css">
		<head>
			<title>The Mod Garage</title>
			<h1>The Mod Garage</h1>
		</head>
		<div class = "window">
			<body>
				<form id ="vehicle" action="vehicle_page.php">
					<h2>Choose your Vehicle<h2><br>
					<input list="Make">
					<datalist id ="Make">
						<option value="Toyota">
						<option value="Other">
					</datalist><br>
					<input list="Model">
					<datalist id ="Model">
						<option value="Supra">
						<option value="Other">
					</datalist>
					<br>
					<input type="button" onclick="selectVehicle()" value="Submit">	
				</form>
				<script>
				function selectVehicle() {
					document.getElementbyID("vehicle").submit();
				}
				</script>
			</body>
		</div>
	</hmtl>