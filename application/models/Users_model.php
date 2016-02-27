<?php 
    class Users_model extends CI_Model {
    
        function __construct() {
            parent::__construct();
        }

        public function createUser( $userId, $password, $name){
            $this->db->query("INSERT INTO users (user_id,password,name) VALUES ('{$user_id}','{$password}','{$name}')");
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

        public function updateUser($userId, $password, $name){
            $query = $this->db->query( "UPDATE users SET password = '{$password}', WHERE user_id = '{$username}', name = '{$name}'");
            return $query;
        }

        public function deleteUser( $userId ){
            $query = $this->db->delete('users',array('user_id'=>$userId));
            return $query;
        }
    
    }
?>