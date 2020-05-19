<?php

class Opportunity extends CI_Controller {
    
    public function index() 
    {

        $data['industries'] = $this->candidates->get_all_industries();
        $data['functions'] = $this->candidates->get_all_functions();
        $data['jobs'] = $this->candidates->get_all_jobs();
        
        $this->load->view('dashboard',$data);
    }

    public function submit_resumes($job_id)
    {
        
        $full['locations'] = $this->candidates->get_all_locations();
        $full['industries'] = $this->candidates->get_all_industries();
        $full['functions'] = $this->candidates->get_all_functions();
        $full['jobs'] = $this->candidates-> get_job_detail($job_id);
        // echo"<pre>";
        // print_r($full);exit;
        // $job_info = $this->candidates->get_
        $this->load->view('submit_resume',$full);
    }

    public function store_resume($job_id){
        $config = [
            'upload_path'       =>      './uploads',
            'allowed_types'     =>      'pdf',
        ];

        $this->load->library('upload',$config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required');
        $this->form_validation->set_rules('mobile','Mobile No','required');
        $this->form_validation->set_rules('company','Company','required');
        $this->form_validation->set_rules('designation','Designation','required');
        $this->form_validation->set_rules('function','Function','required');
        $this->form_validation->set_rules('industry','Industry','required');
        $this->form_validation->set_rules('location','Location','required');
        $this->form_validation->set_rules('experience','Experience','required');
        $this->form_validation->set_rules('salary','Salary','required');

        if( $this->form_validation->run() && $this->upload->do_upload('resume') )
        {
            $post = $this->input->post();
            $post['job_id'] = $job_id;
            unset($post['submit']);
            $data= $this->upload->data();
            $file_path = base_url("uploads/".$data['raw_name'].$data['file_ext']);
			$post['resume_path'] = $file_path;
            
            $this->candidates->insert_candidate($post);
            return redirect('opportunity');
        }
        else {
            return redirect('opportunity/submit_resumes');
        }
    }

    public function search_filter(){
        $func = $this->input->post('search1');
        $industry = $this->input->post('search2');
       
        $ret_data= $this->candidates->get_joined_detail();

        $data['filtered_jobs'] =$this->candidates->filter($ret_data,$func,$industry);
        $data['industries'] = $this->candidates->get_all_industries();
        $data['functions'] = $this->candidates->get_all_functions();
        // echo"<pre>";
        // print_r($filtered_jobs); exit;
       $this->load->view('search_dashboard',$data);
    }

    public function job_id($job_id)
    {
        $job_info['jobs'] = $this->candidates->get_job_detail($job_id);
        $job_info['functions'] = $this->candidates->get_function_detail($job_id);
        $job_info['industries'] = $this->candidates->get_industry_detail($job_id);
        // echo"<pre>";
        // print_r($job_info); exit;
        $this->load->view('job_detail',$job_info);
    }

    public function filter_industry($id){
        // echo"<pre>";
        // print_r($id); exit;
        $data['industries'] = $this->candidates->get_all_industries();
        $data['functions'] = $this->candidates->get_all_functions();
        $data['jobs'] = $this->candidates->filter_industries($id);
        $this->load->view('dashboard',$data);
    }

    public function __construct()
    {
        parent::__construct();
        $this->load->view('header');    
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('candidatesmodel','candidates');
    }


}