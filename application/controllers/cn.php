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
class Cn extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['category'] = $this->common->getAllCategory();
        $this->load->view('web/cn/header');
        $this->load->view('web/cn/documents', $data);
        $this->load->view('web/cn/footer');
    }

    function d($cname, $dname = NULL) {
        if ($cname != NULL && $dname == NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['documents'] = $this->common->getDocByCategory($cname);
            $this->load->view('web/cn/header');
            $this->load->view('web/cn/cdocument', $data);
            $this->load->view('web/cn/footer');
        } else if ($cname != NULL && $dname != NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['fulldocument'] = $this->common->getFullDocument($cname, $dname);
            $this->load->view('web/cn/header');
            $this->load->view('web/cn/document', $data);
            $this->load->view('web/cn/footer');
        } else {
            header('location:' . site_url().'cn');
        }
    }

    function search() {
        $keyword = $this->input->post('keyword');
        $data['category'] = $this->common->getAllCategory();
        $data['documents'] = $this->common->getCNDocBySearch($keyword);
        $this->load->view('web/cn/header');
        $this->load->view('web/cn/cdocument', $data);
        $this->load->view('web/cn/footer');
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
class Cn extends CI_Controller {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function index() {
        $data['category'] = $this->common->getAllCategory();
        $this->load->view('web/cn/header');
        $this->load->view('web/cn/documents', $data);
        $this->load->view('web/cn/footer');
    }

    function d($cname, $dname = NULL) {
        if ($cname != NULL && $dname == NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['documents'] = $this->common->getDocByCategory($cname);
            $this->load->view('web/cn/header');
            $this->load->view('web/cn/cdocument', $data);
            $this->load->view('web/cn/footer');
        } else if ($cname != NULL && $dname != NULL) {
            $data['category'] = $this->common->getAllCategory();
            $data['fulldocument'] = $this->common->getFullDocument($cname, $dname);
            $this->load->view('web/cn/header');
            $this->load->view('web/cn/document', $data);
            $this->load->view('web/cn/footer');
        } else {
            header('location:' . site_url().'cn');
        }
    }

    function search() {
        $keyword = $this->input->post('keyword');
        $data['category'] = $this->common->getAllCategory();
        $data['documents'] = $this->common->getCNDocBySearch($keyword);
        $this->load->view('web/cn/header');
        $this->load->view('web/cn/cdocument', $data);
        $this->load->view('web/cn/footer');
    }   

}
>>>>>>> origin/master
