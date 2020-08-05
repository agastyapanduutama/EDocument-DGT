<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pemakai extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
		$this->load->model('datalayer/contentlayer');
		$this->em = $this->doctrine->em;
	}
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
		
		if($userlogged){
			$em = $this->em;
			if($_POST)
			{
				$id_group = (float)$this->input->post("id_group");
				$username = $this->input->post("username");
				$pass1 = $this->input->post("pass1");
				$pass2 = $this->input->post("pass2");
				$modul = 'S';
				$nama_lengkap = $this->input->post("nama_lengkap");
				
				$validform = false;
				if($pass1 == $pass2)
					$valid = true;
				
				if(!empty($username) and !empty($pass1) and !empty($pass2) and !empty($nama_lengkap))
				{
					$id = (float)$this->input->post("id");			
					$par["model"] = "models\User";
					$exist = false;
										
					$password = md5($pass2);
									
					if($id > 0){
						$user = $em->find($par["model"], $id);
						$par["method"] = "update";
					}
					else{
						$user = new models\User;
						$par["method"] = "new";
						$exist = $em->getRepository($par["model"])->findOneBy(array("username" => $username));
					}
					
					if(!$exist){
						$level = $this->input->post("level");
						if($id_group == 0)
							$level = "A";
							
						$user->setIdGroup($id_group);
						$user->setUserName($username);
						$user->setPassword($password);
						$user->setNamaLengkap($nama_lengkap);
						$user->setLevel($level);
						$user->setModul($modul);
						$user->setKeterangan($this->input->post("keterangan"));
						$user->setStatus($this->input->post("status"));
						try {
							$this->em->persist($user);
							$this->em->flush();
							$par["id"] = $user->getId();
							$this->logupdate->log_table($par);					 
						}
						catch(Exception $err){
							$message = $err->getMessage();
// var_dump($message);
					exit();		
					$this->owner->alert($message,"pemakai/form");
						}
					}
					else
					{
						$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","pemakai/form");
					}
				}
				else{
					$this->owner->alert("Pengisian belum lengkap","pemakai/form");
				}
							
												
			}
			// $group = $em->getRepository("models\Group")->findAll();
			$group = $this->db->query("SELECT * FROM mst_group ORDER BY kode_group ASC")->result();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Kategori Dokumen :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,
				"groups" => $group,		
			);
			$this->twig->display("pemakaifrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function viewdata()
	{
		$i=0;
		
		$segment= $this->uri->segment_array();
		$field 	= NULL;
		$param 	= NULL;		
		if(isset($segment[4]) and isset($segment[5])){
			$field 	= $segment[4];
			$param 	= $segment[5];		
		}	
		
		$query1 = $this->db->query("SELECT a.*, b.nama_group from mst_user a join mst_group b on a.id_group=b.id_group order by a.id_user");	
		
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");		
		$count 	= $query1->num_rows();		
		
		// if(!$sidx) $sidx =1;		
		// $whole =  $query1->result();
		// $count 	= count($whole); 
		
		// if($count>0) 
		// 	$total_pages = ceil($count/$limit);    //calculating total number of pages
       	// else 
		// 	$total_pages = 0;
		
		// if ($page>$total_pages)
		// 	$page=$total_pages; 
		
		// $start = $limit*$page - $limit; // do not put $limit*($page - 1)
        // $start = ($start<0)?0:$start; 
		
		$query2 = $this->db->query("SELECT a.*, if(a.level='A','Administrator',if(a.level='O','Operator','User Group')) as nama_level, if(a.status=1,'Aktif','Non Aktif') as nama_status,
									b.nama_group from mst_user a join mst_group b on a.id_group=b.id_group 
									");							
		
		$data 	=  $query2->result();
		// $responce->page = $page;
		// $responce->total = $total_pages;
		// $responce->records = $count;
		foreach($data as $row) {
		
			if($row->level=="A"){
				$priv = "Full Akses";
			}
			elseif($row->level=="O"){
				$priv = "Baca/Upload File";
			}
			elseif($row->level=="U"){
				$priv = "Baca File";
			}
			
			$responce->rows[$i]['id'] = $row->id_user;
			$responce->rows[$i]['cell'] = array($row->id_user,
											  $row->username,
											  $row->nama_group,
											  $row->nama_level,
											  $row->nama_lengkap,	
											  $row->nama_status,  
											  $row->keterangan,
											  $priv,
											  $row->id_group,
											  $row->level,
											  $row->status,
											  date( "j F Y", strtotime($row->add_date)),
											  $row->add_user,
											  date( "j F Y", strtotime($row->modified_user)),
											  $row->add_user,
			);
			$i++;		
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;	
						
	}
	
	public function finddata()
	{
		$i=0;
		$segment= $this->uri->segment_array();
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$query = $this->db->query("SELECT a.*, if(a.level='A','Administrator',if(a.level='O','Operator','User Group')) as nama_level, if(a.status=1,'Aktif','Non Aktif') as nama_status,
									b.nama_group from mst_user a join mst_group b on a.id_group=b.id_group where $by like '%$find%'");	
		
		$var['grid'] 	=  $query->result();
		foreach($var['grid'] as $row) {
			if($row->level=="A"){
				$priv = "Full Akses";
			}
			elseif($row->level=="O"){
				$priv = "Baca/Upload File";
			}
			elseif($row->level=="U"){
				$priv = "Baca File";
			}
			
			$responce->rows[$i]['id'] = $row->id_user;
			$responce->rows[$i]['cell'] = array($row->id_user,
											  $row->username,
											  $row->nama_group,
											  $row->nama_level,
											  $row->nama_lengkap,	
											  $row->nama_status,										  
											  $row->keterangan,
											  $priv,
											  $row->id_group,
											  $row->level,
											  $row->status,
											  date( "j F Y", strtotime($row->add_date)),											  
											  $row->add_user,
											  date( "j F Y", strtotime($row->modified_user)),
											  $row->add_user											  
											  
			);
			$i++;
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;
	}
	public function delete_data(){
		$id = $this->input->post('id');
		$em = $this->em;
		
		$t_id="";
		for($x = 0; $x < count($id); $x++)
		{
			if($x < count($id)-1)
				$t_id.= $id[$x].",";
			else
				$t_id.= $id[$x];
		}
		
		$q = $em->createQuery("delete from models\User a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}
}
?>