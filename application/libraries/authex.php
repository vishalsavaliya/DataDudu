<<<<<<< HEAD
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authex {

    private $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    function logged_in() {
        return ($this->CI->session->userdata("a_profileid")) ? true : false;
    }
   
    function login($post) {
        $login_where = array(
            "username" => $post['username'],
            "password" => $post['password']
        );
        $query = $this->CI->db->get_where("admin_profile", $login_where);
        $row = $query->row();
        if ($query->num_rows() !== 1) {
            /* their username and password combination
             * were not found in the databse */
            $this->CI->session->set_userdata("error", "Username or password is invalid..!");
            return FALSE;
        } else {
            $last_login = date("Y-m-d H-i-s");
            $data = array(
                "last_login" => $last_login
            );
            $where['username'] = $row->username;
            $this->CI->db->update("admin_profile", $data, $where);
            $res = $this->CI->db->get_where('admin_profile', $where)->row();
            $this->CI->session->set_userdata('a_profileid', $res->profile_id);
            $this->CI->session->set_userdata('a_name', $res->name);
            $this->CI->session->set_userdata('a_email', $res->email);
            $this->CI->session->set_userdata('a_mobile', $res->mobile);
            unset($res);
            return TRUE;
        }
    }   

    function logout() {
        $sess = array(
            'a_profileid' => '',
            'a_name' => '',
            'a_email' => '',
            'a_mobile' => '',
        );
        $this->CI->session->unset_userdata($sess);
    }    

}
=======
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Authex {

    private $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    function logged_in() {
        return ($this->CI->session->userdata("a_profileid")) ? true : false;
    }
   
    function login($post) {
        $login_where = array(
            "username" => $post['username'],
            "password" => $post['password']
        );
        $query = $this->CI->db->get_where("admin_profile", $login_where);
        $row = $query->row();
        if ($query->num_rows() !== 1) {
            /* their username and password combination
             * were not found in the databse */
            $this->CI->session->set_userdata("error", "Username or password is invalid..!");
            return FALSE;
        } else {
            $last_login = date("Y-m-d H-i-s");
            $data = array(
                "last_login" => $last_login
            );
            $where['username'] = $row->username;
            $this->CI->db->update("admin_profile", $data, $where);
            $res = $this->CI->db->get_where('admin_profile', $where)->row();
            $this->CI->session->set_userdata('a_profileid', $res->profile_id);
            $this->CI->session->set_userdata('a_name', $res->name);
            $this->CI->session->set_userdata('a_email', $res->email);
            $this->CI->session->set_userdata('a_mobile', $res->mobile);
            unset($res);
            return TRUE;
        }
    }   

    function logout() {
        $sess = array(
            'a_profileid' => '',
            'a_name' => '',
            'a_email' => '',
            'a_mobile' => '',
        );
        $this->CI->session->unset_userdata($sess);
    }    

}
>>>>>>> origin/master
