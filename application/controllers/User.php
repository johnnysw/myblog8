<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function login(){
        $this->load->view('login');
    }

    public function check_login(){
        $uname = $this->input->post('username');
        $pwd = $this->input->post('password');

        $this->load->model('user_model');

        $user = $this->user_model->get_by_user_and_pwd($uname, $pwd);

        if($user){//查到了用户
            //echo '登录成功';
            $this->load->view('success');
        }else{
            echo '登录失败';
        }

    }

}
