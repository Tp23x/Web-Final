<html>
<body bgcolor="#ccccff"> 
<?php session_start();?>
<?php
include('h.php');
?>
<style type="text/css">
#btn{
width:100%;
}
</style>
<!DOCTYPE html>
<html lang="en">
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>
    <body bgcolor="#FFCCCC"> 
    <body>
        <div >
             <img src="img/logo.png"  width="225" height="278">
        </div>
        </body>
     <body>   
    <table align="center" width="762">       
        <tr>
            <td>
             <h1>ระบบติดตามตำแหน่งเด็กนักเรียนในรถโรงเรียน</h1>    
            </td>
        </tr>
    
    </body>
</html>

<body>
<body>   
    <table align="center" width="762">       
        <tr>
            <td>
             <h1></h1>    
            </td>
        </tr>
    
    </body>

<div class="container" style="padding-top:100px">
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4" style="background-color:#D6EAF8">
      <h3 align="center">
      <span class="glyphicon glyphicon-lock"> </span>
      ผู้ดูแลระบบ</h3>
      <form  name="formlogin" action="checklogin.php" method="POST" id="login" class="form-horizontal">
        <div class="form-group">
          <div class="col-sm-12">
            <input type="text"  name="username" class="form-control" required placeholder="Username" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <input type="password" name="password" class="form-control" required placeholder="Password" />
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-12">
            <button type="submit" class="btn btn-success" id="btn">
            <span class="glyphicon glyphicon-log-in"> </span>
             Login </button>
               <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
               </label>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>