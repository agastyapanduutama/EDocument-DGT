<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_aksisurat")
 */
class AksiSurat
{

	/**
	 * @Id
	 * @Column(name="id_aksi", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="kode_aksi", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_aksi;	 
	
	/**
	 * @Column(name="nama_aksi", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_aksi;	 
	
	/**
	 * @Column(name="keterangan", type="string", nullable=true)
	 */
	private $keterangan;	 
	
	/**
	 * @Column(type="string")
	 */
	private $add_date;
		 
	/**
	 * @Column(type="string", length=20, nullable=true)
	 */
	private $modified_date;	 
	
	/**
	 * @Column(type="string", length=100, nullable=true)
	 */
	private $add_user;
	
	/**
	 * @Column(type="string", length=100, nullable=true)
	 */
	private $modified_user;	 
	
	public function setId($id)
	{
		$this->id = $id;
	}
	
    public function setKodeAksi($kode_aksi)
	{
		$this->kode_aksi = $kode_aksi;
	}
	
	public function setNamaAksi($nama_aksi){
		$this->nama_aksi = $nama_aksi;
	}
	
	public function setKeterangan($keterangan){
		$this->keterangan = $keterangan;
	}
	
	public function setAddDate($add_date){
		$this->add_date = $add_date;
	}
	
	public function setModifiedDate($modified_date){
		$this->modified_date = $modified_date;
	}
	
	public function setAddUser($add_user){
		$this->add_user = $add_user;
	}
	
	public function setModifiedUser($modified_user){
		$this->modified_user = $modified_user;
	}
	
    public function getId(){ return $this->id; }
	public function getKodeAksi() { return $this->kode_aksi; }
   	public function getNamaAksi() {  return $this->nama_aksi; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>