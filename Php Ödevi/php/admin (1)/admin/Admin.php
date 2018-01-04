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
		$this->load->model('Ensa_Model');
			
	}
	

	public function index()
	{
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("ensa_uye"); // ogrenciler tablasonun veritananından çek
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
		
		$this->load->model('Ensa_Model');
		$result = $this->Ensa_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'k_id' => $row->k_id,
				 'yetki' => $row->yetki,
				 'email' => $row->email,
				 'adsoy' => $row->adsoy
				 );
                 if($row->yetki=="admin")
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
	
	 public function mesajlistele()
	{		 
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
		
		 $query=$this->db->get("ensa_mesaj"); // ensa_mesaj tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/mesajlar',$data); // Verilei view belirtilen view dosyasına gönder
		
		}		
	}
	
    function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         $this->index();
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
		// $query=$this->db->get("ensa_uye"); // ensa tablasonun veritananından çek
		 //$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/haberekle');
		
		}		
	}
	public function yeni_haberekle()
	{		 
		
		$this->load->model('Ensa_Model');
		
	//	$tarih= date("d-m-Y H:i:s");

		$data=array(
		'title' => $this->input->post('title'),
		'haber' => $this->input->post('haber'),
		//'tarih' => $tarih				
		);
		
		$this->Ensa_Model->yeni_haberekle($data);		
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
		
		 $query=$this->db->get("ensa_haber"); // ensa_haber tablasonun veritananından çek
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
		// $query=$this->db->get("ensa_uye"); // ensa tablasonun veritananından çek
		 //$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/yeniuye');
		
		}		
	}
	public function kayit_ekle()
	{   
	   $this->load->model('Ensa_Model'); // Kayıt işleminin yapılacağı model
	   // form nesnelerinden alınan veriler tabla alanları ile eşleştiriliyor
	
       // Boş kontrolü 	
		$kont=0;
		if ($this->input->post('adsoy')==NULL )
			$kont=10;
		if ($this->input->post('email')==NULL)
			$kont=10;
		if ($this->input->post('sifre')==NULL)
			$kont=10;
		if ($this->input->post('cinsiyet')==NULL)
			$kont=10;

		if ($kont==0)
		{
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'sifre' => $this->input->post('sifre'),
		'cinsiyet' => $this->input->post('cinsiyet')		
		);
		
		$this->Ensa_Model->yeniuye($data);		
		redirect("/admin/yeniuye");
		}
		else
		{
			
			redirect("/admin");
		}
	}		
	public function uyeduzenle($k_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("ensa_uye",array("k_id"=>$k_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/uyeduzenle',$data); // Dataları belirtilen view dosyasına gönder
		
	}
	public function uye_guncelle($k_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('Ensa_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'cinsiyet' => $this->input->post('cinsiyet'),
		'sifre' => $this->input->post('sifre'),
		'yetki' => $this->input->post('yetki')
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ensa_Model->update_uye($data,$k_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/uyeliste"); // Öğrenci ana sayfasına gönder
	
	}
	public function urunduzenle($u_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("ensa_urun",array("u_id"=>$u_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/urunduzenle',$data); // Dataları belirtilen view dosyasına gönder		
	}
	public function urun_guncelle($u_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('Ensa_Model'); // Kayıt işleminin yapılacağı model
		
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'marka' => $this->input->post('marka'),
		'model' => $this->input->post('model'),
		'urt_yili' => $this->input->post('urt_yili'),
		'fiyat' => $this->input->post('fiyat'),
		'aciklama' => $this->input->post('aciklama'),
		'slider' => $this->input->post('slider'),
		'uruntur' => $this->input->post('uruntur'),			
		'slider2' => $this->input->post('slider2')
		);
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ensa_Model->update_urun($data,$u_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/urunlistele"); // Öğrenci ana sayfasına gönder
	
	}
	
	public function haberduzenle($h_id) // Düzenleme formuna bilgi gönderme
	{ 
         $query = $this->db->get_where("ensa_haber",array("h_id"=>$h_id)); // Veritabanından ilgili kaydı sorgula getir
         $data['veri'] = $query->result(); //Sonuçları $data değişkenine ata
	
		 $this->load->helper('form'); // Form kütüphanesini çağır
		 $this->load->view('admin/header');
		 $this->load->view('admin/sidebar');
	     $this->load->view('admin/haberduzenle',$data); // Dataları belirtilen view dosyasına gönder		
	}
	
	public function haber_guncelle($h_id) // Düzenleme formundan gelen verileri güncelleme
	{  
		
		$this->load->model('Ensa_Model'); // Kayıt işleminin yapılacağı model
		$tarih= date("d-m-Y H:i:s");
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		'haber' => $this->input->post('haber'),
		'title' => $this->input->post('title'),
		//'tarih' => $tarih		
		);
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->Ensa_Model->update_haber($data,$h_id); //  fonksiypnua dataları id ile  gönder
		
		redirect("admin/haberlistele"); // Öğrenci ana sayfasına gönder
	
	}
public function uyesil($k_id)
	{
		 $this->load->model('Ensa_Model'); 
         //$id = $this->uri->segment('3'); 
         $this->Ensa_Model->delete_uye($k_id);
		redirect(base_url().'Admin/uyeliste');
		// VERİLERİ EKRANA YAZ
		//$query=$this->db->get("ensa_uye"); // ensa_uye tablasonun veritananından çek
		//$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke
		//$this->load->view('admin/uyeliste',$data); // Verilei view belirtilen view dosyasına gönder
	}
	public function urunsil($u_id)
	{
		 $this->load->model('Ensa_Model'); 
         //$id = $this->uri->segment('3'); 
         $this->Ensa_Model->delete_urun($u_id);
		redirect(base_url().'Admin/urunlistele');
		
	}
	public function mesajsil($m_id)
	{
		 $this->load->model('Ensa_Model');           
         $this->Ensa_Model->delete_mesaj($m_id);
		redirect(base_url().'Admin/mesajlistele');
		
	}
	public function habersil($h_id)
	{
		 $this->load->model('Ensa_Model');           
         $this->Ensa_Model->delete_haber($h_id);
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
		
		 $query=$this->db->get("ensa_uye"); // ensa_uye tablasonun veritananından çek
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
		// $query=$this->db->get("ensa_uye"); // ensa tablasonun veritananından çek
		 //$data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

		$this->load->view('admin/header');		
		$this->load->view('admin/sidebar');
		$this->load->view('admin/urunekle');
		
		}		
	}
	public function urun_ekle()
	{   
	   $this->load->model('Ensa_Model'); // Kayıt işleminin yapılacağı model
	   // form nesnelerinden alınan veriler tabla alanları ile eşleştiriliyor
	
      
		$data=array(
		'marka' => $this->input->post('marka'),
		'model' => $this->input->post('model'),
		'urt_yili' => $this->input->post('urt_yili'),
		'fiyat' => $this->input->post('fiyat'),
		'aciklama' => $this->input->post('aciklama'),
		'slider' => $this->input->post('slider'),
		'uruntur' => $this->input->post('uruntur'),			
		'slider2' => $this->input->post('slider2')
		);
		
		$this->Ensa_Model->urun_ekle($data);		
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
		
		 $query=$this->db->get("ensa_urun"); // ogrenciler tablasonun veritananından çek
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
		
		 $query=$this->db->get("ensa_urun"); // urun tablasonun veritananından çek
		 $data["veri"]=$query->result(); // Sonuçları veri değişkenine yüke

			
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/urunresimguncelle',$data); // Verilei view belirtilen view dosyasına gönder
		
		}
	}
	public function resimyukle($u_id)
	{    
		$data["u_id"] = $u_id; 		
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');		
		$this->load->view('admin/resim_yukleme_formu',$data);
	}	

		
	
	public function resim_upload($u_id)
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

					$this->Ensa_Model->update_resim($data,$u_id); 
					  
					redirect("admin/urunlistele");   
                }
	}
}
?>