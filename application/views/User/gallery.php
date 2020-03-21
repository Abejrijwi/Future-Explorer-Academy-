<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


<!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">Gallery</h1>
                    <div class="breadcrumbs float-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fas fa-angle-right"></i></li>
                            <li class="current">Gallery</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">    
                    <div class="page-row">
                        <p>If you're looking for a user friendly and feature rich plugin to add responsive galleries and albums to your website, Photo Gallery plugin can be the best option for ...</p>    
                        <p class="page-row text-muted">Image credit: <a href="http://www.flickr.com/photos/francisco_osorio/" target="_blank">FEA</a>, <a href="http://creativecommons.org/licenses/by/2.0/deed.en" target="_blank">Student</a></p>
                    </div>


                    <div class="row page-row">

                        <?php
                              
                            foreach($gallery as $row)
                        {?>
                            
                            <div class="col-md-6 col-12 text-center">
                                <div class="album-cover">
                                    <img class="img-fluid" src="<?php echo base_url('./public/uploads/gallery/').'/'. $row->uplode_file ?>" alt="images" />
                                    <div class="desc">
                                        <h4><small><a href="#"><?php echo $row->event ; ?></a></small></h4>
                                        <p><?php echo $row->event ; ?></p>
                                    </div>
                                </div>
                            </div>
                                
                        <?php 
                               
                            }
                        ?>
                        
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->