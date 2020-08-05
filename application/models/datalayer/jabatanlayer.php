<?php
class Jabatanlayer extends CI_Model {
	
	var $em;
	
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function JabatanData()
	{
		$jabatan = $this->em->getRepository("models\Jabatan")->findAll();	
		return $jabatan;
	}
}
?>