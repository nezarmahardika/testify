<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class gh_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    function count_new_project(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as semua FROM project WHERE ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->row()->semua;
        // return $sql->result_array();
    }

    function count_new_queue(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as queue FROM project WHERE BRD IS NOT NULL AND Flag=0 AND ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->row()->queue;
        // return $sql->result_array();
    }

    function count_new_done(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as done FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and t.FilePT IS NOT NULL and t.FileSIT IS NOT NULL AND t.FileUAT IS NOT NULL AND t.FileSAT IS NOT NULL AND t.FilePTR IS NOT NULL AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->row()->done;
        // return $sql->result_array();
    }

    function count_new_ongoing(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as ongoing FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->row()->ongoing;
        // return $sql->result_array();
    }

    function count_new_delay(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as delay FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) and t.Deadline <= CURDATE() AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->row()->delay;
        // return $sql->result_array();
    }



    function count_cr_project(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as semua_cr FROM project WHERE ProjectTypeID = 'CR'";
        $result = $this->db->query($sql);
        return $result->row()->semua_cr;
        // return $sql->result_array();
    }

    function count_cr_queue(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as queue_cr FROM project WHERE BRD IS NOT NULL AND Flag=0 AND ProjectTypeID = 'CR'";
        $result = $this->db->query($sql);
        return $result->row()->queue_cr;
        // return $sql->result_array();
    }

    function count_cr_done(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as done_cr FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and t.FilePT IS NOT NULL and t.FileSIT IS NOT NULL AND t.FileUAT IS NOT NULL AND t.FileSAT IS NOT NULL AND t.FilePTR IS NOT NULL AND p.ProjectTypeID = 'CR'";
        $result = $this->db->query($sql);
        return $result->row()->done_cr;
        // return $sql->result_array();
    }

    function count_cr_ongoing(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as ongoing_cr FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) AND p.ProjectTypeID = 'CR'";
        $result = $this->db->query($sql);
        return $result->row()->ongoing_cr;
        // return $sql->result_array();
    }

    function count_cr_delay(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as delay_cr FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) and t.Deadline <= CURDATE() AND p.ProjectTypeID = 'CR'";
        $result = $this->db->query($sql);
        return $result->row()->delay_cr;
        // return $sql->result_array();
    }

    function count_sr_project(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as semua_sr FROM project WHERE ProjectTypeID = 'SR'";
        $result = $this->db->query($sql);
        return $result->row()->semua_sr;
        // return $sql->result_array();
    }

    function count_sr_done(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as done_sr FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and t.FilePT IS NOT NULL and t.FileSIT IS NOT NULL AND t.FileUAT IS NOT NULL AND t.FileSAT IS NOT NULL AND t.FilePTR IS NOT NULL AND p.ProjectTypeID = 'SR'";
        $result = $this->db->query($sql);
        return $result->row()->done_sr;
        // return $sql->result_array();
    }

    function count_ir_project(){
        $sql = "SELECT ProjectID, COUNT(ProjectID) as semua_ir FROM project WHERE ProjectTypeID = 'IR'";
        $result = $this->db->query($sql);
        return $result->row()->semua_ir;
        // return $sql->result_array();
    }

    function count_ir_done(){
        $sql = "SELECT t.OrderID, COUNT(t.OrderID) as done_ir FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and t.FilePT IS NOT NULL and t.FileSIT IS NOT NULL AND t.FileUAT IS NOT NULL AND t.FileSAT IS NOT NULL AND t.FilePTR IS NOT NULL AND p.ProjectTypeID = 'IR'";
        $result = $this->db->query($sql);
        return $result->row()->done_ir;
        // return $sql->result_array();
    }


    function new_project(){
        $sql = "SELECT * as semua FROM project WHERE ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function new_queue(){
        $sql = "SELECT * FROM project WHERE BRD IS NOT NULL AND Flag=0 AND ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function new_done(){
        $sql = "SELECT t.* as done FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and t.FilePT IS NOT NULL and t.FileSIT IS NOT NULL AND t.FileUAT IS NOT NULL AND t.FileSAT IS NOT NULL AND t.FilePTR IS NOT NULL AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function new_ongoing(){
        $sql = "SELECT t.* as ongoing FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

    function new_delay(){
        $sql = "SELECT t.* as delay FROM testorder t, project p WHERE t.ProjectID=p.ProjectID and (t.FilePT IS NULL OR t.FileSIT IS NULL OR t.FileUAT IS NULL OR t.FileSAT IS NULL OR t.FilePTR IS NULL) and t.Deadline <= CURDATE() AND p.ProjectTypeID = 'New'";
        $result = $this->db->query($sql);
        return $result->result_array();
    }

}
