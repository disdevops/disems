<?php 
	class Pages extends CI_Controller{
		public function view($page = 'home'){

			if(!file_exists(APPPATH.'views/pages/'.$page.'.php')){
				show_404();
			}

			$data['title'] = ucfirst($page);


			$data['customer_count'] = $this->customer_model->get_customer_count();
			$data['total_jobs'] = $this->job_model->get_job_count();
			$data['job_count'] = $this->job_model->get_jobtype_count();
			
			$total_value = $this->job_model->get_jobs_value();
			$data['total_value'] = $total_value;
			$data['total_value_words'] = $this->page_model->numberTowords($total_value);
			$data['active_jobs'] = $this->job_model->get_active_jobs();

			$this->load->view('templates/header');
			$this->load->view('pages/'.$page,$data);
			$this->load->view('templates/footer');

		}
	}