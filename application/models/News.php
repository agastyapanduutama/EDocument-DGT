<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_news")
 */
class News
{

	/**
	 * @Id
	 * @Column(name="id_news", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	
	/**
	 * @Column(name="judul", type="string", length=200)
	 */
	private $judul;
	
	/**
	 * @Column(name="penulis", type="string", length=100)
	 */
	private $penulis;
	
	/**
	 * @Column(name="deskripsi", type="string")
	 */
	private $deskripsi;
	
	/**
	 * @Column(name="tgl_publikasi", type="string")
	 */
	private $tgl_publikasi;	
	
	/**
	 * @Column(name="add_date", type="string", length=100)
	 */	
	private $add_date;
	
	/**
	 * @Column(name="modified_date", type="string")
	 */
	private $modified_date;
	
	/**
	 * @Column(name="add_user", type="string", length=100, nullable=true)
	 */
	private $add_user;
	
	/**
	 * @Column(name="modified_user", type="string", length=100, nullable=true)
	 */
	private $modified_user;	
	
	
	public function setId($id)
	{
		$this->id = $id;
	}	
	public function setJudul($judul)
	{
		$this->judul = $judul;
	} 	 
	public function setPenulis($penulis)
	{
		$this->penulis = $penulis;
	} 
	public function setDeskripsi($deskripsi)
	{
		$this->deskripsi = $deskripsi;
	}
	public function setTglPublikasi($tgl_publikasi)
	{
		$this->tgl_publikasi = $tgl_publikasi;
	}
	public function setAddDate($add_date)
	{
		$this->add_date = $add_date;
	} 
	public function setModifiedDate($modified_date)
	{
		$this->modified_date = $modified_date;
	} 
	public function setAddUser($add_user)
	{
		$this->add_user = $add_user;
	} 
	public function setModifiedUser($modified_user)
	{
		$this->modified_user = $modified_user;
	} 
	
	public function getId(){ return $this->id; }
	public function getJudul(){ return $this->judul; } 
	public function getDeskripsi(){ return $this->deskripsi; } 
	public function getTglPublikasi(){ return $this->tgl_publikasi; } 
	public function getPenulis(){ return $this->penulis; } 	
	public function getAddDate(){ return $this->add_date; }	 
	public function getModifiedDate(){ return $this->modified_date; }		 
	public function getAddUser(){ return $this->add_user; }	 
	public function getModifiedUser(){ return $this->modified_user; }
}
?>