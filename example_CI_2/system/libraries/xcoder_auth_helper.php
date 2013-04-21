<?php
/**
 * Try out Bonyeza app on www.gramdata.wordpress.com/release
 *
 * @author Xcoder
 */
class xcoder_auth_helper{
    function __construct() {
        parent::__construct();

        $this->load->helper('string');
    }
   function rand_hash()
   {
       $rand= random_string('alnum',16);
       if($rand!=NULL)
       {
           return $rand;
       }
       else
       {
           return false;
       }
   }
   function rand_SHA1()
   {
       $rand= random_string('alpha',6);
       if($rand!=NULL)
       {
           return $rand;
       }
       else
       {
           return false;
       }
   }
   function validation()
   {
       $this->form_validation->set_rules('user','User','required|min_length[5]|required');
       $this->form_validation->set_rules('password','Password','required|min_length[6]|max_length[20]|md5');
       $this->form_validation->set_rules('confirm_password','Confirm Password','required|Password|matches[password]|md5');
       $this->form_validation->set_rules('email','Email Address','required|valid_email');       
   }
   function mail_sender()
   {
            $this->email->from('davekirui@gmail.com');
            $this->email->to('xcoderkirui@gmail.com');
            $this->email->subject("Account Activation");
            $this->email->message('Click the link to activate your account'.anchor('http://localhost/A1/index.php/xcoder_auth/xcoder_auth/conf/'.  $xcoder_passkey));
            if($this->email->send())
            {
                echo "Confirmation email sent";
            }
            else
            {
            $this->email->print_debugger();
            }
   }
}

?>
