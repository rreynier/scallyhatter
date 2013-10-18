<?php
class MY_Controller extends Controller {

    function MY_Controller(){

        parent::Controller();

        // Do some things if we are in admin site.
        if( $this->uri->segment(1) == 'admin' ) {
            
            // Set template to  admin template.
            $this->site_model->set_template('admin');
            $this->site_model->set_title('Scallyhatter - Admin');

            $this->load->model('user_model');
            $this->user = $this->user_model->get_logged_in_user();

            if($this->user) {
                
                // Add the main nav and bottom nav to our template
                $this->site_model->add_nav('admin_main_nav');

            } else if ( $this->uri->segment(2) != 'user' && $this->uri->segment(3) != 'login' ) {

                redirect('admin/user/login');
                
            }



        // Do some things if we are in main site.
        } else {

            // Set template to  main template.
            $this->site_model->set_template('main');

            // Add the main nav and bottom nav to our template
            $this->site_model->add_nav('main_nav');

            $this->scallyhatter_id =  $this->scallyhatter_model->get_active_scallyhatter();

            if($this->scallyhatter_id) {

                $this->data['scallyhatter'] = $this->scallyhatter_model->get_single('scallyhatter',$this->scallyhatter_id);
                $this->data['scallyhatter']['remaining_spots'] = $this->data['scallyhatter']['max_players'] - $this->scallyhatter_model->count_paid_online($this->scallyhatter_id);
                
                $this->data['scallyhatter']['days_left'] = round((((strtotime($this->data['scallyhatter']['date']) - time())/24)/60)/60);
                if ($this->data['scallyhatter']['days_left'] < 0 ) { $this->data['scallyhatter']['days_left'] = 0; }
                
                $this->data['scallyhatter']['days_left_untill_deadline'] = round((((strtotime($this->data['scallyhatter']['registration_deadline']) - time())/24)/60)/60);
                if ($this->data['scallyhatter']['days_left_untill_deadline'] < 0 ) { $this->data['scallyhatter']['days_left_untill_deadline'] = 0; }
                
            } else {
                
                $this->data['scallyhatter'] = false;
                
            }



        }

    }

    // Rewrite all incoming function names that may have dashes for presentation to have dashes replaced with underscores.
    function _remap( $method ) {
        $method = str_replace( '-', '_', $method );
        if ( $this->uri->segment(1) == 'admin' ) {
            $params = array_slice( $this->uri->segment_array(), 3 );
        } else {
            $params = array_slice( $this->uri->segment_array(), 2 );
        }
        if ( ! method_exists( $this, $method ) )
            show_404();
        return call_user_func_array( array( $this, $method ), $params );
    }

}
