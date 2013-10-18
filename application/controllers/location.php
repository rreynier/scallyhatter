<?php
class Location extends MY_Controller {

    function Location() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'location');

    }

    function index() {

        if($this->scallyhatter_id) {

            $this->site_model->set_content('main/location/view_scallyhatter_location',$this->data);

        } else {

            $this->site_model->set_content('main/view_no_active_scallyhatters',$this->data);

        }

        $this->site_model->render();

    }


}