<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_tujuansurat")
 */
class TujuanSurat
{

	/**
	 * @Id
	 * @Column(name="id_tujuan", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="kode_tujuan", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_tujuan;	 
	
	/**
	 * @Column(name="nama_tujuan", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_tujuan;	 
	
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
	
    public function setKodeTujuan($kode_tujuan)
	{
		$this->kode_tujuan = $kode_tujuan;
	}
	
	public function setNamaTujuan($nama_tujuan){
		$this->nama_tujuan = $nama_tujuan;
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
	public function getKodeTujuan() { return $this->kode_tujuan; }
   	public function getNamaTujuan() {  return $this->nama_tujuan; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>