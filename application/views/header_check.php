        <?php
       if($this->session->userdata('activation_state')==1)
       {
           echo "  Logged In        :        ".$this->session->userdata('username');           
       }
      else if($this->session->userdata('activation_state')==0)
       {     
          echo "You have not activated your ac...";  
       }
 else {
           
}
        ?>

