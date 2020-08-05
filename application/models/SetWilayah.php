<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="trans_wilayah")
 */
class SetWilayah
{
	/**
	 * @Id
	 * @Column(name="id_project", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId(){ return $this->id; }
	
	/**
	 * @Column(name="kode_project", type="string", nullable=false)
	 */	
	private $kode_project;
	public function setKodeProject($kode_project)
	{
		$this->kode_project = $kode_project;
	}
	public function getKodeProject(){ return $this->kode_project; }
	
	/**
	 * @Column(name="id_survey", type="integer")
	 */	
	private $id_survey;
	public function setIdSurvey($id_survey)
	{
		$this->id_survey = $id_survey;
	}
	public function getIdSurvey(){ return $this->id_survey; }
	
	/**
	 * @Column(name="id_perusahaan", type="integer")
	 */	
	private $id_perusahaan;
	public function setIdPerusahaan($id_perusahaan)
	{
		$this->id_perusahaan = $id_perusahaan;
	}
	public function getIdPerusahaan(){ return $this->id_perusahaan; }
	
	/**
	 * @Column(name="tanggal_awal", type="string")
	 */
	private $tanggal_awal;
	public function setTanggalAwal($tanggal_awal)
	{
		$this->tanggal_awal = $tanggal_awal;
	} 
	public function getTanggalAwal(){ return $this->tanggal_awal; }	 
	
	
	/**
	 * @Column(name="tanggal_akhir", type="string")
	 */
	private $tanggal_akhir;
	public function setTanggalAkhir($tanggal_akhir)
	{
		$this->tanggal_akhir = $tanggal_akhir;
	} 
	public function getTanggalAkhir(){ return $this->tanggal_akhir; }	 
	
	
	/**
	 * @Column(name="nama_daerah", type="string")
	 */
	private $nama_daerah;
	public function setNamaDaerah($nama_daerah)
	{
		$this->nama_daerah = $nama_daerah;
	} 
	public function getNamaDaerah(){ return $this->nama_daerah; }	
	
	/**
	 * @Column(name="kota_id", type="integer")
	 */
	private $kota_id;
	public function setKotaId($kota_id)
	{
		$this->kota_id = $kota_id;
	} 
	public function getKotaId(){ return $this->kota_id; }
	
	/**
	 * @Column(name="luas_wilayah", type="string")
	 */
	private $luas_wilayah;
	public function setLuasWilayah($luas_wilayah)
	{
		$this->luas_wilayah = $luas_wilayah;
	} 
	public function getLuasWilayah(){ return $this->luas_wilayah; }
	
	
	/**
	 * @Column(name="sumber_daya", type="integer")
	 */
	private $sumber_daya;
	public function setSumberDaya($sumber_daya)
	{
		$this->sumber_daya = $sumber_daya;
	} 
	public function getSumberDaya(){ return $this->sumber_daya; } 
	
	/**
	 * @Column(name="cadangan", type="integer")
	 */
	private $cadangan;
	public function setCadangan($cadangan)
	{
		$this->cadangan = $cadangan;
	} 
	public function getCadangan(){ return $this->cadangan; } 
	
	
	/**
	 * @Column(name="status", type="string")
	 */
	private $status;
	public function setStatus($status)
	{
		$this->status = $status;
	} 
	public function getStatus(){ return $this->status; } 
	
	/**
	 * @Column(name="sk_menteri", type="string")
	 */
	private $sk_menteri;
	public function setSkMenteri($sk_menteri)
	{
		$this->sk_menteri = $sk_menteri;
	} 
	public function getSkMenteri(){ return $this->sk_menteri; } 
	
	/**
	 * @Column(name="keterangan", type="string")
	 */
	private $keterangan;
	public function setKeterangan($keterangan)
	{
		$this->keterangan = $keterangan;
	} 
	public function getKeterangan(){ return $this->keterangan; } 
	
	/**
	 * @Column(name="add_date", type="string")
	 */
	private $add_date;
	public function setAddDate($add_date)
	{
		$this->add_date = $add_date;
	} 
	public function getAddDate(){ return $this->add_date; }	 
	
	/**
	 * @Column(name="modified_date", type="string")
	 */
	private $modified_date;
	public function setModifiedDate($modified_date)
	{
		$this->modified_date = $modified_date;
	} 
	public function getModifiedDate(){ return $this->modified_date; }		 
	
	/**
	 * @Column(name="add_user", type="string", length=100, nullable=true)
	 */
	private $add_user;
	public function setAddUser($add_user)
	{
		$this->add_user = $add_user;
	} 
	public function getAddUser(){ return $this->add_user; }	 
	
	/**
	 * @Column(name="modified_user", type="string", length=100, nullable=true)
	 */
	private $modified_user;	
	public function setModifiedUser($modified_user)
	{
		$this->modified_user = $modified_user;
	}
	public function getModifiedUser(){ return $this->modified_user; }
	
}
?>