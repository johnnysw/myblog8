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

    public function save_blog($title, $content, $user_id, $type_id){
        $this->db->insert('t_blog', array(
            'title'=>$title,
            'content'=>$content,
            'user_id'=>$user_id,
            'type_id'=>$type_id
        ));
        return $this->db->affected_rows();
    }

    public function get_blogs_by_userid($user_id){
        return $this->db->get_where('t_blog', array('user_id'=>$user_id))->result();
    }


    public function delete_blog($ids){
        $this->db->query("delete from t_blog where blog_id in($ids)");
        return $this->db->affected_rows();
    }

    public function get_by_blogid($blog_id){
        $this->db->select("blog.*, usr.username");
        $this->db->from('t_blog blog');
        $this->db->join('t_user usr', 'blog.user_id=usr.user_id');
        $this->db->where('blog.blog_id', $blog_id);

        return $this->db->get()->row();

        //return $this->db->get_where('t_blog', array('blog_id'=>$blog_id))->row();
    }


}
