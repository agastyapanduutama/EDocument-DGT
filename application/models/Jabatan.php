<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_jabatan")
 */
class Jabatan
{

	/**
	 * @Id
	 * @Column(name="id_jabatan", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="kode_jabatan", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_jabatan;	 
	
	/**
	 * @Column(name="inisial", type="string", length=10, nullable=true)
	 */
	private $inisial;	 
		
	/**
	 * @Column(name="nama_jabatan", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_jabatan;	 
		
	/**
	 * @Column(name="parent_jabatan", type="integer", length=10, nullable=true)
	 */
	private $parent_jabatan;
	
	/**
	 * @Column(name="lev", type="integer", length=10, nullable=true)
	 */
	private $level_jabatan;	 	
	
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
	
    public function setKodeJabatan($kode_jabatan)
	{
		$this->kode_jabatan = $kode_jabatan;
	}
	
	public function setNamaJabatan($nama_jabatan){
		$this->nama_jabatan = $nama_jabatan;
	}
	
	public function setInisial($inisial){
		$this->inisial = $inisial;
	}
	
	public function setParentJabatan($parent_jabatan){
		$this->parent_jabatan = $parent_jabatan;
	}
	
	public function setLevelJabatan($level_jabatan){
		$this->level_jabatan = $level_jabatan;
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
	public function getKodeJabatan() { return $this->kode_jabatan; }
   	public function getNamaJabatan() {  return $this->nama_jabatan; }
	public function getInisial() {  return $this->inisial; }
	public function getParentJabatan() {  return $this->parent_jabatan; }
	public function getLevelJabatan() {  return $this->level_jabatan; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>