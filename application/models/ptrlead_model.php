<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ptrlead_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    function simpan_ptr_upload($id,$judul,$image){
        $data = array(
                'NameFilePTR' => $judul,
                'FilePTR' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('testorder', $data);
    }

    function list_project($ptrlead){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.LeadPTR',$ptrlead);
      $query = $this->db->get();
      return $query->result_array();
    }
}
