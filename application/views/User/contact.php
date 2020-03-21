<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


  <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">Contact</h1>
                    <div class="breadcrumbs float-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fas fa-angle-right"></i></li>
                            <li class="current">Contact Us</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 

                <div class="page-content">
                    <div class="row">
                        <article class="contact-form col-lg-8 col-md-7  col-12 page-row"> 

                            <?php
                                 if ($this->session->flashdata('contact_message')) {
                            ?>
                                        <div id="successMsg" class="alert bg-info " role="alert">
                                            <?php echo $this->session->flashdata('contact_message'); ?>
                                        </div>                
                                    <div class="clearfix"></div>
                            <?php
                                 }
                            ?>

                            <h3 class="title">Get in touch</h3>
                            <!-- <p>We’d love to hear from you. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ut erat magna. Aliquam porta sem a lacus imperdiet posuere. Integer semper eget ligula id eleifend. </p> -->
                            <form  method="POST" action="<?php echo site_url('User/contact_s_page'); ?>" enctype="multipart/form-data">
                                <div class="form-group name">
                                    <label for="name">Name<span class="required">*</span></label>
                                    <input type="text" name="name"  class="form-control" required="" placeholder="Enter Your name">
                                </div><!--//form-group-->
                                <div class="form-group email">
                                    <label for="email">Email<span class="required">*</span></label>
                                    <input type="email" name="email"class="form-control" required="" placeholder="Enter your email">
                                </div><!--//form-group-->
                                <div class="form-group phone">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="mobile_no" class="form-control" required="" placeholder="Enter your contact number">
                                </div><!--//form-group-->

                                <div class="form-group phone">
                                    <label for="phone">Subject</label>
                                    <input type="text" name="subject" class="form-control" required="" placeholder="Enter your contact number">
                                </div><!--//form-group-->


                                <div class="form-group message">
                                    <label for="message">Message<span class="required">*</span></label>
                                    <textarea type="text" name="message" class="form-control" rows="6" required="" placeholder="Enter your message here..."></textarea>
                                </div><!--//form-group-->
                                <button type="submit" name="Send" class="btn btn-theme">Send message</button>
                            </form>           


                        </article><!--//contact-form-->
                        <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                            <section class="widget has-divider">
                                <h3 class="title p-2">Download Prospectus</h3>
                                <p class="p-2">Download prospectus online for BCA, MCA, BBA and Certificate courses.</p>
                                <a class="btn btn-theme" href="#"><i class="fas fa-download"></i>Download now</a>
                            </section><!--//widget-->   
                            
                            <section class="widget has-divider">
                                <h3 class="title p-2">Postal Address</h3>
                                <p class="adr">
                                    <span class="adr-group">       
                                    <span class="street-address p-2">Future Explorer Academy</span><br>
                                    <span class="region p-2">B-58 Masjid Road,</span><br>
                                    <span class="region p-2"> Near Ganga Devi Women's College</span><br>
                                    <span class="postal-code p-2">PC Colony,Kankarbagh</span><br>
                                    <span class="country-name p-2">Patna-20 Bihar, India</span>
                                    </span>
                                </p>
                            </section><!--//widget-->     
                            
                            <section class="widget">
                                <h3 class="title p-2">All Enquiries</h3>
                                <p class="tel p-2"><i class="fas fa-phone p-2"></i>Tel: +91 9334 640 356</p>
                                <p class="email p-2"><i class="fas fa-envelope p-2"></i>Email: <a href="#">info@feacademy.com</a></p>
                            </section>   
                        </aside><!--//page-sidebar-->
                    </div><!--//page-row-->
                    <div class="page-row">
                        <article class="map-section">
                            <h3 class="title">How to find us</h3>
                            <div class="gmap-wrapper" id="map">
                                <!--//You need to embed your own google map below-->
                                <!--//Ref: https://support.google.com/maps/answer/144361?co=GENIE.Platform%3DDesktop&hl=en -->
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3598.1499431250177!2d85.14904185102203!3d25.599933283630545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed588964db82ed%3A0x7df98d90266541e4!2sFuture+Explorer+Academy!5e0!3m2!1sen!2sin!4v1563963879944!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div><!--//gmap-wrapper-->
                        </article><!--//map-->
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page-wrapper--> 
        </div><!--//content-->
            </div><!--//wrapper-->

<script>

 $(document).ready(function(){
    $("#successMsg").delay(3000).slideUp(800);
});
</script>