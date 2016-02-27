<?php 
    class Events_model extends CI_Model {
    
        function __construct() {
            parent::__construct();
        }

        public function createEvent($eventId, $eventName, $eventDescription, $eventDate, $eventLocation) {
            $this->db->query("INSERT INTO events (event_id, event_name,description, date, location) VALUES ('{$eventId}', '{$eventName}', '{$eventDescription}', '{$eventDate}', '{$eventLocation')");

        public function readEvents(){
            $query = $this->db->query ("SELECT * FROM events");
            if($query->num_rows() > 0) {
                $ret = $query->result();
            }else{
                $ret = null;
            }

            return $ret;
        }

        public function updateEvent($eventId, $eventName, $eventDescription, $eventDate, $eventLocation){
            $query = $this->db->query( "UPDATE events SET event_name = '{$eventName}', description = '{$eventDescription}', date = '{$eventDate}' location = '{$eventLocation}', WHERE event_id = '{$eventId}'");
            return $query;
        }

        public function deleteEvent($eventId) {
            $query = $this->db->delete('users', array('event_id'=>$eventId));
    
    }
?>