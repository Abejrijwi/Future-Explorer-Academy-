<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>    


  <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left">Create Online Training Account</h1>
                    <div class="breadcrumbs float-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.html">Home</a><i class="fas fa-angle-right"></i></li>
                            <li class="current">Create Online Training Account</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 

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


    <form  method="POST" action="<?php echo site_url('User/online_regis_cont'); ?>" enctype='multipart/form-data'>
    <div class="page-content">
        <div class="row">
            <article class="contact-form col-lg-6 col-md-6  col-12 page-row">   



                     
                    <input type="hidden" name="utype" value="3" class="form-control">

                    <div class="form-group ">
                        <label>First Name<span class="required">*</span></label>
                        <input type="text" name="first_name"  class="form-control" required="" placeholder="Enter Your name">
                    </div><!--//form-group-->
                    <div class="form-group ">
                        <label >Last Name<span class="required">*</span></label>
                        <input type="text" name="last_name"class="form-control" required="" placeholder="Enter your email">
                    </div><!--//form-group-->
                    <div class="form-group ">
                        <label>Mobile No<span class="required">*</span></label>
                        <input type="text" name="mobile" class="form-control" required="" placeholder="Enter your contact number">
                    </div><!--//form-group-->

                    <div class="form-group ">
                        <label>Email id<span class="required">*</span></label>
                        <input type="email" name="email" class="form-control"  value="<?php echo set_value('email'); ?>" required="" id="email" placeholder="Enter your contact number">
                        <?php echo form_error('email'); ?>
                        <span class="err text text-danger" id="form_no_err"></span>
                    </div><!--//form-group-->

                    <div class="form-group message">
                        <label for="message">Address<span class="required">*</span></label>
                        <textarea type="text" name="address" class="form-control" rows="4" required="" placeholder="Enter your message here..."></textarea>
                    </div><!--//form-group-->


            </article><!--//contact-form-->
            <aside class="contact-form col-lg-6 col-md-6  col-12 page-row">
                       <div class="form-group ">
                        <label>DOB<span class="required">*</span></label>
                        <input type="date" name="dob"  class="form-control" required="" placeholder="Enter Your name">
                    </div><!--//form-group-->
                    <div class="form-group ">
                        <label >Gender<span class="required">*</span></label>
                            <select class="form-control" name="gender" id="gender">
                                <option value="" selected="" disabled="">--Select Gender--</option>
                                <option value="Male">Male</option>
                                <option value="female">Female</option>
                                <option value="Transgender">Transgender</option>
                            </select>
                    </div><!--//form-group-->
                    <div class="form-group ">
                        <label \>Password<span class="required">*</span></label>
                        <input type="Password" name="password" class="form-control" required="" placeholder="Enter your contact number">
                    </div><!--//form-group-->

                    <div class="form-group ">
                        <label>Image<span class="required">*</span></label>
                        <input type="file" name="user_image" id="user_image" class="form-control" required="" placeholder="Enter Picture">
                    </div><!--//form-group--><br>

                     <input type="submit" name="submit"  value="Create Account" class="btn btn-success" >
                    <!-- <button type="submit" name="Send" class="btn btn-theme"></button> -->

                     
                
            </aside><!--//page-sidebar-->
            
        </div><!--//page-row-->
       
    </div><!--//page-content-->

 </form>

            </div><!--//page-wrapper--> 
        </div><!--//content-->
            </div><!--//wrapper-->

<script>

 $(document).ready(function(){
    $("#successMsg").delay(3000).slideUp(800);
});


   $("#email").blur(function (event) {
        var email = $("#email").val();
        // alert(model_number);
        $.ajax({
            url: '<?php echo site_url("User/check_allready_model_exist") ?>',
            data: 'email=' + email,
            dataType: "json",
            type: "POST",
            success: function (data) {

                // alert(data.st)
                    if (data.st == 0) {
                        var obj = data.msg;
                        $("#form_no_err").html("");
                    }
                    if (data.st == 1) {
                       $("#form_no_err").text(data.msg);
                       $("#email").val('');
                       $("#email").focus();
                    }          
            }
        });
    });

</script>