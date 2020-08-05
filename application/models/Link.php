<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_link")
 */
class Link
{
	/**
	 * @Id
	 * @Column(name="id_link", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 	 
	
	/**
	 * @Column(name="url_link", type="string", length=100, nullable=false)
	 */
	private $url_link;	
	
	/**
	 * @Column(name="nama_link", type="string", length=100)
	 */
	private $nama_link;	  
	
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
	
    public function setUrlLink($url_link)
	{
		$this->url_link = $url_link;
	}
	
	 public function setNamaLink($nama_link)
	{
		$this->nama_link = $nama_link;
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
	public function getUrlLink() { return $this->url_link; }
   	public function getNamaLink() {  return $this->nama_link; }
	public function getAddDate() { return $this->add_date; }
	public function getModifiedDate() { return $this->modified_date; }
   	public function getAddUser() { return $this->add_user; }
   	public function getModifiedUser() { return $this->modified_user; }   	
}
?>