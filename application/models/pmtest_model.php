<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pmtest_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function count_queue(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as antrian FROM project WHERE BRD IS NOT NULL AND Flag=0";
        $result = $this->db->query($sql);
        return $result->row()->antrian;
        // return $sql->result_array();
    }

    function count_approve(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as approve FROM project WHERE Flag=1 AND BRD IS NOT NULL and FSD IS NOT NULL AND TSD IS NOT NULL";
        $result = $this->db->query($sql);
        return $result->row()->approve;
        // return $sql->result_array();
    }

    function count_ongoing(){
        $sql = "SELECT OrderID, COUNT(OrderID) as ongoing FROM testorder WHERE FilePT IS NULL and FileSIT IS NULL AND FileUAT IS NULL AND FileSAT IS NULL AND FilePTR IS NULL";
        $result = $this->db->query($sql);
        return $result->row()->ongoing;
        // return $sql->result_array();
    }

    function queue(){
          $sql = "SELECT * FROM project WHERE Flag=0 AND BRD IS NOT NULL";
          $query = $this->db->query($sql);
          return $query->result_array();
    }

    function approve(){
          $sql = "SELECT * FROM project WHERE Flag=1 AND BRD IS NOT NULL and FSD IS NOT NULL AND TSD IS NOT NULL";
          $query = $this->db->query($sql);
          return $query->result_array();
    }

    function ongoing(){
          $sql = "SELECT * FROM testorder WHERE LeadPT IS NULL and LeadUAT IS NULL and LeadSAT IS NULL and LeadSIT IS NULL and LeadPTR IS NULL";
          $query = $this->db->query($sql);
          return $query->result_array();
    }

    function do_approve($data, $flag, $id){
        $set['Flag'] = $flag;
       $this->db->insert('testorder', $data);
       $this->db->where('ProjectID',$id);
       $this->db->update('project', $set);
       return TRUE;
    }

    function edit_testorder($data, $id){
      $this->db->where('ProjectID',$id);
      $this->db->update('testorder', $data);
      return TRUE;
    }

    function list_project($pmtest){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.PMTest',$pmtest);
      $query = $this->db->get();
      return $query->result_array();
    }

}
