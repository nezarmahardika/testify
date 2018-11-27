<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class pmdev_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function show_project(){
      $sql = "SELECT * FROM project WHERE Flag=0";
      $query = $this->db->query($sql);
      return $query->result_array();
    }

    function add_project($data){
       $this->db->insert('project', $data);
       return TRUE;
    }

    function edit_project($data, $id){
      $this->db->where('ProjectID',$id);
      $this->db->update('project', $data);
      return TRUE;
    }

    function simpan_brd_upload($id,$judul,$image){
        $data = array(
                'NameBRD' => $judul,
                'BRD' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('project', $data);
    }

    function simpan_fsd_upload($id,$judul,$image){
        $data = array(
                'NameFSD' => $judul,
                'FSD' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('project', $data);
    }

    function simpan_tsd_upload($id,$judul,$image,$flag){
        $data = array(
                'NameTSD' => $judul,
                'TSD' => $image,
                'Flag' => $flag
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('project', $data);
    }

    function list_project($pmdev){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->join('project', 'testorder.ProjectID = project.ProjectID');
      $this->db->where('project.PMDev',$pmdev);
      $query = $this->db->get();
      return $query->result_array();
    }
}
