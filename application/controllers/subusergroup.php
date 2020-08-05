<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class subusergroup extends CI_Controller {	
	var $em;	
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('datalayer/logupdate');
        $this->load->model('datalayer/contentlayer');
        // $this->load->model('subgroup');
		$this->em = $this->doctrine->em;
	}
	public function form()
	{
		$log = $this->session->all_userdata();
		$userlogged = $this->session->userdata('userlogged');
        
        var_dump($_POST);

		if($userlogged){
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");
				// $par["model"] = $this->db->query("SELECT * FROM mst_subgroup");
				// $par["model"] = "models\Group";
				$par["model"] = "models\Subgroup";
				$exist = false;
				 				
				if($id > 0){
					// $group = $em->find($par["model"], $id);
					$group = $em->find($par["model"], $id);
					// $par["method"] = "update";
					echo "uwui";
				}
				else{
					// echo "hei";
					$group = new models\Subgroup;
					$par["method"] = "new";
					$exist = $this->db->query("SELECT * FROM mst_subgroup WHERE kode_subgroup = '" . $this->input->post('kode_subgroup') . "'");
					// $exist = $em->getRepository($par["model"])->findOneBy(array("kode_subgroup" => $this->input->post("kode_subgroup")));
				}
				
				if($exist){			
					$i = $this->input;
					$data = array(
						'kode_subgroup'	=> $i->post('kode_subgroup'),
						'header_subgroup'	=> '0',
						'kode_subgroup'	=> $i->post('kode_subgroup'),
						'nama_subgroup'	=> $i->post('nama_subgroup'),
						'id_group'		=> $i->post('id_group'),
						'keterangan'	=> $i->post('keterangan'),
					);
					try {
						$this->db->insert('mst_subgroup', $data);			 
					}
					catch(Exception $err){
						$message = $err->getMessage();
						var_dump($message);
						exit();
					}
				}
				else
				{
					$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","subusergroup/form");
				}								
			}
			$group = $this->em->getRepository("models\Group")->findAll();
			$groupna = $this->db->query("SELECT * FROM mst_group")->result();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();

			var_dump($groupna);

            $content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data User Group :: EBTKE",
				"log" => $log,
				"ct" =>$ct,
				"news" =>$topnews,
                "links" =>$link,				
                // "data" => $groupna
                "groups" => $groupna,		
			);
			$this->twig->display("subusergroupfrm",$content);	
		}
		else
			redirect("../");
	}
	
	public function viewdata()
	{
		$i=0;	
		$em = $this->em;
			
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");	
		
		// $q = $em->createQuery('SELECT a FROM models\Group a');
		$q = $this->db->query("SELECT * FROM mst_subgroup");
        $count = count($q->result());
		
		// // if($count>0)
		// // 	$total_pages = ceil($count/$limit);
       	// // else
		// // 	$total_pages = 0;
		
		// // if ($page>$total_pages) $page=$total_pages; 
		
		// $start = $limit*$page - $limit;
        // $start = ($start<0)?0:$start; 
		
		// $responce->page = $page;
		// $responce->total = $total_pages;
		// $responce->records = $count;
		
		// $query = $em->createQuery('SELECT a FROM models\Group a');
        $queryna = $this->db->query("SELECT * FROM mst_group LEFT JOIN mst_group ON mst_subgroup.id_group = mst_group.id_group");
		$data = $queryna->result_array();
        
        print_r($queryna);
        
		foreach($data as $row)
		{
			if($row["id_subgroup"] > 0){
				$responce->rows[$i]['id_subgroup'] = $row["id_subgroup"];
				$responce->rows[$i]['cell'] = array($row["id_subgroup"],
												  $row["kode_subgroup"],
												  $row["nama_subgroup"],
												  $row["nama_group"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),		  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;	
			}	
				
		}
		if($i>0) $json = json_encode($responce);
		else $json = "";
		echo $json;					
	}
	
	public function finddata()
	{
		$i=0;
		$em = $this->em;
		
		$segment = $this->uri->segment_array();	
		
		$by 	= $segment[3];
		$find 	= $segment[4];
		
		$qb = $em->createQueryBuilder();
		$qb->add("select", "a")
			->add("from", "models\Group a")
			->add("where", $qb->expr()->orx(
			$qb->expr()->like("$by", "?2")
		));
		$qb->setParameter(2, "%".$find."%"); 
		$query = $qb->getQuery();
		$data = $query->getArrayResult();
		foreach($data as $row)
		{
			
			if($row["id"] > 0){
				$responce->rows[$i]['id'] = $row["id"];
				$responce->rows[$i]['cell'] = array($row["id"],
												  $row["kode_group"],
												  $row["nama_group"],
												  $row["keterangan"],
												  date( "j F Y", strtotime($row["add_date"])),											  
												  $row["add_user"],
												  date( "j F Y", strtotime($row["modified_user"])),
												  $row["add_user"]
												  
				);
				$i++;
			}		
					
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
		
		$q = $em->createQuery("delete from models\Subgroup a where a.id in ($t_id) ");
		$numDeleted = $q->execute();
		
	}
}
