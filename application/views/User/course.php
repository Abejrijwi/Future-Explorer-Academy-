<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    



<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">Course List</h1>
                    <div class="breadcrumbs float-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Course List</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="courses-wrapper col-lg-8 col-md-7 col-12">           
                            <div class="featured-courses tabbed-info page-row">             
                                <ul class="nav nav-tabs">
                                  <li class="nav-item"><a class="nav-link active" href="#tab1" data-toggle="tab">Featured</a></li>
                                  <li class="nav-item"><a class="nav-link" href="#tab2" data-toggle="tab">Popular</a></li>
                                  <li class="nav-item"><a class="nav-link" href="#tab3" data-toggle="tab">New</a></li>
                                </ul>
                                <div class="tab-content">
                                  <div class="tab-pane active" id="tab1">
                                      <div class="row">
                                          <div class="item col-lg-3 col-6">

                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-1.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Web Design</a></p>
                                          </div><!--//item-->
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-2.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">ML</a></p>
                                          </div><!--//item-->
                                          <div class="clearfix visible-xs"></div>
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-3.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Digital Marketing</a></p>
                                          </div><!--//item-->
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-4.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Accounting</a></p>
                                          </div><!--//item-->
                                      </div><!--//row-->
                                  </div>

                                  <div class="tab-pane" id="tab2">
                                      <div class="row">
                                          <div class="item col-lg-3 col-6">

                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-1.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Web Design</a></p>
                                          </div><!--//item-->
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-2.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">ML</a></p>
                                          </div><!--//item-->
                                          <div class="clearfix visible-xs"></div>
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-3.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Digital Marketing</a></p>
                                          </div><!--//item-->
                                      </div><!--//row-->
                                  </div>

                                  
                                  <div class="tab-pane" id="tab3">
                                      <div class="row">
                                          <div class="item col-lg-3 col-6">

                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-1.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">Web Design</a></p>
                                          </div><!--//item-->
                                          <div class="item col-lg-3 col-6">
                                              <img class="img-fluid" src="<?php echo base_url("public/assets/images/courses/course-thumb-2.jpg");?>"  alt="" />
                                              <p class="text-center"><a href="#">ML</a></p>
                                          </div><!--//item-->
                                      </div><!--//row-->
                                  </div>
                                </div>
                            </div><!--//featured-courses-->


                           <div class="course-list-header box clearfix">
                                <div class="summary float-left"><strong>2</strong> offline courses | <!-- <strong>68</strong> online courses --></div>
                              <!--   <div class="sort float-right">                                
                                    <label class="control-label float-left">Sort by: </label>
                                    <select class="sort-options form-control float-left">
                                        <option>Start date</option>
                                        <option>Duration</option>
                                        <option>Level</option>
                                    </select>    -->                               
                                <!-- </div>//sort -->
                            </div><!--//course-list-header-->   
                            <div class="course-item-header row-divider d-none d-lg-block">
                                <div class="row">
                                    <div class="col-title col-lg-4 col-md-6"><strong>Course name</strong></div>
                                    <div class="col-meta col-lg-8 col-md-6">
                                        <div class="row">
                                            <div class="col-start col-lg-3"><strong>Starting Date</strong></div>
                                            <div class="col-duration col-lg-2"><strong>Durection</strong></div>
                                            <div class="col-level col-lg-3"><strong>Level</strong></div>
                                            <div class="col-location col-lg-4"><strong>Registration</strong></div>   
                                        </div>                                 
                                    </div><!--//col-meta-->    
                                </div><!---//row-->                            
                            </div><!--//course-item-header-->  


                            <?php
                               foreach($cours as $row)
                                
                            {?>


<!-- <span class="badge badge-success">New</span> -->

                            <article class="course-item row-divider">   
                                <div class="details row">
                                    <div class="col-title col-lg-4 col-md-6 col-12"><a href=""><?php echo $row->c_name ?></a> </div>
                                    <div class="col-meta col-lg-8 col-md-6 col-12">
                                        <div class="row">
                                            <div class="col-start col-md-3"><?php echo $row->s_date ?></div>                                    
                                            <div class="col-duration col-md-2"><?php echo $row->c_duration ?> -Year </div>
                                            <div class="col-level col-md-3"><?php echo $row->c_level ?></div>
                                            
                                             <div class="col-level col-md-3"><a class="text-danger" href="<?php echo site_url('User/payment/'.$row->c_name.'/'.$row->fee);?>">Enroll</a></div>
                                            
                                            
                                          
                                          
                                          
                                        </div>                                 
                                    </div><!--//col-meta-->                           
                                </div><!--//details-->
                            </article><!--//course-item-->

                            <?php 
                                }
                            ?>
<!-- 
                             <nav class="pagination-container text-center">
                                <ul class="pagination">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" arial-label="previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1<span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li> -->
                                <!-- </ul>//pagination -->
                            <!-- </nav>                                               -->
                        </div><!--//courses-wrapper-->



                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">  
                            <!--<section class="widget has-divider"> -->
                            <!--    <h3 class="title p-2">Apply Online</h3>-->
                            <!--    <p class="p-2">Web development.</p>-->
                            <!--    <p class="promo-badge">-->
                            <!--        <a class="FireBush" href="#">-->
                            <!--            <span class="percentage">20% <span class="off">OFF</span></span>                    -->
                            <!--            <br>-->
                            <!--            <span class="desc p-2">Online application</span>                  -->
                            <!--        </a>-->
                            <!--    </p>-->
                            <!--</section><!--//widget--> 
                            <section class="widget has-divider">
                                <h3 class="title p-2">Download Sylabus</h3>
                                <p class="p-2">Download prospectus online for BCA, MCA, BBA and Certificate courses.</p>
                                <a class="btn btn-theme" href="#"><i class="fa fa-download"></i>Download now</a>
                            </section><!--//widget-->   


                        <section class="testimonials">
                        <h1 class="section-heading text-highlight"><span class="line"> Testimonials</span></h1>
                        <div class="carousel-controls">
                            <a class="prev" href="#testimonials-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                            <a class="next" href="#testimonials-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                        </div><!--//carousel-controls-->


                        <div class="section-content">
                            <div id="testimonials-carousel" class="testimonials-carousel carousel slide">
                                <div class="carousel-inner">

                                    <div class="carousel-item item active">
                                        <blockquote class="quote">                                  
                                            <p><i class="fas fa-quote-left"></i> If I were to describe my experience in one word, I would simply say PERFECT. Observing myself before & after doing this course with Vinit bhaiya, Now I am very confident. Now I know how exactly to proceed with a given problem. I would seriously recommend you to join the course..</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Ranjan Mishra </span><br /><span class="title">BCA, Patna</span></p>
                                           <img class="profile" src="<?php echo base_url("public/assets/images/testimonials/1.jpeg");?>"  alt="" />
                                        </div>                               
                                    </div><!--//item-->

                                            <?php
                                                foreach($testnomil as $row)
                                            {?>

                                            <div class="carousel-item item">
                                                <blockquote class="quote">
                                                    <p><i class="fas fa-quote-left"></i>
                                                    <?php echo $row->content?></p>
                                                </blockquote>
                                                <div class="source">
                                                    <p class="people"><span class="name"><?php echo $row->name ?></span><br /><span class="title"><?php echo $row->add ?></span></p>
                                                    <!-- <img class="profile" src="https://vinitkumar.in/img.png"  alt="" /> -->
                                                </div>   

                                            </div><!--//item-->

                                            <?php 
                                                }
                                            ?>  
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->
  


                          
                             
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->