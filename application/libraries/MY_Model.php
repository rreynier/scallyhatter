<?php
class MY_Model extends Model {

    function MY_Model(){
        parent::Model();
    }

    function get_single($table,$id) {
        if (is_numeric($id)) {
            $this->db->where('id',$id);
        }
        return $this->db->get($table)->row_array();
    }

    function get_all($table,$order_by = false) {
        if($order_by) {
            foreach($order_by as $field=>$direction) {
                $this->db->order_by($field,$direction);
            }
        }
        return $this->db->get($table)->result_array();
    }

    function add_single($table,$data) {
        $this->db->insert($table,$data);
        return $this->db->insert_id();
    }

    function update_single($table,$data) {
        $this->db->where('id',$data['id']);
        return $this->db->update($table,$data);
    }

    function delete_single($table,$id) {
        $this->db->where('id',$id);
        return $this->db->delete($table);
    }

    function delete_all($table,$id) {
        return $this->db->truncate($table);
    }

    function get_structure($table) {
        $fields = $this->db->list_fields($table);
        foreach ($fields as $field) { $result[$field] = null; }
        return $result;
    }


    function get_highest_order($table,$where = false) {

        $this->db->order_by('DESC');
        $result = $this->db->get($table,1)->row_array();

        if ($result) {

            return $result['order'];

        } else {

            return 1;

        }
        
    }    

    function exists($table,$id,$field = null) {

        if($field) {

            $this->db->where($field['name'], $field['value']);

        } else {

            $this->db->where('id', $id);

        }

        $query = $this->db->get($table,1);
        $exists = $this->db->affected_rows();

        if ($exists == 1) {

            return true;

        } else {

            return false;

        }

    }

}