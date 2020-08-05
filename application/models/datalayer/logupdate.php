<?php
class Logupdate extends CI_Model {
	
	var $em;
	
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function log_table($param)
	{
		$em 			= $this->em;
		
		$model 			= $param["model"];
		$id				= (float)$param["id"];
		$modifiedDate 	= date("Y-m-d H:i:s");
		$user 			= $this->session->userdata('username');
		$method			= $param["method"];
		$message		= "";
		
		try {
			$modtable = $em->find($model, $id);	
			if($method == "update"){
				$modtable->setModifiedDate($modifiedDate);
				$modtable->setModifiedUser($user);
			}
			else{
				$modtable->setAddDate($modifiedDate);
				$modtable->setAddUser($user);
			}
			$this->em->persist($modtable);
			$this->em->flush();				
			$message = "true"; 
			
		}
		catch(Exception $err){
			$message = "Log table error message : ".$err->getMessage();
		}
		
		return $message;		
	}	
}
?>