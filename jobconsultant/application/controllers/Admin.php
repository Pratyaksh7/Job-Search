<?php 

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/index');
    }



    public function get_function_list()
    {
        $lists1 = $this->candidates->get_all_functions();
        // echo"<pre>";
        // print_r($list1);exit;
        $this->load->view('functions_list',['lists1'=>$lists1]);
    }

    public function get_industry_list()
    {
        $lists2 = $this->candidates->get_all_industries();
        $this->load->view('industries_list',['lists2'=>$lists2]);
    }

    public function __construct(){
        parent::__construct();
        $this->load->view('header');    
        $this->load->helper('url');
        $this->load->model('candidatesmodel','candidates');
    }
}
