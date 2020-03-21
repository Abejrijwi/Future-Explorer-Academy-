<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    

<!-- ******CONTENT****** --> 
        <div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <li>
                        <img src="<?php echo base_url("public/assets/images/slides/v10.jpg");?>">
                        <!-- <img src="assets/images/slides/slide-1.jpg"  alt="" /> -->
                       <!--  <p class="flex-caption">
                            <span class="main" >Join FE Academy</span>
                            <br />
                            <span class="secondary clearfix" >Education is the most powerful weapon which you can use to change the world. </span>
                        </p> -->
                    </li>
                    <li>
                        <img src="<?php echo base_url("public/assets/images/slides/v3.jpg");?>">
                        
                       <!--  <p class="flex-caption">
                            <span class="main" >Come to our Academy</span>
                            <br />
                            <span class="secondary clearfix" >I think everybody in this country should learn how to program a computer because it teaches you how to think.</span>
                        </p> -->
                    </li>
                    <li>
                        <img src="<?php echo base_url("public/assets/images/slides/v8.jpg");?>">
                       <!--  
                        <p class="flex-caption">
                            <span class="main" >Discover online courses</span>
                            <br />
                            <span class="secondary clearfix" >Education is the most powerful weapon which you can use to change the world</span>
                        </p> -->
                    </li>
                    <li>
                        <img src="<?php echo base_url("public/assets/images/slides/v7.jpg");?>">
                      
                       <!--  <p class="flex-caption">
                            <span class="main" >Online Tranning</span>
                            <br />
                            <span class="secondary clearfix" >Education is the most powerful weapon which you can use to change the world</span>
                        </p> -->
                    </li>
                </ul><!--//slides-->
            </div><!--//flexslider-->
            <!-- message -->
            <?php
                if ($this->session->flashdata('registratio_suss')) {
            ?>
                    <div id="successMessage" class="alert alert-success " role="alert">
                        <?php echo $this->session->flashdata('registratio_suss'); ?>
                    </div>                
                    <div class="clearfix"></div>
            <?php
                 }
            ?>
            <!-- end Mesage -->


                 
            <?php
                if ($this->session->flashdata('susb_send')) {
            ?>
                <div id="sscribeMessage" class="alert alert-warning " role="alert">
                    <?php echo $this->session->flashdata('susb_send'); ?>
                </div>                
                <div class="clearfix"></div>
            <?php
                 }
            ?>
            <!-- end Mesage -->


            <section class="promo box box-dark">     
                <div class="row">  
                    <div class="col-lg-9 col-12">
                    <h1 class="section-heading">Why Future Explorer Academy</h1>
                        <p>The Future Explorers Academy of Patna, India offers multiple training schedules to meet our student’s needs. Most of our students already have careers, work obligations, children etc., and our software training classes are designed to work well within these lifestyles.  </p>   
                    </div>  
                    <div class="col-lg-3 col-12">
                        <a class="btn btn-cta" data-toggle="modal" data-target="#myModal" href="#"><i class="fas fa-play-circle"></i>Apply Now</a>  
                    </div>
                </div><!--//row-->
            </section><!--//promo-->
            <section class="news">
                <h1 class="section-heading text-highlight"><span class="line">Computer Courses We Offer </span></h1>     
                <div class="carousel-controls">
                    <a class="prev" href="#news-carousel" data-slide="prev"><i class="fas fa-caret-left"></i></a>
                    <a class="next" href="#news-carousel" data-slide="next"><i class="fas fa-caret-right"></i></a>
                </div><!--//carousel-controls--> 
                <div class="section-content clearfix">
                    <div id="news-carousel" class="news-carousel carousel slide">
                        <div class="carousel-inner">


                            <div class="item carousel-item active"> 
                                <div class="row">
                                    <div class="col-lg-4 col-12 news-item">
                                        <h2 class="title"><a href="#" class="text-info">Web Designing & Development Courses</a></h2>
                                        <img class="thumb" src="<?php echo base_url("public/assets/images/pro/lg.png");?>">

                                        <p>Learn to create and maintain responsive Web pages. E-Commerce website using powerful tools like Html Css , Php , Mysql and more..</p>
                                      <!--   <a class="read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a>     -->            
                                    </div><!--//news-item-->
                                    <div class="col-lg-4 col-12 news-item">
                                        <h2 class="title"><a href="#" class="text-info">Software Programming Courses</a></h2>
                                        <p>Learn to write, maintain and debug code by using key features of object oriented programming Languages..</p>
                                        <!-- <a class="read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a> -->
                                        <img class="thumb" src="<?php echo base_url("public/assets/images/pro/lg.png");?>">
                                    </div><!--//news-item-->
                                    <div class="col-lg-4 col-12 news-item">
                                        <h2 class="title "><a href="#" class="text-info">Digital Marketing Courses </a></h2>
                                        <p>Get Google and YouTube certified. The Digital Marketing Courses content covers a comprehensive syllabus of over 21+ modules , live projects and assignments.</p>
                                        <!-- <a class="read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a> -->
                                        <img class="thumb" src="<?php echo base_url("public/assets/images/pro/lg.png");?>">
                                    </div><!--//news-item-->
                                </div><!--//row-->
                            </div><!--//item-->

                         
                            <div class="item carousel-item "> 
                                <div class="row">

                            <?php
                                foreach($tran as $row)
                            {?>

                                    <div class="col-lg-4 col-12 news-item">
                                        <h2 class="title"><a href="#" class="text-info"><?php echo $row->title?></a></h2>
                                        <img class="thumb" src="<?php echo base_url("public/assets/images/pro/lg.png");?>">
                                        <p>Suspendisse purus felis, porttitor quis sollicitudin sit amet, elementum et tortor. Praesent lacinia magna in malesuada vestibulum. Pellentesque urna libero.</p>
                                        <!-- <a class="read-more" href="news-single.html">Read more<i class="fas fa-chevron-right"></i></a> -->                
                                    </div><!--//news-item-->
                             <?php 
                                }
                            ?>
                                </div><!--//row-->
                            </div><!--//item-->

                            



                        </div><!--//carousel-inner-->
                    </div><!--//news-carousel-->  
                </div><!--//section-content-->     
            </section><!--//news-->
            <div class="row cols-wrapper">
                <div class="col-lg-3 col-12">
                    <section class="events">
                        <h1 class="section-heading text-highlight"><span class="line">Batch </span></h1>
                        <div class="section-content">



                            <?php
                                foreach($cours as $row)
                            {?>

                            <div class="event-item">
                                <p class="date-label">
                                
                                    <span class="month"><?php  $date = strtotime($row->s_date); echo date('M', $date); ?></span>
                                    <span class="date-number"><?php  $date = strtotime($row->s_date); echo date('j', $date); ?></span>
                                    
                                </p>
                                <div class="details">
                                    <h2 class="title text-info"><?php echo $row->c_name ?></h2>
                                    <p class="time"><i class="far fa-clock"></i><?php echo $row->c_level ?></p>
                                    <p class="location"><i class="fas fa-map-marker-alt"></i><?php echo $row->s_cmps ?></p>
                                    <a class="text-danger" href="<?php echo site_url('User/payment/'.$row->c_name.'/'.$row->fee);?>">Course Enrollment</a>
                                    <!--<a class="text-danger" href="<?php echo site_url('User/payment/'.$row->name.'/'.$row->fee);?>">Course Enrollment</a>-->
                                     <!--<a class="text-danger" href="">Course Enrollment</a>-->
                                </div>
                            </div> 

                              <?php 
                                        }
                                    ?>
                        <a class="read-more" href="<?php echo site_url('User/course');?>">All Batch<i class="fas fa-chevron-right"></i></a>
                        </div><!--//section-content-->

                    </section><!--//events-->

                </div><!--//col-md-3-->
                <div class="col-lg-6 col-12">
                     <section class="links">
                        <h1 class="section-heading text-highlight"><span class="line">Feature</span></h1>
                        <div class="section-content">
                            <img class="img-fluid" src="<?php echo base_url("public/assets/images/sys.jpg");?>"  alt="" />  
                             <p class="description">"FEA is having 14+ years of experince in software training industry and the best Software Training Institute for online training, classroom training, weekend training, corporate training of Hadoop, Salesforce, AWS, DevOps, Spark, Data Science, Python, Tableau, RPA ,Java, C#.NET, ASP.NET, Oracle, Testing Tools, Silver light, Linq, SQL Server, Selenium, Android, iPhone, C Language, C++, PHP in India which provides online training acorss all the locations </p>
                        </div><!--//section-content-->
                    </section><!--//links-->
                </div>


                <div class="col-lg-3 col-12">
                    <section class="links">
                        <h1 class="section-heading text-highlight"><span class="line">Quick Links</span></h1>
                        <div class="section-content">
                            
                            <p><a href="<?php echo site_url('User/project');?>"><i class="fas fa-caret-right"></i>E-learning Portal</a></p>
                            <p><a href="#"><i class="fas fa-caret-right"></i>Gallery</a></p>
                            <p><a href="<?php echo site_url('User/student_accv');?>"><i class="fas fa-caret-right"></i>Create Account</a></p>
                            <p><a href="#"><i class="fas fa-caret-right"></i>Contact</a></p>
                        </div><!--//section-content-->
                    </section><!--//links-->


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
                                            <p><i class="fas fa-quote-left"></i> If I were to describe my experience in one word, I would simply say PERFECT. Observing myself before & after doing this course with Vinit bhaiya, Now I am very confident. Now I know how exactly to proceed with a given problem. I would seriously recommend you to join the course.</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Ranjan Mishra</span><br /><span class="title">BCA, Patna Bihar</span></p>
                                            <img class="profile" src="<?php echo base_url("public/assets/images/testimonials/1.jpeg");?>"  alt="" />
                                        </div>                               
                                    </div><!--//item-->


                                     <div class="carousel-item item ">
                                        <blockquote class="quote">                                  
                                            <p><i class="fas fa-quote-left"></i>I wish I’d come here earlier. This is by far the best decision I’ve made. It gave me the platform to learn so much, to meet new people, and most importantly to develop the approach one needs while coding. The healthy environment here is the best I’ve seen.</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Sudhansu Kumar</span><br /><span class="title">BCA, Patna Bihar</span></p>
                                             <img class="profile" src="<?php echo base_url("public/assets/images/testimonials/v7.jpeg");?>"  alt="" />
                                        </div>                               
                                    </div><!--//item-->


                                     <div class="carousel-item item">
                                        <blockquote class="quote">                                  
                                            <p><i class="fas fa-quote-left"></i>If I were to describe my experience in one word, I would simply say PERFECT. Observing myself before & after doing this course with Deepak bhaiya, Now I am very confident. Now I know how exactly to proceed with a given problem. I would seriously recommend you to join the course..</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Sujeet Kumar</span><br /><span class="title">BCA, Patna Bihar</span></p>
                                            <img class="profile" src="<?php echo base_url("public/assets/images/testimonials/v8.jpeg");?>"  alt="" />
                                        </div>                               
                                    </div><!--//item-->


                                     <div class="carousel-item item">
                                        <blockquote class="quote">                                  
                                            <p><i class="fas fa-quote-left"></i>Its not an institute to learn just “Programming” , But much more. Its a Bond with our mentors , TAs ; just like being part of a family. Infrastructure is good , smart learning , helpful mentors. Online assignments are given , rankings to compete among peers , Most importantly Slack : a platform to ask our Doubts , Sir’s</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Rahul Kumar</span><br /><span class="title">BCA, Patna Bihar</span></p>
                                           <img class="profile" src="<?php echo base_url("public/assets/images/testimonials/v6.jpeg");?>"  alt="" />
                                        </div>                               
                                    </div><!--//item-->

                                         <!--    <?php
                                                foreach($testnomil as $row)
                                            {?>

                                            <div class="carousel-item item">
                                                <blockquote class="quote">
                                                    <p><i class="fas fa-quote-left"></i>
                                                    <?php echo $row->content?></p>
                                                </blockquote>
                                                <div class="source">
                                                    <p class="people"><span class="name"><?php echo $row->name ?></span><br /><span class="title"><?php echo $row->add ?></span></p>
                                                    <img class="profile" src="https://vinitkumar.in/img.png"  alt="" />
                                                </div>   

                                            </div> --><!--//item-->

                                            <!-- <?php 
                                                }
                                            ?>   -->
                                    
                                </div><!--//carousel-inner-->
                            </div><!--//testimonials-carousel-->
                        </div><!--//section-content-->
                    </section><!--//testimonials-->

                </div><!--//col-md-3-->
            </div><!--//cols-wrapper-->
            <section class="awards">
                <div id="awards-carousel" class="awards-carousel carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item item active">
                            <ul class="logos row">
                                
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/6.png");?>"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/5.png");?>"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/3.png");?>"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/py.png");?>"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/v5.png");?>"  alt="" /></a>
                                </li>
                                <li class="col-md-2 col-4">
                                    <a href="#"><img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/3.png");?>"  alt="" /></a>
                                </li>             
                            </ul><!--//slides-->
                        </div><!--//item-->
                        
                        <div class="carousel-item item">
                            <ul class="logos row">
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/6.png");?>"  alt="" />
                                </li>
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/5.png");?>"  alt="" />
                                </li>
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/3.png");?>"  alt="" />
                                </li>
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/py.png");?>"  alt="" />
                                </li>
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/v5.png");?>"  alt="" />
                                </li>
                                <li class="col-md-2 col-4">
                                    <img class="img-fluid" src="<?php echo base_url("public/assets/images/awards/5.png");?>"  alt="" />
                                </li>             
                            </ul><!--//slides-->
                        </div><!--//item-->
                    </div><!--//carousel-inner-->
                    <a class="left carousel-control" href="#awards-carousel" data-slide="prev">
                        <i class="fas fa-angle-left"></i>
                    </a>
                    <a class="right carousel-control" href="#awards-carousel" data-slide="next">
                        <i class="fas fa-angle-right"></i>
                    </a>
        
                </div>
            </section>
        </div><!--//content-->
    </div><!--//wrapper-->

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header text-info">
          <h5 class="modal-title">Student Registration Form</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <!-- Modal body -->
      <form method="POST" action="<?php echo site_url('User/regis_cont'); ?>" enctype="multipart/form-data">
        <div class="modal-body">
       

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Name</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control"  required="" name="user_name" id="name">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Email</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="user_email" id="name">

              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Mobile</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required="" name="user_mobile" id="name">
              </div>
            </div>

            <div class="form-group row">
              <label class="col-sm-2 col-form-label">Courses</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" required=""  name="user_course" id="name">
              </div>
            </div>

             <div class="form-group row">
              <label class="col-sm-2 col-form-label">Student photo</label>
              <div class="col-sm-10">
                <input type="file" class="form-control" required="" name="user_image" id="name">
              </div>
            </div>
          <div class="modal-footer">
          <input type="submit" name="submit"  value="Submit" class="btn btn-success" >
        </div>
      </form>
        
      </div>
    </div>
  </div>
  
</div>

<!-- Onloade Popup Promation Code -->
<div id="popu" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <button type="button" class="close bg-danger" data-dismiss="modal" aria-hidden="true">&times;</button>
                
            </div>
            <div class="modal-body">
                <h3 class ="text-center text-info font-weight-bold"> Today Enroll Python Training </h3>
                <!-- <p>Subscribe to our mailing list to get the latest updates straight in your inbox.</p> -->
                <img class="img-fluid" src="<?php echo base_url("public/assets/images/python.png");?>"  alt="" /><br>
                
                <a class="btn btn-warning btn-lg btn-block" href="<?php echo site_url('User/course');?>">Enroll</a>
                

            </div>
        </div>
    </div>
</div>
<!-- End promotion -->


<script>

    $(document).ready(function(){
        $("#popu").modal('show');
    });

 $(document).ready(function(){
    $("#successMessage").delay(2000).slideUp(200);
});
</script>