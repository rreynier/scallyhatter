<?php
class Scallyhatter extends MY_Controller {

    function Scallyhatter() {

        parent::MY_Controller();

        $this->site_model->set_level(0,'manage');

    }

    function index() {

        $data = array();

        $scallyhatters = $this->scallyhatter_model->get_all('scallyhatter',array('date'=>'desc'));

        foreach($scallyhatters as $scallyhatter) {

            $registered_count = $this->scallyhatter_model->count_registered($scallyhatter['id']);
            $paid_online_count = $this->scallyhatter_model->count_paid_online($scallyhatter['id']);
            $paid_other_count = $this->scallyhatter_model->count_paid_other($scallyhatter['id']);
            $estimated_profit = $paid_online_count * $scallyhatter['signup_fee_online'];

            $data['scallyhatters'][$scallyhatter['id']] = $scallyhatter;
            $data['scallyhatters'][$scallyhatter['id']]['registered_count'] = $registered_count;
            $data['scallyhatters'][$scallyhatter['id']]['paid_online_count'] = $paid_online_count;
            $data['scallyhatters'][$scallyhatter['id']]['paid_other_count'] = $paid_other_count;
            $data['scallyhatters'][$scallyhatter['id']]['paid_total_count'] = $paid_online_count + $paid_other_count;
            $data['scallyhatters'][$scallyhatter['id']]['estimated_profit'] = $estimated_profit;
            
        }

        $this->site_model->set_content('admin/scallyhatter/view_scallyhatters',$data);
        $this->site_model->render();

    }

    function view_registered($scallyhatter_id = null, $export = false) {

        if($scallyhatter_id != null && is_numeric($scallyhatter_id)) {

            $data['scallyhatter'] = $this->scallyhatter_model->get_single('scallyhatter',$scallyhatter_id);
            $data['registered'] = $this->scallyhatter_model->get_signed_up($scallyhatter_id);

            $this->site_model->set_level(0,'manage');
            $this->site_model->set_content('admin/scallyhatter/view_registered',$data);
            $this->site_model->render();

        } else {

            $this->site_model->add_error();
            $this->index();

        }

    }

    function export_registered($scallyhatter_id = null) {

        $data = $this->scallyhatter_model->get_registered_for_export($scallyhatter_id);

        $count = 0;

        foreach($data as $row) {

            unset($row['id']);
            unset($row['fk_player_id']);
            unset($row['fk_scallyhatter_id']);

            if($count == 0) {
                foreach($row as $key=>$row2) {
                    $new_row[] = $key;
                }
                $modified_data[] = $new_row;
            } else {
                $modified_data[] = $row;
            }

            $count++;

        }

        $name = date ("m_d_Y-g_i_sa") . '.csv';
        $this->load->helper('csv_helper');
        array_to_csv($modified_data, $name);

    }

    function add_scallyhatter() {

        $this->edit_scallyhatter(0);
        
    }

    function edit_scallyhatter( $scallyhatter_id = 0 ) {

        if ( $scallyhatter_id == 0 || !is_numeric($scallyhatter_id)) {

            $data['action'] = 'Add New';
            $data['scallyhatter'] = $this->scallyhatter_model->get_structure('scallyhatter');
            $data['scallyhatter']['id'] = 0;

        } else {

            $data['action'] = 'Edit';
            $data['scallyhatter'] = $this->scallyhatter_model->get_single('scallyhatter',$scallyhatter_id);

        }

        $this->site_model->set_content('admin/scallyhatter/edit_scallyhatter',$data);
        $this->site_model->render();

    }

    function save_scallyhatter () {

        $data = get_post();
        $data = make_float($data,array('signup_fee_online','signup_fee_other'));

        if($data['active'] == 1) {

            $this->scallyhatter_model->make_all_scallyhatters_inactive();

        }

        if($data['id'] == 0 || !is_numeric($data['id'])) {
            
            unset($data['id']);
            $result['insert_id'] = $this->scallyhatter_model->add_single('scallyhatter',$data);
            $data['id'];
            $result['action'] = 'insert';
            $result['msg'] = 'Scally Hatter Added';

        } else {

            $this->scallyhatter_model->update_single('scallyhatter',$data);
            $result['action'] = $_POST['desc'];
            $result['msg'] = 'Scally Hatter Updated';

        }



        if (is_ajax()) {
            
            echo json_encode($result);

        } else {

            $this->site_model->add_success($result['msg']);
            redirect('admin/scallyhatter/edit-scallyhatter/' . $data['id']);

        }

    }

