<?php
include 'connectchild.php';
$id = $_GET['id'];
$q = " DELETE FROM `Datachild` WHERE `id` = $id ";
mysqli_query($connect, $q);
header('location:indexdatachild.php');
?>