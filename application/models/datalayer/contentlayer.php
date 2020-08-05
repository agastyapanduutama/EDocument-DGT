<?php
class Contentlayer extends CI_Model {
	
	var $em;
	
    public function __construct()
    {
        parent::__construct();
		$this->em = $this->doctrine->em;
    }
	
	public function contenttext()
	{
		$content = $this->em->getRepository("models\Content")->findOneBy(array("id" => 1));		
		return $content;		
	}
	
	public function linkeks()
	{
		$link = $this->em->getRepository("models\Link")->findAll();	
		return $link;		
	}
	
	public function listPropinsi()
	{
		$this->db->order_by("propinsi", "asc");
		$query = $this->db->get('mst_propinsi');
		$result = $query->result();
		return $result;		
	}
	
	public function topnews()
	{
		
		$qb = $this->em->createQueryBuilder();
		$qb->add('select', 'a')
		   ->add('from', 'models\News a')
		   ->add('orderBy', 'a.id DESC')
		   ->setFirstResult(0)
		   ->setMaxResults(10);
   		$qb = $qb->getQuery();
		return $qb->getResult();
	}
	
	public function topdoks()
	{
		$query = $this->db->query("select a.*, substring(a.deskripsi,1,400) as singkatdesk, b.nama_lengkap, c.nama_kategori from mst_dokumen a join mst_user b on a.pengunggah=b.id_user
										join mst_dokumenkat c on a.id_kategori=c.id_kategori where a.publik=1 order by a.id_dokumen desc limit 0, 10");
		return $query->result();
	}
	
	public function nomor_agenda($id_group, $id_jenis)
	{	
		$grp = $this->em->getRepository("models\Group")->findOneBy(array("id" => $id_group));
		$jns = $this->em->getRepository("models\JenisSurat")->findOneBy(array("id" => $id_jenis));
		
		$query = $this->db->query("select count(*) as total from trans_surat");
		$data = $query->row();
		$no_urut = (float)$data->total + 1; 	
		$no_agenda = $no_urut."/".$jns->getKodeJenis();
		
		$dpp = $grp->getDpp();
		if($dpp) 
			$no_agenda.= "/DPP/".date("Y");
		else
			$no_agenda.= "/DPP/".$grp->getKodeGroup()."/".date("Y");
			
		return $no_agenda;
	}	
	
	public function foreign_key()
	{
		$c = uniqid(rand(), true);
		$md5c = md5($c);
		return $md5c;		
	}	
}
?>