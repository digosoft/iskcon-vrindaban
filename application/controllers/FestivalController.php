<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FestivalController extends CI_Controller {

	public function defaultFestival(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/defaultFestival');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function nityanandaTrayodasi(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/nityananda_trayodasi');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function vasantaPanchami(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/vasantaPanchami');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function gauraPurnima(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/gauraPurnima');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function ramRavmi(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/ramRavmi');	  
		  $this->load->view('layouts/footer');	 	  
	}
	public function chandanYatra(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/chandanYatra');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function narsimhaCaturdashi(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/narsimhaCaturdashi');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function jhulanYatra(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/jhulanYatra');	  
		  $this->load->view('layouts/footer');	 	  
	}

	 

	public function balaramPurnima(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/balaramPurnima');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function sriKrishnaJanmastmi(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/sriKrishnaJanmastmi');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function srilaPrabhupadaVyasaPuja(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/srilaPrabhupadaVyasaPuja');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function lalitaSasti(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/lalitaSasti');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function radhastmi(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/radhastmi');	  
		  $this->load->view('layouts/footer');	 	  
	}

	public function kartikDipavali(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/kartikDipavali');	  
		  $this->load->view('layouts/footer');	
	}

	public function boatFestivel(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/boatFestivel.php');	  
		  $this->load->view('layouts/footer');	
	}

	public function rathaYatra(){ 	  
		  $this->load->view('layouts/header');	  
		  $this->load->view('festivals/rathaYatra.php');	  
		  $this->load->view('layouts/footer');	
	}

}

