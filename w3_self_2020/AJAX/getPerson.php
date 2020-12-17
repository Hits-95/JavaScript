<?php
	include("header.php");
	$str = $_GET['str'];
	$con = mysqli_connect('localhost', 'Hitesh', 'online');
	if($con){
		mysqli_select_db($con, "test");
		$sql = "SELECT * FROM user WHERE id = ".$str;
		$result = mysqli_query($con, $sql);
?>
		<table class="table table-hover">
			<thead>
				<tr>
					<th>Id</th>
					<th>Firstname</th>
					<th>Lastname</th>
					<th>Address</th>
					<th>Job</th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($result as $val){
						echo"<tr>";
						echo"<td>".$val['id']."</td>";
						echo"<td>".$val['fname']."</td>";
						echo"<td>".$val['lname']."</td>";
						echo"<td>".$val['addr']."</td>";
						echo"<td>".$val['job']."</td>";
						echo"</tr>";
					}
				?>
			</tbody>
		</table>
<?php			
	}else
		echo"connection not establish";


?>