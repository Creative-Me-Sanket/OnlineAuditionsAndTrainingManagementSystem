<?php
session_start();
if(isset($_GET['sel'])){
	$conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
	$que = "update applied_auditions set status=1 where aaid=$_GET[sel]";
	$result = mysqli_query($conn, $que);
}
if(isset($_GET['rej'])){
	$conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
	$que = "update applied_auditions set status=0 where aaid=$_GET[rej]";
	$result = mysqli_query($conn, $que);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Table V04</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
th,td{
	text-align: center;
}
</style>
</head>
<body>
	<form method="GET" action="modifyAudition.php">
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
								<th class="cell100 column4">Name</th>
									<th class="cell100 column4" colspan="3">Gender</th>
									<th class="cell100 column4">Height</th>
									<th class="cell100 column4">Weight</th>
									<th class="cell100 column4">Contact</th>
									<th class="cell100 column4">View</th>
									<!-- <th class="cell100 column4">Auditions</th> -->
									<th class="cell100 column4">Action</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
			        	<?php	
							$conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
							$que = "select applied_auditions.aaid,users.name,users.gender,users.height,users.weight,users.phone,users.address from applied_auditions,auditions,users where applied_auditions.aid = auditions.id and auditions.id=$_GET[id] and applied_auditions.uid = users.id";
							$result = mysqli_query($conn, $que);
							foreach($result as $arr){ 
						?>
									<table>
							<tbody>
								<tr class="row100 body">
								<td class="cell100 column4"><?php echo"$arr[name]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[gender]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[height]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[weight]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[phone]" ?></td>
									<!-- <td class="cell100 column4"><?php echo"$arr[address]" ?></td> -->
									
									<td class="cell100 column4"><a href="#">Click To See Audition</a></td>
									
									<td class="cell100 column4"><a class="btn btn-primary" href="./modifyAudition.php?sel=<?php echo $arr['aaid']; ?>">SELECT</a></td>
									<td class="cell100 column4"><a class="btn btn-primary" href="./modifyAudition.php?rej=<?php echo $arr['aaid']; ?>">REJECT</a></td>
									
								</tr>
							</tbody>
						</table>
								<?php 
						        	}
								?>

					</div>
				</div>

				<!--  -->
	</div>


<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>