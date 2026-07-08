<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>Available Organs</h2>

<table>
<tr><th>Donor</th><th>Organ</th></tr>

<?php
$r=$conn->query("SELECT name, organ_type FROM Donors WHERE availability_status='Available'");
while($row=$r->fetch_assoc()){
echo "<tr>
<td>{$row['name']}</td>
<td>{$row['organ_type']}</td>
</tr>";
}
?>
</table>