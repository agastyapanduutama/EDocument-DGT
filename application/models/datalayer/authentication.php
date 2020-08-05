<?php
class Authentication extends CI_Model {
	
	var $em;
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function loginauth($param)
	{
		$valid = false;
		$em = $this->em;
		$username = $param['username'];
		$password = md5($param['password']);		
		$user = $em->getRepository("models\User")->findOneBy(array("username" => $username, "password" => $password, 'status' => true));
		if($user)
		{
			if($user->getPassword() == $password and $user->getUsername() == $username){
				
				if($user->getLevel() == 'A'){
					$jabatan = 0;
				}
				
				$data = array(
					   'userid' 		=> $user->getId(),
					   'username' 		=> $user->getUsername(),
					   'usernamereal'	=> $user->getNamaLengkap(),
					   'userpassword'   => $user->getPassword(),
					   'userlevel'     	=> $user->getLevel(),
					   'usermodul'     	=> $user->getModul(),
					   'usergroup'     	=> $user->getIdGroup(),
					   'userlogintime'  => date("d/m/Y")." Pukul ".date("H:i"),
					   'userlogged' 	=> TRUE,
					   'userjabatan' 	=> $jabatan,
					   'userleveljabatan'=> 1,
					   'usernamajabatan' => "Direktur",
					   
				);
				$this->session->set_userdata($data);
				$valid = true;
			}			
		}
		else {
			$staff = $em->getRepository("models\Staff")->findOneBy(array("username" => $username, "password" => $password, 'status' => "Y"));
			if ($staff) {
				$jbt = $em->getRepository("models\Jabatan")->findOneBy(array("id" => $staff->getIdJabatan()));
				
			
				$data = array(
					   'userid' 		=> $staff->getId(),
					   'username' 		=> $staff->getUsername(),
					   'usernamereal'	=> $staff->getNama(),
					   'userpassword'   => $staff->getPassword(),
					   'userlevel'     	=> "S",
					   'usermodul'     	=> "S",
					   'usergroup'     	=> $staff->getIdGroup(),
					   'userlogintime'  => date("d/m/Y")." Pukul ".date("H:i"),
					   'userlogged' 	=> TRUE,
					   'userjabatan' 	=> $staff->getIdJabatan(),
					   'userleveljabatan'=> $jbt->getLevelJabatan(),
					   'usernamajabatan' => $jbt->getNamaJabatan(),
				);
				$this->session->set_userdata($data);
				$valid = true;
			}
		}
		
		return $valid;		
	}	
}
?>