<?php 
	class Jobs extends CI_Controller{
		public function index(){

			$data['title'] = "Jobs";
			
			$data['jobs'] = $this->job_model->get_jobs();
			$data['customers'] = $this->customer_model->get_customers();
			$data['job_count'] = $this->job_model->get_jobtype_count();
			
			//echo $this->job_model->get_days_remaining("2022-12-25");
			
			$this->load->view('templates/header');
			$this->load->view('jobs/index',$data);
			$this->load->view('templates/footer');

		}

		public function view($id = FALSE){
			$data['job'] = $this->job_model->get_jobs($id);
			if(empty($data['job'])){
				show_404();
			}

			$data['title'] = 'Job Details';
			$data['customer'] = $this->customer_model->get_customers($data['job']['customer_id']);
			$data['duration'] = $this->job_model->get_time_remaining($data['job']['est_delivery']);

			$this->load->view('templates/header');
			$this->load->view('jobs/view',$data);
			$this->load->view('templates/footer');

		}

		public function create(){
			$data['title'] = "Create New Job";
			$data['customers'] = $this->customer_model->get_customers();
			$data['job_num'] = $this->job_model->get_new_jobnum();
			$this->form_validation->set_rules('job-name','Name', 'required');
			$this->form_validation->set_rules('job-type','Job Type', 'required');
			$this->form_validation->set_rules('customer','Customer', 'required');


			//validation for dates
			/*
			$s1 = strtotime('15-October-2016');
			$s2 = strtotime('15-September-2016');

			if( $s1 < $s2 )
			    echo 'First date comes before the second date';

			if( $s1 > $s2 )
			    echo 'First date comes after the second date';

			if( $s1 == $s2 )
			    echo 'First date and second date are the same';
			*/


			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('jobs/create',$data);
				$this->load->view('templates/footer');
			} else {
				$this->job_model->create_job();
				redirect('jobs');
			}

			
		}

		public function delete($id){
			$this->job_model->delete_job($id);
			redirect('job');
		}
				
		public function edit($id){
			$data['job'] = $this->job_model->get_jobs($id);
			if(empty($data['job'])){
				show_404();
			}

			$data['title'] = 'Edit Job';
			$data['customers'] = $this->customer_model->get_customers();

			$this->load->view('templates/header');
			$this->load->view('jobs/edit',$data);
			$this->load->view('templates/footer');


		}

		public function update(){
			$this->job_model->update_job();
			redirect('jobs');
		}


	}