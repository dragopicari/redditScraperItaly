<?php

    class Savepin extends CI_Controller{

        
        public function save_data(){
  
                $this->pin_model->save_pin();
                redirect(base_url());

            
			
        }
        
        public function delete(){
  
            $this->pin_model->delete_pin();
            redirect(base_url());

        
        
    }
    }

?>