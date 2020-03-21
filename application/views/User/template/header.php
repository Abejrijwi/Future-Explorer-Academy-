<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Future Explorer Academy</title>
    <meta charset="utf-8">
    <meta name="description" content="The Future Explorers Academy of Patna, India offers multiple training schedules to meet our student’s needs. Most of our students already have careers, work obligations, children etc., and our software training classes are designed to work well within these lifestyles.">
    <meta name="keywords" content="Web,c,java,python,ML,patnabest,biharbest,programmingclasses,computerclasses,web-developer">
    <meta name="author" content="A.S Suman Sir"> 	
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	
    
     
     
     
    
    <link rel="shortcut icon" href="<?php echo base_url("public/assets/favicon.ico");?>">  
    <script src="https://kit.fontawesome.com/3a2f2a9574.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/assets/plugins/bootstrap/css/bootstrap.min.css">   
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/assets/plugins/flexslider/flexslider.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/public/assets/css/theme-1.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head> 


<body class="home-page">
    <div class="wrapper">
        <!-- ******HEADER****** --> 
        <header class="header">  
            <div class="top-bar">
                <div class="container">     
	                <div class="row">   
	                    <ul class="social-icons col-md-6 col-12 d-none d-md-block">
	                        <li><a href="#" ><i class="fab fa-twitter"></i></a></li>
	                        <li><a href="#" ><i class="fab fa-facebook-f"></i></a></li>
	                        <li><a href="#" ><i class="fab fa-youtube"></i></a></li>
	                        <li><a href="#" ><i class="fab fa-linkedin-in"></i></a></li>
	                        <li><a href="#" ><i class="fab fa-google-plus-g"></i></a></li>         
	                        <li class="row-end"><a href="#" ><i class="fas fa-rss"></i></a></li>             
	                    </ul><!--//social-icons-->
	                    <form class="col-md-6 col-12 search-form" role="search">
	                        <div class="form-group">
	                            <input type="text" class="form-control" placeholder="Search the site...">
	                        </div>
	                        <button type="submit" class="btn btn-theme">Go</button>
	                    </form>    
	                </div><!--//row-->     
                </div>      
            </div><!--//to-bar-->
            <div class="header-main container">
	            <div class="row">
	                <h1 class="logo col-md-4 col-12">
	                    <a href="#"><img id="logo" src="<?php echo base_url("public/assets/images/mainlog.png");?>" alt="Logo"></a>
	                </h1><!--//logo-->           
	                <div class="info col-md-8 col-12">
	                    <ul class="menu-top float-right d-none d-md-block">
	                        <li class="divider"><a href="<?php echo site_url('User');?>">Home</a></li>
	                        <li class="divider"><a href="#">FAQ</a></li>
	                        <li><a href="<?php echo site_url('User/contact');?>">Contact</a></li>
	                    </ul><!--//menu-top-->
	                    <br />
	                    <div class="contact float-right">
	                        <p class="phone"><i class="fas fa-phone p-2"></i>Call us today +91 9334 640 356</p> 
	                        <p class="email"><a href="#"><i class="fas fa-envelope p-2"></i>info@feacademy.in</a></p>
	                    </div><!--//contact-->
	                </div><!--//info-->
	            </div><!--//row-->
            </div><!--//header-main-->
        </header><!--//header-->
        
        <!-- ******NAV****** -->
        <div class="main-nav-wrapper">
            <div class="container">
	            <nav class="main-nav  navbar navbar-expand-md " data-spy="affix" role="navigation">    
	                <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbar-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button><!--//nav-toggle-->
	                          
	                <div class="navbar-collapse collapse " id="navbar-collapse">
	                    <ul class="nav navbar-nav">
	                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('User');?>">Home</a></li>
	                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('User/course');?>">Courses</a></li>
	                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('User/about');?>">About</a></li>
	                        <li class="nav-item"><a class="nav-link" href="#">Event</a></li>
	                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('User/team');?>">Team</a></li>
	                        <li class="nav-item dropdown">
	                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown-2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">News <i class="fas fa-angle-down"></i></a>
	                            <div class="dropdown-menu" aria-labelledby="navbarDropdown-2">
	                                <a class="dropdown-item" href="#">Batch Details</a>
	                                <a class="dropdown-item" href="#">Starting batch</a>   
	                                <a class="dropdown-item" href="#">Seminar</a>         
	                            </div>
	                        </li>
	                        
	                        <li class="nav-item dropdown">
	                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false" href="#">Student <i class="fas fa-angle-down"></i></a>
	                            <div class="dropdown-menu">
	                                <a class="dropdown-item" href="#">Notice</a>
	                                <a class="dropdown-item" href="<?php echo site_url('User/gallery');?>">Gallery</a>
	                                <a class="dropdown-item" href="#">Jobs</a>
	                                <a class="dropdown-item" href="<?php echo site_url('User/question');?>">Question</a>
	                                <a class="dropdown-item" href="#">Certficate</a>
	                                <a class="dropdown-item" href="<?php echo site_url('User/student_accv');?>">Online Training</a> 
	                                <a class="dropdown-item" href="<?php echo site_url('User/feedback');?>">feedback</a>                   
	                            </div><!--//dropdown-menu-->
	                        </li><!--//dropdown-->
	                        
	                        <li class="nav-item"><a class="nav-link" href="<?php echo site_url('User/contact');?>">Contact Us</a></li>
	                    </ul><!--//nav-->
	                </div><!--//navabr-collapse-->
	            
		        </nav><!--//main-nav-->
	        </div><!--//container-->
        </div><!--//main-nav-container-->


