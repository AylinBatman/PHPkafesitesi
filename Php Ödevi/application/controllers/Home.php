<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper(array('form', 'url'));
		$this->load->model('User_Model');
		$this->load->database();
		$this->load->library("session");

	}
	
	public function index()           // Anasayfa
	{
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('content');
		$this->load->view('footer');		
	}

	public function products_washer() // Çamaşır Makinası
	{
		$this->load->view('header');		
		$this->load->view('slider');
		$this->load->view('products_washer');
		$this->load->view('footer');
	}

	public function products_fridge() // Buzdolabı
	{
		$this->load->view('header');		
		$this->load->view('slider');
		$this->load->view('products_fridge');
		$this->load->view('footer');
	}

	public function products_dishwasher() // Bulaşık Makinası
	{
		$this->load->view('header');		
		$this->load->view('slider');
		$this->load->view('products_dishwasher');
		$this->load->view('footer');
	}

	public function products_bakery() // Fırın
	{
		$this->load->view('header');		
		$this->load->view('slider');
		$this->load->view('products_bakery');
		$this->load->view('footer');
	}

	public function campaigns() // Kampanyalar
	{
		$this->load->view('header');		
		$this->load->view('campaigns');
		$this->load->view('footer');
	}

		public function about_us() // Hakkımızda
	{
		$this->load->view('header');		
		$this->load->view('about_us');
		$this->load->view('footer');
	}

		public function contacts() // Bize Yazın
	{
		$this->load->view('header');		
		$this->load->view('contacts');
		$this->load->view('footer');
	}

		public function log_in() // Log-in
	{
	

		$user=$this->input->post('user_email');
		$sifre=$this->input->post('user_password');
		
		$this->load->model('User_Model');
		$result = $this->User_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'user_id' => $row->user_id,
				 'user_authority' => $row->user_authority,
				 'uname_surname' => $row->uname_surname,
				 'user_password' => $row->user_password,
				 'user_gender' => $row->user_gender,
				 'user_email' => $row->user_email,
				 'user_phone' => $row->user_phone
				 );
                 
                  $this->session->set_userdata('logged_inh', $sess_array);
				$this->load->view('header');				
				redirect(base_url().'home');
				$this->load->view('footer');
                 }
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
            $this->load->view('header');
			$this->load->view('log_in');
			$this->load->view('footer');
            return FALSE;
          }
	}
	public function logout()
	{
		 $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
		 //redirect("admin");
		 $this->index();
	}



		public function user_insert() // Log-in
	{
			
			$this->load->view('header');
			$this->load->view('user_insert');
			$this->load->view('footer');

		
	}

	public function kayitekle()
	{
		$this->load->helper('form');
		$this->load->model('User_Model'); // Kayıt işleminin yapılacağı model
		// Kayıt formundandan bilgileri al
		// form nesnelerinden alınan veriler tablo alanları ile eşleştiriliyor
		$data=array(
		//'numara' => $this->input->post('numara'),
		'uname_surname' => $this->input->post('uname_surname'),
		'user_gender' => $this->input->post('user_gender'),
		'user_email' => $this->input->post('user_email'),
		'user_phone' => $this->input->post('user_phone'),
		//'user_authority' =>"kullanici",  //$this->input->post('yetki'), otomatik kullanıcı olacak
		'user_password' => $this->input->post('user_password')
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->User_Model->insert_user($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->index();
	}

	public function user_update() // Log-in
	{
		 $this->load->view('header');
			$this->load->view('user_update');
			$this->load->view('footer');

		
	}

		public function send_message() // Log-in
	{
		 $this->load->model('User_Model'); 
		$data=array(
		'mes_sender' => $this->input->post('mes_sender'),
		'mes_email' => $this->input->post('mes_email'),
		'mesaj' => $this->input->post('message')
		);
		
		// Data dizisine yüklenen verileri models teki ilgili fonksiyona gönderme
		$this->User_Model->insert_mesaj($data); // ekleme fonk. dataları gönder
		
		//redirect("ogrenci");
		$this->session->set_flashdata("mesaj","Mesajiniz basari ile gonderilmistir.");

		// Email Ayarlarını veritabanından okuma
	    $query=$this->db->get("settings"); // settings tablasonun veritananından çek
	    $data["veri"]=$query->result(); // Sonuçları veri değişkenine yükle
		
	  
	  // Email Server Ayarları
		$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => $data["veri"][0]->smtpserver,
		'smtp_port' => $data["veri"][0]->smtpport,
		'smtp_user' => $data["veri"][0]->smtpemail, // change it to yours
		'smtp_pass' => $data["veri"][0]->password, // change it to yours
		'mailtype' => 'html',
		'charset' => 'utf-8',
		'wordwrap' => TRUE
		);
		
		$adsoy=$this->input->post('name');
		$email=$this->input->post('email');
		
		// İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz
		$mesaj="Değerli : ".$adsoy."<br> Göndermiş olduğunuz mesaj alınmıştır.<br>Teşekkür ederiz<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="Gönderdiğiniz Mesaj Aşğıdaki gibidir<br>";
		$mesaj.=$this->input->post('message');
		
		
		// EMAİL gönderme *******************
				
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject('Bilgilendirme Mesajı');
		$this->email->message($mesaj); 
		
		//Send mail 
         if($this->email->send()) 
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
         else 
		 {
		    $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           //  show_error($this->email->print_debugger()); // ayrıntılı hata dökümü için
		 }
		$this->contact();




		
	}

	
	
}
