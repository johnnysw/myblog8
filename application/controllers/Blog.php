<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

    public function view_post(){
        $blog_id = $this->input->get('blog_id');

        $this->load->model('blog_model');

        $blog = $this->blog_model->get_by_blogid($blog_id);

        $this->load->view('view_post', array('blog'=>$blog));
    }
}
