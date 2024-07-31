<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Front_page extends CI_Controller
{
    var $app_data = [];
    public function header(){
        $this->load->view('header', $this->app_data);
    }
    public function footer(){
        $this->load->view('footer', $this->app_data);
    }
    public function index(){
        $this->header();
        $this->load->view('index', $this->app_data);
        $this->footer();
    }
    public function contact(){
        $this->header();
        $this->load->view('contact', $this->app_data);
        $this->footer();
    }
}