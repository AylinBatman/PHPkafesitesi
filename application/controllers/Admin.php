<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
		$this->load->helper(array('form', 'url'));
		$this->load->model('User_Model');
			
	}
    public function index()
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("uyeler");
			$data["veri"]=$query->result(); 
			$query= $this->db->query('SELECT * FROM mesaj order by mesaj_detay desc limit 0,5');
			$data2["mesaj"]=$query->result();
			$query= $this->db->query('SELECT * FROM uyeler order by uye_tarih desc limit 0,5');
			$data2["uye"]=$query->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/content',$data2);
			$this->load->view('admin/footer');
		}		
	}


	//-------------------------------------------------- USER ---------------------------------------

	public function yeni_uye_formu() // yeniuye
	{		 
		if(!$this->session->userdata('logged_in'))
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/uye_kaydetmeformu');	
			$this->load->view('admin/footer');	
		}		
	}

	public function uye_listele() //uyeliste
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("uyeler"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/uye_listele',$data); 	
			$this->load->view('admin/footer');	
		}
	}
	
	public function uye_kayit_ekle() // kayit_ekle
	{   
	   $this->load->model('User_Model'); 
		$kont=0;
		if ($this->input->post('uye_adsoyad')==NULL )
			$kont=10;
		if ($this->input->post('uye_email')==NULL)
			$kont=10;
		if ($this->input->post('uye_sifre')==NULL)
			$kont=10;
		if ($this->input->post('uye_cinsiyet')==NULL)
			$kont=10;
		if ($kont==0)
		{
			$data=array(
				'uye_adsoyad' => $this->input->post('uye_adsoyad'),
				'uye_email' => $this->input->post('uye_email'),
				'uye_sifre' => $this->input->post('uye_sifre'),
				'uye_cinsiyet' => $this->input->post('uye_cinsiyet')	
			);		
			$this->User_Model->uye_insert($data);		
			redirect("/admin/yeni_uye_formu");
		}
		else
		{			
			redirect("/admin");
		}
	}		

	public function uye_duzenle($uye_id) //uyeduzenle
	{ 
        $query = $this->db->get_where("uyeler",array("uye_id"=>$uye_id)); 
        $data['veri'] = $query->result(); 	
		$this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/uye_duzenle',$data); 	
	    $this->load->view('admin/footer');	
	}

	public function uye_guncelle($uye_id) // uye_guncelle
	{  		
		$this->load->model('User_Model'); 
		$data=array(
			'uye_adsoyad' => $this->input->post('uye_adsoyad'),
			'uye_email' => $this->input->post('uye_email'),
			'uye_cinsiyet' => $this->input->post('uye_cinsiyet'),
			'uye_sifre' => $this->input->post('uye_sifre'),
			'uye_yetki' => $this->input->post('uye_yetki')
		);		
		$this->User_Model->uye_update($data,$uye_id); 
		redirect("admin/uye_listele"); 
	}


	public function uye_sil($uye_id) // uyesil
	{
		$this->load->model('User_Model'); 
        $this->User_Model->uye_delete($uye_id);
		redirect(base_url().'Admin/uye_listele');		
	}


	//-------------------------------------------------- urunS ---------------------------------------


	public function urun_sil($urun_id)  //urunsil
	{
		$this->load->model('User_Model'); 
        $this->User_Model->urun_delete($urun_id);
		redirect(base_url().'Admin/urun_listele');		
	}

	public function urun_ekle() // urunekle
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/urun_ekle');	
			$this->load->view('admin/footer');	
		}		
	}


	public function urun_kaydet() //urun_ekle
	{   
	   $this->load->model('User_Model');
	   $data=array( 
	   	   	'urun_marka' => $this->input->post('urun_marka'),
	   	   	'urun_model' => $this->input->post('urun_model'),
		    'urun_uretimtarihi' => $this->input->post('urun_uretimtarihi'),
		    'urun_fiyat' => $this->input->post('urun_fiyat'),
		    'urun_detay' => $this->input->post('urun_detay'),
		    'urun_slider' => $this->input->post('urun_slider'),
		    'urun_tipi' => $this->input->post('urun_tipi'),			
		    'urun_slider2' => $this->input->post('urun_slider2'),
		    'urun_ekran' => $this->input->post('urun_ekran'),
		);		
		$this->User_Model->urun_insert($data);		
		redirect("/admin/urun_ekle");
	}

	public function urun_listele() // urunlistele
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("urunler"); 
			$data["veri"]=$query->result();
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/urun_listele',$data); 
			$this->load->view('admin/footer');		
		}
	}

	public function urun_resmi_duzenle() // urunresimguncelle
	{
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("urunler"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/urun_resmi_duzenle',$data);	
			$this->load->view('admin/footer');	
		}
	}


	public function urun_duzenle($urun_id) // urunduzenle
	{ 
        $query = $this->db->get_where("urunler",array("urun_id"=>$urun_id)); 
        $data['veri'] = $query->result();	
		$this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/urun_duzenle',$data);		
	    $this->load->view('admin/footer');
	}


	public function urun_guncelle($urun_id) // urun_guncelle
	{  
		$this->load->model('User_Model'); 
		$data=array(
			'urun_marka' => $this->input->post('urun_marka'),
			'urun_model' => $this->input->post('urun_model'),
			'urun_uretimtarihi' => $this->input->post('urun_uretimtarihi'),
			'urun_fiyat' => $this->input->post('urun_fiyat'),
			'urun_detay' => $this->input->post('urun_detay'),
			'urun_slider' => $this->input->post('urun_slider'),
			'urun_tipi' => $this->input->post('urun_tipi'),
			'urun_slider2' => $this->input->post('urun_slider2'),
			'urun_ekran' => $this->input->post('urun_ekran')
		);		
		$this->User_Model->urun_update($data,$urun_id); 
		redirect("admin/urun_listele"); 	
	}



	//-------------------------------------------------- haber ---------------------------------------

	public function haber_ekle() //haberekle
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$this->load->view('admin/header');	
			$this->load->view('admin/sidebar');
			$this->load->view('admin/haber_ekle');		
			$this->load->view('admin/footer');
		}		
	}

	public function haber_sil($haber_id) // habersil
	{
		$this->load->model('User_Model');           
        $this->User_Model->haber_delete($haber_id);
		redirect(base_url().'Admin/haber_listele');		
	}
	
	public function haber_kaydet() // yeni_haberekle
	{		 		
		$this->load->model('User_Model');
		$data=array(
			'haber_baslik' => $this->input->post('haber_baslik'),
			'haber_detay' => $this->input->post('haber_detay'),			
		);		
		$this->User_Model->haber_insert($data);		
		redirect("/admin/haber_ekle");
	}
		
	public function haber_listele() //haberlistele
	{		 
		if(!$this->session->userdata('logged_in'))
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("haberler"); 
			$data["veri"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/haber_listele',$data); 
			$this->load->view('admin/footer');
		}		
	}	



	public function haber_duzenle($haber_id) //haberduzenle
	{ 
        $query = $this->db->get_where("haberler",array("haber_id"=>$haber_id)); 
        $data['veri'] = $query->result();
	    $this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/haber_duzenle',$data); 		
	}
	
	public function haber_guncelle($haber_id) // haber_guncelle
	{  
		$this->load->model('User_Model');
		$tarih= date("d-m-Y H:i:s");
		$data=array(
			'haber_detay' => $this->input->post('haber_detay'),
			'haber_baslik' => $this->input->post('haber_baslik'),
		);		
		$this->User_Model->haber_update($data,$haber_id); 		
		redirect("admin/haber_listele");
	}



	//-------------------------------------------------- MESSAGE---------------------------------------

     public function mesajlari_listele() // mesajlistele
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$query=$this->db->get("mesaj"); 
			$data["mesaj_icerik"]=$query->result(); 
			$this->load->view('admin/header');
			$this->load->view('admin/sidebar');
			$this->load->view('admin/mesajlar',$data); 
			$this->load->view('admin/footer');
		
		}		
	}
		

	
	public function mesajlari_sil($mesaj_id) // mesajsil
	{
		$this->load->model('User_Model');           
        $this->User_Model->mesaj_delete($mesaj_id);
		redirect(base_url().'Admin/mesajlari_listele');		
	}

	//-------------------------------------------------- ABOUT ---------------------------------------

	public function hakkimizda() //about
	{		 
		if(!$this->session->userdata('logged_in')) 
        {
			$this->login();
		}
		else
		{
			$this->load->helper('form');
			$query=$this->db->get("firma"); 
			$data["company"]=$query->result();
			$this->load->view('admin/header');		
			$this->load->view('admin/sidebar');
			$this->load->view('admin/hakkimizda',$data);
			$this->load->view('admin/footer');	
		}		
	}

	public function hakkimizda_duzenle($firma_id) //aboutedit
	{		 
		$query = $this->db->get_where("firma",array("firma_id"=>$firma_id)); 
        $data['veri'] = $query->result();	
	    $this->load->helper('form'); 
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
	    $this->load->view('admin/hakkimizda_duzenle',$data); 
	    $this->load->view('admin/footer');
	}

	 public function hakkimizda_guncelle($firma_id) //about_guncelle
	{  		
		$this->load->model('User_Model'); 
		$data=array(
			'firma_adi' => $this->input->post('firma_adi'),
			'firma_email' => $this->input->post('firma_email'),
			'firma_telefon' => $this->input->post('firma_telefon'),
			'firma_fax' => $this->input->post('firma_fax'),
			'firma_adres' => $this->input->post('firma_adres'),
			'firma_misyon' => $this->input->post('firma_misyon'),
			'firma_vizyon' => $this->input->post('firma_vizyon'),
			'firma_sembolsoz' => $this->input->post('firma_sembolsoz'),
			);
		$this->User_Model->hakkimizda_update($data,$firma_id); 		
		redirect("admin/hakkimizda"); 
	
	}

	//------------------------------------------------------IMAGE--------------------------------  

	public function resim_ekle($urun_id)  //  resimyukle
	{    
		$data["urun_id"] = $urun_id; 		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/resim_ekle',$data);
		$this->load->view('admin/footer');
	}	

		
	
	public function image_upload($urun_id) //resim_upload
	{
		$config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
        $config['max_size']             = 6000;
        $config['max_width']            = 2500;
        $config['max_height']           = 1000;

        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('resim_ekle', $error);
        }
        else
        {
            $data = array('upload_data' => $this->upload->data());
    		$resimdata=$this->upload->data();
			$file_name=$upload_data['file_name'];
			$data=array(
				'urun_resim' => $resimdata["file_name"]
				);
            $this->User_Model->urun_image_update($data,$urun_id); 
			redirect("admin/urun_listele");   
        }
	}

	//------------------------------------------------------LOGIN--------------------------------


	public function login()
	{ 
		$this->load->view('admin/login');
	}
		
	public function login_control() //login_control
	{
		$username= $this->input->post('uye_email');
		$password=$this->input->post('uye_sifre');
		$this->load->model('User_Model'); 
		$result = $this->User_Model->login($username, $password);
		if($result) 
		{
			$sess_array = array();
		 	foreach($result as $row) 
		 	{
		 		$sess_array = array('uye_adsoyad' => $row->uye_adsoyad,'uye_id' => $row->uye_id,'uye_email' => $row->uye_email,'uye_yetki' => $row->uye_yetki);
			    $this->session->set_userdata('logged_in', $sess_array);
			    if($row->uye_yetki=="admin")
			    {
			    	$this->session->set_userdata('logged_in', $sess_array);
				    $this->index();
			    }  
			    else
			    {
			    	$this->load->view('admin/login');
				    return FALSE;
			    }			 
		    }
		    $this->index();  
		    return TRUE;
		} 
		else 
		{
			$mesaj='Invalid username or password';
			$this->load->view('admin/login', $mesaj);
		  return FALSE;
		}	
    }

    function logout()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        $this->index();
    }


}
?>