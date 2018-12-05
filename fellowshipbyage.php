<?php
include 'head.php';

include 'dbconn.php';
$result = GetFellows();

if (mysqli_num_rows($result) > 0) {
    // output data of each row
?>
    <thead>
    <tr>
      <th>Fellowship</th>
      <th>Name</th>
      <th>Age</th>
    </tr>
  	</thead>
  	<tbody>
<?php
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["fellowship"]. "</td>";
        echo "<td>" . $row["name__first"]. " " . $row["name__last"]. "</td>";
        echo "<td>" .$row["age"]."</td>";
        echo "</tr>";
    }
?>
	</tbody>
	</table>
<?php
}

include 'footer.php';

?>
