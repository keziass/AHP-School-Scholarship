<?php
	include 'connect.php';
	if(isset($_POST['showData'])){
		$query = mysqli_query($con, "SELECT * FROM student");
		while($row=mysqli_fetch_assoc($query)){
			echo "<tr id='".$row['id']."' data-toggle='modal' data-target='#editdelete'>
				      <th scope='row'>".$row['id']."</th>
				      <td class='name'>".$row['name']."</td>
				      <td class='school'>".$row['school']."</td>
				      <td class='sex'>".$row['sex']."</td>
				      <td class='age'>".$row['age']."</td>
				      <td class='address'>".$row['address']."</td>
				      <td class='famsize'>".$row['famsize']."</td>
				      <td class='mjob'>".$row['mjob']."</td>
				      <td class='fjob'>".$row['fjob']."</td>
				      <td class='higher'>".$row['higher']."</td>
				      <td class='internet'>".$row['internet']."</td>
				      <td class='health'>".$row['health']."</td>
				      <td class='absences'>".$row['absences']."</td>
				      <td class='g1'>".$row['g1']."</td>
				      <td class='g2'>".$row['g2']."</td>
				      <td class='g3'>".$row['g3']."</td>
				    </tr>";
		}
		exit();
	}
	if(isset($_POST['addData'])){
		$name = $_POST['name'];
		$school = $_POST['school'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$famsize = $_POST['famsize'];
		$mjob = $_POST['mjob'];
		$fjob = $_POST['fjob'];
		$higher = $_POST['higher'];
		$internet = $_POST['internet'];
		$health = $_POST['health'];
		$absences = $_POST['absences'];
		$grade1 = $_POST['grade1'];
		$grade2 = $_POST['grade2'];
		$grade3 = $_POST['grade3'];
		$query = mysqli_query($con, "INSERT INTO student VALUES (null, '$name', '$school', '$sex', '$age', '$address', '$famsize', '$mjob', '$fjob', '$higher', '$internet', '$health', '$absences', '$grade1', '$grade2', '$grade3')");
		exit();
	}
	if(isset($_POST['editData'])){
		$id = $_POST['id'];
		$name = $_POST['name'];
		$school = $_POST['school'];
		$sex = $_POST['sex'];
		$age = $_POST['age'];
		$address = $_POST['address'];
		$famsize = $_POST['famsize'];
		$mjob = $_POST['mjob'];
		$fjob = $_POST['fjob'];
		$higher = $_POST['higher'];
		$internet = $_POST['internet'];
		$health = $_POST['health'];
		$absences = $_POST['absences'];
		$grade1 = $_POST['grade1'];
		$grade2 = $_POST['grade2'];
		$grade3 = $_POST['grade3'];
		$query = mysqli_query($con, "UPDATE student SET name='$name', school='$school', sex='$sex', age=$age, address='$address', famsize='$famsize', fjob='$fjob', mjob='$mjob', higher='$higher', internet='$internet', health='$health', absences='$absences', g1='$grade1', g2='$grade2', g3='$grade3' WHERE id=$id");
		exit();
	}
	if(isset($_POST['delData'])){
		$id = $_POST['id'];
		$query = mysqli_query($con, "DELETE FROM student WHERE id=$id");
        exit();
	}
?>

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
		function showData(){
			$.ajax({
				url : "index.php",
				type : "POST",
				data : {
					showData : 1
				},
				success : function(result){
					$(".data").html(result);
					// showData();
				}
			});
		}
		function add(name,school,sex,age,address,famsize,mjob,fjob,higher,internet,health,absences,grade1,grade2,grade3){
			$.ajax({
				url : "index.php",
				type : "POST",
				data : {
					addData : 1,
					name : name,
					school : school,
					sex : sex,
					age : age,
					address : address,
					famsize : famsize,
					mjob : mjob,
					fjob : fjob,
					higher : higher,
					internet : internet,
					health : health,
					absences : absences,
					grade1 : grade1,
					grade2 : grade2,
					grade3 : grade3
				},
				success : function(result){
					// $(".data").html(result);
					showData();
				}
			});
		}
		function edit(id,name,school,sex,age,address,famsize,mjob,fjob,higher,internet,health,absences,grade1,grade2,grade3){
			$.ajax({
				url : "index.php",
				type : "POST",
				data : {
					editData : 1,
					id : id,
					name : name,
					school : school,
					sex : sex,
					age : age,
					address : address,
					famsize : famsize,
					mjob : mjob,
					fjob : fjob,
					higher : higher,
					internet : internet,
					health : health,
					absences : absences,
					grade1 : grade1,
					grade2 : grade2,
					grade3 : grade3
				},
				success : function(result){
					// $(".data").html(result);
					showData();
				}
			});
		}
		function delData(id){
			$.ajax({
				url : "index.php",
				type : "POST",
				data : {
					delData : 1,
					id : id
				},
				success : function(result){
					// $(".data").html(result);
					showData();
				}
			});
		}
		$(document).ready(function(){
			showData();
			$(".btnAdd").click(function(){
				// alert($("#inputName").val()+' '+$("input[name='higherRadios']:checked").val());
				var name = $("#inputName").val();
				var school = $("input[name='schoolRadios']:checked").attr('id');
				var sex = $("input[name='sexRadios']:checked").attr('id');
				var age = $("#inputAge").val();
				var address = $("input[name='addressRadios']:checked").attr('id');
				var famsize = $("input[name='famsizeRadios']:checked").attr('id');
				var mjob = $("input[name='mjobRadios']:checked").val();
				var fjob = $("input[name='fjobRadios']:checked").val();
				var higher = $("input[name='higherRadios']:checked").val();
				var internet = $("input[name='internetRadios']:checked").val();
				var health = $("#inputHealth").val();
				var absences = $("#inputAbsences").val();
				var grade1 = $("#inputGrade1").val();
				var grade2 = $("#inputGrade2").val();
				var grade3 = $("#inputGrade3").val();
				add(name,school,sex,age,address,famsize,mjob,fjob,higher,internet,health,absences,grade1,grade2,grade3);
			});
			$(".btnEdit").click(function(){
				// alert($("#recordId").attr('class')+' '+$("input[name='higherRadios']:checked").val());
				var id = $("#recordId").attr('class');
				var name = $("#inputName").val();
				var school = $("input[name='schoolRadios']:checked").attr('id');
				var sex = $("input[name='sexRadios']:checked").attr('id');
				var age = $("#inputAge").val();
				var address = $("input[name='addressRadios']:checked").attr('id');
				var famsize = $("input[name='famsizeRadios']:checked").attr('id');
				var mjob = $("input[name='mjobRadios']:checked").val();
				var fjob = $("input[name='fjobRadios']:checked").val();
				var higher = $("input[name='higherRadios']:checked").val();
				var internet = $("input[name='internetRadios']:checked").val();
				var health = $("#inputHealth").val();
				var absences = $("#inputAbsences").val();
				var grade1 = $("#inputGrade1").val();
				var grade2 = $("#inputGrade2").val();
				var grade3 = $("#inputGrade3").val();
				// alert(id+name+school+sex+age+address+famsize+mjob+fjob+higher+internet+health+absences+grade1+grade2+grade3);
				edit(id,name,school,sex,age,address,famsize,mjob,fjob,higher,internet,health,absences,grade1,grade2,grade3);
			});
			$(".btnDel").click(function(){
				// alert($("#recordId").attr('class')+' '+$("input[name='higherRadios']:checked").val());
				var id = $("#recordId").attr('class');
				// alert(id+name+school+sex+age+address+famsize+mjob+fjob+higher+internet+health+absences+grade1+grade2+grade3);
				delData(id);
			});
			$(".data").on("click", "tr", function(){
				$("#editdeleteLabel").html("ID Data: " + $(this).attr("id"));
				$("#editdeleteBody").html("<table border='0px'><tr id='recordId' class="+$(this).attr("id")+"><td>Name</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.name").text() + "</td></tr><tr><td>School</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.school").text() + "</td></tr><tr><td>Sex</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.sex").text() + "</td></tr><tr><td>Age</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.age").text() + "</td></tr><tr><td>Address</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.address").text() + "</td></tr><tr><td>Family Size</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.famsize").text() + "</td></tr><tr><td>Mother's Job</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.mjob").text() + "</td></tr><tr><td>Father's Job</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.fjob").text() + "</td></tr><tr><td>Higher Education</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.higher").text() + "</td></tr><tr><td>Internet Access</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.internet").text() + "</td></tr><tr><td>Health Status</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.health").text() + "</td></tr><tr><td>Absences</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.absences").text() + "</td></tr><tr><td>Grade 1</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.g1").text() + "</td></tr><tr><td>Grade 2</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.g2").text() + "</td></tr><tr><td>Grade 3</td><td>&emsp;:&emsp;</td><td>" + $(this).children("td.g3").text() + "</td></tr></table>");
				$("#editLabel").html("Edit Data: " + $(this).attr("id"));
				$("#editBody").html("<table border='0px'><tr><td style='vertical-align: top;'>Name</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='text' id='inputName' value='"+$(this).children("td.name").text()+"'></td></tr>");
				school = $(this).children("td.school").text();
				if (school == "GP"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>School</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='schoolRadios' id='GP' value='option1' checked><label class='form-check-label' for='GP'>Gabriel Pereira</label></div><div class='form-check'><input class='form-check-input' type='radio' name='schoolRadios' id='MS' value='option2'><label class='form-check-label' for='MS'>Mousinho da Silveira</label></div></td></tr>");
				} else if (school == "MS"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>School</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='schoolRadios' id='GP' value='option1'><label class='form-check-label' for='GP'>Gabriel Pereira</label></div><div class='form-check'><input class='form-check-input' type='radio' name='schoolRadios' id='MS' value='option2' checked><label class='form-check-label' for='MS'>Mousinho da Silveira</label></div></td></tr>");
				}
				sex = $(this).children("td.sex").text();
				if (sex == "M"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Sex</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='sexRadios' id='M' value='option1' checked><label class='form-check-label' for='M'>Male</label></div><div class='form-check'><input class='form-check-input' type='radio' name='sexRadios' id='F' value='option2'><label class='form-check-label' for='F'>Female</label></div></td></tr>");
				} else if (sex =="F"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Sex</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='sexRadios' id='M' value='option1'><label class='form-check-label' for='M'>Male</label></div><div class='form-check'><input class='form-check-input' type='radio' name='sexRadios' id='F' value='option2' checked><label class='form-check-label' for='F'>Female</label></div></td></tr>");
				}
				$("#editBody").append("<tr><td style='vertical-align: top;'>Age</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputAge' value='"+$(this).children("td.age").text()+"'></td></tr>");
				address = $(this).children("td.address").text();
				if (address == "U"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Address</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='addressRadios' id='U' value='option1' checked><label class='form-check-label' for='U'>Urban</label></div><div class='form-check'><input class='form-check-input' type='radio' name='addressRadios' id='R' value='option2'><label class='form-check-label' for='R'>Rural</label></div></td></tr>");
				} else if (address == "R"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Address</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='addressRadios' id='U' value='option1'><label class='form-check-label' for='U'>Urban</label></div><div class='form-check'><input class='form-check-input' type='radio' name='addressRadios' id='R' value='option2' checked><label class='form-check-label' for='R'>Rural</label></div></td></tr>");
				}
				famsize = $(this).children("td.famsize").text();
				if (famsize == "GT3"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Family Size</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='famsizeRadios' id='GT3' value='option1' checked><label class='form-check-label' for='GT3'>Greater Than 3</label></div><div class='form-check'><input class='form-check-input' type='radio' name='famsizeRadios' id='LE3' value='option2'><label class='form-check-label' for='LE3'>Less or Equal to 3</label></div></td></tr>");
				} else if (famsize == "LE3"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Family Size</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='famsizeRadios' id='GT3' value='option1'><label class='form-check-label' for='GT3'>Greater Than 3</label></div><div class='form-check'><input class='form-check-input' type='radio' name='famsizeRadios' id='LE3' value='option2' checked><label class='form-check-label' for='LE3'>Less or Equal to 3</label></div></td></tr>");
				}
				mjob = $(this).children("td.mjob").text();
				if (mjob == "teacher"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Mother's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher' checked><label class='form-check-label' for='mteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health'><label class='form-check-label' for='mhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services'><label class='form-check-label' for='mservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home'><label class='form-check-label' for='mat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other'><label class='form-check-label' for='mother'>Other</label></div></td></tr>");
				} else if (mjob == "health"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Mother's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher'><label class='form-check-label' for='mteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health' checked><label class='form-check-label' for='mhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services'><label class='form-check-label' for='mservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home'><label class='form-check-label' for='mat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other'><label class='form-check-label' for='mother'>Other</label></div></td></tr>");
				} else if (mjob == "services"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Mother's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher'><label class='form-check-label' for='mteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health'><label class='form-check-label' for='mhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services' checked><label class='form-check-label' for='mservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home'><label class='form-check-label' for='mat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other'><label class='form-check-label' for='mother'>Other</label></div></td></tr>");
				} else if (mjob == "at_home"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Mother's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher'><label class='form-check-label' for='mteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health'><label class='form-check-label' for='mhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services'><label class='form-check-label' for='mservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home' checked><label class='form-check-label' for='mat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other'><label class='form-check-label' for='mother'>Other</label></div></td></tr>");
				} else if (mjob == "other"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Mother's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher'><label class='form-check-label' for='mteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health'><label class='form-check-label' for='mhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services'><label class='form-check-label' for='mservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home'><label class='form-check-label' for='mat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other' checked><label class='form-check-label' for='mother'>Other</label></div></td></tr>");
				}
				fjob = $(this).children("td.fjob").text();
				if (fjob == "teacher"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Father's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher' checked><label class='form-check-label' for='fteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health'><label class='form-check-label' for='fhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services'><label class='form-check-label' for='fservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home'><label class='form-check-label' for='fat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other'><label class='form-check-label' for='fother'>Other</label></div></td></tr>");
				} else if (fjob == "health"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Father's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher'><label class='form-check-label' for='fteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health' checked><label class='form-check-label' for='fhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services'><label class='form-check-label' for='fservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home'><label class='form-check-label' for='fat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other'><label class='form-check-label' for='fother'>Other</label></div></td></tr>");
				} else if (fjob == "services"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Father's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher'><label class='form-check-label' for='fteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health'><label class='form-check-label' for='fhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services' checked><label class='form-check-label' for='fservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home'><label class='form-check-label' for='fat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other'><label class='form-check-label' for='fother'>Other</label></div></td></tr>");
				} else if (fjob == "at_home"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Father's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher'><label class='form-check-label' for='fteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health'><label class='form-check-label' for='fhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services'><label class='form-check-label' for='fservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home' checked><label class='form-check-label' for='fat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other'><label class='form-check-label' for='fother'>Other</label></div></td></tr>");
				} else if (fjob == "other"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Father's Job</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher'><label class='form-check-label' for='fteacher'>Teacher</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health'><label class='form-check-label' for='fhealth'>Health Care Related</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services'><label class='form-check-label' for='fservices'>Civil Services</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home'><label class='form-check-label' for='fat_home'>At Home</label></div><div class='form-check'><input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other' checked><label class='form-check-label' for='fother'>Other</label></div></td></tr>");
				}
				higher = $(this).children("td.higher").text();
				if (higher == "Yes"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Higher Education</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='higherRadios' id='hYes' value='Yes' checked><label class='form-check-label' for='hYes'>Yes</label></div><div class='form-check'><input class='form-check-input' type='radio' name='higherRadios' id='hNo' value='No'><label class='form-check-label' for='hNo'>No</label></div></td></tr>");
				} else if (higher == "No"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Higher Education</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='higherRadios' id='hYes' value='Yes'><label class='form-check-label' for='hYes'>Yes</label></div><div class='form-check'><input class='form-check-input' type='radio' name='higherRadios' id='hNo' value='No' checked><label class='form-check-label' for='hNo'>No</label></div></td></tr>");
				}
				internet = $(this).children("td.internet").text();
				if (internet == "Yes"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Internet Access</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='internetRadios' id='Yes' value='Yes' checked><label class='form-check-label' for='Yes'>Yes</label></div><div class='form-check'><input class='form-check-input' type='radio' name='internetRadios' id='No' value='No'><label class='form-check-label' for='No'>No</label></div></td></tr>");
				} else if (internet == "No"){
					$("#editBody").append("<tr><td style='vertical-align: top;'>Internet Access</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><div class='form-check'><input class='form-check-input' type='radio' name='internetRadios' id='Yes' value='Yes'><label class='form-check-label' for='Yes'>Yes</label></div><div class='form-check'><input class='form-check-input' type='radio' name='internetRadios' id='No' value='No' checked><label class='form-check-label' for='No'>No</label></div></td></tr>");
				}
				$("#editBody").append("<tr><td style='vertical-align: top;'>Health Status (1-5)</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputHealth' value='"+$(this).children("td.health").text()+"'></td></tr>");
				$("#editBody").append("<tr><td style='vertical-align: top;'>Absences</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputAbsences' value='"+$(this).children("td.absences").text()+"'></td></tr>");
				$("#editBody").append("<tr><td style='vertical-align: top;'>Grade 1 (1-20)</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputGrade1' value='"+$(this).children("td.g1").text()+"'></td></tr>");
				$("#editBody").append("<tr><td style='vertical-align: top;'>Grade 2 (1-20)</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputGrade2' value='"+$(this).children("td.g2").text()+"'></td></tr>");
				$("#editBody").append("<tr><td style='vertical-align: top;'>Grade 3 (1-20)</td><td style='vertical-align: top;'>&emsp;:&emsp;</td><td><input class='form-control' type='number' id='inputGrade3' value='"+$(this).children("td.g3").text()+"'></td></tr></table>");
				$("#deleteLabel").html("Hapus Data: " + $(this).attr("id"));
				$("#deleteBody").html("Apakah Anda yakin?")
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
				<a href="index.php" class="active"><img src="img/team.png" style="height:35px; margin-right:20px;">Data Pendaftar</a>
				<a href="kriteria.php"><img src="img/parameter.png" style="height:35px; margin-right:20px;">Parameter Kriteria</a>
				<a href="input.php"><img src="img/process.png" style="height:35px; margin-right:20px;">Proses Data</a>
				<a href="hasil.php"><img src="img/notepad.png" style="height:35px; margin-right:20px;">Hasil</a>
			</div>
			<div class="col-sm-10 main">
				<h3> Data Pendaftar Beasiswa </h3>
				<button type="button" class="btn btn-success" style="float: right;" data-toggle="modal" data-target="#add"><img src="img/plus.png" style="height:15px; margin-right:10px;">Tambah Data</button>
				<br><br><br>
				<table class="table table-sm table-hover">
				  <thead>
				    <tr style="background-color: #dbdbdb;">
				      <th scope="col" style="vertical-align: middle;">#</th>
				      <th scope="col" style="vertical-align: middle;">Name</th>
				      <th scope="col" style="vertical-align: middle;">School</th>
				      <th scope="col" style="vertical-align: middle;">Sex</th>
				      <th scope="col" style="vertical-align: middle;">Age</th>
				      <th scope="col" style="vertical-align: middle;">Address</th>
				      <th scope="col" style="vertical-align: middle;">Family Size</th>
				      <th scope="col" style="vertical-align: middle;">Mother's Job</th>
				      <th scope="col" style="vertical-align: middle;">Father's Job</th>
				      <th scope="col" style="vertical-align: middle;">Higher Education</th>
				      <th scope="col" style="vertical-align: middle;">Internet Access</th>
				      <th scope="col" style="vertical-align: middle;">Health Status</th>
				      <th scope="col" style="vertical-align: middle;">Absences</th>
				      <th scope="col" style="vertical-align: middle;">Grade 1</th>
				      <th scope="col" style="vertical-align: middle;">Grade 2</th>
				      <th scope="col" style="vertical-align: middle;">Grade 3</th>
				    </tr>
				  </thead>
				  <tbody class="data">
				  </tbody>
				</table>
			</div>
		</div>
	</div>


	<div class="modal fade" id="editdelete" tabindex="-1" role="dialog" aria-labelledby="editdeleteLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="editdeleteLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="editdeleteBody">
	        ...
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">Edit</button>
	      	<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete">Hapus</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="editLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="editBody">
	        ...
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary btnEdit" data-dismiss="modal">Save</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="deleteLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="deleteLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="deleteBody">
	        ...
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary btnDel" data-dismiss="modal">Ya</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
	      </div>
	    </div>
	  </div>
	</div>

	<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="addLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="addLabel">Modal title</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body" id="addBody">
	        <table border='0px'>
	        	<tr>
	        		<td style="vertical-align: top;">Name</td>
	        		<td style="vertical-align: top;">&emsp;:&emsp;</td>
	        		<td><input class='form-control' id='inputName' type='text'></td>
	        	</tr>
	        	<tr>
	        		<td style="vertical-align: top;">School</td>
	        		<td style="vertical-align: top;">&emsp;:&emsp;</td>
	        		<td>
	        			<div class='form-check'>
	        				<input class='form-check-input' type='radio' name='schoolRadios' id='GP' value='option1'>
	        				<label class='form-check-label' for='GP'>Gabriel Pereira</label>
	        			</div>
	        			<div class='form-check'>
	        				<input class='form-check-input' type='radio' name='schoolRadios' id='MS' value='option2'>
	        				<label class='form-check-label' for='MS'>Mousinho da Silveira</label>
	        			</div>
	        		</td>
	        	</tr>
	        	<tr>
	        		<td style="vertical-align: top;">Sex</td>
	        		<td style="vertical-align: top;">&emsp;:&emsp;</td>
	        		<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='sexRadios' id='M' value='option1'>
		        			<label class='form-check-label' for='M'>Male</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='sexRadios' id='F' value='option2'>
		        			<label class='form-check-label' for='F'>Female</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Age</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputAge' type='number'></td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Address</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='addressRadios' id='U' value='option1'>
		        			<label class='form-check-label' for='U'>Urban</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='addressRadios' id='R' value='option2'>
		        			<label class='form-check-label' for='R'>Rural</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Family Size</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='famsizeRadios' id='GT3' value='option1'>
		        			<label class='form-check-label' for='GT3'>Greater Than 3</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='famsizeRadios' id='LE3' value='option2'>
		        			<label class='form-check-label' for='LE3'>Less or Equal to 3</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Mother's Job</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='mjobRadios' id='mteacher' value='teacher'>
		        			<label class='form-check-label' for='mteacher'>Teacher</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='mjobRadios' id='mhealth' value='health'>
		        			<label class='form-check-label' for='mhealth'>Health Care Related</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='mjobRadios' id='mservices' value='services'>
		        			<label class='form-check-label' for='mservices'>Civil Services</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='mjobRadios' id='mat_home' value='at_home'>
		        			<label class='form-check-label' for='mat_home'>At Home</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='mjobRadios' id='mother' value='other'>
		        			<label class='form-check-label' for='mother'>Other</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Father's Job</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='fjobRadios' id='fteacher' value='teacher'>
		        			<label class='form-check-label' for='fteacher'>Teacher</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='fjobRadios' id='fhealth' value='health'>
		        			<label class='form-check-label' for='fhealth'>Health Care Related</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='fjobRadios' id='fservices' value='services'>
		        			<label class='form-check-label' for='fservices'>Civil Services</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='fjobRadios' id='fat_home' value='at_home'>
		        			<label class='form-check-label' for='fat_home'>At Home</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='fjobRadios' id='fother' value='other'>
		        			<label class='form-check-label' for='fother'>Other</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Higher Education</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='higherRadios' id='hYes' value='Yes'>
		        			<label class='form-check-label' for='hYes'>Yes</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='higherRadios' id='hNo' value='No'>
		        			<label class='form-check-label' for='hNo'>No</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Internet Access</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='internetRadios' id='Yes' value='Yes'>
		        			<label class='form-check-label' for='Yes'>Yes</label>
		        		</div>
		        		<div class='form-check'>
		        			<input class='form-check-input' type='radio' name='internetRadios' id='No' value='No'>
		        			<label class='form-check-label' for='No'>No</label>
		        		</div>
		        	</td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Health Status (1-5)</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputHealth' type='number'></td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Absences</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputAbsences' type='number'></td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Grade 1 (1-20)</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputGrade1' type='number'></td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Grade 2 (1-20)</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputGrade2' type='number'></td>
		        </tr>
		        <tr>
		        	<td style="vertical-align: top;">Grade 3 (1-20)</td>
		        	<td style="vertical-align: top;">&emsp;:&emsp;</td>
		        	<td><input class='form-control' id='inputGrade3' type='number'></td>
		        </tr>
		    </table>
	      </div>
	      <div class="modal-footer">
	      	<button type="button" class="btn btn-primary btnAdd" data-dismiss="modal">Save</button>
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	  </div>
	</div>
</body>
</html>