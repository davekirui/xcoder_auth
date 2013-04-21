<?php

/**
 * Try out Bonyeza app on www.Bonyeza.wordpress.com/release
 *
 * @author Xcoder
 */
class xcoder_auth extends CI_Controller {
    function __construct() {
        parent::__construct();     
           
       
    }
    function index()
    {
        $this->load->view("registration");
    }
    function xcoder_reg()
    {  
        
       $xcoder_passkey="dangerous_with_coffee";
        $exploit="dangerous_with_coffee";
        while($exploit==$xcoder_passkey)
        {
        $criteria1=$xcoder_passkey;
        $exploit=  $this->xcoder_auth_model->passkeyCount($criteria1);     
        $xcoder_passkey=$this->xcoder_auth_helper->rand_hash();//xcoder uri passkey do_hash()       
        
       }
        
        
        $this->xcoder_auth_helper->validation();//validation rules
        
        if($this->form_validation->run()==FALSE)
       {
           $this->load->view('registration');
       }
       else
       {       
           
        $data=array('id'=>NULL
                ,'xemail'=> $this->input->post('email')
                ,'xuser'=>$this->input->post('user')
                ,'xpassword'=>$this->input->post('password')
                ,'xpasskey'=>$xcoder_passkey
                ,'xstate'=>0
                    );     
        
       // $data=  $this->post->xss_clean($data);//filter feed data 
       
            //send user activation mail
            
            $this->email->from('davekirui@gmail.com');
            $this->email->to($this->input->post('email'));
            $this->email->subject("Account Activation");
            $this->email->message('Click the link to activate your account'.anchor('http://localhost/A3/index.php/xcoder_auth/conf/'.$xcoder_passkey));
           echo "Sending Mail...";
            if($this->email->send())
            {
                echo "Confirmation email sent";
            }
            else
            {
            $this->email->print_debugger();
            }
        
        $x=$this->xcoder_auth_model->setData($data); //save user to your database
        echo "Sucessfully Saved User: add ur stuff here";
       }
 
       
    }
    
    function conf()
    {
        $confKey=  $this->uri->segment(3);
        if($confKey!="")
            {
            $criteria=$confKey;
            $this->xcoder_auth_model->activate_user($criteria);
            echo "User activated: put in appropriate page #redirect to home page or something";
            }
      else 
           {
            $this->load->view('register');
           }
    }
    
    function xcoder_login()
    {
 
        $criteria2=array($this->input->post('user'),
                        md5($this->input->post('password')));
        $request1=$this->xcoder_auth_model->login($criteria2)->result();
        $xcoder_count=$this->xcoder_auth_model->login($criteria2)->num_rows();
        if($xcoder_count<=0)
        {
            $data['msg']="Oops! A|c does not exist | #we_are_all_lazy_programmers_but_security_muhimu!!!";
            $data['page_title']="xcoder_auth library : set your wrong login credentials messages";
           $this->load->view('wrong_login',$data);
          
        }        
        else if($xcoder_count>1)
        {
            $data['msg']="Oops A|c Suspended | U share n ac with someone else";
            $data['page_title']="xcoder_auth library : set your wrong login credentials messages";
           $this->load->view('wrong_login',$data);           
        }
        else
        {
            //set ur sessions nigga!!!!!!!!!!!!
            foreach($request1 as $sess_data)
            {
            $sess_array=array('email'=>$sess_data->xemail,
                              'username'=>$sess_data->xuser,
                              'activation_state'=>$sess_data->xstate,
                              'logged_in'=>true
                    );
            }
            
            $this->session->set_userdata($sess_array);
            
           
           redirect('redirect/xcoder_index');
            
        }
            
    }
    
    function xcoder_logout()
    {
        $this->session->sess_destroy();
        redirect('redirect/xcoder_login');
    }
    function header_check()
    {
        if($this->session->userdata('logged_in')==true)
        {
       if($this->session->userdata('activation_state')==1)
       {
           echo "  Logged In        :        ".$this->session->userdata('username');           
       }
      else if($this->session->userdata('activation_state')==0)
       {     
          echo "You have not activated your ac ...please activate to continue";  
       }
        }
 else {
            redirect('redirect/xcoder_login'); 
            
}
    }
    function xcoder_forgot()
    {
        $email=  $this->input->post('email');
        $request2=  $this->xcoder_auth_model->forgot_password($email);
        if($request2==1)
        {
           $generic_password=$this->xcoder_auth_helper->rand_SHA1();
           $this->email->from('davekirui@gmail.com');
            $this->email->to($this->input->post('email'));
            $this->email->subject("Account Activation");
            $this->email->message('Your new Password is'.$generic_password);
            echo "Sending Mail...";
            if($this->email->send())
            {
                echo "Sending Mail...
                      Sending Mail...
                      check mail for your new password";
            }
            else
            {
            $this->email->print_debugger();
            } 
           ;
        }
 else { 
     echo "Password Not registered";
     
     }
        
                
    }
  
}

?>
