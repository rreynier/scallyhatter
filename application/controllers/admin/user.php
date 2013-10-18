<?php
class User extends MY_Controller {

    function User() {

        parent::MY_Controller();

    }

    function index() {

        $this->site_model->set_template('simple');
        $this->site_model->set_content('admin/user/view_login.php','');
        $this->site_model->render();

    }

    function login() {

        $this->index();
        
    }

    function logout() {

        $this->user_model->logout();
        $this->index();

    }

    function verify() {

        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $result = $this->user_model->login($user,$pass);
        if( $result == TRUE ) {
            $this->site_model->add_success('You have successfully logged in as <strong>'.$user.'</strong>');
            redirect('admin/front');
        } else {
            $this->site_model->add_error('Your credentials are invalid, please try again');
            redirect('admin/user/login');
        }

    }

}