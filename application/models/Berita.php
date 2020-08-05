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
	 * @Column(name="id_dokumen", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	
	/**
	 * @Column(name="id_kategori", type="integer")
	 */	
	private $id_kategori;
	
	/**
	 * @Column(name="judul", type="string", length=200)
	 */
	private $judul;
	
	/**
	 * @Column(name="deskripsi", type="string")
	 */
	private $deskripsi;
	
	/**
	 * @Column(name="nama_file_asli", type="string", length=100)
	 */
	private $nama_file_asli;	
	
	/**
	 * @Column(name="nama_file_alias", type="string", length=100)
	 */
	private $nama_file_alias;
	
	/**
	 * @Column(name="tipe_file", type="string", length=50)
	 */
	private $tipe_file;
	
	/**
	 * @Column(name="tgl_publikasi", type="string")
	 */
	private $tgl_publikasi;	
	
	/**
	 * @Column(name="penulis", type="string", length=100)
	 */
	private $penulis;
	
	/**
	 * @Column(name="pengunggah", type="integer", length=10)
	 */
	private $pengunggah;
	
	/**
	 * @Column(name="terbaca", type="integer", length=10)
	 */
	private $terbaca;
	
	/**
	 * @Column(name="publik", type="integer", length=1)
	 */
	private $publik;
	
	/**
	 * @Column(name="groupdok", type="string", length=100)
	 */	
	private $groupdok; 
	
	/**
	 * @Column(name="status", type="integer", length=1)
	 */
	private $status;
	
	/**
	 * @Column(name="add_date", type="string")
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
	public function setIdKategori($id_kategori)
	{
		$this->id_kategori = $id_kategori;
	} 
	public function setJudul($judul)
	{
		$this->judul = $judul;
	} 	 
	public function setDeskripsi($deskripsi)
	{
		$this->deskripsi = $deskripsi;
	} 
	public function setNamaAsli($nama_file_asli)
	{
		$this->nama_file_asli = $nama_file_asli;
	} 
	public function setNamaAlias($nama_file_alias)
	{
		$this->nama_file_alias = $nama_file_alias;
	} 
	public function setTipeFile($nama_file_alias)
	{
		$this->tipe_file = $nama_file_alias;
	} 
	public function setTglPublikasi($tgl_publikasi)
	{
		$this->tgl_publikasi = $tgl_publikasi;
	} 
	public function setPenulis($penulis)
	{
		$this->penulis = $penulis;
	} 
	public function setPengunggah($pengunggah)
	{
		$this->pengunggah = $pengunggah;
	} 
	public function setTerbaca($terbaca)
	{
		$this->terbaca = $terbaca;
	} 
	public function setPublik($publik)
	{
		$this->publik = $publik;
	} 
	public function setGroup($groupdok)
	{
		$this->groupdok = $groupdok;
	}
	public function setStatus($status)
	{
		$this->status = $status;
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
	public function getIdKategori(){ return $this->id_kategori; } 
	public function getJudul(){ return $this->judul; } 
	public function getDeskripsi(){ return $this->deskripsi; } 
	public function getNamaAsli(){ return $this->nama_file_asli; } 
	public function getNamaAlias(){ return $this->nama_file_alias; } 	
	public function getTipeFile(){ return $this->tipe_file; } 	
	public function getTglPublikasi(){ return $this->tgl_publikasi; } 
	public function getPenulis(){ return $this->penulis; } 	
	public function getPengunggah(){ return $this->pengunggah; }	
	public function getTerbaca(){ return $this->terbaca; }	
	public function getPublik(){ return $this->publik; }
	public function getGroup(){ return $this->groupdok; }
	public function getStatus(){ return $this->status; }	 
	public function getAddDate(){ return $this->add_date; }	 
	public function getModifiedDate(){ return $this->modified_date; }		 
	public function getAddUser(){ return $this->add_user; }	 
	public function getModifiedUser(){ return $this->modified_user; }
	
}
?>