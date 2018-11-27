<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class ptlead_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }


    function simpan_pt_upload($id,$judul,$image){
        $data = array(
                'NameFilePT' => $judul,
                'FilePT' => $image
            );
            $this->db->where('ProjectID',$id);
            $this->db->update('testorder', $data);
    }

    function list_project($ptlead){
      $this->db->select('*');
      $this->db->from('testorder');
      $this->db->where('testorder.LeadPT',$ptlead);
      $query = $this->db->get();
      return $query->result_array();
    }
}
