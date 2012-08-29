<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'gonegis', 'hinhthu071587@123');
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("gonegis_chat_users", $con);

$sql="SELECT * FROM users WHERE id = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['0'] . "</td>";
  echo "<td>" . $row['1'] . "</td>";
  echo "<td>" . $row['2'] . "</td>";
  echo "<td>" . $row['Hometown'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);
?>