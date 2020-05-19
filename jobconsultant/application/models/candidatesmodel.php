<?php

class CandidatesModel extends CI_Model {

    public function get_all_locations()
    {
        $q = $this->db->select(['id','name'])
                        ->from('locations')
                        ->get();
        return $q->result();                
    }

    public function get_all_industries()
    {
        $q = $this->db->select(['id','industry','job_id'])
                        ->from('industries')
                        ->get();
        return $q->result();                
    }

    public function get_all_functions()
    {
        $q = $this->db->select(['id','function','job_id'])
                        ->from('functions')
                        ->get();
        return $q->result();                
    }

    public function get_all_jobs()
    {
        $q = $this->db->select(['id','name','job_id'])
                        ->from('jobs')
                        ->get();
        return $q->result();                
    }

    public function insert_candidate($post)
    {
        return $this->db->insert('candidates',$post);
    }

    public function get_job_detail($job_id)
    {
        $q= $this->db->select()
                        ->from('jobs')
                        ->where('job_id',$job_id)
                        ->get();
            return $q->row();            
    }

    public function get_function_detail($job_id)
    {
        $q= $this->db->select()
                        ->from('functions')
                        ->where('job_id',$job_id)
                        ->get();
            return $q->row();            
    }

    public function get_industry_detail($job_id)
    {
        $q= $this->db->select()
                        ->from('industries')
                        ->where('job_id',$job_id)
                        ->get();
            return $q->row();            
    }

    public function get_joined_detail()
    {       
        $q = $this->db->query(" SELECT *
                FROM jobs
                JOIN functions ON (functions.id = jobs.id)
                JOIN industries ON (industries.id = jobs.id) ");
            return $q->result();    
    }

    public function filter($ret_data, $func, $industry)
    {
       
        $q = $this->db->select(['name','job_id'])
                    ->from('jobs')
                    ->where('id',$func['id'])
                    ->or_where('id',$industry['id'])
                    ->get();
        //     echo"<pre>";
        // print_r( $q->result() ); exit;
        return $q->result();
    }
    public function filter_industries($id) 
    {
        $this->db->select()
                    ->from(['jobs','industry_to_job']);
                    
    }

}