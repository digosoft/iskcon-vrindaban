<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DefaultController extends CI_Controller {


	public function index()	{
	    
	    $data['stoppup'] = 2; 
		$this->load->view('Homepage', $data);
	}

      public function contactUs()   { 

        $this->load->view('layouts/header'); 
        //$this->load->view('layouts/single-page-header');   
        $this->load->view('Contact-us');    
        $this->load->view('layouts/footer'); 
    } 

    public function donation()   {
    
          $this->load->view('layouts/header'); 
          //$this->load->view('layouts/single-page-header');   
          $this->load->view('donation');    
          $this->load->view('layouts/footer');    
    } 

    public function aboutus()   {
    
          $this->load->view('layouts/header'); 
          //$this->load->view('layouts/single-page-header');    
          $this->load->view('aboutus');    
          $this->load->view('layouts/footer');    
    }
    

    
	public function uptopprocess()	{
	       
	    $data['stoppup'] = 1; 
	     
    	$fullname = $this->input->post('fullname');
        $email    = $this->input->post('email');
        $mobile   = $this->input->post('mobile');
        $city     = $this->input->post('city');
        $create_at= date("Y-m-d H:i:s");
        
        $to = "saurabh@iskconvrindaban.com";
        $subject = "NEW PRASHAD ORDERED";
        
        $message =  $this->emailTemplate($fullname,$email, $mobile,$city,$create_at);
    
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: '.$email . "\r\n";
        $headers .= 'Cc: vrinda@iskconvrindaban.com' . "\r\n";
        // $headers .= 'Bcc: supperserver.com@gmail.com' . "\r\n";
        
        $this->form_validation->set_rules('fullname', 'Fullname', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('mobile', 'Mobile', 'required');
        $this->form_validation->set_rules('city', 'City', 'required');

        if (!($this->form_validation->run() == FALSE))  {

            $this->load->model('Odersprashadam');
            $insert = array(
                'name'      => $fullname,
                'email'     => $email,
                'phone'     => $mobile,                 
                'city'      => $city, 
                'create_at' => $create_at
            );
            $db_status = $this->Odersprashadam->orderNewRecord($insert);

            if($db_status) {
                 mail($to,$subject,$message,$headers) ;  
                 redirect(base_url('home-page'), 'refresh');
            } 
        }         
       $this->load->view('Homepage', $data);
       
	}
	
	public function subscribe()	{
	    $data['stoppup'] = 1; 
	    $data['message'] = "You have successfully subscribe ";
	    
	    $subscribe = $this->input->post('subscribe');
	    $create_at= date("Y-m-d H:i:s");
	    
	    $to = "saurabh@iskconvrindaban.com";
        $subject = "NEW Subcriber";
        
        $message =  $this->emailTemplate($fullname = null,$subscribe, $mobile = null ,$city=null,$create_at);
    
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: '.$subscribe . "\r\n";
        $headers .= 'Cc: vrinda@iskconvrindaban.com' . "\r\n";

            $this->load->model('subscribe');
            $insert = array(
                'subscribe' => $subscribe, 
                'create_at' => $create_at
            );
            $db_status = $this->subscribe->newSubscribe($insert);

            if($db_status) {
                    mail($to,$subject,$message,$headers) ; 
                     $this->session->set_flashdata('message', 'Your have subscribed successfully');
                    redirect(base_url('home-page'), 'refresh');
            } 
	}
	





    public function contactFormProcess()  { 

         
        $your_name      = $this->input->post('your_name');
        $your_email     = $this->input->post('your_email');
        $your_subject   = $this->input->post('your_subject');
        $your_message   = $this->input->post('your_message');
        $create_at= date("Y-m-d H:i:s");
        
        $to = "saurabh@iskconvrindaban.com"; 
        
        $message =  $this->contactUsTemplate($your_name,$your_email, $your_subject,$your_message,$create_at);
    
        // Always set content-type when sending HTML email
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        
        // More headers
        $headers .= 'From: '.$your_email . "\r\n";
        $headers .= 'Cc: vrinda@iskconvrindaban.com' . "\r\n";
        
        $this->form_validation->set_rules('your_name', 'Fullname', 'required');
        $this->form_validation->set_rules('your_email', 'Email', 'required');
        $this->form_validation->set_rules('your_subject', 'Subject', 'required');
        $this->form_validation->set_rules('your_message', 'Message', 'required');

        if (!($this->form_validation->run() == FALSE))  {



            $this->load->model('Contactus');
            $insert = array(
                'id'        => '',
                'name'        => $your_name,
                'email'        => $your_email,
                'subject'      => $your_subject,                 
                'message'      => $your_message, 
                'create_at'         => $create_at
            );
            $db_status = $this->Contactus->newContactus($insert);
            if($db_status) {
                 mail($to,$your_subject,$your_message,$headers) ;  
                 $this->session->set_flashdata('message', 'Your request has been save successfully');
                 redirect(base_url('contact-us'), 'refresh');
            }               
        }         
       $this->load->view('Homepage', $data);
    }	
	
	
	public function emailTemplate($fullname,$email, $mobile,$city,$create_at){
	    
	    return "<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='bg_color'>

        <tr>
            <td align='center'>
                <table border='0' align='center' width='590' cellpadding='0' cellspacing='0' class='container590'>
                  
                    <tr>
                        <td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align='center' style='color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;' class='main-header'>


                            <div style='line-height: 35px'>

                                NEW IN <span style='color: #5caad2;'> PRASHAD ORDERED</span>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height='10' style='font-size: 10px; line-height: 10px;'>&nbsp;</td>
                    </tr>

                    <tr>
                        <td align='center'>
                            <table border='0' width='40' align='center' cellpadding='0' cellspacing='0' bgcolor='eeeeee'>
                                <tr>
                                    <td height='2' style='font-size: 2px; line-height: 2px;'>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                    </tr>

                    <tr>
                        <td align='center'>
                            <table border='0' width='400' align='center' cellpadding='0' cellspacing='0' class='container590'>
                                <tr>
                                    <td align='center' style='color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;'>


                                        <div style='line-height: 24px'>

                                            <h3 style='text-align:left'> Hare Krishna , </h3>
                                             New order has been registered. Details are below : 
                                             <table class='table table-hover' style='text-align:left'>
                                                    <tr class='table-active'><th> Full Name</th> <td>". $fullname."</td></tr>
                                                    <tr> <th> Email</th> <td>". $email."</td></tr>
                                                    <tr class='table-active'> <th> Mobile Name</th> <td>". $mobile."</td></tr>
                                                    <tr> <th> City</th> <td>". $city."</td></tr>
                                                    <tr class='table-active'> <th> Current Timestamp</th> <td>".$create_at."</td></tr>
                                               
                                             </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> 

                </table>

            </td>
        </tr> 
    </table>";
	}



    public function contactUsTemplate($fullname,$email, $mobile,$city,$create_at){
        
        return "<table border='0' width='100%' cellpadding='0' cellspacing='0' bgcolor='ffffff' class='bg_color'>

        <tr>
            <td align='center'>
                <table border='0' align='center' width='590' cellpadding='0' cellspacing='0' class='container590'>
                  
                    <tr>
                        <td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                    </tr>
                    <tr>
                        <td align='center' style='color: #343434; font-size: 24px; font-family: Quicksand, Calibri, sans-serif; font-weight:700;letter-spacing: 3px; line-height: 35px;' class='main-header'>


                            <div style='line-height: 35px'>

                                NEW CONTACT <span style='color: #5caad2;'> QUERY HAS BEEN GENERATED</span>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td height='10' style='font-size: 10px; line-height: 10px;'>&nbsp;</td>
                    </tr>

                    <tr>
                        <td align='center'>
                            <table border='0' width='40' align='center' cellpadding='0' cellspacing='0' bgcolor='eeeeee'>
                                <tr>
                                    <td height='2' style='font-size: 2px; line-height: 2px;'>&nbsp;</td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td height='20' style='font-size: 20px; line-height: 20px;'>&nbsp;</td>
                    </tr>

                    <tr>
                        <td align='center'>
                            <table border='0' width='400' align='center' cellpadding='0' cellspacing='0' class='container590'>
                                <tr>
                                    <td align='center' style='color: #888888; font-size: 16px; font-family: 'Work Sans', Calibri, sans-serif; line-height: 24px;'>


                                        <div style='line-height: 24px'>

                                            <h3 style='text-align:left'> Hare Krishna , </h3>
                                             New order has been registered. Details are below : 
                                             <table class='table table-hover' style='text-align:left'>
                                                    <tr class='table-active'><th> Full Name</th> <td>". $fullname."</td></tr>
                                                    <tr> <th> Email</th> <td>". $email."</td></tr>
                                                    <tr class='table-active'> <th> Mobile Name</th> <td>". $mobile."</td></tr>
                                                    <tr> <th> City</th> <td>". $city."</td></tr>
                                                    <tr class='table-active'> <th> Current Timestamp</th> <td>".$create_at."</td></tr>
                                               
                                             </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr> 

                </table>

            </td>
        </tr> 
    </table>";
    }
	
}
