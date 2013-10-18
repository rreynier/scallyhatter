<?php
class Registered extends MY_Controller {

    function Registered() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'registered');

        $this->scallyhatter_id =  $this->scallyhatter_model->get_active_scallyhatter();


    }

    function index() {

        if($this->scallyhatter_id) {
      
            $this->data['registered'] = $this->scallyhatter_model->get_registered($this->scallyhatter_id,'exclude');

            $this->site_model->set_content('main/registered/view_registered',$this->data);

        } else {

            $this->site_model->set_content('main/view_no_active_scallyhatters');

        }

        $this->site_model->render();

    }


}