<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

        public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        $this->load->library("pagination");
        }

        public function index()
        {
            // $this->load->view('User/form1');
            // $this->load->view('User/infomartion');
            //$data['browser'] = $this->agent->browser();
            //$data['browser_version'] = $this->agent->version();
           // $data['os'] = $this->agent->platform();
           // $data['ip_address'] = $this->input->ip_address();
          //  $this->db->insert('hit_info',$data);
            $result['tran'] = $this->User_model->Tran_programs_view_model();
            $result['cours'] = $this->User_model->courses_view_model();
            $result['testnomil'] = $this->User_model->testnimol_view_model();
            $result['video_tut'] = $this->User_model->video_view_model();
            $this->load->view('User/template/header');
            $this->load->view('User/home', $result);
            $this->load->view('User/template/footer');


        }

 //send SMS

        public function send_mail_view(){

    $this->load->view('User/template/header');
    $this->load->view('User/send_mail_view');
    $this->load->view('User/template/footer');
    }
    
    
    
    
    


        
        public function student_accv(){
    $this->load->view('User/template/header');
    $this->load->view('User/student_acc');
    $this->load->view('User/template/footer');
    }


        public function course(){
        $result['testnomil'] = $this->User_model->testnimol_view_model();
        $result['cours'] = $this->User_model->courses_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/course', $result);
        $this->load->view('User/template/footer');
    }


     public function susc_us(){

        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('User/template/header');
            $this->load->view('User/home');
            $this->load->view('User/template/footer');
            }
            $data = array(
                'browser'=>$this->agent->browser(),
                'browser_version'=>$this->agent->version(),
                'os'=>$this->agent->platform(),
                'ip_address'=>$this->input->ip_address(),
                'email'=>$this->input->post('email'),
            );
            
            //mail Api
            $to_mail = $data['email'];
            // $to_mail = 'panditvinit01@gmail.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $headers .= 'From: feacademy.in <info@feacademy.in>' . "\r\n";
            $subject = 'Welcome Message';


             $emailcontent = "<head>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    </head>

  <body style='font-family:Verdana;background:#f0f0ff;color:#606060;'>

        <style>
            h2 {
                color: #6534ff;
            }
            a {
                color: #FFFFFF;
                text-decoration: none;
            }
            p {
                line-height:1.5;
                font-size: 14px;
            }
        </style>

                <table cellpadding='0' width='100%' cellspacing='0' border='0'>
            <tr>
                <td>
                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
                        <tr>
                            <td>
                                <div style='margin-top:30px;text-align:center;color:#e62086'>
                                    <p style='margin-top:30px; text-align:center; max-width:600px; text-transform: uppercase; background:#70acff; padding:8px; margin:0 auto; border-radius:2px; color:#ffffff'><strong>You have Successfully Suscribe</strong></p>                                            
                                        
                                       <img src='https://feacademy.in/public/assets/images/mainlog.png' alt='abc'/>

                                    <p style='margin-top:30px; text-align:center; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:#e62086'><br>Thank you for writing to us.We have received your message. and will get back to you within 24 hours. Until then, you can give us a call anytime at +91 9334640356 or email info@feacademy.in <br></p>
                                    <p style='font-size:14px; margin-top:30px; text-align:center; max-width:600px; background:#fc9181; padding:8px; margin:0 auto;  color:#ffffff'>Call us +91 9334 640 356, <span>E-Mail</span> info@feacademy.in</p>
                                    <p style='font-size:12px; margin-top:30px; text-align:center; max-width:600px; background:#70acff; padding:8px; margin:0 auto;  color:#ffffff'><span>Any Query Visit:</span> www.feacademy.in</p>

                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>";
            $Mailsending = @mail($to_mail, $subject, $emailcontent, $headers);

            if ($Mailsending) {
                echo json_encode(array('st' => 1));
            } else {
                echo json_encode(array('st' => 0));
            }

            // End mail APi
                $this->load->model('User_model');
                $this->User_model->cont_model($data);
                $this->session->set_flashdata('susb_send', 'You have Successfully <h3>Suscribe</h3>');
                redirect ("User");
                
          
    }
    
       public function online_regis_cont(){ 

    // echo "<Prev>"; print_r($data)
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Model Name', 'required');
        $this->form_validation->set_rules('gender', 'Model Type', 'trim|required');
        $this->form_validation->set_rules('mobile', 'Model Description', 'required');
        $this->form_validation->set_rules('password', 'Model Price', 'required');

        if ($this->form_validation->run() == FALSE){

             $this->load->view('User/template/header');
            $this->load->view('User/student_acc');
            $this->load->view('User/template/footer');

            }
            else{
                $config['upload_path']   = './public/uploads/onlinereg/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('user_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }
            else{
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $filenm = $upload_data['file_name'];
            }
            $nm = $this->input->post('first_name');
            $em = $this->input->post('email');
            $ps = $this->input->post('password');
            $data = array(
                'browser'=>$this->agent->browser(),
                'browser_version'=>$this->agent->version(),
                'os'=>$this->agent->platform(),
                'ip_address'=>$this->input->ip_address(),
                'first_name'=>$this->input->post('first_name'),
                'last_name'=>$this->input->post('last_name'),       
                'gender'=>$this->input->post('gender'),
                'mobile'=>$this->input->post('mobile'),
                'email'=>$this->input->post('email'),
                'dob'=>$this->input->post('dob'), 
                'utype'=>$this->input->post('utype'),
                'address'=>$this->input->post('address'),       
                'password'=>md5($this->input->post('password')),
                'image'=>$filenm
            );

            //mail Api
            $to_mail = $data['email'];
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $headers .= 'From: feacademy.in <info@feacademy.in>' . "\r\n";
            $subject = 'Online Classes';
            $emailcontent = "<head>

        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    </head>

    <body style='font-family:Verdana;background:#f0f0ff;color:#606060;'>
        <style>
            h2 {
                color: #6534ff;
            }
            a {
                color: #FFFFFF;
                text-decoration: none;
            }
            p {
                line-height:1.5;
                font-size: 14px;
            }
        </style>
                <table cellpadding='0' width='100%' cellspacing='0' border='0'>
            <tr>
                <td>
                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
                        <tr>
                            <td>
                        <div style='margin-top:30px;text-align:center;color:#e62086'>
                            <p style='margin-top:30px; text-align:center; max-width:600px; text-transform: uppercase; background:#70acff; padding:8px; margin:0 auto; border-radius:2px; color:#ffffff'><strong>You have Successfully Registered</strong></p> 
                            
                             <p style='margin-top:30px; text-align:left; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:black'>Dear<b> ".$nm."</b><br><br> You have successfully registered for Onliine Classes <br><br> Please find below your username and password for logging into Onliine Classes. <br><br> </p>

                             <p style='margin-top:30px; text-align:left; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:black'>You User ID :<b> ".$em."</b><br></p>
                             <p style='margin-top:30px; text-align:left; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:black'>You Password :<b> ".$ps."</b><br></p>

                             <p style='margin-top:30px; text-align:left; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:black'>
                                <b>Regards</b><br>Future Explorer Academy <br><br>
                                (This is an auto generated email, so please do not reply back.)
                            </p>
                            
                             <p style='margin-top:30px; text-align:left; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:#e62086' >
                            <u>CONFIDENTIALITY INFORMATION AND DISCLAIMER:</u><br>
                            This email message may contain confidential, legally privileged information and is intended solely for the use of the individual to whom it is addressed. If you have erroneously received this message, please delete it immediately. If you are not the intended recipient of the email message you should not disseminate, distribute or copy this e-mail. </br></br>
                                
                             </p>

                            <p style='font-size:14px; margin-top:30px; text-align:center; max-width:600px; background:#fc9181; padding:8px; margin:0 auto;  color:#ffffff'>Call us +91 9334 640 356, <span>E-Mail</span> info@feacademy.in</p>
                            <p style='font-size:12px; margin-top:30px; text-align:center; max-width:600px; background:#70acff; padding:8px; margin:0 auto;  color:#ffffff'><span>Any Query Visit:</span> www.feacademy.in</p>
                        </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>";


            $Mailsending = @mail($to_mail, $subject, $emailcontent, $headers);

            if ($Mailsending) {
                echo json_encode(array('st' => 1));
            } else {
                echo json_encode(array('st' => 0));
            }
            // End mail APi

                $this->load->model('User_model');
                $this->User_model->online_reg($data);
                $this->session->set_flashdata('registratio_suss', 'You HaveSuccessfully Registried <h3>Record!</h3>');
                redirect ("User");
        }   
    }

     public function check_allready_model_exist() {

        $email = $this->input->post('email');
        $query = $this->db->query("select * from tbl_user where email='$email'");

        if ($query->num_rows() > 0) {
             echo json_encode(array('st' => 1, 'msg' => "Email Allready Exist In Database, Plz Enter Another Number"));
        }else{
            echo json_encode(array('st' => 0, 'msg' => "Email does not Exist In Database"));
        }
        
    }
    // End Online Tranning

     public function contact_s_page() {

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('mobile_no', 'Message', 'trim|required');
        $this->form_validation->set_rules('subject', 'Subject', 'required');
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE){
            $this->load->view('User/template/header');
            $this->load->view('User/home');
            $this->load->view('User/template/footer');
            }
            $nm = $this->input->post('name');
            $data = array(
                'browser'=>$this->agent->browser(),
                'browser_version'=>$this->agent->version(),
                'os'=>$this->agent->platform(),
                'ip_address'=>$this->input->ip_address(),
                'name'=>$this->input->post('name'),
                'email'=>$this->input->post('email'),
                'mobi_no'=>$this->input->post('mobile_no'),       
                'subject'=>$this->input->post('subject'),
                'message'=>$this->input->post('message'),
            );
            
            
                     //mail Api
            $to_mail = $data['email'];
            // $to_mail = 'panditvinit01@gmail.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $headers .= 'From: feacademy.in <info@feacademy.in>' . "\r\n";
            $subject = 'Welcome Message';


             $emailcontent = "<head>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    </head>

