<?php
class Past extends MY_Controller {

    function Past() {

        parent::MY_Controller();
        $this->site_model->set_level(0,'past');

    }

    function index() {

        $scallyhatters = $this->scallyhatter_model->get_all('scallyhatter');

        foreach($scallyhatters as $scallyhatter) {

            $count = $this->scallyhatter_model->count_registered($scallyhatter['id']);
            $this->data['scallyhatters'][$scallyhatter['id']] = $scallyhatter;
            $this->data['scallyhatters'][$scallyhatter['id']]['registered_count'] = $count;
            
        }

        $this->site_model->set_content('main/past/view_past_scallyhatters',$this->data);
        $this->site_model->render();

    }

    function view_details($scallyhatter_id) {

        if($this->data['scallyhatter_selected'] = $this->scallyhatter_model->get_single('scallyhatter',$scallyhatter_id)) {

            $this->data['registered'] = $this->scallyhatter_model->get_registered($scallyhatter_id);

            $this->site_model->set_content('main/registered/view_registered',$this->data);
            $this->site_model->render();

        } else {

            $this->site_model->add_error();
            redirect('/');
            
        }

    }

}