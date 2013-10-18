<?php
class Scallyhatter_model extends MY_Model {

    function Scallyhatter_model() {
        parent::MY_Model();
    }

    function get_registered($scallyhatter_id,$waiting_list = 'include') {

        if($waiting_list == 'exclude') {
            $this->db->where('player_scallyhatter.status !=', 'Signed Up - Waiting List');
        }
        $this->db->where('player_scallyhatter.fk_scallyhatter_id',$scallyhatter_id);
		$this->db->where('player_scallyhatter.status','Paid - Online');

        $this->db->join('scallyhatter','scallyhatter.id = player_scallyhatter.fk_scallyhatter_id');
        $this->db->join('player','player.id = player_scallyhatter.fk_player_id');      

        return $this->db->get('player_scallyhatter')->result_array();

    }
	
    function get_signed_up($scallyhatter_id,$waiting_list = 'include') {

        if($waiting_list == 'exclude') {
            $this->db->where('player_scallyhatter.status !=', 'Signed Up - Waiting List');
        }
        $this->db->where('player_scallyhatter.fk_scallyhatter_id',$scallyhatter_id);

        $this->db->join('scallyhatter','scallyhatter.id = player_scallyhatter.fk_scallyhatter_id');
        $this->db->join('player','player.id = player_scallyhatter.fk_player_id');      

        return $this->db->get('player_scallyhatter')->result_array();

    }	

    function get_registered_for_export($scallyhatter_id) {

        $this->db->where('player_scallyhatter.fk_scallyhatter_id',$scallyhatter_id);
        $this->db->join('player_scallyhatter','player.id = player_scallyhatter.fk_player_id');

        return $this->db->get('player')->result_array();

    }

    function count_registered($scallyhatter_id) {

        $query = $this->db->query("SELECT COUNT(id) AS count FROM player_scallyhatter WHERE fk_scallyhatter_id = $scallyhatter_id AND player_scallyhatter.status = 'Paid - Online'");
        $row = $query->row_array();
        return $row['count'];

    }

    function count_waiting_list($scallyhatter_id) {

        $query = $this->db->query("SELECT COUNT(id) AS count FROM player_scallyhatter WHERE fk_scallyhatter_id = $scallyhatter_id AND status = 'Signed Up - Waiting List'");
        $row = $query->row_array();
        return $row['count'];

    }

    function count_paid_online($scallyhatter_id) {

        $query = $this->db->query("SELECT COUNT(id) AS count FROM player_scallyhatter WHERE fk_scallyhatter_id = $scallyhatter_id AND player_scallyhatter.status = 'Paid - Online'");
        $row = $query->row_array();
        return $row['count'];

    }

    function count_paid_other($scallyhatter_id) {

        $query = $this->db->query("SELECT COUNT(id) AS count FROM player_scallyhatter WHERE fk_scallyhatter_id = $scallyhatter_id AND ( player_scallyhatter.status = 'Paid - Cash' OR player_scallyhatter.status = 'Paid - Check' )");
        $row = $query->row_array();
        return $row['count'];

    }

    function get_player_scallyhatter($player_scallyhatter_id) {

        if (is_numeric($player_scallyhatter_id)) {

            $query = "SELECT *, player_scallyhatter.id AS player_scallyhatter_id FROM player
                        RIGHT JOIN player_scallyhatter ON player.id = player_scallyhatter.fk_player_id
                        RIGHT JOIN scallyhatter ON player_scallyhatter.fk_scallyhatter_id = scallyhatter.id
                        WHERE player_scallyhatter.id = $player_scallyhatter_id";
            return $this->db->query($query)->row_array();

        } else {

            return false;

        }

    }

    function get_player_scallyhatter2($player_id,$scallyhatter_id) {

        if (is_numeric($player_id) && is_numeric($scallyhatter_id)) {

            $query = "SELECT *, player_scallyhatter.id AS player_scallyhatter_id FROM player
                        RIGHT JOIN player_scallyhatter ON player.id = player_scallyhatter.fk_player_id
                        RIGHT JOIN scallyhatter ON player_scallyhatter.fk_scallyhatter_id = scallyhatter.id
                        WHERE player.id = $player_id AND scallyhatter.id = $scallyhatter_id";
            return $this->db->query($query)->row_array();

        } else {

            return false;

        }

    }

    function find_player_signup($data) {

        $this->db->select('*, player_scallyhatter.id AS player_scallyhatter_id');
        $this->db->where('player.last_name', strtolower($data['last_name']));
        $this->db->where('player.email', strtolower($data['email']));
        $this->db->where('fk_scallyhatter_id', $data['scallyhatter_id']);
        $this->db->join('player_scallyhatter', 'player_scallyhatter.fk_player_id = player.id');
        $this->db->join('scallyhatter', 'scallyhatter.id = player_scallyhatter.fk_scallyhatter_id');
        return $this->db->get('player')->row_array();

    }


    function get_active_scallyhatter() {

        $this->db->select('id');
        $this->db->where('active','1');
        $result = $this->db->get('scallyhatter',1)->row_array();

        if($result) {
            return $result['id'];
        } else {
            return false;
        }

    }

    function make_all_scallyhatters_inactive() {

        $data['active'] = 0;
        $this->db->update('scallyhatter',$data);
        
    }


}