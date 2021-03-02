<?php
	include "connect.php";
	if(isset($_POST['showData'])){
		$query = mysqli_query($con, "SELECT * FROM kriteria");
		$rows = array();
		while($row=mysqli_fetch_assoc($query)){
			$rows[] = $row;
		}
		header("Content-type:application/json");
		echo json_encode($rows);
		exit();
	}
	if(isset($_POST['update'])){
		$gp = $_POST['gp'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$gp WHERE id=1");
		$ms = $_POST['ms'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$ms WHERE id=2");
		$male = $_POST['male'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$male WHERE id=3");
		$female = $_POST['female'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$female WHERE id=4");
		$aage = $_POST['aage'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$aage WHERE id=5");
		$bage = $_POST['bage'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$bage WHERE id=6");
		$cage = $_POST['cage'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$cage WHERE id=7");
		$uAddr = $_POST['uAddr'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$uAddr WHERE id=8");
		$rAddr = $_POST['rAddr'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$rAddr WHERE id=9");
		$gtfamsize = $_POST['gtfamsize'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$gtfamsize WHERE id=10");
		$lefamsize = $_POST['lefamsize'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$lefamsize WHERE id=11");
		$mteacherjob = $_POST['mteacherjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$mteacherjob WHERE id=12");
		$mhealthjob = $_POST['mhealthjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$mhealthjob WHERE id=13");
		$mservicejob = $_POST['mservicejob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$mservicejob WHERE id=14");
		$mathomejob = $_POST['mathomejob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$mathomejob WHERE id=15");
		$motherjob = $_POST['motherjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$motherjob WHERE id=16");
		$fteacherjob = $_POST['fteacherjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$fteacherjob WHERE id=17");
		$fhealthjob = $_POST['fhealthjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$fhealthjob WHERE id=18");
		$fservicejob = $_POST['fservicejob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$fservicejob WHERE id=19");
		$fathomejob = $_POST['fathomejob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$fathomejob WHERE id=20");
		$fotherjob = $_POST['fotherjob'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$fotherjob WHERE id=21");
		$hyes = $_POST['hyes'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$hyes WHERE id=22");
		$hno = $_POST['hno'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$hno WHERE id=23");
		$iyes = $_POST['iyes'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$iyes WHERE id=24");
		$ino = $_POST['ino'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$ino WHERE id=25");
		$health1 = $_POST['health1'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$health1 WHERE id=26");
		$health2 = $_POST['health2'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$health2 WHERE id=27");
		$health3 = $_POST['health3'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$health3 WHERE id=28");
		$health4 = $_POST['health4'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$health4 WHERE id=29");
		$health5 = $_POST['health5'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$health5 WHERE id=30");
		$aabs = $_POST['aabs'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$aabs WHERE id=31");
		$babs = $_POST['babs'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$babs WHERE id=32");
		$cabs = $_POST['cabs'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$cabs WHERE id=33");
		$dabs = $_POST['dabs'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$dabs WHERE id=34");
		$eabs = $_POST['eabs'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$eabs WHERE id=35");
		$agrade = $_POST['agrade'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$agrade WHERE id=36");
		$bgrade = $_POST['bgrade'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$bgrade WHERE id=37");
		$cgrade = $_POST['cgrade'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$cgrade WHERE id=38");
		$dgrade = $_POST['dgrade'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$dgrade WHERE id=39");
		$egrade = $_POST['egrade'];
		$query = mysqli_query($con, "UPDATE kriteria SET nilai=$egrade WHERE id=$40");
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
		$(document).ready(function(){
			showData();
			$(".btnSimpan").click(function(){
				// alert($("#recordId").attr('class')+' '+$("input[name='higherRadios']:checked").val());
				var gp = $("input[name='gpRadios']:checked").val();
				var ms = $("input[name='msRadios']:checked").val();
				var male = $("input[name='mRadios']:checked").val();
				var female = $("input[name='fRadios']:checked").val();
				var aage = $("input[name='aageRadios']:checked").val();
				var bage = $("input[name='bageRadios']:checked").val();
				var cage = $("input[name='cageRadios']:checked").val();
				var uAddr = $("input[name='uRadios']:checked").val();
				var rAddr = $("input[name='rRadios']:checked").val();
				var gtfamsize = $("input[name='gtRadios']:checked").val();
				var lefamsize = $("input[name='leRadios']:checked").val();
				var mteacherjob = $("input[name='mteacherRadios']:checked").val();
				var mhealthjob = $("input[name='mhealthRadios']:checked").val();
				var mservicejob = $("input[name='mserviceRadios']:checked").val();
				var mathomejob = $("input[name='mathomeRadios']:checked").val();
				var motherjob = $("input[name='otherRadios']:checked").val();
				var fteacherjob = $("input[name='fteacherRadios']:checked").val();
				var fhealthjob = $("input[name='fhealthRadios']:checked").val();
				var fservicejob = $("input[name='fserviceRadios']:checked").val();
				var fathomejob = $("input[name='fathomeRadios']:checked").val();
				var fotherjob = $("input[name='fotherRadios']:checked").val();
				var hyes = $("input[name='hyesRadios']:checked").val();
				var hno = $("input[name='hnoRadios']:checked").val();
				var iyes = $("input[name='iyesRadios']:checked").val();
				var ino = $("input[name='inoRadios']:checked").val();
				var health1 = $("input[name='health1Radios']:checked").val();
				var health2 = $("input[name='health2Radios']:checked").val();
				var health3 = $("input[name='health3Radios']:checked").val();
				var health4 = $("input[name='health4Radios']:checked").val();
				var health5 = $("input[name='health5Radios']:checked").val();
				var aabs = $("input[name='aabsRadios']:checked").val();
				var babs = $("input[name='babsRadios']:checked").val();
				var cabs = $("input[name='cabsRadios']:checked").val();
				var dabs = $("input[name='dabsRadios']:checked").val();
				var eabs = $("input[name='eabsRadios']:checked").val();
				var agrade = $("input[name='agradeRadios']:checked").val();
				var bgrade = $("input[name='bgradeRadios']:checked").val();;
				var cgrade = $("input[name='cgradeRadios']:checked").val();
				var dgrade = $("input[name='dgradeRadios']:checked").val();
				var egrade = $("input[name='egradeRadios']:checked").val();
				// alert(id+name+school+sex+age+address+famsize+mjob+fjob+higher+internet+health+absences+grade1+grade2+grade3);
				updateData(gp,ms,male,female,aage,bage,cage,uAddr,rAddr,gtfamsize,lefamsize,mteacherjob,mhealthjob,mservicejob,mathomejob,motherjob,fteacherjob,fhealthjob,fservicejob,fathomejob,fotherjob,hyes,hno,iyes,ino,health1,health2,health3,health4,health5,aabs,babs,cabs,dabs,eabs,agrade,bgrade,cgrade,dgrade,egrade);
			});
			function updateData(gp,ms,male,female,aage,bage,cage,uAddr,rAddr,gtfamsize,lefamsize,mteacherjob,mhealthjob,mservicejob,mathomejob,motherjob,fteacherjob,fhealthjob,fservicejob,fathomejob,fotherjob,hyes,hno,iyes,ino,health1,health2,health3,health4,health5,aabs,babs,cabs,dabs,eabs,agrade,bgrade,cgrade,dgrade,egrade){
				$.ajax({
				url : "kriteria.php",
				type : "POST",
				data : {
					update : 1,
					gp : gp,
					ms : ms,
					male : male,
					female : female,
					aage : aage,
					bage : bage,
					cage : cage,
					uAddr : uAddr,
					rAddr : rAddr,
					gtfamsize : gtfamsize,
					lefamsize : lefamsize,
					mteacherjob : mteacherjob,
					mhealthjob : mhealthjob,
					mservicejob : mservicejob,
					mathomejob : mathomejob,
					motherjob : motherjob,
					fteacherjob :fteacherjob,
					fhealthjob : fhealthjob,
					fservicejob : fservicejob,
					fathomejob : fathomejob,
					fotherjob : fotherjob,
					hyes : hyes,
					hno : hno,
					iyes : iyes,
					ino : ino,
					health1 : health1,
					health2 : health2,
					health3 : health3,
					health4 : health4,
					health5 : health5,
					aabs : aabs,
					babs : babs,
					cabs : cabs,
					dabs : dabs,
					eabs : eabs,
					agrade : agrade,
					bgrade : bgrade,
					cgrade : cgrade,
					dgrade : dgrade,
					egrade : dgrade
				},
				success : function(result){
					showData();
				}
			});
			}
			function showData(){
				$.ajax({
					url : "kriteria.php",
					type : "POST",
					data : {
						showData : 1
					},
					success : function(result){
						var isi="";
						result.forEach(function(item, index){
							// isi += "<tr><td>"+item['id']+"</td><td>"+item['checklist']+"</td>";
							if(item['name'] == 'school'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										document.getElementById("gp1").checked = true;
										document.getElementById("gp5").checked = false;
									}
									else{
										document.getElementById("gp5").checked = true;
										document.getElementById("gp1").checked = false;
									}
								}
								else{
									if(item['nilai'] == 1){
										document.getElementById("ms1").checked = true;
										document.getElementById("ms5").checked = false;
									}
									else{
										document.getElementById("ms1").checked = true;
										document.getElementById("ms5").checked = false;
									}
								}
							}
							else if (item['name'] == 'sex'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#m1").attr('checked', 'checked');
										$("#m5").removeAttr('checked');
									}
									else{
										$("#m5").attr('checked', 'checked');
										$("#m1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#f1").attr('checked', 'checked');
										$("#f5").removeAttr('checked');
									}
									else{
										$("#f5").attr('checked', 'checked');
										$("#f1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'age'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#aage1").attr('checked', 'checked');
										$("#aage3").removeAttr('checked');
										$("#aage5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#aage3").attr('checked', 'checked');
										$("#aage1").removeAttr('checked');
										$("#aage5").removeAttr('checked');
									}
									else{
										$("#aage5").attr('checked', 'checked');
										$("#aage1").removeAttr('checked');
										$("#aage3").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#bage1").attr('checked', 'checked');
										$("#bage3").removeAttr('checked');
										$("#bage5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#bage3").attr('checked', 'checked');
										$("#bage1").removeAttr('checked');
										$("#bage5").removeAttr('checked');
									}
									else{
										$("#bage5").attr('checked', 'checked');
										$("#bage1").removeAttr('checked');
										$("#bage3").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#cage1").attr('checked', 'checked');
										$("#cage3").removeAttr('checked');
										$("#cage5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#cage3").attr('checked', 'checked');
										$("#cage1").removeAttr('checked');
										$("#cage5").removeAttr('checked');
									}
									else{
										$("#cage5").attr('checked', 'checked');
										$("#cage1").removeAttr('checked');
										$("#cage3").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'address'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#u1").attr('checked', 'checked');
										$("#u5").removeAttr('checked');
									}
									else{
										$("#u5").attr('checked', 'checked');
										$("#u1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#r1").attr('checked', 'checked');
										$("#r5").removeAttr('checked');
									}
									else{
										$("#r5").attr('checked', 'checked');
										$("#r1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'famsize'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#gt1").attr('checked', 'checked');
										$("#gt5").removeAttr('checked');
									}
									else{
										$("#gt5").attr('checked', 'checked');
										$("#gt1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#le1").attr('checked', 'checked');
										$("#le5").removeAttr('checked');
									}
									else{
										$("#le5").attr('checked', 'checked');
										$("#le1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'mjob'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#mteacher1").attr('checked', 'checked');
										$("#mteacher2").removeAttr('checked');
										$("#mteacher3").removeAttr('checked');
										$("#mteacher4").removeAttr('checked');
										$("#mteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#mteacher2").attr('checked', 'checked');
										$("#mteacher1").removeAttr('checked');
										$("#mteacher3").removeAttr('checked');
										$("#mteacher4").removeAttr('checked');
										$("#mteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#mteacher3").attr('checked', 'checked');
										$("#mteacher2").removeAttr('checked');
										$("#mteacher1").removeAttr('checked');
										$("#mteacher4").removeAttr('checked');
										$("#mteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#mteacher4").attr('checked', 'checked');
										$("#mteacher2").removeAttr('checked');
										$("#mteacher3").removeAttr('checked');
										$("#mteacher1").removeAttr('checked');
										$("#mteacher5").removeAttr('checked');
									}
									else{
										$("#mteacher5").attr('checked', 'checked');
										$("#mteacher2").removeAttr('checked');
										$("#mteacher3").removeAttr('checked');
										$("#mteacher4").removeAttr('checked');
										$("#mteacher1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#mhealth1").attr('checked', 'checked');
										$("#mhealth2").removeAttr('checked');
										$("#mhealth3").removeAttr('checked');
										$("#mhealth4").removeAttr('checked');
										$("#mhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#mhealth2").attr('checked', 'checked');
										$("#mhealth1").removeAttr('checked');
										$("#mhealth3").removeAttr('checked');
										$("#mhealth4").removeAttr('checked');
										$("#mhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#mhealth3").attr('checked', 'checked');
										$("#mhealth2").removeAttr('checked');
										$("#mhealth1").removeAttr('checked');
										$("#mhealth4").removeAttr('checked');
										$("#mhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#mhealth4").attr('checked', 'checked');
										$("#mhealth2").removeAttr('checked');
										$("#mhealth3").removeAttr('checked');
										$("#mhealth1").removeAttr('checked');
										$("#mhealth5").removeAttr('checked');
									}
									else{
										$("#mhealth5").attr('checked', 'checked');
										$("#mhealth2").removeAttr('checked');
										$("#mhealth3").removeAttr('checked');
										$("#mhealth4").removeAttr('checked');
										$("#mhealth1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '3'){
									if(item['nilai'] == 1){
										$("#mservice1").attr('checked', 'checked');
										$("#mservice2").removeAttr('checked');
										$("#mservice3").removeAttr('checked');
										$("#mservice4").removeAttr('checked');
										$("#mservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#mservice2").attr('checked', 'checked');
										$("#mservice1").removeAttr('checked');
										$("#mservice3").removeAttr('checked');
										$("#mservice4").removeAttr('checked');
										$("#mservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#mservice3").attr('checked', 'checked');
										$("#mservice2").removeAttr('checked');
										$("#mservice1").removeAttr('checked');
										$("#mservice4").removeAttr('checked');
										$("#mservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#mservice4").attr('checked', 'checked');
										$("#mservice2").removeAttr('checked');
										$("#mservice3").removeAttr('checked');
										$("#mservice1").removeAttr('checked');
										$("#mservice5").removeAttr('checked');
									}
									else{
										$("#mservice5").attr('checked', 'checked');
										$("#mservice2").removeAttr('checked');
										$("#mservice3").removeAttr('checked');
										$("#mservice4").removeAttr('checked');
										$("#mservice1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '4'){
									if(item['nilai'] == 1){
										$("#mathome1").attr('checked', 'checked');
										$("#mathome2").removeAttr('checked');
										$("#mathome3").removeAttr('checked');
										$("#mathome4").removeAttr('checked');
										$("#mathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#mathome2").attr('checked', 'checked');
										$("#mathome1").removeAttr('checked');
										$("#mathome3").removeAttr('checked');
										$("#mathome4").removeAttr('checked');
										$("#mathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#mathome3").attr('checked', 'checked');
										$("#mathome2").removeAttr('checked');
										$("#mathome1").removeAttr('checked');
										$("#mathome4").removeAttr('checked');
										$("#mathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#mathome4").attr('checked', 'checked');
										$("#mathome2").removeAttr('checked');
										$("#mathome3").removeAttr('checked');
										$("#mathome1").removeAttr('checked');
										$("#mathome5").removeAttr('checked');
									}
									else{
										$("#mathome5").attr('checked', 'checked');
										$("#mathome2").removeAttr('checked');
										$("#mathome3").removeAttr('checked');
										$("#mathome4").removeAttr('checked');
										$("#mathome1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#other1").attr('checked', 'checked');
										$("#other2").removeAttr('checked');
										$("#other3").removeAttr('checked');
										$("#other4").removeAttr('checked');
										$("#other5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#other2").attr('checked', 'checked');
										$("#other1").removeAttr('checked');
										$("#other3").removeAttr('checked');
										$("#other4").removeAttr('checked');
										$("#other5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#other3").attr('checked', 'checked');
										$("#other2").removeAttr('checked');
										$("#other1").removeAttr('checked');
										$("#other4").removeAttr('checked');
										$("#other5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#other4").attr('checked', 'checked');
										$("#other2").removeAttr('checked');
										$("#other3").removeAttr('checked');
										$("#other1").removeAttr('checked');
										$("#other5").removeAttr('checked');
									}
									else{
										$("#other5").attr('checked', 'checked');
										$("#other2").removeAttr('checked');
										$("#other3").removeAttr('checked');
										$("#other4").removeAttr('checked');
										$("#other1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'fjob'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#fteacher1").attr('checked', 'checked');
										$("#fteacher2").removeAttr('checked');
										$("#fteacher3").removeAttr('checked');
										$("#fteacher4").removeAttr('checked');
										$("#fteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#fteacher2").attr('checked', 'checked');
										$("#fteacher1").removeAttr('checked');
										$("#fteacher3").removeAttr('checked');
										$("#fteacher4").removeAttr('checked');
										$("#fteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#fteacher3").attr('checked', 'checked');
										$("#fteacher2").removeAttr('checked');
										$("#fteacher1").removeAttr('checked');
										$("#fteacher4").removeAttr('checked');
										$("#fteacher5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#fteacher4").attr('checked', 'checked');
										$("#fteacher2").removeAttr('checked');
										$("#fteacher3").removeAttr('checked');
										$("#fteacher1").removeAttr('checked');
										$("#fteacher5").removeAttr('checked');
									}
									else{
										$("#fteacher5").attr('checked', 'checked');
										$("#fteacher2").removeAttr('checked');
										$("#fteacher3").removeAttr('checked');
										$("#fteacher4").removeAttr('checked');
										$("#fteacher1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#fhealth1").attr('checked', 'checked');
										$("#fhealth2").removeAttr('checked');
										$("#fhealth3").removeAttr('checked');
										$("#fhealth4").removeAttr('checked');
										$("#fhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#fhealth2").attr('checked', 'checked');
										$("#fhealth1").removeAttr('checked');
										$("#fhealth3").removeAttr('checked');
										$("#fhealth4").removeAttr('checked');
										$("#fhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#fhealth3").attr('checked', 'checked');
										$("#fhealth2").removeAttr('checked');
										$("#fhealth1").removeAttr('checked');
										$("#fhealth4").removeAttr('checked');
										$("#fhealth5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#fhealth4").attr('checked', 'checked');
										$("#fhealth2").removeAttr('checked');
										$("#fhealth3").removeAttr('checked');
										$("#fhealth1").removeAttr('checked');
										$("#fhealth5").removeAttr('checked');
									}
									else{
										$("#fhealth5").attr('checked', 'checked');
										$("#fhealth2").removeAttr('checked');
										$("#fhealth3").removeAttr('checked');
										$("#fhealth4").removeAttr('checked');
										$("#fhealth1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '3'){
									if(item['nilai'] == 1){
										$("#fservice1").attr('checked', 'checked');
										$("#fservice2").removeAttr('checked');
										$("#fservice3").removeAttr('checked');
										$("#fservice4").removeAttr('checked');
										$("#fservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#fservice2").attr('checked', 'checked');
										$("#fservice1").removeAttr('checked');
										$("#fservice3").removeAttr('checked');
										$("#fservice4").removeAttr('checked');
										$("#fservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#fservice3").attr('checked', 'checked');
										$("#fservice2").removeAttr('checked');
										$("#fservice1").removeAttr('checked');
										$("#fservice4").removeAttr('checked');
										$("#fservice5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#fservice4").attr('checked', 'checked');
										$("#fservice2").removeAttr('checked');
										$("#fservice3").removeAttr('checked');
										$("#fservice1").removeAttr('checked');
										$("#fservice5").removeAttr('checked');
									}
									else{
										$("#fservice5").attr('checked', 'checked');
										$("#fservice2").removeAttr('checked');
										$("#fservice3").removeAttr('checked');
										$("#fservice4").removeAttr('checked');
										$("#fservice1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '4'){
									if(item['nilai'] == 1){
										$("#fathome1").attr('checked', 'checked');
										$("#fathome2").removeAttr('checked');
										$("#fathome3").removeAttr('checked');
										$("#fathome4").removeAttr('checked');
										$("#fathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#fathome2").attr('checked', 'checked');
										$("#fathome1").removeAttr('checked');
										$("#fathome3").removeAttr('checked');
										$("#fathome4").removeAttr('checked');
										$("#fathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#fathome3").attr('checked', 'checked');
										$("#fathome2").removeAttr('checked');
										$("#fathome1").removeAttr('checked');
										$("#fathome4").removeAttr('checked');
										$("#fathome5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#fathome4").attr('checked', 'checked');
										$("#fathome2").removeAttr('checked');
										$("#fathome3").removeAttr('checked');
										$("#fathome1").removeAttr('checked');
										$("#fathome5").removeAttr('checked');
									}
									else{
										$("#fathome5").attr('checked', 'checked');
										$("#fathome2").removeAttr('checked');
										$("#fathome3").removeAttr('checked');
										$("#fathome4").removeAttr('checked');
										$("#fathome1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#fother1").attr('checked', 'checked');
										$("#fother2").removeAttr('checked');
										$("#fother3").removeAttr('checked');
										$("#fother4").removeAttr('checked');
										$("#fother5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#fother2").attr('checked', 'checked');
										$("#fother1").removeAttr('checked');
										$("#fother3").removeAttr('checked');
										$("#fother4").removeAttr('checked');
										$("#fother5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#fother3").attr('checked', 'checked');
										$("#fother2").removeAttr('checked');
										$("#fother1").removeAttr('checked');
										$("#fother4").removeAttr('checked');
										$("#fother5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#fother4").attr('checked', 'checked');
										$("#fother2").removeAttr('checked');
										$("#fother3").removeAttr('checked');
										$("#fother1").removeAttr('checked');
										$("#fother5").removeAttr('checked');
									}
									else{
										$("#fother5").attr('checked', 'checked');
										$("#fother2").removeAttr('checked');
										$("#fother3").removeAttr('checked');
										$("#fother4").removeAttr('checked');
										$("#fother1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'higher'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#hyes1").attr('checked', 'checked');
										$("#hyes5").removeAttr('checked');
									}
									else{
										$("#hyes5").attr('checked', 'checked');
										$("#hyes1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#hno1").attr('checked', 'checked');
										$("#hno5").removeAttr('checked');
									}
									else{
										$("#hno5").attr('checked', 'checked');
										$("#hno1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'internet'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#iyes1").attr('checked', 'checked');
										$("#iyes5").removeAttr('checked');
									}
									else{
										$("#iyes5").attr('checked', 'checked');
										$("#iyes1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#ino1").attr('checked', 'checked');
										$("#ino5").removeAttr('checked');
									}
									else{
										$("#ino5").attr('checked', 'checked');
										$("#ino1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'health'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#health11").attr('checked', 'checked');
										$("#health12").removeAttr('checked');
										$("#health13").removeAttr('checked');
										$("#health14").removeAttr('checked');
										$("#health15").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#health12").attr('checked', 'checked');
										$("#health11").removeAttr('checked');
										$("#health13").removeAttr('checked');
										$("#health14").removeAttr('checked');
										$("#health15").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#health13").attr('checked', 'checked');
										$("#health12").removeAttr('checked');
										$("#health11").removeAttr('checked');
										$("#health14").removeAttr('checked');
										$("#health15").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#health14").attr('checked', 'checked');
										$("#health12").removeAttr('checked');
										$("#health13").removeAttr('checked');
										$("#health11").removeAttr('checked');
										$("#health15").removeAttr('checked');
									}
									else{
										$("#health15").attr('checked', 'checked');
										$("#health12").removeAttr('checked');
										$("#health13").removeAttr('checked');
										$("#health14").removeAttr('checked');
										$("#health11").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#health21").attr('checked', 'checked');
										$("#health22").removeAttr('checked');
										$("#health23").removeAttr('checked');
										$("#health24").removeAttr('checked');
										$("#health25").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#health22").attr('checked', 'checked');
										$("#health21").removeAttr('checked');
										$("#health23").removeAttr('checked');
										$("#health24").removeAttr('checked');
										$("#health25").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#health23").attr('checked', 'checked');
										$("#health22").removeAttr('checked');
										$("#health21").removeAttr('checked');
										$("#health24").removeAttr('checked');
										$("#health25").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#health24").attr('checked', 'checked');
										$("#health22").removeAttr('checked');
										$("#health23").removeAttr('checked');
										$("#health21").removeAttr('checked');
										$("#health25").removeAttr('checked');
									}
									else{
										$("#health25").attr('checked', 'checked');
										$("#health22").removeAttr('checked');
										$("#health23").removeAttr('checked');
										$("#health24").removeAttr('checked');
										$("#health21").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '3'){
									if(item['nilai'] == 1){
										$("#health31").attr('checked', 'checked');
										$("#health32").removeAttr('checked');
										$("#health33").removeAttr('checked');
										$("#health34").removeAttr('checked');
										$("#health35").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#health32").attr('checked', 'checked');
										$("#health31").removeAttr('checked');
										$("#health33").removeAttr('checked');
										$("#health34").removeAttr('checked');
										$("#health35").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#health33").attr('checked', 'checked');
										$("#health32").removeAttr('checked');
										$("#health31").removeAttr('checked');
										$("#health34").removeAttr('checked');
										$("#health35").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#health34").attr('checked', 'checked');
										$("#health32").removeAttr('checked');
										$("#health33").removeAttr('checked');
										$("#health31").removeAttr('checked');
										$("#health35").removeAttr('checked');
									}
									else{
										$("#health35").attr('checked', 'checked');
										$("#health32").removeAttr('checked');
										$("#health33").removeAttr('checked');
										$("#health34").removeAttr('checked');
										$("#health31").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '4'){
									if(item['nilai'] == 1){
										$("#health41").attr('checked', 'checked');
										$("#health42").removeAttr('checked');
										$("#health43").removeAttr('checked');
										$("#health44").removeAttr('checked');
										$("#health45").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#health42").attr('checked', 'checked');
										$("#health41").removeAttr('checked');
										$("#health43").removeAttr('checked');
										$("#health44").removeAttr('checked');
										$("#health45").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#health43").attr('checked', 'checked');
										$("#health42").removeAttr('checked');
										$("#health41").removeAttr('checked');
										$("#health44").removeAttr('checked');
										$("#health45").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#health44").attr('checked', 'checked');
										$("#health42").removeAttr('checked');
										$("#health43").removeAttr('checked');
										$("#health41").removeAttr('checked');
										$("#health45").removeAttr('checked');
									}
									else{
										$("#health45").attr('checked', 'checked');
										$("#health42").removeAttr('checked');
										$("#health43").removeAttr('checked');
										$("#health44").removeAttr('checked');
										$("#health41").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#health51").attr('checked', 'checked');
										$("#health52").removeAttr('checked');
										$("#health53").removeAttr('checked');
										$("#health54").removeAttr('checked');
										$("#health55").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#health52").attr('checked', 'checked');
										$("#health51").removeAttr('checked');
										$("#health53").removeAttr('checked');
										$("#health54").removeAttr('checked');
										$("#health55").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#health53").attr('checked', 'checked');
										$("#health52").removeAttr('checked');
										$("#health51").removeAttr('checked');
										$("#health54").removeAttr('checked');
										$("#health55").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#health54").attr('checked', 'checked');
										$("#health52").removeAttr('checked');
										$("#health53").removeAttr('checked');
										$("#health51").removeAttr('checked');
										$("#health55").removeAttr('checked');
									}
									else{
										$("#health55").attr('checked', 'checked');
										$("#health52").removeAttr('checked');
										$("#health53").removeAttr('checked');
										$("#health54").removeAttr('checked');
										$("#health51").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'absences'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#aabs1").attr('checked', 'checked');
										$("#aabs2").removeAttr('checked');
										$("#aabs3").removeAttr('checked');
										$("#aabs4").removeAttr('checked');
										$("#aabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#aabs2").attr('checked', 'checked');
										$("#aabs1").removeAttr('checked');
										$("#aabs3").removeAttr('checked');
										$("#aabs4").removeAttr('checked');
										$("#aabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#aabs3").attr('checked', 'checked');
										$("#aabs2").removeAttr('checked');
										$("#aabs1").removeAttr('checked');
										$("#aabs4").removeAttr('checked');
										$("#aabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#aabs4").attr('checked', 'checked');
										$("#aabs2").removeAttr('checked');
										$("#aabs3").removeAttr('checked');
										$("#aabs1").removeAttr('checked');
										$("#aabs5").removeAttr('checked');
									}
									else{
										$("#aabs5").attr('checked', 'checked');
										$("#aabs2").removeAttr('checked');
										$("#aabs3").removeAttr('checked');
										$("#aabs4").removeAttr('checked');
										$("#aabs1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#babs1").attr('checked', 'checked');
										$("#babs2").removeAttr('checked');
										$("#babs3").removeAttr('checked');
										$("#babs4").removeAttr('checked');
										$("#babs5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#babs2").attr('checked', 'checked');
										$("#babs1").removeAttr('checked');
										$("#babs3").removeAttr('checked');
										$("#babs4").removeAttr('checked');
										$("#babs5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#babs3").attr('checked', 'checked');
										$("#babs2").removeAttr('checked');
										$("#babs1").removeAttr('checked');
										$("#babs4").removeAttr('checked');
										$("#babs5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#babs4").attr('checked', 'checked');
										$("#babs2").removeAttr('checked');
										$("#babs3").removeAttr('checked');
										$("#babs1").removeAttr('checked');
										$("#babs5").removeAttr('checked');
									}
									else{
										$("#babs5").attr('checked', 'checked');
										$("#babs2").removeAttr('checked');
										$("#babs3").removeAttr('checked');
										$("#babs4").removeAttr('checked');
										$("#babs1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '3'){
									if(item['nilai'] == 1){
										$("#cabs1").attr('checked', 'checked');
										$("#cabs2").removeAttr('checked');
										$("#cabs3").removeAttr('checked');
										$("#cabs4").removeAttr('checked');
										$("#cabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#cabs2").attr('checked', 'checked');
										$("#cabs1").removeAttr('checked');
										$("#cabs3").removeAttr('checked');
										$("#cabs4").removeAttr('checked');
										$("#cabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#cabs3").attr('checked', 'checked');
										$("#cabs2").removeAttr('checked');
										$("#cabs1").removeAttr('checked');
										$("#cabs4").removeAttr('checked');
										$("#cabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#cabs4").attr('checked', 'checked');
										$("#cabs2").removeAttr('checked');
										$("#cabs3").removeAttr('checked');
										$("#cabs1").removeAttr('checked');
										$("#cabs5").removeAttr('checked');
									}
									else{
										$("#cabs5").attr('checked', 'checked');
										$("#cabs2").removeAttr('checked');
										$("#cabs3").removeAttr('checked');
										$("#cabs4").removeAttr('checked');
										$("#cabs1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '4'){
									if(item['nilai'] == 1){
										$("#dabs1").attr('checked', 'checked');
										$("#dabs2").removeAttr('checked');
										$("#dabs3").removeAttr('checked');
										$("#dabs4").removeAttr('checked');
										$("#dabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#dabs2").attr('checked', 'checked');
										$("#dabs1").removeAttr('checked');
										$("#dabs3").removeAttr('checked');
										$("#dabs4").removeAttr('checked');
										$("#dabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#dabs3").attr('checked', 'checked');
										$("#dabs2").removeAttr('checked');
										$("#dabs1").removeAttr('checked');
										$("#dabs4").removeAttr('checked');
										$("#dabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#dabs4").attr('checked', 'checked');
										$("#dabs2").removeAttr('checked');
										$("#dabs3").removeAttr('checked');
										$("#dabs1").removeAttr('checked');
										$("#dabs5").removeAttr('checked');
									}
									else{
										$("#dabs5").attr('checked', 'checked');
										$("#dabs2").removeAttr('checked');
										$("#dabs3").removeAttr('checked');
										$("#dabs4").removeAttr('checked');
										$("#dabs1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#eabs1").attr('checked', 'checked');
										$("#eabs2").removeAttr('checked');
										$("#eabs3").removeAttr('checked');
										$("#eabs4").removeAttr('checked');
										$("#eabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#eabs2").attr('checked', 'checked');
										$("#eabs1").removeAttr('checked');
										$("#eabs3").removeAttr('checked');
										$("#eabs4").removeAttr('checked');
										$("#eabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#eabs3").attr('checked', 'checked');
										$("#eabs2").removeAttr('checked');
										$("#eabs1").removeAttr('checked');
										$("#eabs4").removeAttr('checked');
										$("#eabs5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#eabs4").attr('checked', 'checked');
										$("#eabs2").removeAttr('checked');
										$("#eabs3").removeAttr('checked');
										$("#eabs1").removeAttr('checked');
										$("#eabs5").removeAttr('checked');
									}
									else{
										$("#eabs5").attr('checked', 'checked');
										$("#eabs2").removeAttr('checked');
										$("#eabs3").removeAttr('checked');
										$("#eabs4").removeAttr('checked');
										$("#eabs1").removeAttr('checked');
									}
								}
							}
							else if (item['name'] == 'grade'){
								if(item['code_subkriteria'] == '1'){
									if(item['nilai'] == 1){
										$("#agrade1").attr('checked', 'checked');
										$("#agrade2").removeAttr('checked');
										$("#agrade3").removeAttr('checked');
										$("#agrade4").removeAttr('checked');
										$("#agrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#agrade2").attr('checked', 'checked');
										$("#agrade1").removeAttr('checked');
										$("#agrade3").removeAttr('checked');
										$("#agrade4").removeAttr('checked');
										$("#agrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#agrade3").attr('checked', 'checked');
										$("#agrade2").removeAttr('checked');
										$("#agrade1").removeAttr('checked');
										$("#agrade4").removeAttr('checked');
										$("#agrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#agrade4").attr('checked', 'checked');
										$("#agrade2").removeAttr('checked');
										$("#agrade3").removeAttr('checked');
										$("#agrade1").removeAttr('checked');
										$("#agrade5").removeAttr('checked');
									}
									else{
										$("#agrade5").attr('checked', 'checked');
										$("#agrade2").removeAttr('checked');
										$("#agrade3").removeAttr('checked');
										$("#agrade4").removeAttr('checked');
										$("#agrade1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '2'){
									if(item['nilai'] == 1){
										$("#bgrade1").attr('checked', 'checked');
										$("#bgrade2").removeAttr('checked');
										$("#bgrade3").removeAttr('checked');
										$("#bgrade4").removeAttr('checked');
										$("#bgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#bgrade2").attr('checked', 'checked');
										$("#bgrade1").removeAttr('checked');
										$("#bgrade3").removeAttr('checked');
										$("#bgrade4").removeAttr('checked');
										$("#bgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#bgrade3").attr('checked', 'checked');
										$("#bgrade2").removeAttr('checked');
										$("#bgrade1").removeAttr('checked');
										$("#bgrade4").removeAttr('checked');
										$("#bgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#bgrade4").attr('checked', 'checked');
										$("#bgrade2").removeAttr('checked');
										$("#bgrade3").removeAttr('checked');
										$("#bgrade1").removeAttr('checked');
										$("#bgrade5").removeAttr('checked');
									}
									else{
										$("#bgrade5").attr('checked', 'checked');
										$("#bgrade2").removeAttr('checked');
										$("#bgrade3").removeAttr('checked');
										$("#bgrade4").removeAttr('checked');
										$("#bgrade1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '3'){
									if(item['nilai'] == 1){
										$("#cgrade1").attr('checked', 'checked');
										$("#cgrade2").removeAttr('checked');
										$("#cgrade3").removeAttr('checked');
										$("#cgrade4").removeAttr('checked');
										$("#cgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#cgrade2").attr('checked', 'checked');
										$("#cgrade1").removeAttr('checked');
										$("#cgrade3").removeAttr('checked');
										$("#cgrade4").removeAttr('checked');
										$("#cgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#cgrade3").attr('checked', 'checked');
										$("#cgrade2").removeAttr('checked');
										$("#cgrade1").removeAttr('checked');
										$("#cgrade4").removeAttr('checked');
										$("#cgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#cgrade4").attr('checked', 'checked');
										$("#cgrade2").removeAttr('checked');
										$("#cgrade3").removeAttr('checked');
										$("#cgrade1").removeAttr('checked');
										$("#cgrade5").removeAttr('checked');
									}
									else{
										$("#cgrade5").attr('checked', 'checked');
										$("#cgrade2").removeAttr('checked');
										$("#cgrade3").removeAttr('checked');
										$("#cgrade4").removeAttr('checked');
										$("#cgrade1").removeAttr('checked');
									}
								}
								else if(item['code_subkriteria'] == '4'){
									if(item['nilai'] == 1){
										$("#dgrade1").attr('checked', 'checked');
										$("#dgrade2").removeAttr('checked');
										$("#dgrade3").removeAttr('checked');
										$("#dgrade4").removeAttr('checked');
										$("#dgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#dgrade2").attr('checked', 'checked');
										$("#dgrade1").removeAttr('checked');
										$("#dgrade3").removeAttr('checked');
										$("#dgrade4").removeAttr('checked');
										$("#dgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#dgrade3").attr('checked', 'checked');
										$("#dgrade2").removeAttr('checked');
										$("#dgrade1").removeAttr('checked');
										$("#dgrade4").removeAttr('checked');
										$("#dgrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#dgrade4").attr('checked', 'checked');
										$("#dgrade2").removeAttr('checked');
										$("#dgrade3").removeAttr('checked');
										$("#dgrade1").removeAttr('checked');
										$("#dgrade5").removeAttr('checked');
									}
									else{
										$("#dgrade5").attr('checked', 'checked');
										$("#dgrade2").removeAttr('checked');
										$("#dgrade3").removeAttr('checked');
										$("#dgrade4").removeAttr('checked');
										$("#dgrade1").removeAttr('checked');
									}
								}
								else{
									if(item['nilai'] == 1){
										$("#egrade1").attr('checked', 'checked');
										$("#egrade2").removeAttr('checked');
										$("#egrade3").removeAttr('checked');
										$("#egrade4").removeAttr('checked');
										$("#egrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 2){
										$("#egrade2").attr('checked', 'checked');
										$("#egrade1").removeAttr('checked');
										$("#egrade3").removeAttr('checked');
										$("#egrade4").removeAttr('checked');
										$("#egrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 3){
										$("#egrade3").attr('checked', 'checked');
										$("#egrade2").removeAttr('checked');
										$("#egrade1").removeAttr('checked');
										$("#egrade4").removeAttr('checked');
										$("#egrade5").removeAttr('checked');
									}
									else if(item['nilai'] == 4){
										$("#egrade4").attr('checked', 'checked');
										$("#egrade2").removeAttr('checked');
										$("#egrade3").removeAttr('checked');
										$("#egrade1").removeAttr('checked');
										$("#egrade5").removeAttr('checked');
									}
									else{
										$("#egrade5").attr('checked', 'checked');
										$("#egrade2").removeAttr('checked');
										$("#egrade3").removeAttr('checked');
										$("#egrade4").removeAttr('checked');
										$("#egrade1").removeAttr('checked');
									}
								}
							}
						});
						// $(".isi").html(isi);
					}
				});
			}
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
				<a href="kriteria.php" class="active"><img src="img/parameter.png" style="height:35px; margin-right:20px;">Parameter Kriteria</a>
				<a href="input.php"><img src="img/process.png" style="height:35px; margin-right:20px;">Proses Data</a>
				<a href="hasil.php"><img src="img/notepad.png" style="height:35px; margin-right:20px;">Hasil</a>
			</div>
			<div class="col-sm-10 main">
				<h3> Parameter Kriteria </h3>
				<br>
				<hr>
				<br>
				<h5> Kriteria #1: School </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Gabriel Pereira</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='gpRadios' id='gp1' value='1' checked>
				        			<label class='form-check-label' for='gp1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='gpRadios' id='gp5' value='5'>
				        			<label class='form-check-label' for='gp5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Mousinho da Silveira</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='msRadios' id='ms1' value='1'>
				        			<label class='form-check-label' for='ms1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='msRadios' id='ms5' value='5' checked>
				        			<label class='form-check-label' for='ms5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #2: Sex </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Male</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mRadios' id='m1' value='1' checked>
				        			<label class='form-check-label' for='m1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mRadios' id='m5' value='5'>
				        			<label class='form-check-label' for='m5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Female</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fRadios' id='f1' value='1'>
				        			<label class='form-check-label' for='f1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fRadios' id='f5' value='5' checked>
				        			<label class='form-check-label' for='f5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #3: Age </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>15-17 tahun</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aageRadios' id='aage1' value='1' checked>
				        			<label class='form-check-label' for='aage1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aageRadios' id='aage3' value='3'>
				        			<label class='form-check-label' for='aage3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aageRadios' id='aage5' value='5'>
				        			<label class='form-check-label' for='aage5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>18-20 tahun</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bageRadios' id='bage1' value='1' >
				        			<label class='form-check-label' for='bage1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bageRadios' id='bage3' value='3' checked>
				        			<label class='form-check-label' for='bage3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bageRadios' id='bage5' value='5'>
				        			<label class='form-check-label' for='bage5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>>20 tahun</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cageRadios' id='cage1' value='1' >
				        			<label class='form-check-label' for='cage1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cageRadios' id='cage3' value='3' >
				        			<label class='form-check-label' for='cage3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cageRadios' id='cage5' value='5' checked>
				        			<label class='form-check-label' for='cage5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #4: Address </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Urban</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='uRadios' id='u1' value='1' checked>
				        			<label class='form-check-label' for='u1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='uRadios' id='u5' value='5'>
				        			<label class='form-check-label' for='u5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Rural</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='rRadios' id='r1' value='1'>
				        			<label class='form-check-label' for='r1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='rRadios' id='r5' value='5' checked>
				        			<label class='form-check-label' for='r5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #5: Family Size </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Greater Than 3</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='gtRadios' id='gt1' value='1' checked>
				        			<label class='form-check-label' for='gt1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='gtRadios' id='gt5' value='5'>
				        			<label class='form-check-label' for='gt5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Less or Equal to 3</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='leRadios' id='le1' value='1'>
				        			<label class='form-check-label' for='le1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='leRadios' id='le5' value='5' checked>
				        			<label class='form-check-label' for='le5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #6: Mother's Job </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Teacher</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mteacherRadios' id='mteacher1' value='1' checked>
				        			<label class='form-check-label' for='mteacher1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mteacherRadios' id='mteacher2' value='2'>
				        			<label class='form-check-label' for='mteacher2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mteacherRadios' id='mteacher3' value='3'>
				        			<label class='form-check-label' for='mteacher3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mteacherRadios' id='mteacher4' value='4'>
				        			<label class='form-check-label' for='mteacher4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mteacherRadios' id='mteacher5' value='5'>
				        			<label class='form-check-label' for='mteacher5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Health Care Related</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mhealthRadios' id='mhealth1' value='1'>
				        			<label class='form-check-label' for='mhealth1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mhealthRadios' id='mhealth2' value='2' checked>
				        			<label class='form-check-label' for='mhealth2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mhealthRadios' id='mhealth3' value='3'>
				        			<label class='form-check-label' for='mhealth3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mhealthRadios' id='mhealth4' value='4'>
				        			<label class='form-check-label' for='mhealth4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mhealthRadios' id='mhealth5' value='5'>
				        			<label class='form-check-label' for='mhealth5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>Civil Services</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mserviceRadios' id='mservice1' value='1'>
				        			<label class='form-check-label' for='mservice1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mserviceRadios' id='mservice2' value='2'>
				        			<label class='form-check-label' for='mservice2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mserviceRadios' id='mservice3' value='3' checked>
				        			<label class='form-check-label' for='mservice3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mserviceRadios' id='mservice4' value='4'>
				        			<label class='form-check-label' for='mservice4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mserviceRadios' id='mservice5' value='5'>
				        			<label class='form-check-label' for='mservice5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>4</td>
				    		<td>At Home</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mathomeRadios' id='mathome1' value='1'>
				        			<label class='form-check-label' for='mathome1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mathomeRadios' id='mathome2' value='2'>
				        			<label class='form-check-label' for='mathome2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mathomeRadios' id='mathome3' value='3'>
				        			<label class='form-check-label' for='mathome3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mathomeRadios' id='mathome4' value='4' checked>
				        			<label class='form-check-label' for='mathome4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='mathomeRadios' id='mathome5' value='5'>
				        			<label class='form-check-label' for='mathome5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>5</td>
				    		<td>Other</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='otherRadios' id='other1' value='1'>
				        			<label class='form-check-label' for='other1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='otherRadios' id='other2' value='2'>
				        			<label class='form-check-label' for='other2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='otherRadios' id='other3' value='3'>
				        			<label class='form-check-label' for='other3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='otherRadios' id='other4' value='4'>
				        			<label class='form-check-label' for='other4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='otherRadios' id='other5' value='5' checked>
				        			<label class='form-check-label' for='other5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #7: Father's Job </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Teacher</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fteacherRadios' id='fteacher1' value='1' checked>
				        			<label class='form-check-label' for='fteacher1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fteacherRadios' id='fteacher2' value='2'>
				        			<label class='form-check-label' for='fteacher2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fteacherRadios' id='fteacher3' value='3'>
				        			<label class='form-check-label' for='fteacher3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fteacherRadios' id='fteacher4' value='4'>
				        			<label class='form-check-label' for='fteacher4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fteacherRadios' id='fteacher5' value='5'>
				        			<label class='form-check-label' for='fteacher5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>Health Care Related</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fhealthRadios' id='fhealth1' value='1'>
				        			<label class='form-check-label' for='fhealth1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fhealthRadios' id='fhealth2' value='2' checked>
				        			<label class='form-check-label' for='fhealth2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fhealthRadios' id='fhealth3' value='3'>
				        			<label class='form-check-label' for='fhealth3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='healthRadios' id='fhealth4' value='4'>
				        			<label class='form-check-label' for='fhealth4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fhealthRadios' id='fhealth5' value='5'>
				        			<label class='form-check-label' for='fhealth5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>Civil Services</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fserviceRadios' id='fservice1' value='1'>
				        			<label class='form-check-label' for='fservice1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fserviceRadios' id='fservice2' value='2'>
				        			<label class='form-check-label' for='fservice2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fserviceRadios' id='fservice3' value='3' checked>
				        			<label class='form-check-label' for='fservice3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fserviceRadios' id='fservice4' value='4'>
				        			<label class='form-check-label' for='fservice4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fserviceRadios' id='fservice5' value='5'>
				        			<label class='form-check-label' for='fservice5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>4</td>
				    		<td>At Home</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fathomeRadios' id='fathome1' value='1'>
				        			<label class='form-check-label' for='fathome1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fathomeRadios' id='fathome2' value='2'>
				        			<label class='form-check-label' for='fathome2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fathomeRadios' id='fathome3' value='3'>
				        			<label class='form-check-label' for='fathome3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fathomeRadios' id='fathome4' value='4' checked>
				        			<label class='form-check-label' for='fathome4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fathomeRadios' id='fathome5' value='5'>
				        			<label class='form-check-label' for='fathome5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>5</td>
				    		<td>Other</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fotherRadios' id='fother1' value='1'>
				        			<label class='form-check-label' for='fother1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fotherRadios' id='fother2' value='2'>
				        			<label class='form-check-label' for='fother2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fotherRadios' id='fother3' value='3'>
				        			<label class='form-check-label' for='fother3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fotherRadios' id='fother4' value='4'>
				        			<label class='form-check-label' for='fother4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='fotherRadios' id='fother5' value='5' checked>
				        			<label class='form-check-label' for='fother5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #8: Higher Education </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Yes</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='hyesRadios' id='hyes1' value='Yes' checked>
				        			<label class='form-check-label' for='hyes1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='hyesRadios' id='hyes5' value='No'>
				        			<label class='form-check-label' for='hyes5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>No</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='hnoRadios' id='hno1' value='Yes'>
				        			<label class='form-check-label' for='hno1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='hnoRadios' id='hno5' value='No' checked>
				        			<label class='form-check-label' for='hno5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #9: Internet Access </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>Yes</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='iyesRadios' id='iyes1' value='Yes' checked>
				        			<label class='form-check-label' for='iyes1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='iyesRadios' id='iyes5' value='No'>
				        			<label class='form-check-label' for='iyes5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>No</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='inoRadios' id='ino1' value='Yes'>
				        			<label class='form-check-label' for='ino1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='inoRadios' id='ino5' value='No' checked>
				        			<label class='form-check-label' for='ino5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #10: Health Status </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>1</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health1Radios' id='health11' value='1' checked>
				        			<label class='form-check-label' for='health11'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health1Radios' id='health12' value='2'>
				        			<label class='form-check-label' for='health12'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health1Radios' id='health13' value='3'>
				        			<label class='form-check-label' for='health13'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health1Radios' id='health14' value='4'>
				        			<label class='form-check-label' for='health14'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health1Radios' id='health15' value='5'>
				        			<label class='form-check-label' for='health15'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>2</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health2Radios' id='health21' value='1' >
				        			<label class='form-check-label' for='health21'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health2Radios' id='health22' value='2' checked>
				        			<label class='form-check-label' for='health22'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health2Radios' id='health23' value='3'>
				        			<label class='form-check-label' for='health23'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health2Radios' id='health24' value='4'>
				        			<label class='form-check-label' for='health24'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health2Radios' id='health25' value='5'>
				        			<label class='form-check-label' for='health25'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>3</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health3Radios' id='health31' value='1' >
				        			<label class='form-check-label' for='health31'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health3Radios' id='health32' value='2'>
				        			<label class='form-check-label' for='health32'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health3Radios' id='health33' value='3' checked>
				        			<label class='form-check-label' for='health33'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health3Radios' id='health34' value='4'>
				        			<label class='form-check-label' for='health14'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health3Radios' id='health35' value='5'>
				        			<label class='form-check-label' for='health35'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>4</td>
				    		<td>4</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health4Radios' id='health41' value='1' >
				        			<label class='form-check-label' for='health41'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health4Radios' id='health42' value='2'>
				        			<label class='form-check-label' for='health42'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health4Radios' id='health43' value='3'>
				        			<label class='form-check-label' for='health43'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health4Radios' id='health44' value='4' checked>
				        			<label class='form-check-label' for='health44'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health4Radios' id='health45' value='5'>
				        			<label class='form-check-label' for='health45'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>5</td>
				    		<td>5</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health5Radios' id='health51' value='1' >
				        			<label class='form-check-label' for='health51'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health5Radios' id='health52' value='2'>
				        			<label class='form-check-label' for='health52'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health5Radios' id='health53' value='3'>
				        			<label class='form-check-label' for='health53'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health5Radios' id='health54' value='4'>
				        			<label class='form-check-label' for='health54'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='health5Radios' id='health55' value='5' checked>
				        			<label class='form-check-label' for='health55'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #11: Absences </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>0-20 kali</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aabsRadios' id='aabs1' value='1' checked>
				        			<label class='form-check-label' for='aabs1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aabsRadios' id='aabs2' value='2'>
				        			<label class='form-check-label' for='aabs2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aabsRadios' id='aabs3' value='3'>
				        			<label class='form-check-label' for='aabs3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aabsRadios' id='aabs4' value='4'>
				        			<label class='form-check-label' for='aabs4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='aabsRadios' id='aabs5' value='5'>
				        			<label class='form-check-label' for='aabs5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>20-40 kali</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='babsRadios' id='babs1' value='1' >
				        			<label class='form-check-label' for='babs1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='babsRadios' id='babs2' value='2' checked>
				        			<label class='form-check-label' for='babs2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='babsRadios' id='babs3' value='3'>
				        			<label class='form-check-label' for='babs3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='babsRadios' id='babs4' value='4'>
				        			<label class='form-check-label' for='babs4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='babsRadios' id='babs5' value='5'>
				        			<label class='form-check-label' for='babs5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>40-60 kali</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cabsRadios' id='cabs1' value='1' >
				        			<label class='form-check-label' for='cabs1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cabsRadios' id='cabs2' value='2'>
				        			<label class='form-check-label' for='cabs2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cabsRadios' id='cabs3' value='3' checked>
				        			<label class='form-check-label' for='cabs3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cabsRadios' id='cabs4' value='4'>
				        			<label class='form-check-label' for='cabs4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cabsRadios' id='cabs5' value='5'>
				        			<label class='form-check-label' for='cabs5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>4</td>
				    		<td>60-80 kali</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dabsRadios' id='dabs1' value='1' >
				        			<label class='form-check-label' for='dabs1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dabsRadios' id='dabs2' value='2'>
				        			<label class='form-check-label' for='dabs2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dabsRadios' id='dabs3' value='3'>
				        			<label class='form-check-label' for='dabs3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dabsRadios' id='dabs4' value='4' checked>
				        			<label class='form-check-label' for='dabs4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dabsRadios' id='dabs5' value='5'>
				        			<label class='form-check-label' for='dabs5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>5</td>
				    		<td>>80 kali</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='eabsRadios' id='eabs1' value='1' >
				        			<label class='form-check-label' for='eabs1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='eabsRadios' id='eabs2' value='2'>
				        			<label class='form-check-label' for='eabs2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='eabsRadios' id='eabs3' value='3'>
				        			<label class='form-check-label' for='eabs3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='eabsRadios' id='eabs4' value='4'>
				        			<label class='form-check-label' for='eabs4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='eabsRadios' id='eabs5' value='5' checked>
				        			<label class='form-check-label' for='eabs5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<hr>
				<br>
				<h5> Kriteria #12: Grade </h5>
				<table class="table table-sm table-hover">
					<thead>
						<tr style="background-color: #dbdbdb;">
							<th scope="col">#</th>
							<th scope="col">Nama Subkriteria</th>
							<th scope="col">Nilai</th>
						</tr>
					</thead>
				  	<tbody>
				    	<tr>
				    		<td>1</td>
				    		<td>1-4</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='agradeRadios' id='agrade1' value='1' checked>
				        			<label class='form-check-label' for='agrade1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='agradeRadios' id='agrade2' value='2'>
				        			<label class='form-check-label' for='agrade2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='agradeRadios' id='agrade3' value='3'>
				        			<label class='form-check-label' for='agrade3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='agradeRadios' id='agrade4' value='4'>
				        			<label class='form-check-label' for='agrade4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='agradeRadios' id='agrade5' value='5'>
				        			<label class='form-check-label' for='agrade5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>2</td>
				    		<td>5-8</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bgradeRadios' id='bgrade1' value='1' >
				        			<label class='form-check-label' for='bgrade1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bgradeRadios' id='bgrade2' value='2' checked>
				        			<label class='form-check-label' for='bgrade2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bgradeRadios' id='bgrade3' value='3'>
				        			<label class='form-check-label' for='bgrade3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bgradeRadios' id='bgrade4' value='4'>
				        			<label class='form-check-label' for='bgrade4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='bgradeRadios' id='bgrade5' value='5'>
				        			<label class='form-check-label' for='bgrade5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>3</td>
				    		<td>9-12</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cgradeRadios' id='cgrade1' value='1' >
				        			<label class='form-check-label' for='cgrade1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cgradeRadios' id='cgrade2' value='2'>
				        			<label class='form-check-label' for='cgrade2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cgradeRadios' id='cgrade3' value='3' checked>
				        			<label class='form-check-label' for='cgrade3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cgradeRadios' id='cgrade4' value='4'>
				        			<label class='form-check-label' for='cgrade4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='cgradeRadios' id='cgrade5' value='5'>
				        			<label class='form-check-label' for='cgrade5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>4</td>
				    		<td>13-16</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dgradeRadios' id='dgrade1' value='1' >
				        			<label class='form-check-label' for='dgrade1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dgradeRadios' id='dgrade2' value='2'>
				        			<label class='form-check-label' for='dgrade2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dgradeRadios' id='dgrade3' value='3'>
				        			<label class='form-check-label' for='dgrade3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dgradeRadios' id='dgrade4' value='4' checked>
				        			<label class='form-check-label' for='dgrade4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='dgradeRadios' id='dgrade5' value='5'>
				        			<label class='form-check-label' for='dgrade5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
				    	<tr>
				    		<td>5</td>
				    		<td>17-20</td>
				    		<td>
				    			<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='egradeRadios' id='egrade1' value='1' >
				        			<label class='form-check-label' for='egrade1'>1 - Sangat Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='egradeRadios' id='egrade2' value='2'>
				        			<label class='form-check-label' for='egrade2'>2 - Kurang</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='egradeRadios' id='egrade3' value='3'>
				        			<label class='form-check-label' for='egrade3'>3 - Cukup</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='egradeRadios' id='egrade4' value='4'>
				        			<label class='form-check-label' for='egrade4'>4 - Baik</label>
				        		</div>
				        		<div class='form-check'>
				        			<input class='form-check-input' type='radio' name='egradeRadios' id='egrade5' value='5' checked>
				        			<label class='form-check-label' for='egrade5'>5 - Sangat Baik</label>
				        		</div>
				        	</td>
				    	</tr>
					</tbody>
				</table>
				<br>
				<center><button type="button" class="btn btn-success btnSimpan">&emsp;&emsp;Simpan&emsp;&emsp;</button></center>
				<br>
			</div>
		</div>
	</div>
</body>