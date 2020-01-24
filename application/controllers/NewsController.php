<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewsController extends CI_Controller {

	public function defaultNews(){ 	  
	  $this->load->view('layouts/header');	  
	  $this->load->view('news_events/defaultNews');	  
	  $this->load->view('layouts/footer');	  
	}

 

}