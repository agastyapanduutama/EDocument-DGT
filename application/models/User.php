<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_user")
 */
class User
{

	/**
	 * @Id
	 * @Column(name="id_user", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	
	
	/**
	 * @Column(name="id_group", type="integer", nullable=false)
	 */	
	private $id_group; 
		 
	/**
	 * @Column(name="username", type="string", length=100, unique=true, nullable=false)
	 */
	private $username;	 
	
	/**
	 * @Column(name="password", type="string", length=100, nullable=false)
	 */
	private $password;
	
	/**
	 * @Column(name="nama_lengkap", type="string", length=100, nullable=false)
	 */
	private $nama_lengkap;	
	
	
	/**
	 * @Column(name="level", type="string", length=1, nullable=true)
	 */
	private $level;	
	
	/**
	 * @Column(name="keterangan", type="string", nullable=true)
	 */
	private $keterangan; 
	
	/**
	 * @Column(name="status", type="integer", length=1, nullable=true)
	 */
	private $status;	 
	
	/**
	 * @Column(name="last_login", type="datetime")
	 */
	private $last_login;
	
	/**
	 * @Column(name="modul", type="string", nullable=true)
	 */	
	private $modul; 	 
	
	/**
	 * @Column(name="add_date", type="string")
	 */
	private $add_date;	 
	
	/**
	 * @Column(name="modified_date", type="string")
	 */
	private $modified_date;	 
	
	/**
	 * @Column(name="add_user", type="string", length=20, nullable=true)
	 */
	private $add_user;	 
	
	/**
	 * @Column(name="modified_user", type="string", length=20, nullable=true)
	 */
	private $modified_user;	 
	
	
	
	/*Set Value*/
	public function setId($id)
	{
		$this->id = $id;
	}
	
	public function setIdGroup($id_group)
	{
		$this->id_group = $id_group;
	}
	
    public function setUsername($username)
	{
		$this->username = $username;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function setNamaLengkap($nama_lengkap){
		$this->nama_lengkap = $nama_lengkap;
	}
	
	public function setStatus($status){
		$this->status = $status;
	}
	
	public function setLevel($level){
		$this->level = $level;
	}
	
	public function setKeterangan($keterangan){
		$this->keterangan = $keterangan;
	}
	
	public function setModul($modul){
		$this->modul = $modul;
	}
	
	public function setLastLogin($last_login){
		$this->last_login = $last_login;
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
	/* Get Value*/
	
	public function getId(){ return $this->id; }
	public function getUsername() { return $this->username; }
   	public function getPassword() {  return $this->password; }
	public function getNamaLengkap() { return $this->nama_lengkap; }
	public function getIdGroup(){ return $this->id_group; }
	public function getStatus() { return $this->status; }
   	public function getLevel() { return $this->level; }
	public function getKeterangan() { return $this->keterangan; }
	public function getModul() { return $this->modul; }
   	public function getAddDate() { return $this->add_date; }
   	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>