<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('Categoryes_model');
    }

    /**
     * 默认方法
     */
    public function index() {
        $data = array(
//            'categoryes' => $this->Categoryes_model->get_categoryes()
        );
        $this->load->view('home', $data);
    }

}
