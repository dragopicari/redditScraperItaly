<?php

    class Pin_model extends CI_Model{
        public function __construct(){
            $this->load->database();
        }

        public function save_pin(){

            $data = array(
                'title' => $this->input->post('titPin'),
                'slug' => $this->input->post('titPin'),
                'fonte' => $this->input->post('fontPin'),
                'ora' => $this->input->post('hourPin'),
                'user_id' => $this->input->post('user_id'),
            );

            return $this->db->insert('redditpin', $data);

        }

        public function get_single_redditposts($user){

            if($user!=""){
			$query = $this->db->query("select id,title,slug,fonte,ora from redditPin where redditPin.user_id = $user order by id desc limit 3");
            return $query->result_array();
            }
            

        }

        public function delete_pin(){

            $id = $this->input->post('id');             
			$query = $this->db->query("delete from redditpin where redditpin.id = $id");

        }
    }

?>