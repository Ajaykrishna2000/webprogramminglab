<?php
include "config.php";
$sql = " SELECT * FROM `register` " ;
$result=$conn->query($sql);
?>
<html>
<head>
<title>View page</title>
</head>
<body>
<div class="container">
<h2>VIEW</h2>
<table border="1">
<tr>
<th>Reg No.</th>
<th>Name</th>
<th>Email</th>
<th>Password</th>
</tr>
<?php
if($result->num_rows>0)
{
 while($row=$result->fetch_assoc())
    {
?>
<tr>
<td><?php echo $row['reg_id'];?></td>
<td><?php echo $row['name'];?></td>
<td><?php echo $row['email'];?></td>
<td><?php echo $row['password'];?></td>
<?php
    }
}
?>
</table>
</html>
