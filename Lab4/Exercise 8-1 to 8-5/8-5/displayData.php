<html>

<!--Display the heading -->
<head><title>Airline Survey Reviews</title>
</head>
<body>
<div class="container">

<!-- Navigate to survey.php on Add review button click. -->
<h2> <a href="survey.php" class="btn btn-success pull-right">Add Reviews</a></h2>
<hr>

<!-- Create the table.-->
<table class="table table-bordered" cellspacing="0" width="100%">
<thead>
<tr class="bg-info">

<!--Give the table headings. -->
<th>S.No</th>
<th>Passenger Name</th>
<th>Passenger Age</th>
<th>Flight No.</th>
<th>Flight Date</th>
<th>Flight Time</th>
<th>Staff</th>
<th>Storage</th>
<th>Comfort</th>
<th>Cleanliness</th>
<th>noise</th>
</tr>
</thead>
<tbody>
<?php

//Establish the connection.
require('db.php');

//Execute the query.
$query = "select * from surveyDB";
$result = mysqli_query($connection, $query);
$i = 0;
$counter = 1;

//Populate the table.
if (mysqli_num_rows($result) > 0) {
while ($row = $result->fetch_assoc()) {
extract($row);
?>
<tr>
<td><?php echo $counter ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["age"]; ?></td>
<td><?php echo $row["no"]; ?></td>
<td><?php echo $row["date"]; ?></td>
<td><?php echo $row["time"]; ?></td>
<td><?php echo $row["staff"]; ?></td>
<td><?php echo $row["storage"]; ?></td>
<td><?php echo $row["comfort"]; ?></td>
<td><?php echo $row["cleanliness"]; ?></td>
<td><?php echo $row["noise"]; ?></td>
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