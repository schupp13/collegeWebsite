
<h1>Pay Courses</h1>
<table class="table table-striped table-sm table-responsive table-hover">
<tr class="text-center">
<th>Course Number</th>
<th>Course Name</th>
<th>Time Period</th>
<th>Price</th>
</tr>
<?php
include '../process/config.php';
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT course_id FROM coursesSelected WHERE student_id='{$_SESSION['id']}'";

$result = mysqli_query($conn, $sql);
$total= 0;
if (mysqli_num_rows($result) > 0) {

// output data of each row
while($row = mysqli_fetch_assoc($result)) {
$sql2 = "SELECT * FROM classes WHERE id = '{$row["course_id"]}'";
$result2 = mysqli_query($conn, $sql2);
while($row2 = mysqli_fetch_assoc($result2)){
echo "<tr>";
  echo'<td>'.$row2["courseNumber"].'</td>';
  echo'<td>'.$row2["courseName"].'</td>';
  echo'<td width="15%">'.$row2["days"].'</td>';
  echo'<td>'.$row2["cost"].'</td>';
  echo '</tr>';
  $total = $total + $row2["cost"];
            }
        }
      }
?>
</table>
<p>Total Due: $<?echo $total;?></p>
<button type="" name="button" class="btn btn-danger btn-large">Pay Now</button>

</form>
