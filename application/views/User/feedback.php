<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">Feedback</h1>
                </header> 
                <p class="">Add a Comment about the quality of education</p>
                <div class="page-content">                 
                    <div class="row page-row">                 
                        <div class="team-wrapper col-lg-8 col-md-7 col-12">    
                            <form method="POST" action="<?php echo site_url('User/feedback_page'); ?>" enctype="multipart/form-data">      
                                <div class="mb-4">
                                  
                                      <div class="form-group row">
                                        <label class="col-sm-4 col-form-label col-form-label-sm">Enter Your Name :</label>
                                        <div class="col-sm-8">
                                          <input type="text" name="name" class="form-control form-control-sm">
                                        </div>
                                      </div>
                                  <textarea class="form-control" name="comment"  placeholder="Add a Comment about the quality of education" rows="4"  required></textarea><br>
                                    <div class=" text-right">
                                    <input class="btn btn-success btn-sm" type="submit" name="submit" value="Comment">
                                  </div>
                                </div>
                            </form>

                    <?php foreach ($feedback as $row)
                            {
                    ?>
                    <div class="media">
                    <img src="<?php echo base_url("public/assets/images/feed.png");?>" style="wdith:70px;height:70px;">
                    <div class="media-body p-1">
                      <h5 class="mt-0"><?php echo $row->name; ?></h5>
                         <small><?php echo $row->date ?></small>
                         <p><?php echo $row->message; ?></p>
                    </div>
                  </div><br>
                 <?php      
                      }
                   ?>  
                           
        </div><!--//team-wrapper-->
        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">  
                           
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
                                            <p><i class="fas fa-quote-left"></i>I'm delighted commodo gravida ultrices. Sed massa leo, aliquet non velit eu, volutpat vulputate odio. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse porttitor metus eros, ut fringilla nulla auctor a.</p>
                                        </blockquote>                
                                        <div class="source">
                                            <p class="people"><span class="name">Vinit Kumar </span><br /><span class="title">Patna</span></p>
                                            <img class="profile" src="https://vinitkumar.in/img.png"  alt="" />
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