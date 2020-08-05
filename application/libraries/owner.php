<?php
class owner{
	var $CI;	
	
	public function __construct(){
	    $this->CI =& get_instance();
	 	$this->CI->load->library('session');
	}
		
	public function alert($confirm, $url = NULL){
		$out = "<script>";
		$out.= "alert('$confirm');";
		
		if(!empty($url))
			$out.= "window.location='".base_url()."index.php/$url';";
		
		$out.="</script>";
		echo $out;
	}
	
	public function local_date($date){
		if(!empty($date)){
			$t=explode("-",$date);
			$tanggal=$t[1];
			switch($tanggal){
				case"01";
				 $bulan="Januari";
				break;
				case"02";
				 $bulan="Februari";
				break;
				case"03";
				 $bulan="Maret";
				break;
				case"04";
				 $bulan="April";
				break;
				case"05";
				 $bulan="Mei";
				break;
				case"06";
				 $bulan="Juni";
				break;
				case"07";
				 $bulan="Juli";
				break;
				case"08";
				 $bulan="Agustus";
				break;
				case"09";
				 $bulan="September";
				break;
				case"10";
				 $bulan="Oktober";
				break;
				case"11";
				 $bulan="Nopember";
				break;
				case"12";
				 $bulan="Desember";
				break;
			}
			if($date=="0000-00-00"){
			return '';
			}
			else{
				$output = $t[2]." ".$bulan." ".$t[0];
				$sr = explode(" ",$t[2]);
				
				if(count($sr) > 1)
					$output = $sr[0]." ".$bulan." ".$t[0].", Jam : ".str_replace(":",".",substr($sr[1],0,5));
				
				return $output;	
			}
		}
		else{
			return '';
		}	
	}
	
}
?>