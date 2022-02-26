<?php
session_start();
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
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				
			<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="../artistindex.php">Back</a>
    </div>

</nav>
				
				<div class="table100 ver3 m-b-110">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Audition Name</th>
									<th class="cell100 column2">Type</th>
									<th class="cell100 column3">Last Date</th>
									<th class="cell100 column4">Location</th>
									<th class="cell100 column5">Status</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
			        	<?php	
							$conn = mysqli_connect("localhost", "root", "", "project") or die("failed to connect");
							$que = "select * from applied_auditions,auditions where applied_auditions.aid=auditions.id and $_SESSION[uid]";
							$result = mysqli_query($conn, $que);
							foreach($result as $arr){ 
						?>
									<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 column1"><?php echo"$arr[title]" ?></td>
									<td class="cell100 column2"><?php echo"$arr[gender]" ?></td>
									<td class="cell100 column3"><?php echo"$arr[l_date]" ?></td>
									<td class="cell100 column4"><?php echo"$arr[location]" ?></td>
									<td class="cell100 column5"><?php if($arr['select_status']==1) echo"Accepted";
									 									else if($arr['select_status']==0) echo"Rejected";
																		 else echo"Inprocess";
									 ?></td>
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