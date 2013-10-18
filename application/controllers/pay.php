<?php
class Pay extends MY_Controller {

    function Pay() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'pay');

    }

    function index($found = true) {

        if(!$found) {

            $this->data['found'] = '<span class="error">No matches found, please try again.</span>';
            
        } else {

            $this->data['found'] = '';

        }

        $this->site_model->set_content('main/pay/find_player',$this->data);
        $this->site_model->render();

    }

    function search() {
        
        $data = get_post();

        if($data['last_name'] && $data['email'] && $this->scallyhatter_id) {

            $data['scallyhatter_id'] = $this->scallyhatter_id;

            if( $this->data['player_scallyhatter'] = $this->scallyhatter_model->find_player_signup($data) ) {

                $this->site_model->set_content('main/pay/choose_payment',$this->data);
                $this->site_model->render();

            } else {
                
                $this->index(false);
                
            }

        } else {

            redirect('pay');

        }
        
    }

    function choose_payment($player_scallyhatter_id) {

        if ($data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($player_scallyhatter_id)) {

            $this->site_model->set_content('main/pay/choose_payment',$data);

        } else {

            $this->site_model->add_error();
            redirect('pay');

        }


    }

    function ipn_processor() {

        // Add ipn record to log
        $this->load->model('ipn_model');
        foreach($_POST as $key => $value) {
                $data['content'] .= $key . '=' . $value . '&';
        }
        $data['player_scallyhatter_id'] = $_POST['invoice'];
        $this->ipn_model->add_single('ipn',$data);

        // Update player status
        $data = array();
        $data['id'] = $_POST['invoice'];
        $data['status'] = 'Paid - Online';
        $this->scallyhatter_model->update_single('player_scallyhatter',$data);

        // If all succeeded, send out email.
        if( ($data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($_POST['invoice'])) && ($data['player_scallyhatter']['status'] == 'Paid - Online') )  {        
            
            $this ->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);
            $this->email->from(FROM_EMAIL, FROM_EMAIL);
            $this->email->to(CLIENT_EMAIL);
            $this->email->subject('Scally Hatter - Payment Received');
            $body = $this->load->view('main/email/paypal_confirmation',$data,true);
            $this->email->message($body);
            $this->email->send();

        }

    }

    function ipn_read_all() {

        $this->load->model('ipn_model');
        $ipns = $this->ipn_model->get_all('ipn');
        echo '<ul>';
        foreach($ipns as $ipn) {

            echo '<li>';
            $content = explode('&',$ipn['content']);
            echo '<ul>';
            foreach($content as $item ) {;

                $x = explode('=',$item);
                echo '<li>';
                echo $x[0] . ' - ' . $x[1];
                echo '</li>';

            }
            echo '</ul>';
            echo '</li>';

        }

    }

    function confirmation($player_scallyhatter_id = null) {

        if( ($this->data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($player_scallyhatter_id)) &&
                ($this->data['player_scallyhatter']['status'] == 'Paid - Online') )  {

   
            $this->site_model->set_content('main/pay/view_confirmation',$this->data);
            $this->site_model->render();



        } else {
            
            $this->site_model->add_error('Something went wrong with your payment, please contact ' . CLIENT_EMAIL . '.');
            redirect('/');

        }

    }

    function pay_later($player_scallyhatter_id = null) {

        if( $this->data['player_scallyhatter'] = $this->scallyhatter_model->get_player_scallyhatter($player_scallyhatter_id) )  {

            if($this->data['player_scallyhatter']['status'] != 'Paid - Online' &&
                $this->data['player_scallyhatter']['status'] != 'Paid - Check' &&
                $this->data['player_scallyhatter']['status'] != 'Paid - Cash') {
                $data['id'] = $player_scallyhatter_id;
                $data['status'] = 'Signed Up - Paying Later';
                $this->scallyhatter_model->update_single('player_scallyhatter',$data);
            }


            $this->site_model->set_content('main/pay/pay_later',$this->data);
            $this->site_model->render();

        } else {

            $this->site_model->add_error('Error - pay.php -> pay_later');

        }

    }

    function canceled($player_scallyhatter_id = null) {

        redirect('signup/complete/' . $player_scallyhatter_id);
        
    }

}