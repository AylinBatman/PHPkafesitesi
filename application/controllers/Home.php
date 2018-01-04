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
        $query= $this->db->query('SELECT * FROM firma');
		$data2["veri"]=$query->result();

    	$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Ana Sayfa";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_slider="Evet"');
		$data["slider"]=$query->result();
		$query= $this->db->query('SELECT * FROM haberler order by haber_tarih desc limit 0,1');
		$data2["haber"]=$query->result();
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_ekran="Evet" order by urun_tarih desc limit 0,5'); 
		$data2["urun"]=$query->result();
		$this->load->view('header',$veri);
		$this->load->view('slider',$data);
		$this->load->view('content',$data2);
		$this->load->view('footer');
		
	}

	public function iletisim()
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="İletişim";
		$query=$this->db->get("firma"); 
		$data["veri"]=$query->result(); 
		$this->load->view('header',$veri);		
		$this->load->view('iletisim',$data);
		$this->load->view('footer');
	}	

    //-------------------------------------------------- USER ---------------------------------------
     
     public function uye_kaydol() 
	{
		$this->load->model('User_Model');
		$data=array(
		'uye_adsoyad' => $this->input->post('uye_adsoyad'),
		'uye_email' => $this->input->post('uye_email'),
		'uye_cinsiyet' => $this->input->post('uye_cinsiyet'),
		'uye_sifre' => $this->input->post('uye_sifre')		
		);
		$this->User_Model->uye_insert($data);		 
		
		$this->login();
		
	}

	//-------------------------------------------------- PRODUCTS ------------------------------------
     
     public function urun_kahvalti()  
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Kahvaltılar";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_tipi="Kahvaltı"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('urun_kahvalti',$data);
		$this->load->view('footer');
	}
	public function urun_sicakicecekler()  // Fırın
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Sıcak İçecekler";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_tipi="Sıcak İçecekler"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('urun_sicakicecekler',$data);
		$this->load->view('footer');
	}
	public function urun_tatlilar() //urun_tatlilar 
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Tatlılar";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_tipi="Tatlılar"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('urun_tatlilar',$data);
		$this->load->view('footer');
	}
	
	public function urun_sogukicecekler() //urun_sogukicecekler 
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Soğuk İçecekler";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_tipi="Soğuk İçecekler"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('urun_sogukicecekler',$data);
		$this->load->view('footer');
	}
	public function urun_aparatifler() 
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Aparatif Ürünler";
		$query= $this->db->query('SELECT * FROM urunler WHERE urun_tipi="Aparatifler"'); 
		$data["veri"]=$query->result();
		$this->load->view('header',$veri);				
		$this->load->view('urun_aparatifler',$data);
		$this->load->view('footer');
	}
	
	public function urun_detayi($id) // detay             
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		//$query= $this->db->query('SELECT urun_marka FROM urunler WHERE urun_id='.$id);
		//$veri["title2"]=$query->result();
		$veri["title2"]="Ürünlerimiz";
		$query = $this->db->get_where("urunler",array("urun_id"=>$id)); 
        $data['veri'] = $query->result(); 
	
		$this->load->view('header',$veri);		
		$this->load->view('urun_detayi',$data);
		$this->load->view('footer');
	}


	//-------------------------------------------------- haberler ------------------------------------

     public function haberler() // haberler
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
       
		$veri["title2"]="Haberler";
		$query= $this->db->query('SELECT * FROM haberler order by haber_tarih desc'); 
		$data["haberler"]=$query->result();
		$this->load->view('header',$veri);		
		$this->load->view('haberler',$data);
		$this->load->view('footer');
	}


	//-------------------------------------------------- MESSAGE---------------------------------------

    public function mesajGonder() // mesaj_kaydet
	{
		if(!$this->session->userdata('logged_inh')) 
        {
			$this->login();
		}
		else
		{
			$this->load->model('User_Model');
			$data=array(
                'mesaj_gonderen' => $this->input->post('uye_adsoy'),
                'mesaj_gonderenemail' => $this->input->post('uye_email'),
                'mesaj_detay' => $this->input->post('uye_mesaji')	
             );
            $this->User_Model->mesaj_insert($data); 
			$this->session->set_flashdata("mesaj_sent","<script>alert('Mesajınınz  başarı ile alındı.Teşekkür ederiz')</script>");
	        $query=$this->db->get("settings"); 
	        $data["veri"]=$query->result(); 
	       
	        $config = Array(
	        	'protocol' => 'smtp',
	        	'smtp_host' => $data["veri"][0]->smtpserver,
	        	'smtp_port' => $data["veri"][0]->smtpport,
	        	'smtp_user' => $data["veri"][0]->smtpemail, 
	        	'smtp_pass' => $data["veri"][0]->password, 
	        	'mailtype' => 'html',
	        	'charset' => 'utf-8',
	        	'wordwrap' => TRUE
	        );
	        $adsoy=$this->input->post('adsoy');
	        $email=$this->input->post('email');
	        $mesaj="Sayın : ".$adsoy."<br> Göndermiş olduğunuz mesaj tarafımızca alınmıştır.<br>İlginiz için Teşekkür ederiz<br>";
		    $mesaj.=$data["veri"][0]->name."<br>";
		    $mesaj.=$data["veri"][0]->adres."<br>";
		    $mesaj.=$data["veri"][0]->sehir."<br>";
		    $mesaj.=$data["veri"][0]->tel."<br>";
		    $mesaj.=$data["veri"][0]->fax."<br>";
		    $mesaj.=$data["veri"][0]->email."<br>";
		    $mesaj.="Gönderdiğiniz Mesaj Aşğıdaki gibidir<br>";
		    $mesaj.=$this->input->post('mesaj');

		    $this->load->library('email', $config);
		    $this->email->set_newline("\r\n");
		    $this->email->from($data["veri"][0]->smtpemail); 
		    $this->email->to($email); 
		    $this->email->subject('Çardak Cafe Bilgilendirme Mesajı');
		    $this->email->message($mesaj);

		    //if($this->email->send()) 
		  //  	$this->session->set_flashdata("email_sent","Email başarı ile gönderildi."); 
		  //  else 
		  //  {
		   //     $this->session->set_flashdata("email_sent","Email Gondermede Hata Oluştu."); 
           // }	  
		}	
		$this->iletisim();
	}  
 
	//--------------------------------------------------- ABOUT ---------------------------------------
     public function hakkimizda()// about
	{
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="Hakkımızda";
		$query=$this->db->get("firma"); 
		$data["veri"]=$query->result(); 
		$this->load->view('header',$veri);		
		$this->load->view('hakkimizda',$data);
		$this->load->view('footer');
	}
	//------------------------------------------------------IMAGE---------------------------------------  

	//------------------------------------------------------LOGIN---------------------------------------


	public function login()
	{ 
		$query=$this->db->get("settings");
    	$veri["veri"]=$query->result();
		
		$veri["title2"]="LOGIN";
		$user=$this->input->post('email');
		$sifre=$this->input->post('sifre');
		
		$this->load->model('User_Model');
		$result = $this->User_Model->login($user,$sifre);
		
		if($result) {
             $sess_array = array();
             foreach($result as $row) {
                 $sess_array = array(
				 'uye_id' => $row->uye_id,
				 'uye_yetki' => $row->uye_yetki,
				 'uye_email' => $row->uye_email,
				 'uye_adsoyad' => $row->uye_adsoyad
				 );
                
                 $this->session->set_userdata('logged_inh', $sess_array);
				$this->load->view('header',$veri);				
				$this->load->view('login');
				$this->load->view('footer');
                 }
				 
          		return TRUE;
          } 
		  else 
		  {
              
            $hata= 'Invalid username or password';
            
			$this->load->view('header',$veri);
			$this->load->view('login');
			$this->load->view('footer');
		   }
            return FALSE;
    }
	
	 function logout() {
         $this->session->unset_userdata('logged_inh');
         $this->session->sess_destroy();
         $this->login();
     }
}
?>