<body style='font-family:Verdana;background:#f0f0ff;color:#606060;'>

        <style>
            h2 {
                color: #6534ff;
            }
            a {
                color: #FFFFFF;
                text-decoration: none;
            }
            p {
                line-height:1.5;
                font-size: 14px;
            }
        </style>

                <table cellpadding='0' width='100%' cellspacing='0' border='0'>
            <tr>
                <td>
                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
                        <tr>
                            <td>
                                <div style='margin-top:30px;text-align:center;color:#e62086'>
                                    <p style='margin-top:30px; text-align:center; max-width:600px; text-transform: uppercase; background:#70acff; padding:8px; margin:0 auto; border-radius:2px; color:#ffffff'><strong>Your Information successfully Send,</strong></p>                                            
                                
                                    <p style='margin-top:30px; text-align:center; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:#e62086'>
                                    
                                    
                                     <img src='http://feacademy.in/public/assets/images/mainlog.png'/>
                                    
                                    <br>Hi ".$nm." Thank you for writing to us.We have received your message. and will get back to you within 24 hours. Until then, you can give us a call anytime at +91 9334640356 or email info@feacademy.in <br></p>
                                    <p style='font-size:14px; margin-top:30px; text-align:center; max-width:600px; background:#fc9181; padding:8px; margin:0 auto;  color:#ffffff'>Call us +91 9334 640 356, <span>E-Mail</span> info@feacademy.in</p>
                                    <p style='font-size:12px; margin-top:30px; text-align:center; max-width:600px; background:#70acff; padding:8px; margin:0 auto;  color:#ffffff'><span>Any Query Visit:</span> www.feacademy.in</p>

                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>";

            $Mailsending = @mail($to_mail, $subject, $emailcontent, $headers);

            if ($Mailsending) {
                echo json_encode(array('st' => 1));
            } else {
                echo json_encode(array('st' => 0));
            }

            // End mail APi
            
                $this->load->model('User_model');
                $this->User_model->cont_model($data);
                $this->session->set_flashdata('contact_message', 'Your Message Successfully Send <h3>Thanks!</h3>');

                        $apiKey = urlencode('/KB0bxfSzO0-KwmWhRFQvvHxBlGE61SecUzIRrLYK5');
                        $numbers = array($data['mobi_no']);
                        $sender = urlencode('FEACDE');
                        $message = "Dear ".$data['name'].", ". "Thank you for writing to us. We have received your message. and will get back to you within 24 hours. Until then, you can give us a call anytime at +91 9334640356 or email info@feacademy.in";
                        $numbers = implode('91', $numbers);
                        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                        $ch = curl_init('https://api.textlocal.in/send/');
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($ch);
                        curl_close($ch);
                        echo $response; 

                redirect ("User/contact");
          
    }

         public function feedback_page()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('comment', 'Message', 'trim|required');
        if ($this->form_validation->run() == FALSE){
            $this->load->view('User/template/header');
            $this->load->view('User/feedback');
            $this->load->view('User/template/footer');
            }
            $data = array(
                'name'=>$this->input->post('name'),
                'message'=>$this->input->post('comment'),
            );
                $this->load->model('User_model');
                $this->User_model->feedback_model($data);

                $this->session->set_flashdata('comment_message', 'Thank You'. '<h3>'. $data['name'].'</h3>'  . 'Your Feedback Successfully Submited');
                redirect ("User/feedback");
                
          
    }



    public function regis_cont(){  
        
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name', 'Model Name', 'trim|required');
        $this->form_validation->set_rules('user_email', 'Model Type', 'trim|required');
        $this->form_validation->set_rules('user_mobile', 'Model Description', 'required');
        $this->form_validation->set_rules('user_course', 'Model Price', 'trim|required');

        if ($this->form_validation->run() == FALSE){

            $this->load->view('User/template/header');
            $this->load->view('User/home');
            $this->load->view('User/template/footer');
            }
            else{
                $config['upload_path']   = './public/uploads/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('user_image')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }
            else{
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $filenm = $upload_data['file_name'];
            }
           
            $data = array(
                
                
                
                'browser'=>$this->agent->browser(),
                'browser_version'=>$this->agent->version(),
                'os'=>$this->agent->platform(),
                'ip_address'=>$this->input->ip_address(),
                'name'=>$this->input->post('user_name'),
                'email'=>$this->input->post('user_email'),       
                'mobile'=>$this->input->post('user_mobile'),
                'courses'=>$this->input->post('user_course'),
                'image'=>$filenm
            );
            
                //mail Api
            $to_mail = $data['email'];
            // $to_mail = 'panditvinit01@gmail.com';
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
            $headers .= 'From: feacademy.in <info@feacademy.in>' . "\r\n";
            $subject = 'Welcome Message';


             $emailcontent = "<head>
        <meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'>
    </head>

    <body style='font-family:Verdana;background:#f0f0ff;color:#606060;'>

        <style>
            h2 {
                color: #6534ff;
            }
            a {
                color: #FFFFFF;
                text-decoration: none;
            }
            p {
                line-height:1.5;
                font-size: 14px;
            }
        </style>

                <table cellpadding='0' width='100%' cellspacing='0' border='0'>
            <tr>
                <td>
                    <table cellpadding='0' cellspacing='0' border='0' align='center' width='100%' style='border-collapse:collapse;'>
                        <tr>
                            <td>
                                <div style='margin-top:30px;text-align:center;color:#e62086'>
                                    <p style='margin-top:30px; text-align:center; max-width:600px; text-transform: uppercase; background:#70acff; padding:8px; margin:0 auto; border-radius:2px; color:#ffffff'><strong>Hi Your Registration is successfully completed, </strong></p>                                            
                                                

                                    <p style='margin-top:30px; text-align:center; max-width:600px; background:#ffffff; padding:8px; margin:0 auto; border-radius:2px; color:#e62086'><br>Thank you for writing to us.We have received your message. and will get back to you within 24 hours. Until then, you can give us a call anytime at +91 9334640356 or email info@feacademy.in <br></p>
                                    <p style='font-size:14px; margin-top:30px; text-align:center; max-width:600px; background:#fc9181; padding:8px; margin:0 auto;  color:#ffffff'>Call us +91 9334 640 356, <span>E-Mail</span> info@feacademy.in</p>
                                    <p style='font-size:12px; margin-top:30px; text-align:center; max-width:600px; background:#70acff; padding:8px; margin:0 auto;  color:#ffffff'><span>Any Query Visit:</span> www.feacademy.in</p>

                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>";

            $Mailsending = @mail($to_mail, $subject, $emailcontent, $headers);

            if ($Mailsending) {
                echo json_encode(array('st' => 1));
            } else {
                echo json_encode(array('st' => 0));
            }

            // End mail APi
            
                $this->load->model('User_model');
                $this->User_model->regi_model($data);
                $this->session->set_flashdata('registratio_suss', 'You HaveSuccessfully Registried <h3>Record!</h3>');
                $year="FE2019";
            // messaging API USE
                        $apiKey = urlencode('/KB0bxfSzO0-KwmWhRFQvvHxBlGE61SecUzIRrLYK5');
                        $numbers = array($data['mobile']);
                        $sender = urlencode('FEACDE');
                        // $message = "Congratulation ".$data['name'].", "."Your Registration Is successfully completed, Your Reg. ID " .$data['courses'];
                        $message = "Congratulation ".$data['name']." Your Registration Is Successfully completed in ".$data['courses']." Courses, your reg. ID ".$data['courses'].$year;
                        // print_r($message); exit();
                        $numbers = implode('91', $numbers);
                        $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
                        $ch = curl_init('https://api.textlocal.in/send/');
                        curl_setopt($ch, CURLOPT_POST, true);
                        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
                        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                        $response = curl_exec($ch);
                        curl_close($ch);
                        echo $response;
            // End API
                redirect ("User");
                
        }   
    }

