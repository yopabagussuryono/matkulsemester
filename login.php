<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br/><br/>
                <h3>Sekolah Tinggi Teknologi Adisutjipto</h3>
                <br/>
                <img src="stta.png" width="100px" height="90px">
                 <br /><br/>
            </div>
        </div>
    <div class="row ">
       <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
          <div class="panel panel-default">
            <div class="panel-heading">
        <strong>  Masukkan Details Untuk Login </strong>  
          </div>
           <div class="panel-body">
            <form role="form" method="POST" action="plogin.php">
           <br />
            <div class="form-group input-group">
          <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
          <input type="text" class="form-control" name="username" placeholder="Masukkan Username" />
               </div>
                 <div class="form-group input-group">
               <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                <input type="password" class="form-control" name="password" placeholder ="Masukkan Password" />
                  </div>
                  <div class="form-group">
                    <label class="checkbox-inline">
                </label>
                 <span class="pull-right">
               </span>
                </div>
                 <button class="btn btn-primary" name="login">Login </button>
                    <hr /> 
                      </form>
                </div>          
                </div>
            </div>    
        </div>
    </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
