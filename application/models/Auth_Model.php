<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_Model extends CI_Model {

    public function ProcessAuthentication($user,$password) {
        $result = $this->db->get_where('tbl_user', array('email' => $user));
        if ($result->num_rows() > 0) {//step 1
            $row = $result->row();
            if ($row->locked == 1) {
//                1 = locked and 0 = unlocked
                $this->session->set_flashdata('msg', 'Account is locked. Contact system administrator.');
                redirect('login');
            }
            if ($row->attemps < 4) {//step 2
                if ($row->password == md5($password)) {//step 3
                    date_default_timezone_set("Asia/Kolkata");
                    $last_login = date('Y-m-d h:i:s a');
                    $this->db->query("update tbl_user set attemps=0 where email='" . $user . "'"); // step 4
                    $this->db->query("update tbl_user set last_login = '$last_login'  where email='" . $user . "'");
                    
                    $this->db->query("update tbl_user set status=1 where email='" . $user . "'"); // step 4
                    
                    $result = $this->db->get_where('tbl_user', array('email' => $user))->row();

                    $session = array(
                        'name' => $result->first_name . ' ' . $result->last_name,
                        'uid' => $result->id,
                        'email' => $result->email,
                        'status' =>$result->status,
                        'utype' => $result->utype,
                        'last_login' => $result->last_login,
                        'ipadrs' => $result->ip_address,
                        'user_location' => $result->ip_address,
                        'image' => $result->image
                    );
                    // echo "<pre>"; print_r($session);exit();
                    $this->session->set_userdata('logged_in', $session);


                    // echo "hi"; ec
                    redirect('Admin');
                } else { //step 5
                    $this->db->query("update tbl_user set attemps=(attemps+1) where email='" . $user . "'");
                    $m = 'Invalid user name / password combination for ' . $user . '. You have only two attemps more.';
                    if ($row->attemps == 1) {
                        $m = 'Invalid user name / password combination for ' . $user . '. You have only one attemps more.';
                    } elseif ($row->attemps == 2) {
                        $m = 'Invalid user name / password combination for ' . $user . '. Account locked, please contact system administrator.';
                        $this->db->query("update tbl_user set locked=1 where email='" . $user . "'"); // step 4
                    }
                    $this->session->set_flashdata('msg', $m);
                    redirect('login');
                }
            } else { // step 7
                $this->session->set_flashdata('msg', 'Invalid user name / password combination for ' . $user . '. Account locked, please contact system administrator.');
                redirect('login');
            }
        } else { // step 6
            $this->session->set_flashdata('msg', 'Invalid user name / password combination for ' . $user);
            redirect('login');
        }
    }



    function fetch_pass($session_id){

        $fetch_pass=$this->db->query("select * from tbl_user where id='$session_id'");
        $res=$fetch_pass->result();
    }
    function change_pass($session_id,$new_pass){
        
        $update_pass=$this->db->query("UPDATE tbl_user set pass='$new_pass'  where id='$session_id'");
    }

}
