<html>
<?php
include 'connectchild.php';
?>
<br>
<title>รายชื่อเด็กนักเรียนทั้งหมด</title>
<head>
    <meta charset= "utf-8">

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
     	<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
	    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css"> 

    <script>  
    $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

<style>
body {
  background-color: #E6E6FA;
}
</style>

</head>
<body>
<h1 align="center"> รายชื่อเด็กนักเรียนทั้งหมด  &nbsp; <button class="btn btn-success"> <a href="insert.php" class="text-white"> เพิ่มไอดี </a> </button> </h1>

<div class="container">
<div class ="col*lg-12">

<table id="example" class="table table-striped table-bordered"style="width:100%">
    <thead>
            <tr>
            <th>ลำดับ</th>
            <th>รหัสประจำตัวนักเรียน</th>
            <th>ชื่อ-นามสกุล</th>
            <th>ID Bluetooth</th>
            <th>ที่อยู่</th>
            <th>สถานะเด็ก</th>
            <th>แก้ไข</th>
            <th>ลบ</th>
            </tr>

      </thead>
        <?php
            
            $query = "SELECT * FROM Datachild ORDER BY id asc";
            $resulf = mysqli_query($connect, $query);
            
            while($row = mysqli_fetch_array($resulf)){
                ?>
                <tr>
                    <td><?php echo $row['id'];?></td>
                    <td><?php echo $row['ID_Study'];?></td>
                    <td><?php echo $row['name'];?></td>
                    <td><?php echo $row['ID_mi'];?></td>
                    <td><?php echo $row['address'];?></td>
                    <td><?php echo $row['state'];?></td>
                    <td align='center'> <button class="btn-warning btn"> <a href="updatedatachild.php?id=<?php echo $row ['id']; ?>"
                        class="text-while"> แก้ไข </a> </button> </td>
                    <td align='center'> <button class="btn-danger btn"> <a href="deletedatachild.php?id=<?php echo $row ['id']; ?>"
                        class="text-while"> ลบ </a> </button> </td>
                </tr>
            <?php
        }
        ?>
        </table>
        <a href="Home.php">กลับหน้าหลัก</a>
</body>
</html>