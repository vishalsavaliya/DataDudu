<<<<<<< HEAD
<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of logout
 *
 * @author Laxmisoft
 */
class Category extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        if (!$this->authex->logged_in()) {
            header('location:' . site_url() . 'admin/login');
        }
        $this->load->model('admin/m_category', 'objcat');
    }

    function index() {
        $data['category'] = $this->objcat->getAllCategory();
        $this->load->view('admin/header');
        $this->load->view('admin/category', $data);
        $this->load->view('admin/footer');
    }

    function addCategory() {
        $this->load->view('admin/header');
        $this->load->view('admin/add-category');
        $this->load->view('admin/footer');
    }

    function createCategory() {
        $post = $this->input->post();
        $response = $this->objcat->createCategory($post);
        header('location:' . site_url() . 'admin/category?msg='.$response);
    }

    function editCategory($cid) {
        $data['category'] = $this->objcat->getCategory($cid);
        $this->load->view('admin/header');
        $this->load->view('admin/add-category', $data);
        $this->load->view('admin/footer');
    }

    function updateCategory() {
        $post = $this->input->post();
        $response = $this->objcat->updateCategory($post);        
        header('location:' . site_url() . 'admin/category?msg='.$response);
    }

    function deleteCategory() {
        $post = $this->input->post();
        $result = $this->objcat->deleteCategory($post);
        header('location:' . site_url() . 'admin/category?msg=' . $result);
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
 * Description of logout
 *
 * @author Laxmisoft
 */
class Category extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        if (!$this->authex->logged_in()) {
            header('location:' . site_url() . 'admin/login');
        }
        $this->load->model('admin/m_category', 'objcat');
    }

    function index() {
        $data['category'] = $this->objcat->getAllCategory();
        $this->load->view('admin/header');
        $this->load->view('admin/category', $data);
        $this->load->view('admin/footer');
    }

    function addCategory() {
        $this->load->view('admin/header');
        $this->load->view('admin/add-category');
        $this->load->view('admin/footer');
    }

    function createCategory() {
        $post = $this->input->post();
        $response = $this->objcat->createCategory($post);
        header('location:' . site_url() . 'admin/category?msg='.$response);
    }

    function editCategory($cid) {
        $data['category'] = $this->objcat->getCategory($cid);
        $this->load->view('admin/header');
        $this->load->view('admin/add-category', $data);
        $this->load->view('admin/footer');
    }

    function updateCategory() {
        $post = $this->input->post();
        $response = $this->objcat->updateCategory($post);        
        header('location:' . site_url() . 'admin/category?msg='.$response);
    }

    function deleteCategory() {
        $post = $this->input->post();
        $result = $this->objcat->deleteCategory($post);
        header('location:' . site_url() . 'admin/category?msg=' . $result);
    }

}
>>>>>>> origin/master
