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
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("users"); // ogrenciler tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/content');
		}		
	}
	
		public function login()
	{ 
		$user=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		
		$this->load->model('User_Model');
		$result = $this->User_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'user_id' => $row->user_id,
				 'user_authority' => $row->user_authority, // yetki
				 'user_email' => $row->user_email,
				 'uname_surname' => $row->uname_surname,
				 'user_gender' => $row->user_gender
				 );
                 if($row->user_authority=="admin")
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
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
			$this->load->view('admin/login');
            return FALSE;
          }
		
	}

	function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         $this->index();
     }
	
	 public function mesajlistele()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("message"); // ensa_mesaj tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mesajlar',$data); // Verilei view belirtilen view dosyasına gönder
		
		}		
	}
	
    
	 
	 public function haberekle()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		$this->load->helper('form');
		

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/haberekle');
		
		}		
	}
	public function yeni_haberekle()
	{		 
		
		$this->load->model('User_Model');
		
	//	$tarih= date("d-m-Y H:i:s");

		$data=array(
		'nc_title' => $this->input->post('nc_title'),
		'nc_detail' => $this->input->post('nc_detail'),
		//'tarih' => $tarih				
		);
		
		$this->User_Model->insert_newscast($data);		
		redirect("/admin/haberekle");
	}
		
	public function haberlistele()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("newscast"); // newscast tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/haberler',$data); // Verilei view belirtilen view dosyasına gönder
		
		}		
	}	
				
	
	
	public function yeniuye()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		$this->load->helper('form');
		// $query=$this->db->get("users"); // ensa tablasonun veritananından çek
		 //$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/yeniuye');
		
		}		
	}
	public function kayit_ekle()
	{   
	   $this->load->model('User_Model'); // Kayıt işleminin yapılacağı p_model
	   // form nesnelerinden alınan veriler tabla alanları ile eşleştiriliyor
	
       // Boş kontrolü 	
		$kont=0;
		if ($this->input->post('uname_surname')==NULL )
			$kont=10;
		if ($this->input->post('user_email')==NULL)
			$kont=10;
		if ($this->input->post('user_password')==NULL)
			$kont=10;
		if ($this->input->post('user_gender')==NULL)
			$kont=10;
		if ($this->input->post('user_phone')==NULL)
			$kont=10;

		if ($kont==0)
		{
		$data=array(
		'uname_surname' => $this->input->post('uname_surname'),
		'user_email' => $this->input->post('user_email'),
		'user_password' => $this->input->post('user_password'),
		'user_gender' => $this->input->post('user_gender'),
		'user_phone' => $this->input->post('user_phone')	
		);
		
		$this->User_Model->insert_user($data);		
		redirect("/admin/yeniuye");
		}
		else
		{
			
			redirect("/admin");
		}
	}		
	public function uyeduzenle($user_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("users",array("user_id"=>$user_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/uyeduzenle',$data); // Dataları belirtilen view dosyasına gönder
		
	}
	public function uye_guncelle($user_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('User_Model'); // Kayıt işleminin yapılacağı p_model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'uname_surname' => $this->input->post('uname_surname'),
		'user_email' => $this->input->post('user_email'),
		'user_gender' => $this->input->post('user_gender'),
		'user_password' => $this->input->post('user_password'),
		'user_authority' => $this->input->post('user_authority'),
		'user_phone' => $this->input->post('user_phone')
		);
		
		// Data dizisine yüklenen verileri p_models teki ilgili fonksiyona gönderme
		$this->User_Model->update_user($data,$user_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/uyeliste"); // Öğrenci ana sayfasına gönder
	
	}
	public function urunduzenle($p_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("products",array("p_id"=>$p_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/urunduzenle',$data); // Dataları belirtilen view dosyasına gönder		
	}
	public function urun_guncelle($p_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('User_Model'); // Kayıt işleminin yapılacağı p_model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'p_brand' => $this->input->post('p_brand'),
		'p_model' => $this->input->post('p_model'),
		'p_date_produc' => $this->input->post('p_date_produc'),
		'p_price' => $this->input->post('p_price'),
		'p_detail_exp' => $this->input->post('p_detail_exp'),
		'p_slider' => $this->input->post('p_slider'),
		'p_image' => $this->input->post('p_image'),			
		'p_slider2' => $this->input->post('p_slider2')
		);
		// Data dizisine yüklenen verileri p_models teki ilgili fonksiyona gönderme
		$this->User_Model->update_product($data,$p_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/urunlistele"); // Öğrenci ana sayfasına gönder
	
	}
	
	public function haberduzenle($nc_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("newscast",array("nc_id"=>$nc_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/haberduzenle',$data); // Dataları belirtilen view dosyasına gönder		
	}
	
	public function haber_guncelle($nc_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('User_Model'); // Kayıt işleminin yapılacağı p_model
		$tarih= date("d-m-Y H:i:s");
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'nc_detail' => $this->input->post('nc_detail'),
		'nc_title' => $this->input->post('nc_title'),
		//'tarih' => $tarih		
		);
		// Data dizisine yüklenen verileri p_models teki ilgili fonksiyona gönderme
		$this->User_Model->update_newscast($data,$nc_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/haberlistele"); // Öğrenci ana sayfasına gönder
	
	}
public function uyesil($user_id)
	{
		 $this->load->model('User_Model'); 
         //$id = $this->uri->segment('3'); 
         $this->User_Model->delete_user($user_id);
		redirect(base_url().'Admin/uyeliste');
		// VERİLERİ EKRANA YAZ
		//$query=$this->db->get("users"); // users tablasonun veritananından çek
		//$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke
		//$this->load->view('admin/uyeliste',$data); // Verilei view belirtilen view dosyasına gönder
	}
	public function urunsil($p_id)
	{
		 $this->load->model('User_Model'); 
         //$id = $this->uri->segment('3'); 
         $this->User_Model->delete_product($p_id);
		redirect(base_url().'Admin/urunlistele');
		
	}
	public function mesajsil($m_id)
	{
		 $this->load->model('User_Model');           
         $this->User_Model->delete_mesaj($m_id);
		redirect(base_url().'Admin/mesajlistele');
		
	}
	public function habersil($nc_id)
	{
		 $this->load->model('User_Model');           
         $this->User_Model->delete_newscast($nc_id);
		redirect(base_url().'Admin/haberlistele');
		
	}
	public function uyeliste()
	{
		
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("users"); // users tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/uyeliste',$data); // Verilei view belirtilen view dosyasına gönder
		
		}
	}
	
	public function urunekle()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		$this->load->helper('form');
		// $query=$this->db->get("users"); // ensa tablasonun veritananından çek
		 //$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/urunekle');
		
		}		
	}
	public function urun_ekle()
	{   
	   $this->load->model('User_Model'); // Kayıt işleminin yapılacağı p_model
	   // form nesnelerinden alınan veriler tabla alanları ile eşleştiriliyor
	
      
		$data=array(
		'p_brand' => $this->input->post('p_brand'),
		'p_model' => $this->input->post('p_model'),
		'p_date_produc' => $this->input->post('p_date_produc'),
		'p_price' => $this->input->post('p_price'),
		'p_detail_exp' => $this->input->post('p_detail_exp'),
		'p_slider' => $this->input->post('p_slider'),
		'p_image' => $this->input->post('p_image'),			
		'p_slider2' => $this->input->post('p_slider2')
		);
		
		$this->User_Model->insert_product($data);		
		redirect("/admin/urunekle");
	}
	public function urunlistele()
	{
		
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("products"); // ogrenciler tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/urunlistele',$data); // Verilei view belirtilen view dosyasına gönder
		
		}
	}
	public function urunresimguncelle()
	{
		
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("products"); // urun tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/urunresimguncelle',$data); // Verilei view belirtilen view dosyasına gönder
		
		}
	}
	public function resimyukle($p_id)
	{    
		$data["p_id"] = $p_id; 		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/resim_yukleme_formu',$data);
	}	

		
	
	public function resim_upload($p_id)
	{
				$config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 1024;
                $config['max_height']           = 768;

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('resim_yukleme_formu', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                       // $this->load->view('admin/upload_ok', $data);
				   $resimdata=$this->upload->data();
				   
				   $file_name=$upload_data['file_name'];
					 
				   $data=array(
						'resim' => $resimdata["file_name"]
						);

					$this->User_Model->update_resim($data,$p_id); 
					  
					redirect("admin/urunlistele");   
                }
	}
}
?>