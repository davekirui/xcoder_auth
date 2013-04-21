<?php

/**
 * Try out Bonyeza app on www.bonyeza.wordpress.com/release
 *
 * @author Xcoder
 */
class redirect extends CI_Controller{
    function xcoder_index()
    {
        $data['page_title']="xcoder_auth library: Set your welcome Page";
       $this->load->view('index',$data);
    }
    function xcoder_login()
    {
        $data['page_title']="xcoder_auth library:Login";
        $this->load->view('login',$data);
    }
    function xcoder_reg()
    {
        $data['page_title']="xcoder_auth library:Register User";
        $this->load->view('registration',$data);
    }
    function xcoder_forgot()
    {
        $this->load->view('forgot_password');
    }
    
    
}

?>
