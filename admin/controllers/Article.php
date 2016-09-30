<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('Categoryes_model');
    }

    //读取文章列表
    public function index() {
        $data = array(
//            'categoryes' => $this->Categoryes_model->get_categoryes()
        );
        $this->load->view('article_list', $data);
    }
    
    //搜索文章列表
    public function search() {
        $this->load->library('pag');
    }

}
