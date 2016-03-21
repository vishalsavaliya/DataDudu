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
class M_document extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllDocument() {
        $this->db->select('d.doc_id,d.doc_name,d.doc_date,d.dorder,c.category_name,d.description');
        $this->db->from('document as d');
        $this->db->join('category as c', 'd.category_id = c.category_id');
        $this->db->order_by('dorder');
        $query = $this->db->get();
        return $query->result();
    }

    function getDocByCategory($cid) {
        $this->db->order_by('dorder');
        $query = $this->db->get_where('document', array('category_id' => $cid));
        return $query->result();
    }

    function createDocument($data) {
        $result = $this->documentExist(NULL,$data['doc_name']);
        if (!$result) {
            $data['doc_date'] = date('Y-m-d');
            $this->db->insert('document', $data);
            return 'I';
        } else {
            return 'NE';
        }
    }
    
    function documentExist($did,$dname) {
        if ($did == NULL) {
            $where = array(
                'doc_name' => $dname
            );
        } else {
            $where = array(
                'doc_id <> ' => $did,
                'doc_name' => $dname
            );
        }     
        $query = $this->db->get_where('document',$where);
        return ($query->num_rows()) ? TRUE : FALSE;
    }

    function getDocument($did) {
        $query = $this->db->get_where('document', array('doc_id' => $did));
        return $query->row();
    }

    function updateDocument($data) {
        $did = $data['doc_id'];
        $dname = $data['doc_name'];
        unset($data['doc_id']);
        $result = $this->documentExist($did,$dname);
        if (!$result) {
            $this->db->update('document', $data, array('doc_id' => $did));
            return 'U';
        } else {
            return 'NE';
        }
    }

    function deleteDocument($data) {
        $dids = $data['document'];
        $this->db->where_in('doc_id', $dids);
        $this->db->delete('document');
        return TRUE;
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
class M_document extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    function getAllDocument() {
        $this->db->select('d.doc_id,d.doc_name,d.doc_date,d.dorder,c.category_name,d.description');
        $this->db->from('document as d');
        $this->db->join('category as c', 'd.category_id = c.category_id');
        $this->db->order_by('dorder');
        $query = $this->db->get();
        return $query->result();
    }

    function getDocByCategory($cid) {
        $this->db->order_by('dorder');
        $query = $this->db->get_where('document', array('category_id' => $cid));
        return $query->result();
    }

    function createDocument($data) {
        $result = $this->documentExist(NULL,$data['doc_name']);
        if (!$result) {
            $data['doc_date'] = date('Y-m-d');
            $this->db->insert('document', $data);
            return 'I';
        } else {
            return 'NE';
        }
    }
    
    function documentExist($did,$dname) {
        if ($did == NULL) {
            $where = array(
                'doc_name' => $dname
            );
        } else {
            $where = array(
                'doc_id <> ' => $did,
                'doc_name' => $dname
            );
        }     
        $query = $this->db->get_where('document',$where);
        return ($query->num_rows()) ? TRUE : FALSE;
    }

    function getDocument($did) {
        $query = $this->db->get_where('document', array('doc_id' => $did));
        return $query->row();
    }

    function updateDocument($data) {
        $did = $data['doc_id'];
        $dname = $data['doc_name'];
        unset($data['doc_id']);
        $result = $this->documentExist($did,$dname);
        if (!$result) {
            $this->db->update('document', $data, array('doc_id' => $did));
            return 'U';
        } else {
            return 'NE';
        }
    }

    function deleteDocument($data) {
        $dids = $data['document'];
        $this->db->where_in('doc_id', $dids);
        $this->db->delete('document');
        return TRUE;
    }

}
>>>>>>> origin/master
