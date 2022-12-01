<?php 
	class  Customer_model extends CI_Model{
		public function __construct(){
			$this->load->database();
		}

		public function get_customer_count(){
			$query = $this->db->query('SELECT * FROM customer');
			return $query->num_rows();
		}


		public function get_customers($id = FALSE){
			if($id === FALSE){
				$query = $this->db->get('customer');
				return $query->result_array();
			}

			$query = $this->db->get_where('customer', array('id'=>$id));
			return $query->row_array();
		}

		public function create_customer(){
			$data = array(
				'name' => $this->input->post('cust-name'),
				'nickname' => $this->input->post('cust-nickname'),
				'location' => $this->input->post('cust-location')
			);

			return $this->db->insert('customer',$data);
		}

		public function delete_customer($id){
			$this->db->where('id',$id);
			$this->db->delete('customer');
			return true;
		}

		public function update_customer(){
			//echo $this->input->post('id'); die();

			$data = array(
				'name' => $this->input->post('cust-name'),
				'nickname' => $this->input->post('cust-nickname'),
				'location' => $this->input->post('cust-location')
			);

			$this->db->where('id',$this->input->post('id'));
			return $this->db->update('customer',$data);
		}


	}
 ?>