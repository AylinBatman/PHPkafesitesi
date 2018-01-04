<?php
class User_Model extends CI_Model {

	function __construct() 
	{ 
         parent::__construct(); 
    }

 //------------------------------------------------------USERS--------------------------------

    public function uye_insert($data) 
	{
		if ($this->db->insert("uyeler",$data)) 
		{
		  return true;
		}  
	}

	public function uye_delete($uye_id)
    {
		if ($this->db->delete("uyeler","uye_id=".$uye_id)) 
		{
		  return true;
		} 
	}

	public function uye_update($data,$uye_id)
	{
		$this->db->set($data);
		$this->db->where('uye_id', $uye_id);
		$this->db->update('uyeler');
	}


 //-----------------------------------------------------urunS------------------------------


	public function urun_insert($data)
	{
		if ($this->db->insert("urunler",$data)) 
		{
		  return true;
		}  
	}
    
    public function urun_delete($urun_id)
	{
		if ($this->db->delete("urunler","urun_id=".$urun_id)) 
		{
		  return true;
		} 
	}

	public function urun_update($data,$urun_id)
	{
		$this->db->set($data);
		$this->db->where('urun_id', $urun_id);
		$this->db->update('urunler');
	}

 //-----------------------------------------------------haber------------------------------


    public function haber_insert($data)
	{
		if ($this->db->insert("haberler",$data)) 
		{
		  return true;
		}  
	}

	public function haber_delete($haber_id)
	{
		if ($this->db->delete("haberler","haber_id=".$haber_id)) // haber tablosundan siler
		{
		  return true;
		}
	} 
     
    public function haber_update($data,$haber_id)
	{
		$this->db->set($data);
		$this->db->where('haber_id', $haber_id);
		$this->db->update('haberler');
	}



 //-----------------------------------------------------MESSAGE ------------------------------

	public function mesaj_insert($data)
	{
		if ($this->db->insert("mesaj",$data)) 
		{
		  return true;
		}  
	}

	public function mesaj_delete($mesaj_id)
	{
		if ($this->db->delete("mesaj","mesaj_id=".$mesaj_id)) 
		{
		  return true;
		} 
	}


 //------------------------------------------------------ABOUT--------------------------------

	public function hakkimizda_update($data,$firma_id)
	{
		$this->db->set($data);
		$this->db->where('firma_id', $firma_id);
		$this->db->update('firma');
	}


 //------------------------------------------------------IMAGE--------------------------------    

    public function urun_image_update($data,$urun_id)
	{
		$this->db->set($data);
		$this->db->where('urun_id', $urun_id);
		$this->db->update('urunler');
	}

 //------------------------------------------------------LOGIN--------------------------------

	function login($username,$password) 
	{
        
        $this->db->select('*');
        $this->db->from('uyeler');
        $this->db->where('uye_email', $username);
        $this->db->where('uye_sifre', $password);
        $this->db->limit(1);        
        
        $query = $this->db->get();
        if($query->num_rows() == 1) 
        {
            return $query->result(); 
        } 
        else 
        {
            return false; 
        }
     }
 //------------------------------------------------ END ------------------------------
}