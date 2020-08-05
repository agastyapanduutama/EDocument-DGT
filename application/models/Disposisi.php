<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="trans_disposisi")
 */
class Disposisi
{
	/**
	 * @Id
	 * @Column(name="id_disposisi", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId(){ return $this->id; }
	
	/**
	 * @Column(name="id_surat", type="integer", nullable=false)
	 */	
	private $id_surat;
	public function setIdSurat($id_surat)
	{
		$this->id_surat = $id_surat;
	}
	public function getIdSurat(){ return $this->id_surat; }
	
	/**
	 * @Column(name="tanggal_disposisi", type="string")
	 */	
	private $tanggal_disposisi;
	public function setTanggal($tanggal_disposisi)
	{
		$this->tanggal_disposisi = $tanggal_disposisi;
	}
	public function getTanggal(){ return $this->tanggal_disposisi; }
	
	/**
	 * @Column(name="tanggal_penyelesaian", type="string")
	 */	
	private $tanggal_penyelesaian;
	public function setTanggalSelesai($tanggal_penyelesaian)
	{
		$this->tanggal_penyelesaian = $tanggal_penyelesaian;
	}
	public function getTanggalSelesai(){ return $this->tanggal_penyelesaian; }
	
	/**
	 * @Column(name="status", type="integer")
	 */
	private $status;
	public function setStatua($status)
	{
		$this->status = $status;
	}
	public function getStatua(){ return $this->status; }
	
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