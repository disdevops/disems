<?php 
	class  Material_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_material_count(){
			$query = $this->db->query('SELECT * FROM material');
			return $query->num_rows();
		}


		public function get_material($id = FALSE){
			if($id === FALSE){
				$query = $this->db->get('material_purchase');
				return $query->result_array();
			}

			$query = $this->db->get_where('material_purchase', array('id'=>$id));
			return $query->row_array();
		}

		public function create_material(){
			$data = array(
				'material_name' => $this->input->post('material-name'),
				'material_descrip' => $this->input->post('material-descrip'),
				'material_value' => $this->input->post('material-value'),
				'job_id' => $this->input->post('job-id')
			);

			return $this->db->insert('material_purchase',$data);
		}

		public function delete_material($id){
			$this->db->where('id',$id);
			$this->db->delete('material_purchase');
			return true;
		}

		public function update_material(){
			//echo $this->input->post('id'); die();

			$data = array(
				'name' => $this->input->post('material-name'),
				'nickname' => $this->input->post('material-descrip'),
				'location' => $this->input->post('material-value'),
				'location' => $this->input->post('job-id'),
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('material_purchase',$data);
		}


	}
 ?>