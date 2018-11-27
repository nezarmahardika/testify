<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class sitlead_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    function simpan_sit_upload($id,$judul,$image){
        $data = array(
                'NameFileSIT' => $judul,
                'FileSIT' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('testorder', $data);
    }

    function list_project($sitlead){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.LeadSIT',$sitlead);
      $query = $this->db->get();
      return $query->result_array();
    }
}
