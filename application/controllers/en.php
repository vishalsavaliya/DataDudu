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
class En extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['category'] = $this->common->getAllCategory();
        $this->load->view('web/en/header');
        $this->load->view('web/en/documents', $data);
        $this->load->view('web/en/footer');
    }

    function d($cname, $dname = NULL) {
        if ($cname != NULL && $dname == NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['documents'] = $this->common->getDocByCategory($cname);
            $this->load->view('web/en/header');
            $this->load->view('web/en/cdocument', $data);
            $this->load->view('web/en/footer');
        } else if ($cname != NULL && $dname != NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['fulldocument'] = $this->common->getFullDocument($cname, $dname);
            $this->load->view('web/en/header');
            $this->load->view('web/en/document', $data);
            $this->load->view('web/en/footer');
        } else {
            header('location:' . site_url());
        }
    }

    function search() {
        $keyword = $this->input->post('keyword');
        $data['category'] = $this->common->getAllCategory();
        $data['documents'] = $this->common->getDocBySearch($keyword);
        $this->load->view('web/en/header');
        $this->load->view('web/en/cdocument', $data);
        $this->load->view('web/en/footer');
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
class En extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['category'] = $this->common->getAllCategory();
        $this->load->view('web/en/header');
        $this->load->view('web/en/documents', $data);
        $this->load->view('web/en/footer');
    }

    function d($cname, $dname = NULL) {
        if ($cname != NULL && $dname == NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['documents'] = $this->common->getDocByCategory($cname);
            $this->load->view('web/en/header');
            $this->load->view('web/en/cdocument', $data);
            $this->load->view('web/en/footer');
        } else if ($cname != NULL && $dname != NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['fulldocument'] = $this->common->getFullDocument($cname, $dname);
            $this->load->view('web/en/header');
            $this->load->view('web/en/document', $data);
            $this->load->view('web/en/footer');
        } else {
            header('location:' . site_url());
        }
    }

    function search() {
        $keyword = $this->input->post('keyword');
        $data['category'] = $this->common->getAllCategory();
        $data['documents'] = $this->common->getDocBySearch($keyword);
        $this->load->view('web/en/header');
        $this->load->view('web/en/cdocument', $data);
        $this->load->view('web/en/footer');
    }   

}
>>>>>>> origin/master
