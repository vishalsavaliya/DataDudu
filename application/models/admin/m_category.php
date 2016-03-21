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
class M_category extends CI_Model {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function getAllCategory() {
        $this->db->select('c.category_id,c.category_name,c.ch_category_name,c.corder,count(d.category_id) as total');
        $this->db->from('category as c');
        $this->db->join('document as d', 'c.category_id = d.category_id', 'left');
        $this->db->group_by('c.category_id');
        $this->db->order_by('c.corder');
        $query = $this->db->get();
        return $query->result();
    }

    function createCategory($data) {
        $result = $this->categoryExist(NULL, trim($data['category_name']));
        if (!$result) {
            $this->db->insert('category', $data);
            return 'I';
        } else {
            return 'NE';
        }
    }   

    function getCategory($cid) {
        $query = $this->db->get_where('category', array('category_id' => $cid));
        return $query->row();
    }

    function updateCategory($data) {
        $cid = $data['category_id'];
        $cname = trim($data['category_name']);
        unset($data['category_id']);
        $result = $this->categoryExist($cid, $cname);        
        if (!$result) {
            $this->db->update('category', $data, array('category_id' => $cid));
            return 'U';
        } else {
            return 'NE';
        }
    }
    
    function categoryExist($cid, $cname) {
        if ($cid == NULL) {
            $where = array(
                'category_name' => $cname
            );
        } else {
            $where = array(
                'category_id <> ' => $cid,
                'category_name' => $cname
            );
        }         
        $query = $this->db->get_where('category', $where);        
        return ($query->num_rows()) ? TRUE : FALSE;
    }

    function deleteCategory($data) {
        $cid = $data['category_id'];
        if ($this->isHasDoc($cid)) {
            $this->db->delete('category', array('category_id' => $cid));
            return "D";
        } else {
            return "E";
        }
    }

    function isHasDoc($cid) {
        $query = $this->db->get_where('document', array('category_id' => $cid));
        return ($query->num_rows()) ? FALSE : TRUE;
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
class M_category extends CI_Model {

    //put your code here
    function __construct() {
        parent::__construct();
    }

    function getAllCategory() {
        $this->db->select('c.category_id,c.category_name,c.ch_category_name,c.corder,count(d.category_id) as total');
        $this->db->from('category as c');
        $this->db->join('document as d', 'c.category_id = d.category_id', 'left');
        $this->db->group_by('c.category_id');
        $this->db->order_by('c.corder');
        $query = $this->db->get();
        return $query->result();
    }

    function createCategory($data) {
        $result = $this->categoryExist(NULL, trim($data['category_name']));
        if (!$result) {
            $this->db->insert('category', $data);
            return 'I';
        } else {
            return 'NE';
        }
    }   

    function getCategory($cid) {
        $query = $this->db->get_where('category', array('category_id' => $cid));
        return $query->row();
    }

    function updateCategory($data) {
        $cid = $data['category_id'];
        $cname = trim($data['category_name']);
        unset($data['category_id']);
        $result = $this->categoryExist($cid, $cname);        
        if (!$result) {
            $this->db->update('category', $data, array('category_id' => $cid));
            return 'U';
        } else {
            return 'NE';
        }
    }
    
    function categoryExist($cid, $cname) {
        if ($cid == NULL) {
            $where = array(
                'category_name' => $cname
            );
        } else {
            $where = array(
                'category_id <> ' => $cid,
                'category_name' => $cname
            );
        }         
        $query = $this->db->get_where('category', $where);        
        return ($query->num_rows()) ? TRUE : FALSE;
    }

    function deleteCategory($data) {
        $cid = $data['category_id'];
        if ($this->isHasDoc($cid)) {
            $this->db->delete('category', array('category_id' => $cid));
            return "D";
        } else {
            return "E";
        }
    }

    function isHasDoc($cid) {
        $query = $this->db->get_where('document', array('category_id' => $cid));
        return ($query->num_rows()) ? FALSE : TRUE;
    }

}
>>>>>>> origin/master
