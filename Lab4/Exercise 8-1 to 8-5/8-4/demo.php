<html>
<head><title>information</title>
  
</head>
<body>
<div class="container">
<h2>Interview Candidate List <a href="index.php" class="btn btn-success pull-right">Registration Page</a></h2>
<hr>
<table class="table table-bordered" cellspacing="0" width="100%">
<thead>
<tr class="bg-info">
<th>S.No</th>
<th>Interviewer’sname</th>
<th>Position</th>
<th>Date of Interview</th>
<th>Candidate's Name</th>
<th>Communication Abilities</th>
<th>Professional Appearance</th>
<th>Computer Skills</th>
<th>Business Knowledge</th>
<th>Interviewer’s Comment</th>
</tr>
</thead>
<tbody>
<?php
require('db_connect.php');
$query = "select * from candidate";
$result = mysqli_query($connection, $query);
$i = 0;
$counter = 1;
if (mysqli_num_rows($result) > 0) {
while ($row = $result->fetch_assoc()) {
extract($row);
?>
<tr>
<td><?php echo $counter ?></td>
<td><?php echo $row["iname"]; ?></td>
<td><?php echo $row["pos"]; ?></td>
<td><?php echo $row["dofin"]; ?></td>
<td><?php echo $row["cdname"]; ?></td>
<td><?php echo $row["cabilities"]; ?></td>
<td><?php echo $row["papp"]; ?></td>
<td><?php echo $row["compskill"]; ?></td>
<td><?php echo $row["bkno"]; ?></td>
<td><?php echo $row["icomm"]; ?></td>
</tr>
<?php
$i++;
$counter++;
}
}
?>
</tbody>
</table>
</div>

</body>
</html>

