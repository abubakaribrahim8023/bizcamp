<?php

    class admin_form{

        public function __construct(){

            $this->conn     = new PDO('mysql:host=localhost; dbname=bizcamp', 'root', '12345678');
        }

        // select recoard from user table

        public function fetch_record(){

            $select     = 'SELECT * FROM user_table';
            $accept     = $this->conn->prepare($select);
            $accept     ->execute();
            return $accept;
        }

        // select all from what them post

        public function post_record(){

            $select     = 'SELECT * FROM post_data';
            $accept     = $this->conn->prepare($select);
            $accept     ->execute();
            return $accept;

        }
        public function post_approved(){

            $select     = 'SELECT * FROM post_data WHERE status="0"';
            $accept     = $this->conn->prepare($select);
            $accept     ->execute();
            return $accept;

        }
        // delete user record

        public function delete($id){

            $delete     = "DELETE FROM user_table WHERE user_id = ?";
            $del        = $this->conn->prepare($delete);
            $del        ->execute([$id]);
        }

        // delete post if ineed 

        public function post_delete($id){

            $delete     = "DELETE FROM post_data WHERE id = ?";
            $del        = $this->conn->prepare($delete);
            $del        ->execute([$id]);
        }

        // admin login code

        public function admin_log($uname,$pass){

            $select     = "SELECT * FROM admin_record WHERE userName = ? AND password = ?";
            $sele       = $this->conn->prepare($select);
            $sele       ->execute([$uname,$pass]);
            return $sele;
        }

        // contact us select record

        public function contact_us(){

            $select     = "SELECT * FROM contact_us";
            $sele       = $this->conn->prepare($select);
            $sele       ->execute();
            return $sele;
        }

        // delete message 

        public function message_delete($id){

            $delete     = "DELETE FROM contact_us WHERE mess_id = ?";
            $del        = $this->conn->prepare($delete);
            $del        ->execute([$id]);
        }

        // chat record 

        public function chat_record(){

            $select     = "SELECT * FROM message";
            $sele       = $this->conn->prepare($select);
            $sele       ->execute();
            return $sele;
        }

        public function approved($id){
            $select     = "UPDATE post_data SET status = '1' WHERE id = ?";
            $sele       = $this->conn->prepare($select);
            $sele       ->execute([$id]);
            return $sele;
        }
    }


?>