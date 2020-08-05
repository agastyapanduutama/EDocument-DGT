<?php 
namespace models; 
/**
 * @Entity
 * @Table(name="trans_surat")
 */
class Surat
{
	/**
	 * @Id
	 * @Column(name="id_surat", type="integer", nullable=false)
	 * @GeneratedValue(strategy="AUTO")
	 */	
	private $id; 
	public function setId($id)
	{
		$this->id = $id;
	}
	public function getId(){ return $this->id; }
	
	/**
	 * @Column(name="fk_id", type="string", length=100, unique=true, nullable=false)
	 */	
	private $fk_id;
	public function setFkId($fk_id)
	{
		$this->fk_id = $fk_id;
	}
	public function getFkId(){ return $this->fk_id; }
	
	/**
	 * @Column(name="no_agenda", type="string", length=100, unique=true, nullable=false)
	 */	
	private $no_agenda;
	public function setNoAgenda($no_agenda)
	{
		$this->no_agenda = $no_agenda;
	}
	public function getNoAgenda(){ return $this->no_agenda; }
	
	/**
	 * @Column(name="no_surat", type="string")
	 */	
	private $no_surat;
	public function setNoSurat($no_surat)
	{
		$this->no_surat = $no_surat;
	}
	public function getNoSurat(){ return $this->no_surat; }
	
	/**
	 * @Column(name="tanggal", type="string")
	 */
	private $tanggal;
	public function setTanggal($tanggal)
	{
		$this->tanggal = $tanggal;
	}
	public function getTanggal(){ return $this->tanggal; }
	
	/**
	 * @Column(name="tanggal_klarifikasi", type="string")
	 */
	private $tanggal_klarifikasi;
	public function setTanggalKlar($tanggal_klarifikasi)
	{
		$this->tanggal_klarifikasi = $tanggal_klarifikasi;
	}
	public function getTanggalKlar(){ return $this->tanggal_klarifikasi; }
	
	/**
	 * @Column(name="asal_surat", type="string")
	 */
	private $asal_surat;
	public function setAsalSurat($asal_surat)
	{
		$this->asal_surat = $asal_surat;
	}
	public function getAsalSurat(){ return $this->asal_surat; }
	
	/**
	 * @Column(name="lampiran", type="string")
	 */
	private $lampiran;
	public function setLampiran($lampiran)
	{
		$this->lampiran = $lampiran;
	}
	public function getLampiran(){ return $this->lampiran; }
	
	/**
	 * @Column(name="kode_arsip", type="string")
	 */
	private $kode_arsip;
	public function setKodeArsip($kode_arsip)
	{
		$this->kode_arsip = $kode_arsip;
	}
	public function getKodeArsip(){ return $this->kode_arsip; }
	
	/**
	 * @Column(name="tunjuk_silang", type="string")
	 */
	private $tunjuk_silang;
	public function setTunjukSilang($tunjuk_silang)
	{
		$this->tunjuk_silang = $tunjuk_silang;
	}
	public function getTunjukSilang(){ return $this->tunjuk_silang; }
	
	/**
	 * @Column(name="jadwal_penyusutan", type="string")
	 */
	private $jadwal_penyusutan;
	public function setJadwalSusut($jadwal_penyusutan)
	{
		$this->jadwal_penyusutan = $jadwal_penyusutan;
	}
	public function getJadwalSusut(){ return $this->jadwal_penyusutan; }
	
	/**
	 * @Column(name="tempat_penyimpanan", type="string")
	 */
	private $tempat_penyimpanan;
	public function setTempatSimpan($tempat_penyimpanan)
	{
		$this->tempat_penyimpanan = $tempat_penyimpanan;
	}
	public function getTempatSimpan(){ return $this->tempat_penyimpanan; }	
	
	/**
	 * @Column(name="indeks", type="string")
	 */
	private $indeks;
	public function setIndeks($indeks)
	{
		$this->indeks = $indeks;
	}
	public function getIndeks(){ return $this->indeks; }
	
	/**
	 * @Column(name="hal", type="string")
	 */
	private $hal;
	public function setHal($hal)
	{
		$this->hal = $hal;
	}
	public function getHal(){ return $this->hal; }
	
