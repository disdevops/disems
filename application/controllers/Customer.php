<?php 
	class Customer extends CI_Controller{
		public function index(){

			$data['title'] = "Clients";
			
			$data['customers'] = $this->customer_model->get_customers();

			$this->load->view('templates/header');
			$this->load->view('customers/index',$data);
			$this->load->view('templates/footer');

		}

		public function view($id = FALSE){
			if(!$id === False) {
				$data['customer'] = $this->customer_model->get_customers($id);
					if(!empty($data['customer'])){
						$data['total_value'] = $this->job_model->get_jobs_value($id);
						$this->load->view('templates/header');
						$this->load->view('customers/view',$data);
						$this->load->view('templates/footer');
					} else show_404();


				} else show_404();

		}

		public function create(){
			$data['title'] = "Create Client";
			
			$this->form_validation->set_rules('cust-name','Name', 'required');
			$this->form_validation->set_rules('cust-nickname','Nickname', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('customers/create',$data);
				$this->load->view('templates/footer');
			} else {
				$this->customer_model->create_customer();
				redirect('customer');
			}

			
		}

		public function delete($id){
			$this->customer_model->delete_customer($id);
			redirect('customer');
		}
				
		public function edit($id){
			$data['customer'] = $this->customer_model->get_customers($id);
			if(empty($data['customer'])){
				show_404();
			}

			$data['title'] = 'Edit Customer';

			$this->load->view('templates/header');
			$this->load->view('customers/edit',$data);
			$this->load->view('templates/footer');


		}

		public function update(){
			$this->customer_model->update_customer();
			redirect('customer');
		}


	}