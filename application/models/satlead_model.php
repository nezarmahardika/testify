<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class satlead_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    function simpan_sat_upload($id,$judul,$image){
        $data = array(
                'NameFileSAT' => $judul,
                'FileSAT' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('testorder', $data);
    }

    function list_project($satlead){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.LeadSAT',$satlead);
      $query = $this->db->get();
      return $query->result_array();
    }
}
