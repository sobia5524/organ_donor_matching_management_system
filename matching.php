<?php include 'db.php'; ?>
<link rel="stylesheet" href="style.css">

<h2>🔗 Matching System</h2>

<table>
<tr><th>Patient</th><th>Donor</th><th>Organ</th></tr>

<?php
$q="SELECT p.name AS patient,d.name AS donor,p.organ_required
FROM Patients p JOIN Donors d
ON p.blood_group=d.blood_group
AND p.organ_required=d.organ_type";

$r=$conn->query($q);

while($row=$r->fetch_assoc()){
echo "<tr>
<td>{$row['patient']}</td>
<td>{$row['donor']}</td>
<td>{$row['organ_required']}</td>
</tr>";
}
?>
</table>