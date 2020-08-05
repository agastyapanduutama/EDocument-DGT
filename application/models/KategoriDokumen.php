<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_dokumenkat")
 */
class KategoriDokumen
{
	/**
	 * @Id
	 * @Column(name="id_kategori", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="kode_kategori", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_kategori;	 
	
	/**
	 * @Column(name="nama_kategori", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_kategori;	 
	
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
	
    public function setKodeKategori($kode_kategori)
	{
		$this->kode_kategori = $kode_kategori;
	}
	
	public function setNamaKategori($nama_kategori){
		$this->nama_kategori = $nama_kategori;
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
	public function getKodeKategori() { return $this->kode_kategori; }
   	public function getNamaKategori() {  return $this->nama_kategori; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>