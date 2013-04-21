<?php

/**
 * Try out Bonyeza app on www.gramdata.wordpress.com/release
 *
 * @author Xcoder
 */
class xcoder_auth_model extends CI_Model {
    function getData()
    {
        //get user data
    }
    function setData($data)  
    {        
     $this->db->insert('xcoder_users',$data);       
    }
    function activate_user($criteria)
    {
        $data=array('xstate'=>1);
        $this->db->update('xcoder_users',$data,array('xpasskey'=>$criteria));
    }
    function passkeyCount($criteria1)
    {
         $request=$this->db->query('SELECT * FROM xcoder_users WHERE xpasskey=?',$criteria1);
         return $request->num_rows();
    }
    function login($criteria2)
    {
        $request1=  $this->db->query('SELECT * FROM xcoder_users WHERE xuser=? AND xpassword=?',$criteria2);
       return $request1;    
    }
    function forgot_password($email)
    {
      $request2=  $this->db->query("SELECT * FROM xcoder_users WHERE xemail=?",$email);
      return $request2->num_rows();
     
    }
}

?>
