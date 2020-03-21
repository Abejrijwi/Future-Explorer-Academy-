<?php

class User_model extends CI_Model 
 
 {

//=======================Admin Pannel Edit======================//

 	public function project_view_model()
	 {
		$query=$this->db->query("select * FROM project");
		return $query->result();
	 } 

    public function contact_maodel()
	 {
		$query=$this->db->query("select * FROM contact_us");
		return $query->result();
	 }
	 
	 public function question_view_model()
	 {
		$query=$this->db->query("select * FROM questions");
		return $query->result();
	 } 

	 
	  public function log_status_model()
	 {
		$query=$this->db->query("select * FROM tbl_user");
		return $query->result();
	 } 
	 
	 public function hit_counter()
	 {
		$query=$this->db->query("select * FROM hit_info");
		return $query->result();
	 } 
	 
	 public function Registr()
	 {
		$query=$this->db->query("select * FROM user_reg");
		return $query->result();
	 }  
	 
	 public function question($data){
		$this->db->insert('questions',$data);
	}

	public function project($data){
		$this->db->insert('project',$data);
	}
	
	public function gallery_view_admin_model()
	 {
		$query=$this->db->query("select * FROM gallery");
		return $query->result();
	 } 

	 public function gallery ($data){
		$this->db->insert('gallery',$data);
	}

    public function delete_gallery_img($id){
		$sql = $this->db->get_where('gallery',array('id'=>$id))->row();
		unlink(FCPATH."/public/uploads/gallery/".$sql->uplode_file);
		$this->db->query("delete FROM gallery where id=$id");
	}
	
	public function course()
	 {
		$query=$this->db->query("select * FROM courses");
		return $query->result();
	 }

	 public function course_add ($data){
		$this->db->insert('courses',$data);
	}

//=======================Start Stoke Controlers======================//

      public function record_count() {
        return $this->db->count_all("questions");
    }
    public function fetch_data($Starting,$TotalRecord) {
        $query = $this->db->query("select * from questions limit $Starting,$TotalRecord");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
    }



 	public function online_reg ($data){
		$this->db->insert('tbl_user',$data);
	}

 	public function testnimol_view_model()
	 {
		$query=$this->db->query("select * FROM testimonials ORDER BY id DESC");
		return $query->result();
	 } 


		public function video_view_model()
	 {
		$query=$this->db->query("select * FROM video_tur ORDER BY id DESC");
		return $query->result();
	 }  

 	public function regi_model($data){
		$this->db->insert('user_reg',$data);
	}

	 	public function feedback_model($data){
		$this->db->insert('feedback',$data);
	}

	 	public function cont_model($data){
		$this->db->insert('contact_us',$data);
	}

	 public function trainer_view_model()
	 {
		$query=$this->db->query("select * FROM trainer");
		return $query->result();
	 } 

	 public function feedback_view_model()
	 {
		$query=$this->db->query("select * FROM feedback ORDER BY id DESC");
		return $query->result();
	 } 

	 public function Tran_programs_view_model()
	 {
		$query=$this->db->query("select * FROM Tran_programs");
		return $query->result();
	 } 

	 public function courses_view_model()
	 {
		$query=$this->db->query("select * FROM courses");
		return $query->result();
	 } 
	
	
		public function gallery_view_model()
	 {
		$query=$this->db->query("select * FROM gallery");
		return $query->result();
	 }  

	 public function notish_view_model()
	 {
		$query=$this->db->query("select * FROM notise");
		return $query->result();
	 }  
	
}

?>