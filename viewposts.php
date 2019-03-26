<html>
<style>
    table {
        width: 80%;
        border: 1px solid black;
    }

    th {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11pt;
        background: #666;
        color: #FFF;
        padding: 2px 6px;
        border-collapse: separate;
        border: 1px solid #000;
    }

    td {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 11pt;
        border: 1px solid #DDD;
        color: black;
    }
</style>
</html>

<?php
include 'connect.php';
$conn = OpenCon();
$sql = "SELECT owner, dog, starttime, startlocn, endtime, endlocn FROM walkpost WHERE booked = 'F' AND completed = 'F'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
echo "<table><tr>
<th class='border-class'>Posted By</th>
<th class='border-class'>Dog name</th>
<th class='borderclass'>Pickup time</th>
<th class='borderclass'>Pickup location</th>
<th class='borderclass'>Dropoff time</th>
<th class='borderclass'>Dropoff location</th>
</tr>";
// output data of each row
while($row = $result->fetch_assoc()) {
 echo "<tr><td class='borderclass'>".$row["owner"]."</td>
 <td class='borderclass'>".$row["dog"]."</td>
 <td class='borderclass'>".$row["starttime"]."</td>
 <td class='borderclass'>".$row["startlocn"]."</td>
 <td class='borderclass'>".$row["endtime"]."</td>
 <td class='borderclass'>".$row["endlocn"]."</td></tr>";
}
echo "</table>";
} else {
echo "0 results";
}
CloseCon($conn);
?>
