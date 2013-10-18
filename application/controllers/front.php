<?php
class Front extends MY_Controller {

    function Front() {

        parent::MY_Controller();

        $this->site_model->set_level(0,'home');

    }

    function index() {
        
        //$data['front_page'] = $this->page_model->get_single('page',1);
        
        $this->site_model->set_content('main/front/view_index',$this->data);
        $this->site_model->render();

    }

    function page_not_found() {

        $nav_data['active_cat_title'] = 'Page Not Found';
        $this->site_model->addNav(array('name' => 'sub-nav', 'view' => 'global/sub_nav_view', 'nav_data' => $nav_data));
        $this->site_model->setContent('main/front/page_not_found_view',$this->site_model->data);
        $this->site_model->render();

    }

    function get_notified() {

        // Send email
        $this ->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from(FROM_EMAIL, FROM_EMAIL);
        $this->email->to(CLIENT_EMAIL);
        $this->email->subject('ScallyHatter - Get Notified - ' . $_POST['email']);
        $this->email->message($_POST['email'] . ' wants to be notified of Scally Hatter news.');
        $this->email->send();        


    }

}
