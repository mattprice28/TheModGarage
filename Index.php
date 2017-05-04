<!DOCTYPE html>
	<hmtl>
	<link rel="stylesheet" type="text/css" href="css/TheModGarage.css">
		<head>
			<title>The Mod Garage</title>
			<h1>The Mod Garage</h1>
		</head>
		<div class = "window">
			<body>
			<div class = "openingMessage">
			<span class = "closebtn" onclick = "this.parentElement.style.display='none';">&times;</span>
			<br><br><br>
			<img class = "logo" src = "css/logo.jpg" alt = "Logo"><br><br><br>
			<p>Welcome to The Mod Garage<br><br>
			The Mod Garage is designed to introduce all user's to the world of modification.<br> Simply select a vehicle from the dropwdown list and you are on your way!<br><br>
			Close this window to continue!</p>
			</div>
				<form id ="vehicle" action="vehicle_page.php" method="get">
					<h2>Choose your Vehicle<h2><br>
					<input list="Make">
					<datalist id ="Make" required>
						<option value="Toyota">
						<option value="Other">
						<p id="selectMake"></p>
					</datalist><br>
					<input list="Model">
					<datalist id ="Model" required>
						<option value="Supra">
						<option value="Other">
						<p id="selectModel"></p>
					</datalist>
					<br>
					<input list="Version">
					<datalist id ="Version" required>
						<option value="MK IV">
						<option value="Other">
						<p id="selectVersion"></p>
					</datalist>
					<br>
					<input type="submit" onclick="validate()" value="Next">	
				</form>
				<script>
				function validate() {
					var make = document.getElementbyID("Make");
					var model = document.getElementbyID("Model")
					var version = document.getElementbyID("Version")
					if(Make.selectedIndex==0){
						document.getElementbyID("selectMake").innerHTML = "Choose a make"
					}
					else if(make.selectedIndex!=0 && model.selectedIndex==0){
						document.getElementbyID("selectModel").innerHTML = "Choose a model"
					}
					else if(version.selectedIndex!=0 && model.selectedIndex==0 && make.selectedIndex==0){
						document.getElementbyID("selectVersion").innerHTML = "Choose a version"
					}
				}
				</script>
			</body>
		</div>
	</hmtl>