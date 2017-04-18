<!DOCTYPE html>
	<hmtl>
	<link rel="stylesheet" type="text/css" href="css/TheModGarage.css">
		<head>
			<title>The Mod Garage</title>
			<h1>The Mod Garage</h1>
		</head>
		<div class = "window">
			<body>
				<form id ="vehicle" action="vehicle_page.php" method="get">
					<h2>Choose your Vehicle<h2><br>
					<input list="Make">
					<datalist id ="Make">
						<option value="Toyota">
						<option value="Other">
						<p id="selectMake"></p>
					</datalist><br>
					<input list="Model">
					<datalist id ="Model">
						<option value="Supra">
						<option value="Other">
						<p id="selectModel"></p>
					</datalist>
					<br>
					<input list="Version">
					<datalist id ="Version">
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
					if(make.selectedIndex==0){
						document.getElementbyID("selectMake").innerHTML = "Choose a make"
					}
					else if(make.selectedIndex!=0 && model.selectedIndex==0){
						document.getElementbyID("selectModel").innerHTML = "Choose a model"
					}
				}
				</script>
			</body>
		</div>
	</hmtl>