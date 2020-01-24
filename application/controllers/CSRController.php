<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CSRController extends CI_Controller { 

		public function defaultCSR(){ 	  
		  $this->load->view('layouts/CSR_header');	  
		  $this->load->view('CSR/defaultCSR');	  
		  $this->load->view('layouts/footer');	 	  
		}

		public function digitalIndiaKillIndiaSwachhBharat(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/digitalIndiaKillIndiaSwachhBharat');	  
		  $this->load->view('layouts/footer');
		}


		public function plantationEnvironmental(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/plantationEnvironmental');	  
		  $this->load->view('layouts/footer');
		}

		public function educationWomenEmpowermentAndRenovation(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/educationWomenEmpowermentAndRenovation');	  
		  $this->load->view('layouts/footer');
		}

		public function middayMealProgramChildProtection(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/middayMealProgramChildProtection');	  
		  $this->load->view('layouts/footer');
		} 
	 
		public function ISKCONTribalCare(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/ISKCONTribalCare');	  
		  $this->load->view('layouts/footer');
		}

		public function saveYamunaSaveBraja(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/saveYamunaSaveBraja');	  
		  $this->load->view('layouts/footer');
		}
		
		public function cowProtection(){
		  $this->load->view('layouts/header');	  
		  $this->load->view('CSR/cowProtection');	  
		  $this->load->view('layouts/footer');


		}
	 

}