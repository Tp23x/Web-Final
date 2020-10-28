<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">ระบบติดตามเด็ก</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
    <div>
        <style>
        body {margin: 0;}

        ul.sidenav {
        list-style-type: none;
        margin: 0;
        padding: 0;
        width: 20%;
        background-color: #f1f1f1;
        position: fixed;
        height: 100%;   
        overflow: auto;
        }

        ul.sidenav li a {
        display: block;
        color: #000;
        padding: 8px 16px;
        text-decoration: none;
        }
        
        ul.sidenav li a.active {
        background-color: #4CAF50;
        color: white;
        }

        ul.sidenav li a:hover:not(.active) {
        background-color: #555;
        color: white;
        }

        div.content {
        margin-left: 25%;
        padding: 1px 16px;
        height: 1000px;
        }

        @media screen and (max-width: 900px) {
        ul.sidenav {
            width: 100%;
            height: auto;
            position: relative;
        }
        
        ul.sidenav li a {
            float: left;
            padding: 15px;
        }
        
        div.content {margin-left: 0;}
        }

        @media screen and (max-width: 400px) {
        ul.sidenav li a {
            text-align: center;
            float: none;
        }
        }
        </style>
        </head>
        <body>

        <ul class="sidenav">
        <ul class="nav nav-pills nav-stacked"> 
        <li><a class="active" href="#home">หน้าหลัก</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ข้อมูลครูเวร/ครูประจำชั้น<span class="caret"></span>
            <ul class="dropdown-menu">
                <li ><a href="#">เพิ่ม-ลดรายชื่อครู</a></li>
                <li><a href="#">แก้ไขรายชื่อครู</a></li>
                <li><a href="indexdatateacher.php">ดูข้อมูลครูทั้งหมด</a></li>
            </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ข้อมูลเด็กนักเรียน<span class="caret"></span>
            <ul class="dropdown-menu">
                <li><a href="#">เพิ่ม-ลดรายชื่อเด็กนักเรียน</a></li>
                <li><a href="#">แก้ไขรายชื่อเด็กนักเรียน</a></li>
                <li><a href="indexdatachild.php">ดูข้อมูลเด็กนักเรียนทั้งหมด</a></li>
            </ul>
        </li>

        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">ข้อมูลคนขับรถ<span class="caret"></span>
            <ul class="dropdown-menu">
                <li><a href="#">เพิ่ม-ลดรายชื่อคนขับรถ</a></li>
                <li><a href="#">แก้ไขรายชื่อคนขับรถ</a></li>
                <li><a href="indexdatadriver.php">ดูข้อมูลคนขับรถ</a></li>
            </ul>
        </li>

        <ul class="nav nav-pills nav-stacked"> 
        <li class="active"><a href="#">เส้นทางการเดินรถ</a></li>
        <li class="active"><a href="#">GPS</a></li>
        <li><a href="#contact">ข้อมูลรถ</a></li>
        <li><a href="#about">System</a></li>
        </ul>
     </div>

     <div class="content">
        <h2>ระบบติดตามเด็ก</h2>
        <style>
           background-color: lightgrey;
            width: 300px;
            border: 15px solid green;
            padding: 50px;
            margin: 20px;
        </style>
     </div>


</body>
</html>
