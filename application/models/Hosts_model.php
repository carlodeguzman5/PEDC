<?php 
    class Hosts_model extends CI_Model {
    
        function __construct() {
            parent::__construct();
        }

        public function createHost($hostId, $hostName, $hostDescription) {
            $this->db->query("INSERT INTO hosts (host_id, name, description) VALUES ('{$hostId}','{$hostName}','{$hostDescription}')");

        public function readHosts(){
            $query = $this->db->query ("SELECT * FROM hosts");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            }else{
                $ret = null;
            }

            return $ret;
        }

        public function updateHost($hostId, $hostName, $hostDescription){
            $query = $this->db->query( "UPDATE hosts SET name = '{$hostName}', description = '{$hostDescription}', WHERE host_id = '{$hostId}'" );
            return $query;
        }

        public function deleteHost( $hostId ){
            $query = $this->db->delete('hosts',array('host_id'=>$hostId));
    
    }
?>