<?php
class Info extends MY_Controller {

    function Info() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'info');

    }

    function index() {

        if($this->scallyhatter_id) {

            $this->data['registered_count'] = $this->scallyhatter_model->count_registered($this->scallyhatter_id);
            $this->data['waiting_list_count'] = $this->scallyhatter_model->count_waiting_list($this->scallyhatter_id);

            $this->site_model->set_content('main/info/view_scallyhatter_info',$this->data);

        } else {

            $this->site_model->set_content('main/view_no_active_scallyhatters');

        }

        $this->site_model->render();

    }


}