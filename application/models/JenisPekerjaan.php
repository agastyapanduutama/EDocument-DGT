<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_jenispekerjaan")
 */
class JenisPekerjaan
{
	/**
	 * @Id
	 * @Column(name="id_jenispekerjaan", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId(){ return $this->id; }
	
	/**
	 * @Column(name="kode_jenispekerjaan", type="string", nullable=false)
	 */	
	private $kode_jenis;
	public function setKodeJenis($kode_jenis)
	{
		$this->kode_jenis = $kode_jenis;
	}
	public function getKodeJenis(){ return $this->kode_jenis; }
	
	/**
	 * @Column(name="nama_jenispekerjaan", type="string")
	 */	
	private $nama_jenis;
	public function setNamaJenis($nama_jenis)
	{
		$this->nama_jenis = $nama_jenis;
	}
	public function getNamaJenis(){ return $this->nama_jenis; }
	
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