<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class uatlead_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    function simpan_uat_upload($id,$judul,$image){
        $data = array(
                'NameFileUAT' => $judul,
                'FileUAT' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('testorder', $data);
    }

    function list_project($uatlead){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.LeadUAT',$uatlead);
      $query = $this->db->get();
      return $query->result_array();
    }
}