//End Home page


//About Page



     //    public function testonomil(){
        //     $result['testnomil'] = $this->User_model->testnimol_view_model();
        //  $this->load->view('User/template/header');
        //  $this->load->view('User/home', $result);
        //  $this->load->view('User/template/footer');

        // }

    public function about()
    {
        $this->load->view('User/template/header');
        $this->load->view('User/about');
        $this->load->view('User/template/footer');
    }

    public function question($Starting=0)
    {   
        $this->load->view('User/template/header');
        $config["base_url"] = site_url() . "/user/question";
        $TotalRows = $this->User_model->record_count();
        $config['total_rows'] = $TotalRows;
        $config['per_page'] = 6; 
        $config['num_links'] = 5;
        $TotalRecord = $config['per_page'];
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = false;
        $config['last_link'] = false;
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo';
        $config['prev_tag_open'] = '<li class="prev">';
        $config['prev_tag_close'] = '</li>';
        $config['next_link'] = '&raquo';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config); 
        $data['Links'] = $this->pagination->create_links();
        $data['result'] = $this->User_model->fetch_data($Starting,$TotalRecord);
        $this->load->view("User/question", $data);
        $this->load->view('User/template/footer');
    }



     public function project()
    {
        $result['project'] = $this->User_model->project_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/project', $result);
        $this->load->view('User/template/footer');
    }

    public function team() {
        $result['trainer'] = $this->User_model->trainer_view_model();
        $result['testnomil'] = $this->User_model->testnimol_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/team', $result);
        $this->load->view('User/template/footer');
    }

    public function gallery()
    {
        $result['gallery'] = $this->User_model->gallery_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/gallery', $result);
        $this->load->view('User/template/footer');
    }

    // public function notise()
    // {
    //     $result['notis'] = $this->User_model->notish_view_model();
    //     $this->load->view('User/template/header');
    //     $this->load->view('User/notish', $result);
    //     $this->load->view('User/template/footer');
    // }

        public function contact()
    {
        // $result['notis'] = $this->User_model->notish_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/contact');
        $this->load->view('User/template/footer');
    }

    //         public function registratin_frm()
    // {
    //     $result['notis'] = $this->User_model->notish_view_model();
    //     $this->load->view('User/template/header');
    //     $this->load->view('User/admission_form', $result);
    //     $this->load->view('User/template/footer');
    // }


     public function feedback() {
        $result['feedback'] = $this->User_model->feedback_view_model();
        $result['testnomil'] = $this->User_model->testnimol_view_model();
        $this->load->view('User/template/header');
        $this->load->view('User/feedback',$result);
        $this->load->view('User/template/footer');
    }


