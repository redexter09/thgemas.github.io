<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Kewangan | TH Gemas </title>
		<link rel="icon" type="image/png" href="img/logoth.png">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style> *
		
		{
		margin: 0;
		padding: 9px 0;
		padding-left: 5px;
        padding-right: 5px
		}
		
		
		nav {
			width: 100%;
			height: 100px;
			background-color: #RRGGBB;
		}
		
		ul {
			margin-left: 60px;
		}
		
		ul li{
			list-style: none;
			display: left-side;
			float: left;
		}
		
		ul li a{
			text-decoration: none;
			font-size: 20px;
			font-family: sen-serif;
			color: #8B0000;
		
		}
		
		ul li a:hover {
			color: orange;
		}
		
		</style>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<nav>
			<ul>
				<li><a href="showfile.php">Senarai Fail</a></li>
				<li><a href="pentadbiran.php">Pentadbiran</a></li>
				<li><a href="kewangan.php">Kewangan</a></li>
				<li><a href="pemasaran.php">Pemasaran</a></li>
				<li><a href="haji.php">Haji</a></li>
				<br>
				<br>
				<br>
			</ul>
			
			<ul>
				<li><a href="kwg.php">Kemaskini Fail</a></li>	
			</ul>
		</nav>
		<style> *

		body {
			margin: 0;
			padding: 0;
			background: url(./img/wall.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;  
			background-size: cover;
		}
		
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 80%;
		  margin-right: auto;
		  margin-left: auto;
		}
		
		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(even) {
		  background-color: #dddddd;
		}

		h2 {
			color: #8B0000;
			margin-left: 80px;
		}
		
	</style>
	
	
					<h2 align="center"><br>Kewangan<br></h2>
			<br>

			<table>
			  <tr>
				<th>Nama Fail</th>
				<th>No. Rujukan</th>
				<th>Bil</th>
				<th>Lokasi</th>
				<th>Tindakan</th>
			  </tr>
			
				<?php
					//Connection for database
					include 'connect.php';
					//Select Database
					$sql = "SELECT * FROM kewangan";
					$result = $mysqli->query($sql);
				?>
				
				
				<?php
					//Fetch Data form database
					if($result->num_rows > 0){
					 while($row = $result->fetch_assoc()){
					?>

					<tr>
					 <td><?php echo $row['namafail']; ?></td>
					 <td><?php echo $row['norujukan']; ?></td>
					 <td><?php echo $row['bilterkini']; ?></td>
					 <td><?php echo $row['lokasi']; ?></td>
					 <td> <a href="kwg.php?edited=1&id=<?php echo $row['id']; ?>">Sunting</a> |  
						  <a href="kwg.php?deleted=1&id=<?php echo $row['id']; ?>">Padam</a> 
					 </td>
					 </tr>
					 <?php
					 }
					}
					else
					{
					 ?>
					 <tr>
					 <th colspan="5">No data </th>
					 </tr>
				 <?php
				}
				?>
			  
			  </table>
			  
			
	</body>
</html>