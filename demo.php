<?php
$servername="tcp:adventurework.database.windows.net,1433";
$connectionoptions=array("Database"=>"demo","Uid"=>"deepak","PWD"=>"123azure./");

$conn= sqlsrv_connect($servername,$connectionoptions);	
?>
<form method="post" action="demo.php" >
<input type="text" name="inp" ></input>
<input type="text" name="extra" ></input>

<button type="submit">Submit</button>

</form>
<?php
	$data= $_POST["inp"];
	$data1= $_POST["extra"];
	//$query="CREATE TABLE d (Name varchar2(20)";
	//$c= sqlsrv_query($conn,$query);
	$tsql = "INSERT d (Name,extra1) VALUES ('$data','$data1')";
	$insertReview = sqlsrv_query($conn, $tsql);
$ret ="SELECT * FROM d";	
$getProducts = sqlsrv_query($conn, $ret);

?>

<table>
	<thead>
		<tr>
			<th>Deepak</th>
			<th>Jain</th>
			
			</tr>
			</thead>
			<tbody>
	
		
		
			<?php
 while($row = sqlsrv_fetch_array($getProducts))		
 { 
	 echo "<tr>";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['extra1']."</td>";
/*		echo "<td><a href='edit.php?k=".$row['name']."'>Edit</a> | <a onclick = 'return confirm(\"Do you really want to delete????\")' href='delete.php?k=".$row['name']."'>delete</a></td>";
*/
 echo("<br/>");
 echo "</tr>";	
 
 
 }
	?>		
		
		
			
			</tbody>
			</table>