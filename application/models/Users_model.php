<?php 
    class Users_model extends CI_Model {
    
        function __construct() {
            parent::__construct();
        }

        public function createUser( $username, $password){
            $this->db->query("INSERT INTO users (username,password) VALUES ('{$username}','{$password}')");
            return true;
        }

        public function readUsers(){
            $query = $this->db->query ("SELECT * FROM users");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            }else{
                $ret = null;
            }

            return $ret;
        }

        public function updateUser($username, $password){
            $query = $this->db->query( "UPDATE users SET password = '{$password}', WHERE username = '{$username}'");
            return $query;
        }

        public function deleteUser( $username ){
            $query = $this->db->delete('users',array('username'=>$username));
            return $query;
        }
    
    }
?>