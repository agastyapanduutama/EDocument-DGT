<?php
class disposisilayer extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
    }
	
	public function detailSurat($idSurat)
	{
		$query = $this->db->query("
			SELECT a.*, b.nama_sifat, c.nama_jenis
			FROM trans_surat a 
			JOIN mst_sifatsurat b ON a.id_sifat = b.id_sifat
			JOIN mst_jenis c ON a.id_jenissurat=c.id_jenissurat
			WHERE a.id_surat = $idSurat
		");
		return $query->row();
	}
	
	public function staffBawahan()
	{
		$idGroup = $this->session->userdata("usergroup");
		$query = $this->db->query("SELECT a.* 
		FROM mst_staff a JOIN mst_jabatan b ON a.id_jabatan=b.id_jabatan
		WHERE a.id_group = $idGroup AND b.lev = 4");
		
		return $query->result();
		
	}
	
	public function searchStaff($idJabatan, $idGroup)
	{
		if ($this->session->userdata('userjabatan') == 0) {
			$q1 = $this->db->query("select * from mst_jabatan where parent_jabatan = 0");
			$d1 = $q1->row();
			$idJ = $d1->id_jabatan;			
		}
		else {
			$jbt = $this->session->userdata("userjabatan");
			$idJ = $jbt;
		}
		$query = $this->db->query("SELECT * FROM mst_staff WHERE id_group=$idGroup AND id_jabatan IN (SELECT id_jabatan FROM mst_jabatan WHERE parent_jabatan=$idJ)");
		return $query;
	}
	
	public function saveDosposisi($idSurat, $idStaff, $tglDisposisi, $tglSelesai, $keterangan, $idaksi){
		$log = $this->session->all_userdata();
		$valid = false;
		
		$param = array (
			"id_surat" => $idSurat,
			"id_staff" => $idStaff
		);
		
		$query = $this->db->get_where("trans_disposisi", $param);
		$num = $query->num_rows();
		$dispose_by = $this->session->userdata("userid");
		
		$this->db->set("id_aksi", $idaksi);
		$this->db->set("tanggal_disposisi", $tglDisposisi);
		$this->db->set("tanggal_penyelesaian", $tglSelesai);
		$this->db->set("keterangan", $keterangan);
		$this->db->set("dispose_by", $dispose_by);
		
		if (!empty($num)) {			
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('username'));			
			$this->db->where($param);
			$valid = $this->db->update('trans_disposisi');
		
		}
		else {
			$this->db->set("id_surat", $idSurat);
			$this->db->set("id_staff", $idStaff);		
			$valid = $this->db->insert('trans_disposisi');
		}	
		
		return $valid;	
	}
	public function remarkSurat($idSurat)
	{
		$lev = $this->session->userdata("userleveljabatan");
	
		$this->db->set("status_disposisi", $lev);
		$this->db->where("id_surat", $idSurat);
		$valid = $this->db->update('trans_surat');
		return $valid;
	}
}
?>