// Payment Gaityay

    public function payment($cr,$fe){
        $data['productinfo']= $cr;
        $data['amount']= $fe;

        $this->load->view('User/template/header');
        $this->load->view('User/registration',$data);
        $this->load->view('User/template/footer');
        
    }


    //Method that handle when the payment was successful
    public function success(){
        if(empty($_POST)){
            redirect('User');
        }

        $status=$_POST["status"];
        $firstname=$_POST["firstname"];
        $amount=$_POST["amount"];
        $txnid=$_POST["txnid"];
        $posted_hash=$_POST["hash"];
        $key=$_POST["key"];
        $productinfo=$_POST["productinfo"];
        $email=$_POST["email"];
        $salt = "LCgITRIDEu";
        $sno = $_POST["udf1"];
        $retHashSeq = $salt.'|'.$status.'||||||||||'.$sno.'|'.$email.'|'.$firstname.'|'.$productinfo.'|'.$amount.'|'.$txnid.'|'.$key;
        $hash = strtolower(hash("sha512", $retHashSeq));

        if ($hash != $posted_hash) {
           $this->session->set_flashdata('msg_error', "An Error occured while processing your payment. Try again..");
        }

        else{
            $this->session->set_flashdata('msg_success', "Payment was successful..");
        }
        unset($_POST);
        redirect('User');
    }

    //Method that handles when payment was failed
    public function error(){
        unset($_POST);
        $this->session->set_flashdata('msg_error', "Your payment was failed. Try again..");
        redirect('User');
    }

    //Method that handles when payment was cancelled.
    public function cancel(){
        unset($_POST);
        $this->session->set_flashdata('msg_error', "Your payment was cancelled. Try again..");
        redirect('User');
    }

    // End Payment Gaityay



}
 


