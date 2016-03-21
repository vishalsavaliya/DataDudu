<<<<<<< HEAD
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Common {

    private $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    function getAllCategory() {
        $this->CI->db->order_by('corder');
        $query = $this->CI->db->get('category');
        return $query->result();
    }

    function getDocByCategory($cname) {
        $this->CI->db->select('*');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where(array('category_name' => str_replace("-", " ", $cname)));
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

    function getFullDocument($cname, $dname) {
        $cname = trim(str_replace("-", " ", $cname));
        $dname = trim(str_replace("-", " ", $dname));
        $this->CI->db->select('*');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where(array('category_name' => $cname, 'doc_name' => $dname));
        $query = $this->CI->db->get();
        return $query->row();
    }

    function getDocBySearch($keyword) {
        $this->CI->db->select('d.doc_id,d.category_id,d.doc_name,d.ch_doc_name,d.doc_date,d.description,d.ch_description,c.category_name');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where('d.doc_name like ','%'. $keyword . '%');
        $this->CI->db->or_where('c.category_name like ','%'. $keyword . '%');
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

    function getCNDocBySearch($keyword) {
        $this->CI->db->select('d.doc_id,d.category_id,d.doc_name,d.ch_doc_name,d.doc_date,d.description,d.ch_description,c.category_name');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where('d.ch_doc_name like', '%' . $keyword . '%');
        $this->CI->db->or_where('c.ch_category_name like', '%' . $keyword . '%');
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

}
=======
<?php

if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Common {

    private $CI;

    function __construct() {
        $this->CI = & get_instance();
    }

    function getAllCategory() {
        $this->CI->db->order_by('corder');
        $query = $this->CI->db->get('category');
        return $query->result();
    }

    function getDocByCategory($cname) {
        $this->CI->db->select('*');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where(array('category_name' => str_replace("-", " ", $cname)));
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

    function getFullDocument($cname, $dname) {
        $cname = trim(str_replace("-", " ", $cname));
        $dname = trim(str_replace("-", " ", $dname));
        $this->CI->db->select('*');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where(array('category_name' => $cname, 'doc_name' => $dname));
        $query = $this->CI->db->get();
        return $query->row();
    }

    function getDocBySearch($keyword) {
        $this->CI->db->select('d.doc_id,d.category_id,d.doc_name,d.ch_doc_name,d.doc_date,d.description,d.ch_description,c.category_name');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where('d.doc_name like ','%'. $keyword . '%');
        $this->CI->db->or_where('c.category_name like ','%'. $keyword . '%');
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

    function getCNDocBySearch($keyword) {
        $this->CI->db->select('d.doc_id,d.category_id,d.doc_name,d.ch_doc_name,d.doc_date,d.description,d.ch_description,c.category_name');
        $this->CI->db->from('document as d');
        $this->CI->db->join('category as c', 'd.category_id = c.category_id');
        $this->CI->db->where('d.ch_doc_name like', '%' . $keyword . '%');
        $this->CI->db->or_where('c.ch_category_name like', '%' . $keyword . '%');
        $this->CI->db->order_by('dorder');
        $query = $this->CI->db->get();
        return $query->result();
    }

}
>>>>>>> origin/master
