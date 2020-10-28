<html>
  <head>
  <title>UPDATE</title>
  <meta charset="utf-8">
  </head>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "Child";
// Create connection
$connect = new mysqli($servername, $username, $password, $databasename);
mysqli_query($connect, "SET NAMES 'utf8' ");
if(count($_POST)>0) {
mysqli_query($connect,"UPDATE Datachild  set name ='" . $_POST['name'] . "', ID_mi='" . $_POST['ID_mi'] . "', address='" . $_POST['address'] . "', state='" . $_POST['state'] . "' WHERE id='" . $_POST['id'] . "'");
echo "<script type='text/javascript'>";
echo "alert('บันทึกข้อมูลเรียบร้อย !');";
echo "window.location='index1.php';";
echo "</script>";
}
$result = mysqli_query($connect , "SELECT * FROM Datachild WHERE id ='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>devbanban.com</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
body {
  background-color: #E6E6FA;
}
</style>
</head>
<body background = " " > 

     <body>
     
     <div class="container">
     <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6"> <br />
      <h1 align="center"> ฟอร์มแก้ไขข้อมูลเด็ก </h1>
      <hr />

<form name="frmUser" method="post">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-8" align="left">
       <font color="red"> **สามารถกรอกข้อมูลที่จะแก้ไขได้เลย** </font>
       </div>
       </div>
       <div class="form-group" >
        <div class="col-sm-12" align="right"></div>
          <div class="col-sm-5" align="left">
          <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
          </div>
      </div>
       <div class="form-group">
        <div class="col-sm-12" align="left"> รหัสประจำตัวนักเรียน : </div>
          <div class="col-sm-12" align="left">
            <input  name="name" type="text" required class="form-control" value="<?php echo $row['ID_Study']; ?> "/>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> ชื่อ-นามสกุล : </div>
          <div class="col-sm-12" align="left">
            <input  name="name" type="text" required class="form-control" value="<?php echo $row['name']; ?> "/>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> ID Blurtooth : </div>
          <div class="col-sm-12" align="left">
            <input  name="ID_mi" type="text" required class="form-control" value="<?php echo $row['ID_mi']; ?> "/>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> ที่อยู่ : </div>
          <div class="col-sm-12" align="left">
            <input  name="address" type="text" required class="form-control" value="<?php echo $row['address']; ?> "/>
          </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> สถานะเด็ก: </div>
          <div class="col-sm-12" align="left">
            <input  name="state" type="text" required class="form-control" value="<?php echo $row['state']; ?> "/>
          </div>
      </div>

          
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <h5 align="left"><button class="btn-success btn"type="Submit" name="save" value="submit">บันทึกข้อมูล</button>&nbsp;&nbsp;</h5>
          <br>
            
            <ul class="pager">
            <li class="previous"><a href="Home.php">กลับหน้าหลัก</a></li>
            <li class="next"><a href="indexdatachild.php">ข้อมูลเด็ก</a></li>
            </ul>
          </div>          
      </div>
      </form>
</body>

</html>

