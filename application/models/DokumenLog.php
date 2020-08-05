<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_dokumenlog")
 */
class DokumenLog
{

	/**
	 * @Id
	 * @Column(name="id_log", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	
	/**
	 * @Column(name="id_dokumen", type="integer", nullable=false)
	 */	
	private $id_dokumen; 
	
	/**
	 * @Column(name="id_user", type="integer", nullable=false)
	 */	
	private $id_user; 
	
	/**
	 * @Column(name="username", type="string")
	 */
	private $username;
	
	/**
	 * @Column(name="ip_address", type="string")
	 */
	private $ip_address;
	
	/**
	 * @Column(name="tgl_baca", type="string")
	 */
	private $tgl_baca;
	
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
	
	public function setIdDokumen($id_dokumen){
		$this->id_dokumen = $id_dokumen;
	}
	
	public function setIdUser($id_user){
		$this->id_user = $id_user;
	}
	
	public function setUsername($username){
		$this->username = $username;
	}
	
	public function setIPAddress($ip_address){
		$this->ip_address = $ip_address;
	}
	
	public function setTglBaca($tgl_baca){
		$this->tgl_baca = $tgl_baca;
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
	public function getIdDokumen(){ return $this->id_dokumen; }
	public function getIdUser(){ return $this->id_user; } 
	public function getUsername(){ return $this->username; } 
	public function getIpAddress(){ return $this->ip_address; } 
	public function getTglBaca() { return $this->tgl_baca; }
	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }  	
}
?>