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
                <a class="navbar-brand" href="index.html">Home</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>		
					
					<li>
                        <a  href='user.php'><i class='fa fa-home fa-3x'></i>Home</a>
					</li>
					<li>
                        <a href='user.php?halaman=View'><i class="fa fa-book fa-3x"></i> View User<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href='user.php?halaman=Viewdosen'>Data Dosen</a>
                            </li>
                            <li>
                                <a href='user.php?halaman=Viewcapaian'>Pencapaian Pembelajaran</a>
							</li>
							<li>
                                <a href='user.php?halaman=Viewplulusan'>Profil Lulusan</a>
							</li>
					
						</ul>
					</li>
					<li>
                        <a href='user.php?halaman=Viewmatkul'><i class="fa fa-book fa-3x"></i> View Matakuliah<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href='user.php?halaman=Vpilihan'>pilihan</a>
                            </li>
                            <li>
                                <a href='user.php?halaman=Vsemester1'>Semester 1</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester2'>Semester 2</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester3'>Semester 3</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester4'>Semester 4</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester5'>Semester 5</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester6'>Semester 6</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester7'>Semester 7</a>
							</li>
							<li>
                                <a href='user.php?halaman=Vsemester8'>Semester 8</a>
							</li>
						</ul>
					</li>					                                      		
                </ul>              
            </div>         
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">

                <div class="row">
                    <div class="col-md-12">
					
					<?php
					
					if(isset($_GET['halaman']))
					{ 
						if($_GET['halaman']=="Visimisi")
						{
						include 'Visimisi.php';
						}
						elseif ($_GET['halaman']=="Vsemester1")
						{
							include 'Vsemester1.php';
						}
						elseif ($_GET['halaman']=="Vsemester2")
						{
							include 'Vsemester2.php';
						}
						elseif ($_GET['halaman']=="Vsemester3")
						{
							include 'Vsemester3.php';
						}
						elseif ($_GET['halaman']=="Vsemester4")
						{
							include 'Vsemester4.php';
						}
						elseif ($_GET['halaman']=="Vsemester5")
						{
							include 'Vsemester5.php';
						}
						elseif ($_GET['halaman']=="Vsemester6")
						{
							include 'Vsemester6.php';
						}
						elseif ($_GET['halaman']=="Vsemester7")
						{
							include 'Vsemester7.php';
						}
						elseif ($_GET['halaman']=="Vsemester8")
						{
							include 'Vsemester8.php';
						}
						elseif ($_GET['halaman']=="Vpilihan")
						{
							include 'Vpilihan.php';
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
						elseif ($_GET['halaman']=="Viewdosen")
						{
							include 'Viewdosen.php';
						}
						elseif ($_GET['halaman']=="Viewcapaian")
						{
							include 'Viewcapaian.php';
						}
						elseif ($_GET['halaman']=="Viewplulusan")
						{
							include 'Viewplulusan.php';
						}
						elseif ($_GET['halaman']=="Viewmatkul")
						{
							include 'Viewplulusan.php';
						}
					}
					else
					{
						include 'Homeuser.php';
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
