<html>
<head>
<title>Search Books</title>
</head>
<body><form method="POST" action="">
<input type="text" name="btitle" style="height:40px;width:300px;" placeholder="Enter title of a book to search">
<input type="submit" name="sub" value="submit" style="height:40px;width:120px;background-color:orange;font-size:20px">
</form>
<?php
require "connect.php";
if(isset($_POST['sub']))
{   
$bookhead=$_POST['btitle'];
$store =  "SELECT * FROM `books` WHERE `title` = '$bookhead'";
$result=$conn->query($store);
if($is_query_run=mysqli_query($conn,$store))
{  
while($query_execute=mysqli_fetch_assoc($is_query_run))
{ ?><table border="1" width=30% height=10%><tr><th>sino</th><th>title</th><th>author</th><th>edition</th><th>publisher</th></tr>
<tr><td><?php echo $query_execute["ano"];?></td>
<td><?php echo $query_execute["title"];?></td>
<td><?php echo $query_execute["author"];?></td>
<td><?php echo $query_execute["edition"];?></td>
<td><?php echo $query_execute["publisher"];?></td></tr></table>
<?php  }
}$conn->close();
}
?>
</body>
</html>
