<?php
class User_model extends Model {
    function User_model() {
        parent::Model();
        session_start();
        
    }

    function get_structure() {
        $fields = $this->db->list_fields('user');
        foreach ($fields as $field) { $result[$field] = null; }
        return $result;
    }

    function login($user,$pass) {
        $this->db->where('user',$user);
        $this->db->where('pass',md5($pass));
        $query = $this->db->get('user',1);
        $result = $query->result_array();
        if (count($result) > 0) {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;
            $_SESSION['authenticated'] = TRUE; ;
            $result['pass'] = $pass;
            return $result[0];
        } else {
            $this->logout();
            return FALSE;
        }
    }

    function get_logged_in_user() {
        if( isset($_SESSION['authenticated']) &&  isset($_SESSION['user']) && isset($_SESSION['pass']) ) {
            if($_SESSION['authenticated'] == TRUE) {
                $user = $_SESSION['user'];
                $pass = $_SESSION['pass'];
                $user = $this->login($user,$pass);
                if ($user != FALSE) {
                    return $user;
                } else {
                    return FALSE;
                }
            } else {
                return FALSE;
            }
            return FALSE;
        }
    }

    function logout() {
        $_SESSION['user'] = '';
        $_SESSION['pass'] = '';
        $_SESSION['authenticated'] = FALSE;
        session_destroy();
    }



}
