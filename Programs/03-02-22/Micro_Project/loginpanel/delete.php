<?php 
include "connect.php";
if (isset($_GET['cid']))
    {
    $cid = $_POST['cid'];
    $cid = $_GET['cid'];
    $sql = "DELETE FROM `customer` WHERE `cid` = '$cid'";
    $result = $conn->query($sql);
    if ($result == TRUE) 
        {
        echo "Data deleted successfully.";
        header('location:index.php'); 
        }
    else
        {
        echo "Error:" . $sql . "<br>" . $conn->error;
        }
    } 
?>