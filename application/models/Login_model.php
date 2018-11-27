<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	// function auth_login($username,$password){
	// 	$query=$this->db->query("SELECT * FROM user WHERE UserName='$username' AND Password='$password' LIMIT 1");
	// 	return $query;
	// }

	// //cek nim dan password mahasiswa
	// function auth_mahasiswa($username,$password){
	// 	$query=$this->db->query("SELECT * FROM mahasiswa WHERE nim='$username' AND pass=MD5('$password') LIMIT 1");
	// 	return $query;
	// }

	public function __construct() {
                parent::__construct();
                // Your own constructor code
        }

        function validate($value1,$value2) {
                $this->db->where('UserName',$value1);
                $this->db->where('Password',$value2);
                $query = $this->db->get('user');
                if($query->num_rows() == 1) {
                        return $query;
                }
                else {
                        return FALSE;
                }
        }

}
