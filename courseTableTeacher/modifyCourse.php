<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Course Table</title>
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

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../teacher.php">Back</a>
    </div>

</nav>

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
									<th class="cell100 column4" colspan="3">Contact</th>
									<th class="cell100 column4">Title</th>
									<th class="cell100 column4">Type</th>
									<th class="cell100 column4">Description</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
			        	<?php	
							$conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
							$que = "select * from courses,applied_courses";
							$result = mysqli_query($conn, $que);
							foreach($result as $arr){ 
						?>
									<table>
							<tbody>
								<tr class="row100 body">
								<td class="cell100 column4"><?php echo"$arr[name]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[contact]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[cTitle]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[cType]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[description]" ?></td>

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