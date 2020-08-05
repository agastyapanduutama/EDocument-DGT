<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class staff extends CI_Controller {	
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
			if($_POST)
			{
				$em = $this->em;
				$id = (float)$this->input->post("id");			
				$par["model"] = "models\Staff";
				$exist = false;
				 				
				if($id > 0) {
					$obj = $em->find($par["model"], $id);
					$par["method"] = "update";
				}
				else {
					$obj = new models\Staff;
					$par["method"] = "new";
					$exist = $em->getRepository($par["model"])->findOneBy(array("no_induk" => $this->input->post("no_induk")));
				}
				
				if(!$exist) {
					$photo = "";					
					
					if(!empty($_FILES["photo"]["name"])){
						$arr = explode('.',$_FILES["photo"]["name"]);
						$allow = $this->config->item("filetypes");
						$validfile = false;
						$lsc = count($arr) - 1;
						for($c=0; $c < count($allow); $c++)
						{
							if(strtolower($arr[$lsc]) == strtolower($allow[$c]))
									$validfile = true;
						}
						if($validfile)
						{
							$photo = "photo_".$this->input->post("no_induk") .".".$arr[$lsc]; 
							$config['upload_path'] = APPPATH."../assets/photo/";
							$config['file_name'] = $photo;
							$config['allowed_types'] = '*';
							$this->load->library('upload', $config);
	
							if (!$this->upload->do_upload("photo")){
									$error =  $this->upload->display_errors();
									$this->owner->alert("Upload Photo Staff Gagal `".$error."`","staff/form");
							}
							else 
									$upload = true;
						}
						else
							$this->owner->alert("Upload file dengan tipe $arr[$lsc] tidak diperkenankan","staff/form");
					}
		
					$obj->setNoInduk($this->input->post("no_induk"));
					$obj->setNama($this->input->post("nama"));
					$obj->setKelamin($this->input->post("kelamin"));
					$obj->setPhoto($photo);
					$obj->setEmail($this->input->post("email"));
					$obj->setStatus($this->input->post("status"));
					$obj->setIdGroup($this->input->post("group"));
					$obj->setIdJabatan($this->input->post("jabatan"));					
					
					try {
						$this->em->persist($obj);
						$this->em->flush();
						$par["id"] = $obj->getId();
						$this->logupdate->log_table($par);					 
					}
					catch(Exception $err){
						$message = $err->getMessage();
var_dump($message);
exit();	echo "<pre>";
						throw new Exception($message);
						echo "</pre>";
					}
			}
			else
				$this->owner->alert("Data dengan kode tersebut telah ada, penambahan gagal","staff/form");
			}
			
			$group = $this->em->getRepository("models\Group")->findAll();
			$jabatan = $this->em->getRepository("models\Jabatan")->findAll();
			$ct = $this->contentlayer->contenttext();
			$topnews = $this->contentlayer->topnews();
			$link = $this->contentlayer->linkeks();
			$content = array(
				"base_url" => base_url(),
				"page_title" => "Pengolahan Data Staff :: EBTKE",
				"log" => $log,
				"group" => $group,
				"jabatan" => $jabatan,
				"ct" =>$ct,
				"news" =>$topnews,
				"links" =>$link,							
			);
			$this->twig->display("stafffrm", $content);	
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
		
		$query1 = $this->db->query("select a.*, b.nama_group from mst_staff a 
                                            join mst_group b on a.id_group=b.id_group");	
		
		$page 	= $this->input->post("page");
		$limit 	= $this->input->post("rows");
		$sidx 	= $this->input->post("sidx");
		$sord 	= $this->input->post("sord");		
		$count 	= $query1->num_rows();		
		
		if(!$sidx) $sidx =1;		
		$whole =  $query1->result();
		$count 	= count($whole); 
		
		if($count>0) 
			$total_pages = ceil($count/$limit);    //calculating total number of pages
                else 
			$total_pages = 0;
		
		if ($page>$total_pages)
			$page=$total_pages; 
		
		$start = $limit*$page - $limit; // do not put $limit*($page - 1)
                $start = ($start<0)?0:$start; 
		
		$query2 = $this->db->query("select a.*, b.nama_group, c.nama_jabatan from mst_staff a 
                                        join mst_group b on a.id_group=b.id_group 
                                        join mst_jabatan c on a.id_jabatan=c.id_jabatan 
                                        order by $sidx $sord limit $start , $limit");							
		
		$data 	=  $query2->result();
		$responce->page = $page;
		$responce->total = $total_pages;
		$responce->records = $count;
		foreach($data as $row) {		
                    $responce->rows[$i]['id'] = $row->id_staff;
                    $responce->rows[$i]['cell'] = array($row->id_staff,
                                                    $row->no_induk,
                                                    $row->nama,
                                                    $row->kelamin,
                                                    $row->photo,
                                                    $row->email,	
                                                    $row->nama_group,							  
                                                    $row->nama_jabatan,
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

            $q = $em->createQuery("delete from models\Group a where a.id in ($t_id) ");
            $numDeleted = $q->execute();
	}
}
?>