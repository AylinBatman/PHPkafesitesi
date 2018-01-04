<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->library('session');
			
	}	

	public function index()
	{
		
		$this->load->view('header');
		$this->load->view('slider');
		$this->load->view('content');
		$this->load->view('footer');
		
	}
	public function contact()
	{
		$this->load->view('header');		
		$this->load->view('contact');
		$this->load->view('footer');
	}	
	
	public function mutfak()
	{
		$this->load->view('header');				
		$this->load->view('mutfak');
		$this->load->view('footer');
	}
	public function banyo()
	{
		$this->load->view('header');		
		$this->load->view('banyo');
		$this->load->view('footer');
	}
	public function salon()
	{
		$this->load->view('header');
		$this->load->view('slider2');		
		$this->load->view('salon');
		$this->load->view('footer');
	}
	
	public function yatak()
	{
		$this->load->view('header');		
		$this->load->view('yatak');
		$this->load->view('footer');
	}
	public function about()
	{
		$this->load->view('header');		
		$this->load->view('about');
		$this->load->view('footer');
	}
	public function kayitekle()
	{
		$this->load->model('Ensa_Model');
		$data=array(
		'adsoy' => $this->input->post('adsoy'),
		'email' => $this->input->post('email'),
		'cinsiyet' => $this->input->post('cinsiyet'),
		'sifre' => $this->input->post('sifre')		
		);
		$this->Ensa_Model->yeniuye($data);		 
		//$this->session->set_flashdata("mesaj_sent","Kayıt İşleminiz başarı ile alındı.Teşekkür ederiz");
		$this->login();
		
	}
	
	public function mesaj_kaydet()
	{
		
		if(!$this->session->userdata('logged_in')) // Kullanıcı giriş yapıp yampadığı kontrolü
        {
			$this->login();
		}
		else
		{
				$this->load->model('Ensa_Model');
				$data=array(
                'ziyaretci' => $this->input->post('adsoy'),
                'email' => $this->input->post('email'),
                'mesaj' => $this->input->post('mesaj')	
                );
                
                $this->Ensa_Model->insert_mesaj($data); // ekleme fonk. dataları gönder
				$this->session->set_flashdata("mesaj_sent","<script>alert('Mesajınınz  başarı ile alındı.Teşekkür ederiz')</script>"); 
				
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
		
		$adsoy=$this->input->post('adsoy');
		$email=$this->input->post('email');
		
		// İstediğiniz şekilde mail içeriğini html olarak oluşturabilirsiniz
		$mesaj="Sayın : ".$adsoy."<br> Göndermiş olduğunuz mesaj tarafımızca alınmıştır.<br>İlginiz için Teşekkür ederiz<br>";
		$mesaj.=$data["veri"][0]->name."<br>";
		$mesaj.=$data["veri"][0]->adres."<br>";
		$mesaj.=$data["veri"][0]->sehir."<br>";
		$mesaj.=$data["veri"][0]->tel."<br>";
		$mesaj.=$data["veri"][0]->fax."<br>";
		$mesaj.=$data["veri"][0]->email."<br>";
		$mesaj.="Gönderdiğiniz Mesaj Aşğıdaki gibidir<br>";
		$mesaj.=$this->input->post('mesaj');
		// EMAİL gönderme *******************
		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from($data["veri"][0]->smtpemail); // change it to yours
		$this->email->to($email); // change it to yours
		$this->email->subject('ENSA Mobilya Bilgilendirme Mesajı');
		$this->email->message($mesaj); 
		
		//Send mail 
         if($this->email->send()) 
			$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
         else 
		 {
		    $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           //  show_error($this->email->print_debugger()); // ayrıntılı hata dökümü için
		 }
	  
		}	
			$this->contact();
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
                 
                 $this->session->set_userdata('logged_in', $sess_array);
				$this->load->view('header');				
				$this->load->view('login');
				$this->load->view('footer');
                 }
				 
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
			$this->load->view('header');
			$this->load->view('login');
			$this->load->view('footer');
		   }
            return FALSE;
    }
	 function logout() {
         $this->session->unset_userdata('logged_in');
         $this->session->sess_destroy();
         $this->login();
     }
		
	
}

?>