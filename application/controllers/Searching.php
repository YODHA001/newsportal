<?php
    Class Searching extends CI_Controller{
		function __construct(){
			parent::__construct();
            $this->load->model('Search_model');
            //$this->load->model('Search_Model');
			 
            $this->load->model('identity_model', 'identity', true);
            $this->load->model('banner_model', 'banner', true);
            $this->load->model('posting_model', 'posting', true);
            $this->load->model('category_model', 'category', true);		}

        function index()
	{

        $sdata=$this->input->post('searchdata');

        $data['favicon']     = $this->identity->getIdentity();
        $data['title']       = 'Blog';
        $data['navbar']      = $this->category->getCategory();
        $data['category']    = $this->category->getCategory();
        $data['popular']     = $this->posting->getMostPopular();
        $data['trending']    = $this->posting->getThread();
        $data['post'] = $this->Search_model->getsearch($sdata);
        $data['page'] = 'search';
        $this->load->view('front/layouts/app', $data);
		
	}
    }
?>
