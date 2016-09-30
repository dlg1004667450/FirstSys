<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Admin_model');
    }

    /**
     * 默认方法
     */
    public function index() {
        $this->load->view('login');
    }

    //登录操作
    public function check() {
        redirect('home/index');
    }

    //退出登录
    public function login_out() {
        $this->session->sess_destroy();
        readdir('login/index');
    }

}
