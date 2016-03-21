<<<<<<< HEAD
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Laxmisoft
 */
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->output->set_header('cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header("cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

        if ($this->authex->logged_in()) {
            header('location:' . site_url() . 'admin');
        } 
    }

    function index() {
        $this->load->view('admin/login');
    }

    function checkLogin() {
        $post = $this->input->post();
        if (is_array($post) && count($post) > 0) {
            $role = $this->authex->login($post);
            if (!$role) {
                header('location:' . site_url() . 'admin/login');
            } else {
                header('location:' . site_url() . 'admin/');
            }
        } else {
            header('location:' . site_url() . 'admin/login');
        }
    }

}
=======
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of login
 *
 * @author Laxmisoft
 */
class Login extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->output->set_header('cache-Control: no-store, no-cache, must-revalidate');
        $this->output->set_header("cache-Control: post-check=0, pre-check=0", false);
        $this->output->set_header("Pragma: no-cache");
        $this->output->set_header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");

        if ($this->authex->logged_in()) {
            header('location:' . site_url() . 'admin');
        } 
    }

    function index() {
        $this->load->view('admin/login');
    }

    function checkLogin() {
        $post = $this->input->post();
        if (is_array($post) && count($post) > 0) {
            $role = $this->authex->login($post);
            if (!$role) {
                header('location:' . site_url() . 'admin/login');
            } else {
                header('location:' . site_url() . 'admin/');
            }
        } else {
            header('location:' . site_url() . 'admin/login');
        }
    }

}
>>>>>>> origin/master
