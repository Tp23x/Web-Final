<meta charset= "utf-8">
<title>INSERT</title>
    <?php
        include('connectchild.php');
        if(isset($_POST['save'])){
            $name =$_POST['name'];
            $ID_mi =$_POST['ID_mi'];
            $address =$_POST['address'];
            $state =$_POST['state'];
          

            $sql= "INSERT INTO Datachild (name,ID_mi,address,state)
            VALUE ('$name','$ID_mi','$address','$state')";
                if(mysqli_query($connect,$sql)){
                    echo "new record create successfully ";
                }else{
                    echo "error : " . $sql . "
                    " .mysqli_error($connect);
                }mysqli_close($connect);  
        }
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
      <h1 align="center"> ฟอร์มเพิ่มข้อมูลเด็ก </h1>
      <hr />
     <form  name="addproduct" action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
        <div class="col-sm-12" align="left">ชื่อ-นามสกุล</div>
          <div class="col-sm-12" align="left">
        <input type="text"class ="form-control" name="name">
       </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> ID_Bluetooth  : </div>
          <div class="col-sm-12" align="left">
        <input type="text"class ="form-control" name="ID_mi">
       </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left">ที่อยู่ : </div>
          <div class="col-sm-12" align="left">
        <input type="text"class ="form-control" name="address">
       </div>
      </div>
      <div class="form-group">
        <div class="col-sm-12" align="left"> สถานะ  : </div>
          <div class="col-sm-12" align="left">
        <input type="text"class ="form-control" name="state">
       </div>
      </div>
      

      <br>
        <button class="btn btn-primary" type="Submit" name= "save" value="submit">บันทึกข้อมูล</button>

        </div>
      
    </body>
    
</html>
</body>
<br>

</html>
<ul class="pager">
  <li><a href="Home.php">กลับหน้าหลัก</a></li>
  <li><a href="index1.php">หน้าก่อนหน้า</a></li>
</ul>
