<?php
$name=$_REQUEST['mobile'];
include('comman/connect.php');

?>
		<table border="1">
			<?php

				$res=$con->query("select * from registration where mobileno like '$name%'");
				$res2=$con->query("select * from registration where mobileno like '$name%'");
				if(!$data2=mysqli_fetch_array($res2))
					echo "<h1 class='found'>Oops No Found Data !</h1>";
				else
				{
				$i=0; ?>
				<tr class="tr">
				<td width="50">Sl. No</td>
				<td>Name</td>
				<td>Gender</td>
				<td>RegiNo</td>
				<td>Email</td>
				<td>Mobile</td>
				<td>Branch</td>
				<td>Year</td>
				<td>Type</td>
				<td width="70">Action</td>
				</tr>
				<?php
				while($row=mysqli_fetch_array($res))
				{ $id=$row['UserId'];
					echo "<tr>";
						echo "<td>".++$i."</td>";
						echo "<td>".$row['Name']."</td>";
						echo "<td>".$row['Gender']."</td>";
						echo "<td>".$row['Regno']."</td>";
						echo "<td>".$row['Email']."</td>";
						echo "<td>".$row['MobileNo']."</td>";
						echo "<td>".$row['Branch']."</td>";
						echo "<td>".substr($row['Regno'],0,4)."</td>";
						echo "<td align='center'>".$row['Type']."</td>";
						echo "<td align='center'>
								<a href='userview.php?id=".$id."'><i class='fa fa-eye'></i></a> | <a href='usersedit.php?id=".$id."'><i class='fa fa-pencil'></i></a> | 
								<a href='delete.php?id=".$id."&&tname=account1'><i class='fa fa-trash'></i></a>
						</td>";
					echo "</tr>";
				}
				}
			?>
		</table>