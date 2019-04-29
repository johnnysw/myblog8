<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index(){
        $this->load->view('admin_index');
    }

    public function blog_type(){

        $user = $this->session->userdata('user');

        $this->load->model('blog_model');
        $results = $this->blog_model->get_by_userid($user->user_id);


        $this->load->view('blog_type', array('types'=>$results));
    }

    public function add_type(){
        $type_name = $this->input->post('type_name');
        $user = $this->session->userdata('user');
        $this->load->model('blog_model');
        $row = $this->blog_model->save_type($type_name, $user->user_id);
        if($row > 0){
            redirect('admin/blog_type');
        }else{
            echo '添加类别失败.';
        }
    }

    public function delete_type(){
        $type_id = $this->input->get('type_id');
        $this->load->model('blog_model');
        $row = $this->blog_model->delete_type($type_id);
        if($row > 0){
            redirect('admin/blog_type');
        }else{
            echo '删除类型失败.';
        }
    }

    public function new_blog(){
        //先查当前登录人所有的博客分类
        $user = $this->session->userdata('user');
        $this->load->model('blog_model');
        $results = $this->blog_model->get_by_userid($user->user_id);

        $this->load->view('new_blog', array('types'=>$results));

    }

    public function post_blog(){
        $title = $this->input->post('title');
        $type_id = $this->input->post('type_id');
        $content = $this->input->post('content');

        $user = $this->session->userdata('user');
        $user_id = $user->user_id;

        $this->load->model('blog_model');
        $row = $this->blog_model->save_blog($title, $content, $user_id, $type_id);
        if($row > 0){
            //echo '发表文章成功';
            redirect('admin/blogs');
        }else{
            echo '发表文章失败';
        }
    }

    public function blogs(){
        $user = $this->session->userdata('user');

        $this->load->model('blog_model');
        $results = $this->blog_model->get_blogs_by_userid($user->user_id);

        $this->load->view('blogs', array('blogs'=>$results));

    }

    public function delete_blog(){
        $ids = $this->input->get('ids');

        $this->load->model('blog_model');
        $rows = $this->blog_model->delete_blog($ids);

        if($rows > 0){
            redirect('admin/blogs');
        }else{
            echo '删除失败.';
        }


    }

}
