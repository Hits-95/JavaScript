<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>GET METHOD</title>
	<?php include("header.php")?>
	<script type="text/javascript">
		function showUser(str) {
			if (str == "") {
				document.getElementById("txtHint").innerHTML = "";
				return;
			} else {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.onreadystatechange = function() {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById("txtHint").innerHTML = this.responseText;
					}
				};
				
				xmlhttp.open("GET","getPerson.php?str="+str, true);
				xmlhttp.send();
			}
		}
	</script>
</head>
<body>
	<div class="container">
		<h1 class="text-left">Person-info</h1>
		<form action="">
			<div class = "row">
				<div class="col-sm-3">
				<br />
					<select class="form-control"  name="users" onchange = "showUser(this.value);">
						<option value="0">Select Person</option>
						<option value="1">Hitesh</option>
						<option value="2">Sakshi</option>
						<option value="3">Pradhunya</option>
						<option value="4">Nikita</option>
					</select>
				</div>
				<div class="col-sm-9"></div>
			</div>
		</form>
		<br />
		<p id="txtHint">Person in here....</p>
	</div>
</body>
</html>
