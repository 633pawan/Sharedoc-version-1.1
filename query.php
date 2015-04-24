<?php require_once 'config.php';
$q = $_GET['q'];

mysqli_select_db($con,"sharedoc");
if (strcmp($q,"*") ==0) {
$sql="SELECT * FROM file" ;

}
else {
$sql="SELECT * FROM file WHERE filename like '%".$q."%' or description like '%".$q."%'" ;

}
$result = mysqli_query($con,$sql);

echo "<table  class=ResultsTable>
<tr>
<th>Icon</th>
<th>File</th>
<th>Description</th>
<th>File Type</th>
<th>File Size</th>
<th>Upload timestamp</th>

</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td><img src=images/". $row['filetype'] .".jpg></td>";
	echo "<td><a href='files/" . $row['filename'] . "'>". $row['filename'] ."</td>";
	echo "<td>". $row['description'] ."</td>";
	echo "<td>". $row['filetype'] ."</td>";
	echo "<td>". $row['filesize'] ."kb</td>";
	echo "<td>". $row['addedTimestamp'] ."</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>