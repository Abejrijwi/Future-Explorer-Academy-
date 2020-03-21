<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    
    

    <!-- ******FOOTER****** --> 
    <footer class="footer">
        <div class="footer-content">
            <div class="container">
                <div class="row">
                <div class="footer-col col-lg-3 col-md-4 col-12 about">
                    <div class="footer-col-inner">
                        <h3>About</h3>
                        <ul>
                            <li><a href="<?php echo site_url('User/about');?>"><i class="fas fa-caret-right"></i>About us</a></li>
                            <li><a href="<?php echo site_url('User/contact');?>"><i class="fas fa-caret-right"></i>Contact us</a></li>
                            <li><a href="<?php echo site_url('Login');?>"><i class="fas fa-caret-right"></i>Admin</a></li>
                            <
                            <li><a href="#"><i class="fas fa-caret-right"></i>Terms & Conditions</a></li>
                        </ul>
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col-->
                <div class="footer-col col-lg-6 col-md-8 col-12 newsletter">
                    <div class="footer-col-inner">
                        <h3>Join our mailing list</h3>
                        <p>Subscribe to get our weekly newsletter delivered directly to your inbox</p>
                        
                            <form class="subscribe-form" method="POST" action="<?php echo site_url('User/susc_us'); ?>" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" required="" placeholder="Enter your email" />
                            </div>
                            <input class="btn btn-theme btn-subscribe" type="Submit" name="submit"  value="Subscribe">
                        </form>
                        
                    </div><!--//footer-col-inner-->
                </div><!--//foooter-col--> 
                <div class="footer-col col-lg-3 col-12 contact">
                    <div class="footer-col-inner">
                        
                        <h3>Contact us</h3>
                        <div class="row">
                            <p class="adr clearfix col-lg-12 col-md-4 col-12">
                                      
                                <span class="adr-group float-left">
                                    <i class="fas fa-map-marker-alt float-left"></i>        
                                    <span class="street-address">Future Explorer Academy</span><br>
                                    <span class="region">B-58 Masjid Road,</span><br>
                                    <span class="region"> Near Ganga Devi Women's College</span><br>
                                    <span class="postal-code">PC Colony,Kankarbagh</span><br>
                                    <span class="country-name">Patna-20 Bihar, India</span>
                                </span>
                            </p>
                            <p class="tel col-lg-12 col-md-4 col-12"><i class="fas fa-phone p-2"></i>+91 9334 640 356</p>
                            <p class="email col-lg-12 col-md-4 col-12"><i class="fas fa-envelope p-2"></i><a href="#">info@feacademy.in</a></p>  
                        </div> 
                    </div><!--//footer-col-inner-->            
                </div><!--//foooter-col-->   
                </div>   
            </div>        
        </div><!--//footer-content-->
        <div class="bottom-bar">
            <div class="container">
                <div class="row">
                    <small class="copyright col-lg-6 col-12">Copyright@2019 Developed  By- Vinit Kumar</small>
                    <ul class="social float-right col-lg-6 col-12">
                        <li><a href="#" ><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#" ><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#" ><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#" ><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="#" ><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="#" ><i class="fab fa-pinterest"></i></a></li>
                        <li><a href="#" ><i class="fab fa-skype"></i></a></li> 
                        <li class="row-end"><a href="#" ><i class="fas fa-rss"></i></a></li>
                    </ul><!--//social-->
                </div><!--//row-->
            </div><!--//container-->
        </div><!--//bottom-bar-->
    </footer><!--//footer-->
   

        <script src="<?php echo base_url('public/assets/plugins/jquery-3.3.1.min.js');?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/popper.min.js');?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/bootstrap/js/bootstrap.min.js');?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/back-to-top.js');?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/flexslider/jquery.flexslider-min.js');?>"></script>
        <script src="<?php echo base_url('public/assets/plugins/jflickrfeed/jflickrfeed.min.js');?>"></script>
        <script src="<?php echo base_url('public/assets/js/main.js');?>"></script> 
</body>
</html> 

