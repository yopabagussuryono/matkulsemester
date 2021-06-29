<?php 
  session_start();
  error_reporting(0);
  include 'config.php';
  if(!isset($_SESSION['username']))
{
    echo "<script>alert('anda harus login');</script>";
    echo "<script>location='login.php';</script>";
    header('location:login.php');
    exit();
}
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
     <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>							
					<li>
                        <a  href='index.php'><i class='fa fa-home fa-3x'></i>Home</a>
                    </li>					
                    <li>
                        <a  href='index.php?halaman=Visimisi'><i class='fa fa-star fa-3x'></i>Visi Misi</a>
                    </li>
					<li>
                        <a  href='index.php?halaman=Dosen'><i class='fa fa-user fa-3x'></i> Data Dosen</a>
                    </li>
					<li>
                        <a  href='index.php?halaman=Kurikulum'><i class='fa fa-pencil fa-3x'></i> Kurikulum</a>
                    </li>
                    <li>
                        <a  href='index.php?halaman=Capaian'><i class='fa fa-folder-open fa-3x'></i> Capaian pembelajaran</a>
                    </li>
                    <li>
                        <a  href='index.php?halaman=Plulusan'><i class='fa fa-file fa-3x'></i> Profil Lulusan</a>
                    </li>
					<li>
                        <a  href='index.php?halaman=Admin'><i class='fa fa-plus fa-3x'></i> Tambah User</a>
                    </li>                                        		
                </ul>              
            </div>         
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
					<?php
					
					if(isset($_GET['halaman']))
					{ 
						if($_GET['halaman']=="Visimisi")
						{
						include 'Visimisi.php';
						}
						elseif ($_GET['halaman']=="Dosen")
						{
							include 'Dosen.php';
						}
						elseif ($_GET['halaman']=="Kurikulum")
						{
							include 'Kurikulum.php';
						}
						elseif ($_GET['halaman']=="Admin")
						{
							include 'Admin.php';
						}
						elseif ($_GET['halaman']=="semester1")
						{
							include 'semester1.php';
						}
						elseif ($_GET['halaman']=="semester2")
						{
							include 'semester2.php';
						}
						elseif ($_GET['halaman']=="semester3")
						{
							include 'semester3.php';
						}
						elseif ($_GET['halaman']=="semester4")
						{
							include 'semester4.php';
						}
						elseif ($_GET['halaman']=="semester5")
						{
							include 'semester5.php';
						}
						elseif ($_GET['halaman']=="semester6")
						{
							include 'semester6.php';
						}
						elseif ($_GET['halaman']=="semester7")
						{
							include 'semester7.php';
						}
						elseif ($_GET['halaman']=="semester8")
						{
							include 'semester8.php';
						}
						elseif ($_GET['halaman']=="pilihan")
						{
							include 'pilihan.php';
						}
						elseif ($_GET['halaman']=="View")
						{
							include 'View.php';
                        }
                        elseif ($_GET['halaman']=="Capaian")
						{
							include 'Capaian.php';
                        }
                        elseif ($_GET['halaman']=="Plulusan")
						{
							include 'Plulusan.php';
						}
					}
					else
					{
						include 'Homeadmin.php';
					}
					
					?>                      
                    </div>
                </div>
                 <hr />
    </div>
            </div>
        </div>
    <script src="assets/js/jquery-1.10.2.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.metisMenu.js"></script>
    <script src="assets/js/custom.js"></script>
     
</body>
</html>
