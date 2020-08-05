<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_sifatsurat")
 */
class SifatSurat
{

	/**
	 * @Id
	 * @Column(name="id_sifat", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="kode_sifat", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_sifat;	 
	
	/**
	 * @Column(name="nama_sifat", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_sifat;	 
	
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
	
    public function setKodeSifat($kode_sifat)
	{
		$this->kode_sifat = $kode_sifat;
	}
	
	public function setNamaSifat($nama_sifat){
		$this->nama_sifat = $nama_sifat;
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
	public function getKodeSifat() { return $this->kode_sifat; }
   	public function getNamaSifat() {  return $this->nama_sifat; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>