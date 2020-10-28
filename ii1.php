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
$dbname = "pharmacy";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_query($conn, "SET NAMES 'utf8' ");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE medicine set M_id='" . $_POST['M_id'] . "', M_name='" . $_POST['M_name'] . "', st_name='" . $_POST['st_name'] . "', 
    Ex_date='" . $_POST['Ex_date'] . "' ,Me_type='" . $_POST['Me_type'] . "',ppt='" . $_POST['ppt'] . "',caution='" . $_POST['caution'] . "' WHERE M_id='" . $_POST['M_id'] . "'");
}
$result = mysqli_query($conn,"SELECT * FROM medicine WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
  <style>
  form {
    width: 100%;
  height: 100%;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
  </style>
<head>
</head>
<body>
<form name="frmUser" method="post">
       <div class="form-group">
       <div class="col-sm-2">  </div>
       <div class="col-sm-5" align="left">
       <font color="red"> **สามารถกรอกข้อมูลที่จะแก้ไขได้เลย** </font>
       </div>
       </div>
       <div class="form-group" >
        <div class="col-sm-2" align="right"></div>
          <div class="col-sm-5" align="left">
          <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
          </div>
      </div>
       <div class="form-group">
        <div class="col-sm-2" align="left"> รหัสยา  : </div>
          <div class="col-sm-4" align="left">
            <input  name="M_id" type="text" required class="form-control" value="<?php echo $row['M_id']; ?> "/>
          </div>
      </div>
        
        <div class="form-group">
        <div class="col-sm-2" align="left"> ชื่อยา  : </div>
          <div class="col-sm-3" align="left"> 
            <input  name="M_name" type="text" required class="form-control" value="<?php echo $row['M_name']; ?>"/>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> ชื่อสารออกฤทธิ์  : </div>
          <div class="col-sm-3" align="left">
            <input  name="st_name" type="text" required class="form-control" value="<?php echo $row['st_name']; ?>"/>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> วันหมดอายุ  : </div>
          <div class="col-sm-5" align="left">
            <input  name="Ex_date" type="text" required class="form-control" value="<?php echo $row['Ex_date']; ?>"/>
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> ประเภทยา  : </div>
          <div class="col-sm-5" align="left">
            <input  name="Me_type" type="text" required class="form-control" value="<?php echo $row['Me_type']; ?>" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> สรรพคุณ  : </div>
          <div class="col-sm-5" align="left">
            <input  name="ppt" type="text" required class="form-control" value="<?php echo $row['ppt']; ?>" />
          </div>
        </div>
        <div class="form-group">
        <div class="col-sm-2" align="left"> ข้อควรระวัง  : </div>
          <div class="col-sm-5" align="left">
            <input  name="caution" type="text" required class="form-control" value="<?php echo $row['caution']; ?>" />
          </div>
        </div>
      <div class="form-group">
      <div class="col-sm-2"> </div>
          <div class="col-sm-6">
          <h5 align="left"><button class="btn-success btn"type="Submit" name="save" value="submit">บันทึกข้อมูล</button>&nbsp;&nbsp;</h5>
          </div>          
      </div>
      </form>
</body>
</html>