<?php
include "connect.php";
if(isset($_POST['submit']))
{   
$ano=$_POST['ano'];
$title=$_POST['title'];
$author=$_POST['author'];
$edition=$_POST['edition'];
$publisher=$_POST['publisher'];


$sql = "INSERT INTO `books` ( `ano`,`title`, `author`, `edition`, `publisher`) VALUES ( '$ano', '$title', '$author', '$edition', '$publisher')";
$result=$conn->query($sql);
if($result==TRUE)
{
echo "new record created successfully";

}
else
{
echo "Error".$sql."<br>".$conn->error;
}
$conn->close();
}
?>
<html>
<head><title>Book Store-User Details</title></head>
<body>
<form method="POST" action="">
<h1>Register</h1>
<h4>Accession number:</h4><input type="text" name="ano" style="height:40px;width:300px;"  required><br>
<h4>Title:</h4><input type="text" name="title" style="height:40px;width:300px;"  required><br>
<h4>Author:</h4><input type="text" name="author" style="height:40px;width:300px;"  required><br>
<h4>Edition:</h4><input type="text" name="edition" style="height:40px;width:300px;"  required><br>
<h4>Publisher:</h4><input type="text" name="publisher" style="height:40px;width:300px;"  required><br>
<br>
<input type="submit" name="submit" value="register" style="height:40px;width:300px;background-color:orange">
</form>
</body>
</html>
