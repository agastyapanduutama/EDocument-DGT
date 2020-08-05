<?php
class projectlayer extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
    }
	
	public function savedetail($idProject, $pekerjaan, $detail, $idBiaya, $idSet)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		
		$query = $this->db->get_where("trans_projectplan", array("id_project" => $idProject));
		if (!empty($idSet)) {
			
			$this->db->set("id_project", $idProject);
			$this->db->set("header_job", $pekerjaan);
			$this->db->set("detail_job", $detail);
			$this->db->set("id_komponen", $idBiaya);		
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('username'));
			
			$this->db->where("id_set", $idSet);
			$valid = $this->db->update('trans_projectplan');
		
		}
		else {
			$this->db->set("id_project", $idProject);
			$this->db->set("header_job", $pekerjaan);
			$this->db->set("detail_job", $detail);
			$this->db->set("id_komponen", $idBiaya);		
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('username'));
			
			$valid = $this->db->insert('trans_projectplan');
		}	
		
		return $valid;		
	}
}
?>