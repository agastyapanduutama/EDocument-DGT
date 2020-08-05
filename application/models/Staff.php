<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_staff")
 */
class Staff
{

	/**
	 * @Id
	 * @Column(name="id_staff", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="no_induk", type="string", unique=true, length=100, nullable=false)
	 */
	private $no_induk;	 
	
	/**
	 * @Column(name="nama", type="string", length=100, nullable=false)
	 */
	private $nama;	 
		
	/**
	 * @Column(name="kelamin", type="string", length=1, nullable=true)
	 */
	private $kelamin;	 
		
	/**
	 * @Column(name="photo", type="string", length=100, nullable=true)
	 */
	private $photo;	 	
	
	/**
	 * @Column(name="email", type="string", nullable=true)
	 */
	private $email;
	
	/**
	 * @Column(name="username", unique=true, type="string", nullable=true)
	 */
	private $username;
	
	/**
	 * @Column(name="password", type="string", nullable=true)
	 */
	private $password;	 
	
	/**
	 * @Column(name="id_jabatan", type="integer", nullable=true)
	 */
	private $id_jabatan;	 
	
	/**
	 * @Column(name="id_group", type="integer", nullable=true)
	 */
	private $id_group;
	
	/**
	 * @Column(name="status", type="string", nullable=true)
	 */
	private $status;
		
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
	
    public function setNoInduk($no_induk)
	{
		$this->no_induk = $no_induk;
	}
	
	public function setNama($nama){
		$this->nama = $nama;
	}
	
	public function setKelamin($kelamin){
		$this->kelamin = $kelamin;
	}
	
	public function setPhoto($photo){
		$this->photo = $photo;
	}
	
	public function setEmail($email){
		$this->email = $email;
	}
	
	public function setUsername($username){
		$this->username = $username;
	}
	
	public function setStatus($status){
		$this->status = $status;
	}
	
	public function setPassword($password){
		$this->password = $password;
	}
	
	public function setIdJabatan($id_jabatan){
		$this->id_jabatan = $id_jabatan;
	}
	
	public function setIdGroup($id_group){
		$this->id_group = $id_group;
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
	public function getNoInduk() { return $this->no_induk; }
   	public function getNama() {  return $this->nama; }
	public function getKelamin() {  return $this->kelamin; }
	public function getPhoto() {  return $this->photo; }
	public function getEmail() {  return $this->email; }
	public function getUsername() {  return $this->username; }
	public function getPassword() {  return $this->password; }
	public function getIdJabatan() {  return $this->id_jabatan; }
	public function getStatus() {  return $this->status; }
	public function getIdGroup() {  return $this->id_group; }
	public function getKeterangan() { return $this->keterangan; }
   	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>