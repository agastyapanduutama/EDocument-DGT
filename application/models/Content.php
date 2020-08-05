<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="mst_content")
 */
class Content
{

	/**
	 * @Id
	 * @Column(name="id_content", type="integer", nullable=false)
	 */	
	private $id; 
	
	/**
	 * @Column(name="content_beranda", type="string")
	 */
	private $beranda;
	
	/**
	 * @Column(name="content_tentang", type="string")
	 */
	private $tentang;
	
	/**
	 * @Column(name="content_runningtext", type="string")
	 */
	private $running_text;
	
	/**
	 * @Column(name="content_kontak", type="string")
	 */
	private $kontak;
	
	/**
	 * @Column(name="content_backup1", type="string")
	 */
	private $backup1;
	
	/**
	 * @Column(name="content_backup2", type="string")
	 */
	private $backup2;
	
	/**
	 * @Column(name="content_backup3", type="string")
	 */
	private $backup3;
	
	/**
	 * @Column(name="content_backup4", type="string")
	 */
	private $backup4;
	
		
	public function setId($id)
	{
		$this->id = $id;
	}
	public function setBeranda($beranda)
	{
		$this->beranda = $beranda;
	} 
	public function setTentang($tentang)
	{
		$this->tentang = $tentang;
	} 	 
	public function setRunningText($running_text)
	{
		$this->running_text = $running_text;
	} 
	public function setKontak($kontak)
	{
		$this->kontak = $kontak;
	} 
	public function setBackup1($backup1)
	{
		$this->backup1 = $backup1;
	} 
	public function setBackup2($backup2)
	{
		$this->backup2 = $backup2;
	} 
	public function setBackup3($backup3)
	{
		$this->backup3 = $backup3;
	} 
	public function setBackup4($backup4)
	{
		$this->backup4 = $backup4;
	} 	
	
	public function getId(){ return $this->id; }
	public function getBeranda(){ return $this->beranda; }
	public function getTentang(){ return $this->tentang; } 
	public function getRunningText(){ return $this->running_text; } 
	public function getKontak(){ return $this->kontak; } 
	public function getBackup1(){ return $this->backup1; } 
	public function getBackup2(){ return $this->backup2; } 	
	public function getBackup3(){ return $this->backup3; } 	
	public function getBackup4(){ return $this->backup4; } 
	
}
?>