<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<title></title>
	<style>
		.navbar {
			width: 100%;
			position: fixed;
			z-index: 1;
			top: 0;
			left: 0;
		}
		.sidenav {
		  height: 100%;
		  position: fixed;
		  z-index: 1;
		  top: 56px;
		  left: 0;
		  background-color: #111;
		  overflow-x: hidden;
		  padding-top: 20px;
		}

		.sidenav a {
		  padding: 8px 8px 8px 16px;
		  text-decoration: none;
		  font-size: 18px;
		  color: #818181;
		  display: block;
		}

		.sidenav a:hover {
		  color: #f1f1f1;
		}

		.sidenav .active {
			color: #f1f1f1;
		}
		.main {
		  margin-left: 253px; /* Same as the width of the sidenav */
		  margin-top: 56px;
		  padding: 20px;
		}

		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
	</style>
	<script>
		$(document).ready(function(){
			$(".tidakada").hide();
			$(".ada").show();
			$(".hapus").click(function(){
				$(".ada").hide();
				$(".tidakada").show();
			});
		});
	</script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #006e5c">
	  <span class="navbar-brand mb-0 h1">Kelompok 1 - Decision Support System</span>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 sidenav" style="background-color: #273b37;">
				<a href="index.php"><img src="img/team.png" style="height:35px; margin-right:20px;">Data Pendaftar</a>
				<a href="kriteria.php"><img src="img/parameter.png" style="height:35px; margin-right:20px;">Parameter Kriteria</a>
				<a href="input.php"><img src="img/process.png" style="height:35px; margin-right:20px;">Proses Data</a>
				<a href="hasil.php" class="active"><img src="img/notepad.png" style="height:35px; margin-right:20px;">Hasil</a>
			</div>
			<div class="col-sm-10 main">
				<div class="tidakada">
					<img src="img/blank.jpg" style="height:200px; margin-top:200px; margin-left:510px;">
					<center><h5 style="opacity:50%;">Tidak menyimpan hasil apapun.</h5></center>
				</div>
				<div class="ada">
					<h3> Hasil Penghitungan AHP </h3>
					<br>
					<table class="table table-sm table-hover">
					  <thead>
					    <tr style="background-color: #dbdbdb;">
					      <th scope="col" style="vertical-align: middle;">#</th>
					      <th scope="col" style="vertical-align: middle;">Name</th>
					      <th scope="col" style="vertical-align: middle;">School Score</th>
					      <th scope="col" style="vertical-align: middle;">Age Score</th>
					      <th scope="col" style="vertical-align: middle;">Family Size Score</th>
					      <th scope="col" style="vertical-align: middle;">Grade Score</th>
					      <th scope="col" style="vertical-align: middle;">TOTAL SCORE</th>
					      <th scope="col" style="vertical-align: middle;">STATUS</th>
					    </tr>
					  </thead>
					  <tbody>
					    <tr style="background-color:#c1ffba;">
					      <th scope="row">1</th>
					      <td class="name">Agustine Roseline</td>
					      <td class="school">0.1234</td>
					      <td class="age">0.0982</td>
					      <td class="famsize">0.1133</td>
					      <td class="grade">0.0067</td>
					      <td class="total">0.3416</td>
					      <td class="status">DITERIMA</td>
					    </tr>
					    <tr style="background-color:#c1ffba;">
					      <th scope="row">2</th>
					      <td class="name">Daniel Franslonda</td>
					      <td class="school">0.0234</td>
					      <td class="age">0.0982</td>
					      <td class="famsize">0.1133</td>
					      <td class="grade">0.0167</td>
					      <td class="total">0.2516</td>
					      <td class="status">DITERIMA</td>
					    </tr>
					    <tr style="background-color:#ffbaba;">
					      <th scope="row">3</th>
					      <td class="name">Sara Claresta</td>
					      <td class="school">0.0234</td>
					      <td class="age">0.0982</td>
					      <td class="famsize">0.0133</td>
					      <td class="grade">0.0067</td>
					      <td class="total">0.1516</td>
					      <td class="status">TIDAK DITERIMA</td>
					    </tr>
					  </tbody>
					</table>
					<center><button type="button" class="btn btn-secondary hapus">&emsp;&emsp;Hapus&emsp;&emsp;</button></center>
				</div>
			</div>
		</div>
	</div>
</body>