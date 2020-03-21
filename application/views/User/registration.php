<?php
$MERCHANT_KEY = "ZUevHgvJ";
$SALT = "LCgITRIDEu";
$PAYU_BASE_URL = "https://secure.payu.in";
$action = '';
$posted = array();
$txnid = random_string('numeric', 5);

if(!empty($_POST)) {

        $posted['amount'] = $_POST['amount'];
        $posted['phone'] = $_POST['phone'];
        $posted['firstname'] = $_POST['firstname'];
        $posted['email'] = $_POST['email'];
        $posted['key'] = $MERCHANT_KEY;
        $posted['txnid'] = $txnid;
        $posted['productinfo'] = $_POST['productinfo'];;
        $posted['email'] = $_POST['email'];
        $posted['firstname'] = $_POST['firstname'];
        $posted['phone'] = $_POST['phone'];
        $posted['surl'] = base_url("payumoney/success");
        $posted['furl'] = base_url("payumoney/error");
        $posted['curl'] = base_url("payumoney/cancel");
        $posted['service_provider'] = 'payu_paisa';

}

$hash = '';
$hashSequence = "key|txnid|amount|productinfo|firstname|email|udf1|udf2|udf3|udf4|udf5|udf6|udf7|udf8|udf9|udf10";

if(empty($posted['hash']) && sizeof($posted) > 0) {
    if(
              empty($posted['key'])
              || empty($posted['txnid'])
              || empty($posted['amount'])
              || empty($posted['firstname'])
              || empty($posted['email'])
              || empty($posted['phone'])
              || empty($posted['productinfo'])
              || empty($posted['surl'])
              || empty($posted['furl'])
              || empty($posted['service_provider'])
      ) {

        redirect('User');
      }
    else{
        
        $hashVarsSeq = explode('|', $hashSequence);
        $hash_string = '';
        foreach($hashVarsSeq as $hash_var){
              $hash_string .= isset($posted[$hash_var]) ? $posted[$hash_var] : '';
              $hash_string .= '|';
        }

        $hash_string .= $SALT;
        $hash = strtolower(hash('sha512', $hash_string));
        $posted['hash'] = $hash;
        $action = $PAYU_BASE_URL . '/_payment';
    }
}
elseif(!empty($posted['hash'])){
  $hash = $posted['hash'];
  $action = $PAYU_BASE_URL . '/_payment';
}

?>


        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title float-left text-danger"> Registration Form</h1>
                    <div class="breadcrumbs float-right">
                        <ul class="breadcrumbs-list">
                        </ul>
                    </div>
                </header> 


            <?php
                if($this->session->flashdata('msg_error')){
                    echo "<div class='alert alert-danger' role='alert'>".$this->session->flashdata('msg_error')."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                }
                elseif($this->session->flashdata('msg_success')){
                    echo "<div class='alert alert-success' role='alert'>".$this->session->flashdata('msg_success')."<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>";
                }
            ?>



<div class="page-content">
<div class="row">
    <article class="contact-form col-lg-8 col-md-7  col-12 page-row"> 
        <form  method="POST" action="<?php echo $action; ?>" name="payuForm" enctype="multipart/form-data">

        <input type="hidden" name="key" value="<?php echo (!isset($posted['key'])) ? '' : $posted['key'] ?>" />
        <input type="hidden" id="hash" name="hash" value="<?php echo (!isset($posted['hash'])) ? '' : $posted['hash'] ?>"/>
        <input type="hidden" name="txnid" value="<?php echo (!isset($posted['txnid'])) ? '' : $posted['txnid'] ?>" />
        
        <input type="hidden" name="surl" value="<?php echo (!isset($posted['surl'])) ? '' : $posted['surl'] ?>" size="64" />
        <input type="hidden" name="curl" value="<?php echo (!isset($posted['curl'])) ? '' : $posted['curl'] ?>" size="64" />
        <input type="hidden" id="furl" name="furl" value="<?php echo (!isset($posted['furl'])) ? '' : $posted['furl'] ?>" size="64" />
        <input type="hidden" name="service_provider" value="<?php echo (!isset($posted['service_provider'])) ? '' : $posted['service_provider'] ?>" size="64" />



            <div class="form-group name">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Enter your name" required value="<?php echo (!isset($posted['firstname'])) ? '' : $posted['firstname'] ?>">
            </div>


            <div class="form-group email">
                <label for="email">Email<span class="required">*</span></label>

                <input type="email" name="email" class="form-control" placeholder="Enter your email" value="<?php echo (!isset($posted['email'])) ? '' : $posted['email'] ?>" required>

            <div class="form-group phone">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter your contact number" value="<?php echo (!isset($posted['phone'])) ? '' : $posted['phone'] ?>" required>
            </div>


            <div class="form-group phone">
                <label for="phone">Course</label>
                <input type="text" name="productinfo" class="form-control" readonly value="<?php echo $productinfo; ?>" >
               
            </div><!--//form-group-->

            <div class="form-group phone">
                <label for="phone">Amount Pay</label>

                <input type="text" name="amount" class="form-control" value="<?php echo $amount;?>" readonly required>
            </div>

    <button type="submit" name="Send" class="btn btn-theme">Fee Payment</button>
</form>   

                    </article><!--//contact-form-->
                    <aside class="page-sidebar  col-lg-3 offset-lg-1 col-md-4 offset-md-1">
                        <section class="widget has-divider">
                            <h3 class="title p-2">Download Sylabus</h3>
                            
                            <a class="btn btn-theme" href="#"><i class="fas fa-download"></i>Download now</a>
                        </section><!--//widget-->   
                        
                        <section class="widget has-divider">
                            <h3 class="title p-2">Postal Address</h3>
                            <p class="adr">
                                <span class="adr-group">       
                                <span class="street-address p-2">Future Explorer Academy</span><br>
                                <span class="region p-2">Opp- Ganga Devi College</span><br>
                                <span class="postal-code p-2">Patna, Bihar</span><br>
                                <span class="country-name p-2">India</span>
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
                
            </div><!--//page-content-->
        </div><!--//page-wrapper--> 
    </div><!--//content-->
        </div><!--//wrapper-->
