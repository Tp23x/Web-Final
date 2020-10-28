<?php session_start(); 
include('condb.php');

  $ID = $_SESSION['ID'];
  $name = $_SESSION['name'];
  $level = $_SESSION['level'];
 	if($level!='admin'){
    Header("Location: ../logout.php");  
  }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #CCCCFF;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h2>หน้าหลัก</h2>
      <body>
	<h5> สวัสดี คุณ <?php echo $name; ?> สถานะ <?php echo $level; ?> </h5>
	</form>
</body>
      <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="index1.php">ข้อมูลเด็กทั้งหมด</a></li>
        <li><a href="insert.php">เพิ่มข้อมูลเด็ก</a></li>
        <li><a href="update1.php">แก้ไขข้อมูลเด็ก</a></li>
        
      </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
        <br>
      </div>
      <form action="logout.php">
	      <input type="submit" value="ออกจากระบบ">
    </div>

    <div class="col-sm-9">
      <h1><small>"WELCOME"</small></h1>
      <hr>
      <h2>Care Your Heart</h2>
      <h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
      <h5><span class="label label-danger">GPS</span> <span class="label label-primary">Track</span></h5><br>
      <p></p>
      <br><br>
      <img src="11.jpg" class="rounded" alt="Cinque Terre" width="900" height="500"> 
    
      </div>
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
