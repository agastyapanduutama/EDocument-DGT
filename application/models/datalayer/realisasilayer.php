<?php
class realisasilayer extends CI_Model {
	
	var $em;
	
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function listDetail($id)
	{
		$query = $this->db->query("
			SELECT a.*, a.id_pekerjaan as id_job, a.id_detail as id_det, b.pekerjaan, c.kode_project, d.nama_jenissurvey, e.*
			FROM trans_pekerjaandet a 
			JOIN trans_pekerjaan b ON a.id_pekerjaan=b.id_pekerjaan AND a.id_project=b.id_project
			JOIN trans_wilayah c ON a.id_project=c.id_project
			JOIN mst_jenissurvey d ON d.id_jenissurvey=c.id_survey
			LEFT JOIN trans_realisasi e on a.id_project=e.id_project AND a.id_pekerjaan=e.id_pekerjaan AND a.id_detail=e.id_detail
			WHERE a.id_project = $id
			ORDER BY c.kode_project, b.id_pekerjaan, a.id_detail
		");
		
		return $query->result();
	}
}
?>