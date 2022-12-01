<?php 
	class Material extends CI_Controller{
		public function index(){

			$data['title'] = "Purchases";
			$data['materials'] = $this->material_model->get_material();
			
			$this->load->view('templates/header');
			$this->load->view('material/index',$data);
			$this->load->view('templates/footer');

		}

		public function view($id = FALSE){
			$data['material'] = $this->material_model->get_material($id);
			if(empty($data['material'])){
				show_404();
			}

			$data['title'] = 'Material Details';
			

			$this->load->view('templates/header');
			$this->load->view('material/view',$data);
			$this->load->view('templates/footer');

		}

		public function create(){
			$data['title'] = "New Purchase";
			$data['active_jobs'] = $this->job_model->get_active_jobs();

			$this->load->view('templates/header');
			$this->load->view('material/create',$data);
			$this->load->view('templates/footer');

			
		}

		public function delete($id){
			$this->job_model->delete_material($id);
			redirect('material');
		}
				
		public function edit($id){
			$data['material'] = $this->material_model->get_mamterial($id);
			if(empty($data['material'])){
				show_404();
			}

			$data['title'] = 'Edit Material';

			$this->load->view('templates/header');
			$this->load->view('material/edit',$data);
			$this->load->view('templates/footer');


		}

		public function update(){
			$this->material_model->update_material();
			redirect('material');
		}


	}