    function delete_scallyhatter($scallyhatter_id = null) {

        if ($scallyhatter_id != null && is_numeric($scallyhatter_id) ) {

            $this->scallyhatter_model->delete_single('scallyhatter', $scallyhatter_id);

            $result['msg'] = 'Scallyhatter Deleted';
            $result['action'] = 'delete';
            $result['delete_id'] = 'scallyhatter_' . $scallyhatter_id; 

        } else {

            $result['msg'] = 'Error Deleting';

        }

        if (is_ajax()) {

            echo json_encode($result);

        } else {

            $this->site_model->add_success($result['msg']);
            redirect('admin/scallyhatter');

        }
    }

    function add_player($scallyhatter_id = false) {

        $this->edit_player(0,$scallyhatter_id);
        
    }

    function edit_player($player_id = 0,$scallyhatter_id = false) {

        if ($scallyhatter_id != false) {

            

            if ( $player_id == 0 || !is_numeric($player_id)) {                

                $data['action'] = 'Add New';
                $data['player'] = $this->scallyhatter_model->get_structure('player');
                $data['player']['fk_scallyhatter_id'] = $scallyhatter_id;
                $data['player']['fk_player_id'] = 0;
                $data['player']['player_scallyhatter_id'] = 0;
                $data['player']['id'] = 0;
                $data['player']['status'] = 'None';

            } else {

                $data['player'] = $this->scallyhatter_model->get_player_scallyhatter2($player_id,$scallyhatter_id);
                $data['action'] = 'Edit';  

            }

            $this->site_model->set_content('admin/scallyhatter/edit_player',$data);
            $this->site_model->render();

        } else {

            $this->site_model->add_error();
            $this->index();

        }

    }

    function save_player () {

        $data = get_post();        

        if($data['player_id'] == 0 || !is_numeric($data['player_id'])) {

            $data_modified = array();
            $data_modified = $data;
            unset($data_modified['id']);
            unset($data_modified['player_id']);
            unset($data_modified['status']);
            unset($data_modified['scallyhatter_id']);
            unset($data_modified['player_scallyhatter_id']);
            $player_id = $this->scallyhatter_model->add_single('player',$data_modified);

            $data_modified = array();
            $data_modified['status'] = $data['status'];
            $data_modified['fk_player_id'] = $player_id;
            $data_modified['fk_scallyhatter_id'] = $data['scallyhatter_id'];
            $data_modified['date_registered'] = date('Y-m-d H:i:s');
            $player_scallyhatter_id = $this->scallyhatter_model->add_single('player_scallyhatter',$data_modified);

            $result['action'] = 'insert';
            $result['msg'] = 'Player Added';

        } else {

            // Add all data to player table first
            $data_modified = array();
            $data_modified = $data;
            $data_modified['id'] = $data['player_id'];
            unset($data_modified['player_id']);
            unset($data_modified['status']);
            unset($data_modified['scallyhatter_id']);
            unset($data_modified['player_scallyhatter_id']);
            $this->scallyhatter_model->update_single('player',$data_modified);

            // Now update connection between hatter and player
            $data_modified = array();
            $data_modified['status'] = $data['status'];
            $data_modified['id'] = $data['player_scallyhatter_id'];
            $data_modified['fk_player_id'] = $data['player_id'];
            $data_modified['fk_scallyhatter_id'] = $data['scallyhatter_id'];
            $data_modified['date_registered'] = date('Y-m-d H:i:s');
            $this->scallyhatter_model->update_single('player_scallyhatter',$data_modified);

            $result['action'] = 'update';
            $result['msg'] = 'Player Updated';

        }

        $msg = 'Player Added/Updated';

        if (is_ajax()) {

            echo json_encode($result);

        } else {

            $this->site_model->add_success($result['msg']);
            redirect('admin/scallyhatter/edit-player/' . $player_id . '/' . $data['scallyhatter_id']);

        }

    }

    function delete_player($player_id = null,$scallyhatter_id = null) {

        if ($player_id != null && is_numeric($player_id) ) {

            $this->scallyhatter_model->delete_single('player', $player_id);

            $result['msg'] = 'Player Deleted';
            $result['action'] = 'delete';
            $result['delete_id'] = 'player_' . $player_id;

        } else {

            $result['msg'] = 'Error Deleting';

        }

        if (is_ajax()) {

            echo json_encode($result);

        } else {

            $this->site_model->add_success($result['msg']);
            redirect('admin/scallyhatter/view_registered/'.$scallyhatter_id);

        }
    }





}