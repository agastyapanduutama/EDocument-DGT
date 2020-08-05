<?php

namespace models; 

class Subgroup
{

	/**
	 * @Id
	 * @Column(name="id_subgroup", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */
	private $id;

	/**
	 * @Column(name="kode_subgroup", type="string", length=20, unique=true, nullable=false)
	 */
	private $kode_subgroup;

	/**
	 * @Column(name="nama_subgroup", type="string", length=100, unique=true, nullable=true)
	 */
	private $nama_subgroup;

	/**
	 * @Column(name="keterangan", type="string", nullable=true)
	 */
	private $keterangan;

	/**
	 * @Column(name="dpp", type="integer", length=1)
	 */
	private $dpp;

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

	public function setKodesubGroup($kode_subgroup)
	{
		$this->kode_subgroup = $kode_subgroup;
	}

	public function setNamasubGroup($nama_subgroup)
	{
		$this->nama_subgroup = $nama_subgroup;
	}

	public function setNamaGroup($id_group)
	{
		$this->id_group = $id_group;
	}

	public function setKeterangan($keterangan)
	{
		$this->keterangan = $keterangan;
	}

	public function setDpp($dpp)
	{
		$this->dpp = $dpp;
	}

	public function setAddDate($add_date)
	{
		$this->add_date = $add_date;
	}

	public function setModifiedDate($modified_date)
	{
		$this->modified_date = $modified_date;
	}

	public function setAddUser($add_user)
	{
		$this->add_user = $add_user;
	}

	public function setModifiedUser($modified_user)
	{
		$this->modified_user = $modified_user;
	}

	public function getId()
	{
		return $this->id;
	}
	public function getKodesubGroup()
	{
		return $this->kode_subgroup;
	}
	public function getNamasubGroup()
	{
		return $this->nama_subgroup;
	}
	public function getKeterangan()
	{
		return $this->keterangan;
	}
	public function getDpp()
	{
		return $this->dpp;
	}
	public function getAddDate()
	{
		return $this->add_date;
	}
	public function getModifiedDate()
	{
		return $this->modified_date;
	}
	public function getAddUser()
	{
		return $this->add_user;
	}
	public function getModifiedUser()
	{
		return $this->modified_user;
	}   	
	public function get_group()
	{
		$this->db->select('*');
		$this->db->from('mst_group');
		$query = $this->db->get();
		return $query->result();	
	}

	public function insert($data)
	{
		$this->db->insert('mst_subgroup', $data);
	}

}
