<?php

   class Main extends CI_Controller
   {
   	public function index()
   	{

     $this->load->view('most/home');

   }

  public function contact()
   { 


           $from_email = $this->input->post('email');
            $moblie = $this->input->post('moblie');
            $message = $this->input->post('mess');


              $to_email='avinashbavaskar09@gmail.com';

    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://smtp.gmail.com';
    $config['smtp_port'] = '465';
    $config['smtp_user'] = 'avinashbavaskar09@gmail.com'; // email id
    $config['smtp_pass'] = 'viimibmpzkautnsa'; // email password
    $config['mailtype'] = 'html';
    $config['wordwrap'] = TRUE;
    $config['charset'] = 'iso-8859-1';
    $config['newline'] = "\r\n"; //use double quotes here

    $this->load->library('email',$config);
    $this->email->initialize($config);

           $this->email->from($from_email);
            $this->email->to($to_email);
            $this->email->message($message);

            if ($this->email->send())
            {

              echo "send the email";
            
              
            }

            else
            {
              echo "not undable sent email";

            }


            
   }
   public function About_1()
   {
   	$this->load->view('most/about');
   }
    public function Services_2()
   {
   	$this->load->view('most/services');
   }
    public function Portfolio_3()
   {
   	$this->load->view('most/portfolio');
   }
    public function Team_4()
   {
   	$this->load->view('most/team');
   }
    public function Testimonial_5()
   {
   	$this->load->view('most/testimonial');
   }
    public function bloag_6()
   {
   	$this->load->view('most/bloag');
   }
    public function  Contact_7()
   {
   	$this->load->view('most/contact');
   }



   	}
?>