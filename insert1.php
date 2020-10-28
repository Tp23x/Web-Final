<meta charset= "utf-8">
<title>INSERT</title>
    <?php
        include('connect.php');
        if(isset($_POST['save'])){
           
            $food_type =$_POST['food_type'];
            $food_name =$_POST['food_name'];
            $food_number =$_POST['food_number'];
            $food_price =$_POST['food_price'];
          

            $sql= "INSERT INTO menufood (food_type, food_name, food_number, food_price)
            VALUE ('$food_type','$food_name ','$food_number','$food_price')";
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
</head>

<body>
<div class="container">
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6"> <br />
      <h4 align="center"> ฟอร์มเพิ่มเมนูอาหาร </h4>
      <hr />
      <form  name="addproduct" action="" method="POST" enctype="multipart/form-data"  class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <p> ประเภทของอาหาร</p>
            <input type="text"  name="food_type" class="form-control" required placeholder="ชื่อประเภท" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <p> ชื่ออาหาร</p>
            <input type="text"  name="food_name" class="form-control" required placeholder="ชื่ออาหาร" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> จำนวน (จาน) </p>
            <input type="number"  name="food_number" class="form-control" required placeholder="จำนวน" />
          </div>
        <div class="form-group">
          <div class="col-sm-3">
            <p> ราคา (บาท) </p>
            <input type="number"  name="food_price" class="form-control" required placeholder="ราคา" />
          </div>
         
        
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-primary" name="btnadd"> + เพิ่มสินค้า </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<p align="center"> กรุณากรอกข้อมูลทุกช่อง </p>
</body>
</html>