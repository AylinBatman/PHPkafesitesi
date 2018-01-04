<?php
class User_Model extends CI_Model {

	function __construct() { 
         parent::__construct(); 
    }
    //--------------------------------------------------USER--------------------------------------
    public function insert_user($data)
        {
        if ($this->db->insert("users",$data)) // Kullanıcı Kaydet
        {
        return true;
        }  
    }
    public function delete_user($id)
        {
        if ($this->db->delete("users","user_id=".$id)) // Kullanıcı Sil
        {
        return true;
        }  
    }
    public function update_user($data,$id)  // Kullanıcı Güncelle
    {
        $this->db->where('user_id', $id);
        $this->db->update('users' ,$data);
        return true;
    } 

    //--------------------------------------------- PRODUCTS---------------------------------------------
    public function insert_product($data)
        {
        if ($this->db->insert("products",$data)) // Ürün Ekle
        {
        return true;
        }  
    }
    public function delete_product($id)
        {
        if ($this->db->delete("products","p_id=".$id)) // Ürün Sil
        {
        return true;
        }  
    }
    public function update_product($data,$id)  // Ürün Güncelle
    {
        $this->db->where('p_id', $id);
        $this->db->update('products' ,$data);
        return true;
    } 

    //------------------------------------------------------ NEWCAST------------------------------------
    public function insert_newscast($data)
        {
        if ($this->db->insert("newscast",$data)) // Haber Ekle
        {
        return true;
        }  
    }

    public function delete_newscast($id)
        {
        if ($this->db->delete("newscast","nc_id=".$id)) // Haber Sil
        {
        return true;
        }  
    }
    public function update_newscast($data,$id)  // Haber Güncelle
    {
        $this->db->where('nc_id', $id);
        $this->db->update('newscast' ,$data);
        return true;
    } 

    //--------------------------------------------------- MESSAGE ---------------------------------------------
    public function insert_message($data)
        {
        if ($this->db->insert("messsage",$data)) // Mesaj Ekle
        {
        return true;
        }  
    }


    //------------------------------------------------------- LOGIN --------------------------------------------
    function login($username,$password) 
	  {
        
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email', $username);
        $this->db->where('user_password', $password);
        $this->db->limit(1);
         
        
        $query = $this->db->get();
        if($query->num_rows() == 1) {
            return $query->result(); 
        } else {
            return false; 
        }
     }
}