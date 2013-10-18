<?php
class Front extends MY_Controller {

    function Front() {

        parent::MY_Controller();

    }

    function index() {

        $data = null;

        redirect('admin/scallyhatter');

    }




}
