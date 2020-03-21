<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once('Authcontroller.php');

class Admin extends Authcontroller {
    
     public function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('User_model');
        }

    public function index(){
        // $this->session->set_userdata('logged_in', $session);
        // $user_session = ($this->session->userdata('logged_in'));
        // $img = $user_session['image'];
        // print_r($img); exit();        
        $data['browser'] = $this->agent->browser();
        $data['browser_version'] = $this->agent->version();
        $data['os'] = $this->agent->platform();
        $data['ip_address'] = $this->input->ip_address();
        $this->db->insert('hit_info',$data);
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/dashboard');
        $this->load->view('Admin/template/footer');
    }

     public function project(){
        $result['project'] = $this->User_model->project_view_model();
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/project',$result);
        $this->load->view('Admin/template/footer');
    }
    

    public function project_uplode(){  

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Model Name', 'trim|required');
        // $this->form_validation->set_rules('uplode_file', 'Model Type', 'trim|required');
        // $this->form_validation->set_rules('course_year', 'Model Description', 'required');
        // $this->form_validation->set_rules('course_part', 'Model Price', 'trim|required');

        if ($this->form_validation->run() == FALSE){

             redirect ("Admin/questan");
          
            }
            else{
                $config['upload_path']   = './public/uploads/project/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('uplode_file')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }
            else{
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $filenm = $upload_data['file_name'];
            }
           
            $data = array(
                'name'=>$this->input->post('name'),
                'technology'=>$this->input->post('technology'),       
                'backend'=>$this->input->post('backend'),
                'frontend'=>$this->input->post('frontend'),
                'price'=>$this->input->post('price'),
                'uplode_file'=>$filenm
            );            

            print_r($data); exit();
                $this->load->model('User_model');
                $this->User_model->project($data);
                $this->session->set_flashdata('registratio_suss', 'File uccessfully Uplode');            
                redirect ("Admin/questan");                
        }   
    }


                    

    public function questan(){
        $result['question'] = $this->User_model->question_view_model();
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/qestans',$result);
        $this->load->view('Admin/template/footer');
    }

    
    public function question_uplode(){  
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('course', 'Model Name', 'trim|required');
        // $this->form_validation->set_rules('uplode_file', 'Model Type', 'trim|required');
        $this->form_validation->set_rules('course_year', 'Model Description', 'required');
        $this->form_validation->set_rules('course_part', 'Model Price', 'trim|required');

        if ($this->form_validation->run() == FALSE){

             redirect ("Admin/questan");
          
            }
            else{
                $config['upload_path']   = './public/uploads/pdf/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('uplode_file')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }
            else{
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $filenm = $upload_data['file_name'];
            }
           
            $data = array(
                'course'=>$this->input->post('course'),
                'course_year'=>$this->input->post('course_year'),       
                'course_part'=>$this->input->post('course_part'),
                'uplode_file'=>$filenm
            );            
                $this->load->model('User_model');
                $this->User_model->question($data);
                $this->session->set_flashdata('registratio_suss', 'File uccessfully Uplode');            
                redirect ("Admin/questan");                
        }   
    }
    
    
    
    public function gallery(){
            $result['gallery'] = $this->User_model->gallery_view_admin_model();
            $this->load->view('Admin/template/header');
            $this->load->view('Admin/gallery',$result);
            $this->load->view('Admin/template/footer');
        }



    public function gallery_uplode(){  

        $this->load->library('form_validation');
        $this->form_validation->set_rules('descrip', 'Model Name', 'trim|required');
        $this->form_validation->set_rules('event', 'Model Description', 'required');

        if ($this->form_validation->run() == FALSE){

             redirect ("Admin/gallery");
          
            }
            else{
                $config['upload_path']   = './public/uploads/gallery/';
                $config['allowed_types'] = '*';
                $config['encrypt_name'] = TRUE;
                $this->load->library('upload', $config);
            if ( ! $this->upload->do_upload('uplode_file')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
            }
            else{
                    $upload_data = $this->upload->data();
                    $arr_image = array('upload_data' => $this->upload->data());
                    $filenm = $upload_data['file_name'];
            }
           
            $data = array(
                'descrip'=>$this->input->post('descrip'),       
                'event'=>$this->input->post('event'),
                'uplode_file'=>$filenm
            );            
                $this->load->model('User_model');
                $this->User_model->gallery($data);
                $this->session->set_flashdata('registratio_suss', 'File uccessfully Uplode');            
                redirect ("Admin/gallery");                
        }   
    }
    
    public function delete_img_cont($id ){
        $this->User_model->delete_gallery_img($id);
        $this->session->set_flashdata('deletemessage_name', 'You Have Successfully Delete <h3>Record!</h3>');
        redirect('admin/gallery');
    }
    
    
    public function course(){
            $result['course'] = $this->User_model->course();
            $this->load->view('Admin/template/header');
            $this->load->view('Admin/course',$result);
            $this->load->view('Admin/template/footer');
        }



    public function course_add(){  

        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Model Name', 'trim|required');
        $this->form_validation->set_rules('duraction', 'Model Description', 'required');

        if ($this->form_validation->run() == FALSE){

             redirect ("Admin/course");
          
            }
            else{
           
            $data = array(
                'c_name'=>$this->input->post('name'),       
                's_date '=>$this->input->post('date'),
                'c_duration'=>$this->input->post('duraction'),       
                'c_level'=>$this->input->post('level'),
                's_cmps'=>$this->input->post('campus'),                 
                'fee'=>$this->input->post('fee')       
            );            
                $this->load->model('User_model');
                $this->User_model->course_add($data);
                $this->session->set_flashdata('registratio_suss', 'File uccessfully Uplode');            
                redirect ("Admin/course");                
        }   
    }
    
    
    
    

    public function contact(){
        $result['contact'] = $this->User_model->contact_maodel();
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/contact',$result);
        $this->load->view('Admin/template/footer');
    }
    

    public function feedback() {
        $result['feedback'] = $this->User_model->feedback_view_model();
         $this->load->view('Admin/template/header');
        $this->load->view('Admin/feedback',$result);
        $this->load->view('Admin/template/footer');
    }
    
    public function log_user_status() {
        $result['user_status'] = $this->User_model->log_status_model();
        $result['hit_information'] = $this->User_model->hit_counter();
         $this->load->view('Admin/template/header');
        $this->load->view('Admin/log_status',$result);
        $this->load->view('Admin/template/footer');
    }
    
    public function Registration(){
        $result['Registri'] = $this->User_model->Registr();
        $this->load->view('Admin/template/header');
        $this->load->view('Admin/registration',$result);
        $this->load->view('Admin/template/footer');
    }

    public function logout(){
        $this->db->query("update tbl_user set status=0 where id='" . $_SESSION['logged_in']['uid'] . "'"); // 
        $seesion_data = array(

                'logged_in' => FALSE,
               );
     $this->session->unset_userdata($seesion_data);
     $this->session->sess_destroy();
     redirect('User','refresh');
    }

}