	/**
	 * @Column(name="catatan", type="string")
	 */
	private $catatan;
	public function setCatatan($catatan)
	{
		$this->catatan = $catatan;
	}
	public function getCatatan(){ return $this->catatan; }
	
	/**
	 * @Column(name="lama_penyelesaian", type="string")
	 */
	private $lama_penyelesaian;
	public function setLamaSelesai($lama_penyelesaian)
	{
		$this->lama_penyelesaian = $lama_penyelesaian;
	}
	public function getLamaSelesai(){ return $this->lama_penyelesaian; }
	
	/**
	 * @Column(name="tanggal_penyelesaian", type="string")
	 */
	private $tanggal_penyelesaian;
	public function setTanggalSelesai($tanggal_penyelesaian)
	{
		$this->tanggal_penyelesaian = $tanggal_penyelesaian;
	}
	public function getTanggalSelesai(){ return $this->tanggal_penyelesaian; }
	
	/**
	 * @Column(name="file_surat", type="string")
	 */
	private $file_surat;
	public function setFileSurat($file_surat)
	{
		$this->file_surat = $file_surat;
	}
	public function getFileSurat(){ return $this->file_surat; }
	
	/**
	 * @Column(name="id_group", type="integer", length=100)
	 */	
	private $id_group;
	public function setIdGroup($id_group)
	{
		$this->id_group = $id_group;
	}
	public function getIdGroup(){ return $this->id_group; }
	
	/**
	 * @Column(name="id_jenissurat", type="integer", length=100)
	 */	
	private $id_jenissurat;
	public function setIdJenis($id_jenissurat)
	{
		$this->id_jenissurat = $id_jenissurat;
	}
	public function getIdJenis(){ return $this->id_jenissurat; }
	
	/**
	 * @Column(name="no_urut", type="integer", length=100)
	 */	
	private $no_urut;
	public function setNoUrut($no_urut)
	{
		$this->no_urut = $no_urut;
	}
	public function getNoUrut(){ return $this->no_urut; }
	
	/**
	 * @Column(name="id_sifat", type="integer", length=100)
	 */	
	private $id_sifat;
	public function setIdSifat($id_sifat)
	{
		$this->id_sifat = $id_sifat;
	}
	public function getIdSifat(){ return $this->id_sifat; }
	
	/**
	 * @Column(name="id_staff", type="integer", length=100)
	 */	
	private $id_staff;
	public function setIdStaff($id_staff)
	{
		$this->id_staff = $id_staff;
	}
	public function getIdStaff(){ return $this->id_staff; }
	
	/**
	 * @Column(name="id_aksi", type="integer", length=100)
	 */	
	private $id_aksi;
	public function setIdAksi($id_aksi)
	{
		$this->id_aksi = $id_aksi;
	}
	public function getIdAksi(){ return $this->id_aksi; }
	
	/**
	 * @Column(name="status_disposisi", type="integer")
	 */
	private $status_disposisi;	
	public function setStatusDis($status_disposisi)
	{
		$this->status_disposisi = $status_disposisi;
	}
	public function getStatusDis(){ return $this->status_disposisi; }
	
	/**
	 * @Column(name="add_date", type="string")
	 */
	private $add_date;
	public function setAddDate($add_date)
	{
		$this->add_date = $add_date;
	} 
	public function getAddDate(){ return $this->add_date; }	 
	
	/**
	 * @Column(name="modified_date", type="string")
	 */
	private $modified_date;
	public function setModifiedDate($modified_date)
	{
		$this->modified_date = $modified_date;
	} 
	public function getModifiedDate(){ return $this->modified_date; }		 
	
	/**
	 * @Column(name="add_user", type="string", length=100, nullable=true)
	 */
	private $add_user;
	public function setAddUser($add_user)
	{
		$this->add_user = $add_user;
	} 
	public function getAddUser(){ return $this->add_user; }	 
	
	/**
	 * @Column(name="modified_user", type="string", length=100, nullable=true)
	 */
	private $modified_user;	
	public function setModifiedUser($modified_user)
	{
		$this->modified_user = $modified_user;
	}
	public function getModifiedUser(){ return $this->modified_user; }
	
	
}
?>