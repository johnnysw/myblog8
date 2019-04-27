<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {

    public function get_by_userid($user_id){
        //return $this->db->get_where('t_blog_type', array('user_id'=>$user_id))->result();

        //select type.*, (select count(*) from t_blog where type_id=type.type_id) as blog_count
                //from t_blog_type type where type.user_id=4

        $this->db->select("type.*, (select count(*) from t_blog where type_id=type.type_id) as blog_count");
        $this->db->from("t_blog_type type");
        $this->db->where("type.user_id", $user_id);

        return $this->db->get()->result();
    }

    public function save_type($type_name, $user_id){
        $this->db->insert('t_blog_type', array(
            'type_name'=>$type_name,
            'user_id'=>$user_id
        ));
        return $this->db->affected_rows();
    }

    public function delete_type($type_id){
        //delete from t_blog_type where type_id=10
        $this->db->delete('t_blog_type', array('type_id'=>$type_id));
        return $this->db->affected_rows();
    }



}
