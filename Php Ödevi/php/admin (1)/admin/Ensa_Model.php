<?php
class Ensa_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
      }
	  function login($username,$password) 
	  {
        
        $this->db->select('*');
        $this->db->from('ensa_uye');
        $this->db->where('email', $username);
        $this->db->where('sifre', $password);
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
     }
	 //ÜYE EKLE
	 public function yeniuye($data)
		  {
		  if ($this->db->insert("ensa_uye",$data)) // ensa_uye tablosuna dataları ekle
		  {
		  return true;
		  }  
		}
		
		public function update_resim($data,$u_id)
		  {
			$this->db->set($data);
			$this->db->where('u_id', $u_id);
			$this->db->update('ensa_urun');
		  }
		//HABER EKLE
		 public function yeni_haberekle($data)
		  {
		  if ($this->db->insert("ensa_haber",$data)) // ensa_haber tablosuna dataları ekle
		  {
		  return true;
		  }  
		}
		public function insert_mesaj($data)
		  {
		  if ($this->db->insert("ensa_mesaj",$data)) // ensa_haber tablosuna dataları ekle
		  {
		  return true;
		  }  
		}
		//ÜRÜN EKLE
		public function urun_ekle($data)
		  {
		  if ($this->db->insert("ensa_urun",$data)) // ensa_urun tablosuna dataları ekle
		  {
		  return true;
		  }  
		}
		//ÜYE GÜNCELLE
		public function update_uye($data,$k_id)
		  {
			$this->db->set($data);
			$this->db->where('k_id', $k_id);
			$this->db->update('ensa_uye');
		  }
		  //ÜRÜN GÜNCELLE
		  public function update_urun($data,$u_id)
		  {
			$this->db->set($data);
			$this->db->where('u_id', $u_id);
			$this->db->update('ensa_urun');
		  }
		  //HABER GÜNCELLE
		  public function update_haber($data,$h_id)
		  {
			$this->db->set($data);
			$this->db->where('h_id', $h_id);
			$this->db->update('ensa_haber');
		  }
		//ÜYE SİL
	  public function delete_uye($k_id)
		  {
			  if ($this->db->delete("ensa_uye","k_id=".$k_id)) // ensa_uye tablosundan siler
		  {
		  return true;
		  } 
		  }
		  //ÜRÜN SİL
		  public function delete_urun($u_id)
		  {
			  if ($this->db->delete("ensa_urun","u_id=".$u_id)) // ensa_urun tablosundan siler
		  {
		  return true;
		  } 
		  }
		  //MESAJ SİL
		  public function delete_mesaj($m_id)
		  {
			  if ($this->db->delete("ensa_mesaj","m_id=".$m_id)) // ensa_urun tablosundan siler
		  {
		  return true;
		  } 
		  }
		  //HABER SİL
		  public function delete_haber($h_id)
		  {
			  if ($this->db->delete("ensa_haber","h_id=".$h_id)) // ensa_urun tablosundan siler
		  {
		  return true;
		  } 
		  }
		  
	 
}