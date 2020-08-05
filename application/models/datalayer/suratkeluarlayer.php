<?php
class suratkeluarlayer extends CI_Model {
	
    public function __construct()
    {
        parent::__construct();
    }
	
	public function detailSurat($idSurat)
	{
		$query = $this->db->query("select a.*, b.nama_sifat, c.nama_aksi, d.nama_jenis, e.nama
									from trans_suratkeluar a join mst_sifatsurat b on a.id_sifat=b.id_sifat
									join mst_aksisurat c on a.id_aksi=c.id_aksi
									join mst_jenis d on a.id_jenissurat=d.id_jenissurat
									left join mst_staff e on a.id_staff=e.id_staff where a.id_surat=$idSurat");
		return $query->row();
	}
	
	public function detailSurat2($idSurat, $idKeluar)
	{
		$query = $this->db->query("select a.id_surat, a.id_staff, a.no_surat, a.no_agenda, a.tanggal_buat, a.file_surat, a.id_aksi, a.id_sifat, a.id_jenissurat, a.lampiran,		
									b.nama_sifat, c.nama_aksi, d.nama_jenis, e.nama, f.tanggal_selesai, f.perihal, f.catatan
									from trans_suratkeluar a join mst_sifatsurat b on a.id_sifat=b.id_sifat
									join mst_aksisurat c on a.id_aksi=c.id_aksi
									join mst_jenis d on a.id_jenissurat=d.id_jenissurat
									join trans_keluar f on f.id_surat=a.id_surat
									left join mst_staff e on a.id_staff=e.id_staff where a.id_surat=$idSurat and f.id_keluar= $idKeluar");
		return $query->row();
	}
	
	public function getAtasan($idStaff)
	{
	
		$byLev = "";
		$log = $this->session->all_userdata();
		$lev = $this->session->userdata('userleveljabatan');
		if($lev > 2) {
			$byLev = "and d.id_group=a.id_group";
		
		}
		
		
		$query = $this->db->query("
			select a.*, b.parent_jabatan, d.nama as nama_atasan, d.id_staff as id_atasan, e.nama_jabatan as jabatan_atasan
			from mst_staff a join mst_jabatan b on a.id_jabatan=b.id_jabatan
			join mst_staff d on d.id_jabatan=b.parent_jabatan $byLev
			join mst_jabatan e on e.id_jabatan=d.id_jabatan
			where a.id_staff=$idStaff;
		");
		$result = 0;
		$num = $query->num_rows();
		
		if ($num > 0) {
			$data = $query->row();
			$result = $data->id_atasan;
		}
		return $result;
	}
	
	public function saveSurat($noSurat, $noAgenda, $tglBuat, $tglSelesai, $fileSurat, $perihal, $catatan, $idAksi, $idSifat, $idJenisSurat, $lampiran)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$query = $this->db->get_where("trans_suratkeluar", array("no_surat" => $noSurat));
		$num = $query->num_rows();
		
		$idStaff = $this->session->userdata('userid');
		
		$this->db->set("id_staff", $idStaff);
		$this->db->set("no_surat", $noSurat);
		$this->db->set("no_agenda", $noAgenda);
		$this->db->set("tanggal_buat", $tglBuat);
		$this->db->set("tanggal_selesai", $tglSelesai);
		$this->db->set("file_surat", $fileSurat);
		$this->db->set("perihal", $perihal);
		$this->db->set("catatan", $catatan);
		$this->db->set("id_aksi", $idAksi);
		$this->db->set("id_sifat", $idSifat);
		$this->db->set("id_jenissurat", $idJenisSurat);
		$this->db->set("lampiran", $lampiran);	
		$this->db->set("status_keluar", 1);		
		
		if (!empty($num)) {
			$data = $query->row();
			$idSurat = $data->id_surat;
			
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('username'));
			$this->db->where("id_surat", $idSurat);
			$valid = $this->db->update('trans_suratkeluar');
		
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('username'));
			
			$valid = $this->db->insert('trans_suratkeluar');
		}	
		$insert_id = $this->db->insert_id();
		$this->db->trans_complete();
		
		$idSurat = $insert_id;
		return $idSurat;		
	}
	
	public function saveKeluarSurat($idSurat, $idStaff, $tglBuat, $tglSelesai, $idAksi, $perihal, $catatan, $statusKeluar)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$query = $this->db->get_where("trans_keluar", array("id_surat" => $idSurat, "id_staff" => $idStaff));
		$num = $query->num_rows();
		$idPembuat = $this->session->userdata('userid');
		
		$this->db->set("id_surat", $idSurat);
		$this->db->set("id_staff", $idStaff);
		$this->db->set("tanggal_buat", $tglBuat);
		$this->db->set("tanggal_selesai", $tglSelesai);
		$this->db->set("id_aksi", $idAksi);
		$this->db->set("perihal", $perihal);
		$this->db->set("catatan", $catatan);
		$this->db->set("status_keluar", $statusKeluar);	
		$this->db->set("id_pembuat", $idPembuat);
		if (!empty($num)) {
			$data = $query->row();
			$idSurat = $data->id_surat;
			
			$this->db->set("modified_date", date("Y-m-d H:i:s"));
			$this->db->set("modified_user", $this->session->userdata('username'));
			$this->db->where(array("id_surat" => $idSurat, "id_staff" => $idStaff));
			$valid = $this->db->update('trans_keluar');
		
		}
		else {
			$this->db->set("add_date", date("Y-m-d H:i:s"));
			$this->db->set("add_user", $this->session->userdata('username'));
			
			$valid = $this->db->insert('trans_keluar');
		}	
		
		return $valid;		
	}
	public function remarkSurat($idKeluar, $status)
	{	
		$log = $this->session->all_userdata();
		$valid = false;
		
		$this->db->set("modified_date", date("Y-m-d H:i:s"));
		$this->db->set("modified_user", $this->session->userdata('username'));
		$this->db->set("status_keluar", $status);
		$this->db->where("id_keluar", $idKeluar);
		$valid = $this->db->update('trans_keluar');
		
		return $valid;		
	}
}
?>