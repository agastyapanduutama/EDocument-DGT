<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_perusahaan")
 */
class Perusahaan
{
	/**
	 * @Id
	 * @Column(name="id_perusahaan", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId(){ return $this->id; }
	
	/**
	 * @Column(name="npwp", type="string", nullable=false)
	 */	
	private $npwp;
	public function setNPWP($npwp)
	{
		$this->npwp = $npwp;
	}
	public function getNPWP(){ return $this->npwp; }
	
	/**
	 * @Column(name="nama_perusahaan", type="string")
	 */	
	private $nama_perusahaan;
	public function setNamaPerusahaan($nama_perusahaan)
	{
		$this->nama_perusahaan = $nama_perusahaan;
	}
	public function getNamaPerusahaan(){ return $this->nama_perusahaan; }
	
	/**
	 * @Column(name="pimpinan", type="string")
	 */	
	private $pimpinan;
	public function setPimpinan($pimpinan)
	{
		$this->pimpinan = $pimpinan;
	}
	public function getPimpinan(){ return $this->pimpinan; }
	
	/**
	 * @Column(name="siup", type="string")
	 */
	private $siup;
	public function setSIUP($siup)
	{
		$this->siup = $siup;
	}
	public function getSIUP(){ return $this->siup; }
	
	/**
	 * @Column(name="tgl_siup", type="string")
	 */
	private $tgl_siup;
	public function setTglSIUP($tgl_siup)
	{
		$this->tgl_siup = $tgl_siup;
	}
	public function getTglSIUP(){ return $this->tgl_siup; }	
	
	/**
	 * @Column(name="alamat_perusahaan", type="string")
	 */
	private $alamat_perusahaan;
	public function setAlamat($alamat_perusahaan)
	{
		$this->alamat_perusahaan = $alamat_perusahaan;
	}
	public function getAlamat(){ return $this->alamat_perusahaan; }	
	
	/**
	 * @Column(name="telp_perusahaan", type="string")
	 */
	private $telp_perusahaan;
	public function setTelp($telp_perusahaan)
	{
		$this->telp_perusahaan = $telp_perusahaan;
	}
	public function getTelp(){ return $this->telp_perusahaan; }	
	
	/**
	 * @Column(name="notaris", type="string")
	 */
	private $notaris;
	public function setNotaris($notaris)
	{
		$this->notaris = $notaris;
	}
	public function getNotaris(){ return $this->notaris; }	
	
	/**
	 * @Column(name="email", type="string")
	 */
	private $email;
	public function setEmail($email)
	{
		$this->email = $email;
	}
	public function getEmail(){ return $this->email; }
	
	
	/**
	 * @Column(name="kontak_person", type="string")
	 */
	private $kontak_person;
	public function setKontakPerson($kontak_person)
	{
		$this->kontak_person = $kontak_person;
	}
	public function getKontakPerson(){ return $this->kontak_person; }
	
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