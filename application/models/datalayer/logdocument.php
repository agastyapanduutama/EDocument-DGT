<?php
class Logdocument extends CI_Model {
	
	var $em;
	
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function logdok($id_dokumen)
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		$logs = false;
		
		$id_dokumen = $id_dokumen;
		$ip_address = $_SERVER['REMOTE_ADDR']; 
		$username = "Publik";
		$user_id = 0;
		if($userlogged)
		{
			$username = $this->session->userdata('usernamereal');
			$user_id = $this->session->userdata('userid');	
		}
		
		$logdok = new models\DokumenLog;
		$logdok->setIdDokumen($id_dokumen);
		$logdok->setIdUser($user_id);
		$logdok->setUsername($username);
		$logdok->setIPAddress($ip_address);
		$logdok->setTglBaca(date("Y-m-d H:i:s"));
		try {
			$this->em->persist($logdok);
			$this->em->flush();	
			$logs = true;
			
				$dok = $this->em->find("models\Dokumen", $id_dokumen);	
				$dok->setTerbaca($dok->getTerbaca() + 1);
				$this->em->persist($dok);
				$this->em->flush();	 
		}
		catch(Exception $err){
			$message = $err->getMessage();
			echo $message;
		}	
		
		return $logs;	
	}	
}
?>