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
class Document extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        if (!$this->authex->logged_in()) {
            header('location:' . site_url() . 'admin/login');
        }
        $this->load->model('admin/m_category', 'objcat');
        $this->load->model('admin/m_document', 'objdoc');
    }

    function index() {        
        $data['documents'] = $this->objdoc->getAllDocument();
        $this->load->view('admin/header');
        $this->load->view('admin/document', $data);
        $this->load->view('admin/footer');
    }

    function addDocument() {
        $data['category'] = $this->objcat->getAllCategory();
        $this->load->view('admin/header');
        $this->load->view('admin/add-document',$data);
        $this->load->view('admin/footer');
    }

    function createDocument() {
        $post = $this->input->post();
        $response = $this->objdoc->createDocument($post);
        header('location:' . site_url() . 'admin/document?msg='.$response);
    }

    function editDocument($did) {
        $data['category'] = $this->objcat->getAllCategory();
        $data['document'] = $this->objdoc->getDocument($did);
        $this->load->view('admin/header');
        $this->load->view('admin/add-document',$data);
        $this->load->view('admin/footer');
    }
    
    function updateDocument() {
        $post = $this->input->post();
        $response = $this->objdoc->updateDocument($post);
        header('location:' . site_url() . 'admin/document?msg='.$response);
    }
    
    function deleteDocument() {
        $post = $this->input->post();
        $this->objdoc->deleteDocument($post);
        header('location:' . site_url() . 'admin/document?msg=D');
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
class Document extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
        if (!$this->authex->logged_in()) {
            header('location:' . site_url() . 'admin/login');
        }
        $this->load->model('admin/m_category', 'objcat');
        $this->load->model('admin/m_document', 'objdoc');
    }

    function index() {        
        $data['documents'] = $this->objdoc->getAllDocument();
        $this->load->view('admin/header');
        $this->load->view('admin/document', $data);
        $this->load->view('admin/footer');
    }

    function addDocument() {
        $data['category'] = $this->objcat->getAllCategory();
        $this->load->view('admin/header');
        $this->load->view('admin/add-document',$data);
        $this->load->view('admin/footer');
    }

    function createDocument() {
        $post = $this->input->post();
        $response = $this->objdoc->createDocument($post);
        header('location:' . site_url() . 'admin/document?msg='.$response);
    }

    function editDocument($did) {
        $data['category'] = $this->objcat->getAllCategory();
        $data['document'] = $this->objdoc->getDocument($did);
        $this->load->view('admin/header');
        $this->load->view('admin/add-document',$data);
        $this->load->view('admin/footer');
    }
    
    function updateDocument() {
        $post = $this->input->post();
        $response = $this->objdoc->updateDocument($post);
        header('location:' . site_url() . 'admin/document?msg='.$response);
    }
    
    function deleteDocument() {
        $post = $this->input->post();
        $this->objdoc->deleteDocument($post);
        header('location:' . site_url() . 'admin/document?msg=D');
    }

}
>>>>>>> origin/master
