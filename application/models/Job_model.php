<?php 
	class  Job_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_active_jobs(){
			$sql = "SELECT id,job_num,name  FROM jobs WHERE status!='completed'";
			$query = $this->db->query($sql);
			return $query->result_array();
		}

		public function get_new_jobnum(){
			$sql = "SELECT MAX(job_num) as newjobnum FROM jobs";
			$query = $this->db->query($sql);
			return $query->row()->newjobnum + 1;
		}

		public function get_row_count($type){
			$this->db->where('job_type', $type);
			$query = $this->db->get('jobs');
			return $query->num_rows();
		} 

		public function get_jobtype_count(){
			$job_count = array(
				'ST' => $this->job_model->get_row_count('ST'),
				'VR' => $this->job_model->get_row_count('VR'),
				'FM' => $this->job_model->get_row_count('FM'),
				'PR' => $this->job_model->get_row_count('PR')
			);
			return $job_count;
		}

		public function get_jobs_value($id=FALSE){
			if (!$id===FALSE){
			$sql = "SELECT SUM(value) as total FROM jobs WHERE customer_id=".$id;
			} else {
			$sql = "SELECT SUM(value) as total FROM jobs";
			}

			$query = $this->db->query($sql);
			return $query->row_array()['total'];

		}

		public function get_jobs($id = FALSE){
			if($id === FALSE){

				$sql="SELECT j.id,j.name,j.descrip,j.job_type,j.start_date,j.est_delivery,j.status,j.job_num,c.nickname FROM jobs j INNER JOIN customer c ON j.customer_id=c.id ORDER BY j.id DESC";
				$query = $this->db->query($sql);
				//$query = $this->db->get('jobs');
				return $query->result_array();
			}

			$query = $this->db->get_where('jobs', array('id'=>$id));
			return $query->row_array();
		}


		public function get_customer_name($cust_id){
			$query = $this->db->get_where('customer',array('id'=>$cust_id));
			return $query->row_array('name');
		}


		public function get_days_remaining($date){
			$earlier = new DateTime(date('Y-m-d'));
			$later = new DateTime($date);

			$pos_diff = $earlier->diff($later)->format("%r%a");
			return $pos_diff;
		}	

		public function get_time_remaining($date){
			$diff = abs(strtotime($date)-strtotime(date('Y-m-d')));

			$years = floor($diff / (365*60*60*24));
			$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
			$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
			$weeks = floor($diff/ (60*60*24)/7);

			return array('years'=>$years,'months'=>$months,'days'=>$days, 'weeks'=>$weeks);
		}

		public function get_job_count(){
			$query = $this->db->query('SELECT * FROM jobs');
			return $query->num_rows();
		}


		public function create_job(){

			$start_date         = date('Y-m-d',strtotime($this->input->post('job-start')));
			$end_date         = date('Y-m-d',strtotime($this->input->post('job-end')));
			$data = array(
				'name' => $this->input->post('job-name'),
				'job_type' => $this->input->post('job-type'),
				'descrip' => $this->input->post('job-descrip'),
				'start_date' => $start_date,
				'est_delivery' => $end_date,
				'customer_id' => $this->input->post('customer'),
				'po_ref' => $this->input->post('cust-ref'),
				'poc' => $this->input->post('cust-poc'),
				'value' => $this->input->post('job-value'),
				'job_num' => $this->input->post('job-num'),
				'status' => $this->input->post('status')

			);

			return $this->db->insert('jobs',$data);
		}

		public function delete_job($id){
			$this->db->where('id',$id);
			$this->db->delete('job');
			return true;
		}

		public function update_job(){
			//echo $this->input->post('id'); die();

			$start_date         = date('Y-m-d',strtotime($this->input->post('job-start')));
			$end_date         = date('Y-m-d',strtotime($this->input->post('job-end')));
			$data = array(
				'name' => $this->input->post('job-name'),
				'job_type' => $this->input->post('job-type'),
				'descrip' => $this->input->post('job-descrip'),
				'start_date' => $start_date,
				'est_delivery' => $end_date,
				'customer_id' => $this->input->post('customer'),
				'po_ref' => $this->input->post('cust-ref'),
				'poc' => $this->input->post('cust-poc'),
				'value' => $this->input->post('job-value')
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('jobs',$data);
		}


	}
 ?>