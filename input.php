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
			variables=[];
			$(".tahap2").hide();
			$(".prosesdata").click(function(){
				percent=1/(variables.length+1)*100;
				tabel="<table class='table table-sm'>";
				for (var i=0;i<=variables.length;i++){
					tabel=tabel+"<tr>";
					for (var j=0;j<=variables.length;j++){
						if (i==0){
							if (j==0){
								tabel=tabel+"<th scope='col' style='vertical-align: middle; width: "+percent+"%;'>#</th>"
							}
							else {
								tabel=tabel+"<th scope='col' style='vertical-align: middle; width: "+percent+"%;'>"+variables[j-1]+"</th>";
							}
						}
						else if (i!=0){
							if (j==0){
								tabel=tabel+"<th scope='col' style='vertical-align: middle;'>"+variables[i-1]+"</th>";
							}
							else if (i==j){
								tabel=tabel+"<td>1</td>";
							}
							else if (j<i){
								tabel=tabel+"<td id='"+i+j+"' data-baris='"+i+"' data-kolom='"+j+"'>0</td>";
							}
							else {
								tabel=tabel+"<td><input class='form-control ahp' data-baris='"+i+"' data-kolom='"+j+"' id='"+i+j+"' type='number'></td>";
							}
						}
					}
					tabel=tabel+"</tr>"
				}
				tabel=tabel+"</table>"
				$(".tabel").html(tabel);
				$(".tahap1").hide();
				$(".tahap2").show();
			});
			$(".tabel").on('change', '.ahp', function(){
				a=$(this).val()
				b=1/a;
				c=b.toFixed(2);
				baris=$(this).data("baris")
				kolom=$(this).data("kolom")
				$("#"+kolom+baris).html(c);
			});
			$(".kembali").click(function(){
				$(".tahap1").show();
				$(".tahap2").hide();
			});
			$('#schoolCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("School");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "School"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#sexCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Sex");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Sex"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#ageCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Age");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Age"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#addressCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Address");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Address"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#famsizeCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Family Size");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Family Size"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#mjobCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Mother's Job");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Mother's Job"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#fjobCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Father's Job");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Father's Job"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#higherCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Higher Education");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Higher Education"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#internetCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Internet Access");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Internet Access"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#healthCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Health Status");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Health Status"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#absencesCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Absences");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Absences"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
		    });
		    $('#gradeCheckbox').change(function(){
		        if ($(this).is(':checked')) {
		            variables.push("Grade");
		        }
		        else {
		        	temp=[]
		        	for (var i=0;i<variables.length;i++){
		        		if (variables[i] != "Grade"){
		        			temp.push(variables[i]);
		        		}
		        	}
		        	variables = temp;
		        }
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
				<a href="input.php" class="active"><img src="img/process.png" style="height:35px; margin-right:20px;">Proses Data</a>
				<a href="hasil.php"><img src="img/notepad.png" style="height:35px; margin-right:20px;">Hasil</a>
			</div>
			<div class="col-sm-10 main">
				<h3> Penghitungan AHP </h3>
			  	<br>
			  	<div class="tahap1">
				  	<table border="0">
				  		<tr>
				  			<td style="vertical-align: top;"><b>Variabel</b></td>
				  			<td style="vertical-align: top;">&emsp;:&emsp;</td>
			        		<td>
			        			<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="schoolCheckbox" value="option1">
								  <label class="form-check-label" for="schoolCheckbox">School</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="sexCheckbox" value="option1">
								  <label class="form-check-label" for="sexCheckbox">Sex</label>
								</div>
							</td>
							<td>
			        			<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="ageCheckbox" value="option1">
								  <label class="form-check-label" for="ageCheckbox">Age</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="addressCheckbox" value="option1">
								  <label class="form-check-label" for="addressCheckbox">Address</label>
								</div>
							</td>
							<td>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="famsizeCheckbox" value="option2">
								  <label class="form-check-label" for="famsizeCheckbox">Family Size</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="mjobCheckbox" value="option2">
								  <label class="form-check-label" for="mjobCheckbox">Mother's Job</label>
								</div>
							</td>
							<td>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="fjobCheckbox" value="option2">
								  <label class="form-check-label" for="fjobCheckbox">Father's Job</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="higherCheckbox" value="option1">
								  <label class="form-check-label" for="higherCheckbox">Higher Education</label>
								</div>
							</td>
							<td>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="internetCheckbox" value="option1">
								  <label class="form-check-label" for="internetCheckbox">Internet</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="healthCheckbox" value="option1">
								  <label class="form-check-label" for="healthCheckbox">Health Status</label>
								</div>
							</td>
							<td>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="absencesCheckbox" value="option1">
								  <label class="form-check-label" for="absencesCheckbox">Absence</label>
								</div>
								<div class="form-check form-check-inline">
								  <input class="form-check-input" type="checkbox" id="gradeCheckbox" value="option1">
								  <label class="form-check-label" for="gradeCheckbox">Grade</label>
								</div>
			        		</td>
			        	</tr>
			        	<tr><td colspan=7>&emsp;</td></tr>
			        	<tr>
			        		<td style="vertical-align: top;"><b>Jumlah Penerima Selanjutnya</b></td>
			        		<td style="vertical-align: top;">&emsp;:&emsp;</td>
			        		<td colspan=6><input class='form-control' type='number'></td>
			        	</tr>
				  	</table>
				  	<br><br>
				  	<button type="button" class="btn btn-success prosesdata" style="float: right;">Selanjutnya</button>
				</div>
				<div class="tahap2">
					<div class="tabel">
					</div>
					<br><br>
					<table>
						<tr>
							<td><button type="button" class="btn btn-secondary kembali">Kembali</button></td>
							<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
							<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
							<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
							<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
							<td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;</td>
							<td><button type="button" class="btn btn-success">Proses Data</button></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>