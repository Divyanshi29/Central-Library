<?php
$name=$_REQUEST['name'];
include('comman/connect.php');

?>
		<table border="1">
			<?php

				$res=$con->query("select * from libraryteam where name like '$name%'");
				$res2=$con->query("select * from libraryteam where name like '$name%'");
				if(!$data2=mysqli_fetch_array($res2))
					echo "<h1 class='found'>Oops No Found Data !</h1>";
				else
				{
				$i=0; ?>
				<tr class="tr">
				<td width="50">Sl. No</td>
				<td>Name</td>
				<td>Team Type</td>
				<td>Post</td>
				<td width='100'>Image</td>
				<td width="70">Action</td>
				</tr>
				<?php
				while($row=mysqli_fetch_array($res))
				{ $id=$row['memberid'];$pic=$row['pic'];
					echo "<tr>";
						echo "<td>".++$i."</td>";
						echo "<td>".$row['name']."</td>";
						echo "<td>".$row['teamtype']."</td>";
						echo "<td>".$row['teampost']."</td>";
						echo "<td><img src="."image/Library-Team/".$pic." width='100' height='100'></td>";
						echo "<td align='center'>
								<a href='usersedit.php?id=".$id."'><i class='fa fa-pencil'></i></a> | 
								<a href='delete.php?id=".$id."&&tname=account1'><i class='fa fa-trash'></i></a>
						</td>";
					echo "</tr>";
				}
				}
			?>
		</table>