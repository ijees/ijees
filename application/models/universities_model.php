<?php

class universities_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    function insert($data)
    {
        $this->db->insert('universities', $data);
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function update($data, $id)
    {
        $this->db->where('uni_id', $id);
        if ($this->db->update('universities', $data)) {
            return true;
        } else {
            return false;
        }
    }

    function delete($id)
    {
        $this->db->where('uni_id', $id);
        $this->db->delete('universities');
        if ($this->db->affected_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    function select_all()
    {
        return $this->db->get('universities')->result();
    }

    function select_condition($condition)
    {
        $this->db->where($condition);
        return $this->db->get('universities')->result();
    }

    public function last_uni_id()
    {
     $row = $this->db->select("*")->limit(1)->order_by('uni_id',"DESC")->get("universities")->row();
     return $row->uni_id; //it will provide latest or last record id.
    }
}
