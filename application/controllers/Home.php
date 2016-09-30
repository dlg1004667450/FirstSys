<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model(array('Article_model', 'Categoryes_model'));
    }

    /**
     * 前台首页
     */
    public function index() {
        $this->output->enable_profiler(TRUE);

        $this->load->library('pagination');
        $config = array(
            'base_url' => site_url() . '/home/index',
            'total_rows' => $this->db->count_all('articles'),
            'per_page' => 5,
            'first_link' => FALSE,
            'last_link' => FALSE,
            'display_pages' => FALSE,
            'next_tag_open' => '<li class="am-pagination-next">', // 上一页下一页html
            'next_tag_close' => '</li>',
            'prev_tag_open' => '<li class="am-pagination-prev">',
            'prev_tag_close' => '</li>',
            'prev_link' => "&laquo; Prev",
            'next_link' => "Next &raquo;"
        );
        $this->pagination->initialize($config);
        $data = array(
            'article' => $this->Article_model->get_article($id = FALSE, $config ['per_page'], $this->uri->segment(3)),
//            'article_nums' => $this->db->count_all('articles'),
            'categoryes' => $this->Categoryes_model->get_categoryes()
        );

        $this->load->view('index', $data);
    }

    /**
     * 文章阅读页显示
     */
    public function article() {
        $aid = $this->uri->segment(3);

//        $data['category'] = $this->category;

//        $data['title'] = $this->title;

        $data['article'] = $this->Article_model->get_article($aid);

        $this->load->view('article', $data);
    }
    
    public function img(){
//        $this->load->model('Img_model');
        
//        $data['imglist'] = $this->Img_model->get_img();
        $data['imglist'] = array();
        $this->load->view('img', $data);
    }

    public function timeline() {
        $this->load->view('timeline');
    }

}
