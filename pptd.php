<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title> Kemaskini Fail | TH Gemas </title>
		<link rel="icon" type="image/png" href="img/logoth.png">
		<link rel="stylesheet" type="text/css" href="style.css">
		<style> *
		
		
		
		body {
			
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
	
	
		<style> *

		body {
			margin: 0;
			padding: 0;
			background: url(./img/wall.jpg);
			background-repeat: no-repeat;
			background-attachment: fixed;  
			background-size: cover;
		}
		</style>
		</html>
		<?php
				include('connect.php');
				$error="";
				$message = "Too Short";

				$id="0"; 
				$namafail=""; 
				$norujukan=""; 
				$lokasi="";
				$bilterkini="";

				if(isset($_POST['btnsave']))
				{

				$namafail=$_POST['namafail'];
				$norujukan=$_POST['norujukan'];
				$lokasi=$_POST['lokasi'];
				$bilterkini=$_POST['bilterkini'];
				//compare textbox1 vs 2
				//
				//
				//
				//
				if(strlen($namafail)<4)
				{echo ("<SCRIPT LANGUAGE='JavaScript'>         
				 window.alert('$message')                  
				 </SCRIPT>"); 
				 exit();
				}
		{
			if($_POST['id']=="0")
		{
				//add new student
				$sql="insert into pentadbiran(namafail,norujukan,lokasi,bilterkini) values
				('$namafail','$norujukan','$lokasi','$bilterkini')";

				$result = $mysqli->query($sql);
		}
		else
		{
				//update exist student     
				$sql2="update pentadbiran set namafail='$namafail', norujukan='$norujukan', lokasi='$lokasi', bilterkini='$bilterkini'  where id='{$_GET['id']}' ";        

				$result2=$mysqli->query($sql2);     
					if($result2)     
				{      
					header('Refresh:0; pentadbiran.php');        
				}
		}
		}
		}

		if(isset($_GET['edited'])) 
			{  
				$sql3="select * from pentadbiran where id='{$_GET['id']}' ";  
				$result3=$mysqli->query($sql3);  

				while($row = $result3->fetch_assoc()){
				
				$id= $row['id']; 
				$namafail=$row['namafail']; 
				$norujukan=$row['norujukan'];  
				$lokasi=$row['lokasi'];
				$bilterkini=$row['bilterkini'];

					
			}
			}

			//check id for delete 
			if(isset($_GET['deleted'])) { 
				$sql4="delete from pentadbiran where id='{$_GET['id']}' ";  
				$result4=$mysqli->query($sql4);    
				if($result4)  
					{   
						{    
							header('Refresh:0; pentadbiran.php');     
					    }  
					} 
			} 

			?>
		<nav>
			<ul>
				<li><a href="pentadbiran.php">Pentadbiran</a></li>
			</ul>
		</nav>
		
			<form action="" method="post"> 
			<table cellpadding="5" cellspacing="0" border="1" align="center"> 
			<tr> 
			<td>Nama Fail</td> 
			<td><input type="text" name="namafail" value="<?php echo $namafail; ?>"> 
				<input type="hidden" name="id" value="<?php echo $id; ?>"> </td> 
			</tr> 
			 
			<tr> 
			<td>No. Rujukan</td> 
			<td><textarea name="norujukan"><?php echo $norujukan; ?></textarea></td> 
			</tr> 
			 
			 <td>Lokasi</td> 
			<td><textarea name="lokasi"><?php echo $lokasi; ?></textarea></td> 
			</tr> 

			<td>Bilangan Terkini</td> 
			<td><textarea name="bilterkini"><?php echo $bilterkini; ?></textarea></td> 
			</tr> 
			  

			<tr> 
			<td></td> 
			<td><input type="submit" value="Save" name="btnsave"></td> 
			</tr> 

			</form> 
			</table> 
			</html>