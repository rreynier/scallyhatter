<?php
class Signup extends MY_Controller {

    function Signup() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'signup');  
        
    }

    function index() {
        $this->enter_information();
    }

    function enter_information() {


        // Logic to see if deadline has passed.
        if($this->scallyhatter_id && strtotime($this->data['scallyhatter']['registration_deadline']) >= time() ) {

            $this->site_model->set_content('main/signup/view_signup',$this->data);            
            
        } else if ($this->scallyhatter_id) {
            
            $this->site_model->set_content('main/signup/view_registration_date_passed',$this->data);     
            
        } else {

            $this->site_model->set_content('main/view_no_active_scallyhatters');            

        }

        $this->site_model->render();

    }

    function save_player() {
	
        // First add player to player db.
        $data['first_name'] = $_POST['first_name'];
        $data['last_name'] = $_POST['last_name'];
        $data['email'] = $_POST['email'];
        $data['phone'] = $_POST['phone'];
        $data['gender'] = $_POST['gender'];
        $data['skill'] = $_POST['skill'];
        $data['shirt_size'] = $_POST['shirt_size'];
        $data['request'] = $_POST['request'];
        $player_id = $this->scallyhatter_model->add_single('player',$data);
        
        // Next, add relationship between player and scally hatter as well as the status.
        $data2['fk_player_id'] = $player_id;
        $data2['fk_scallyhatter_id'] = $_POST['scallyhatter_id'];
        if($this->data['scallyhatter']['remaining_spots'] > 0) {
            $data2['status'] = 'Signed Up - Choose Payment';
        } else {
            $data2['status'] = 'Signed Up - Waiting List';
        }
        date_default_timezone_set('America/New_York');
        $data2['date_registered'] = date('Y-m-d H:i:s');
        $relation_id = $this->scallyhatter_model->add_single('player_scallyhatter',$data2);
        redirect('signup/complete/' . $relation_id . '/');

    }
    
    function complete($player_scallyhatter_id = null) {
 
        if( ($data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($player_scallyhatter_id)) )  {

            // Send email
            $this ->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from(FROM_EMAIL, FROM_EMAIL);
            $this->email->to($data['player_scallyhatter']['email']);
            $this->email->subject('Scally Hatter - Signup Complete');
            $body = $this->load->view('main/email/signup_confirmation',$data,true);
            $this->email->message($body);
            //$this->email->send();

            // Get player and output.
            $this->data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($player_scallyhatter_id);

            if($this->data['scallyhatter']['remaining_spots'] > 0) {
                $this->site_model->set_content('main/signup/view_complete',$this->data);
            } else {
                $this->site_model->set_content('main/signup/view_complete_waiting_list',$this->data);
            }

            $this->site_model->render();

        } else {
            
            $this->site_model->add_error();
            redirect('signup');
        }

    }

}