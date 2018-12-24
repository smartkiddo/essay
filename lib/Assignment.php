<?php
	class Assignment {
		private $db;

		public function __construct(){
			$this->db = new Database;
		}

		// Get All Jobs
		public function getAssignments(){
			$this->db->query("SELECT order_details.*, type_of_paper.name AS papertype, subject_area.name AS subjecttype
						FROM order_details 
						INNER JOIN type_of_paper
						ON order_details.type_of_paper_id = type_of_paper.type_id
						INNER JOIN subject_area
						ON order_details.subject_area_id = subject_area.subject_id 
						ORDER BY posted_at DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		public function getAssignmentById($order_id){
			$this->db->query("SELECT order_details.*, type_of_paper.name AS papertype, subject_area.name AS subjecttype
						FROM order_details 
						INNER JOIN type_of_paper
						ON order_details.type_of_paper_id = type_of_paper.type_id
						INNER JOIN subject_area
						ON order_details.subject_area_id = subject_area.subject_id 
						WHERE order_details.order_id = $order_id
						");
			// Assign Result Set
			$row = $this->db->single();

			return $row;
		}

		// Get Categories
		public function getSubjects(){
			$this->db->query("SELECT * FROM subject_area");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}


		public function getPaperType(){
			$this->db->query("SELECT * FROM type_of_paper");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get Jobs By Category
		public function getBySubject($subject){
			$this->db->query("SELECT order_details.*, type_of_paper.name AS papertype, subject_area.name AS subjecttype
						FROM order_details 
						INNER JOIN type_of_paper
						ON order_details.type_of_paper_id = type_of_paper.type_id
						INNER JOIN subject_area
						ON order_details.subject_area_id = subject_area.subject_id 

						WHERE order_details.subject_area_id = $subject
						ORDER BY post_date DESC 
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		public function getByPaperType($type){
			$this->db->query("SELECT order_details.*, type_of_paper.name AS papertype, subject_area.name AS subjecttype
						FROM order_details 
						INNER JOIN type_of_paper
						ON order_details.type_of_paper_id = type_of_paper.type_id
						INNER JOIN subject_area
						ON order_details.subject_area_id = subject_area.subject_id 

						WHERE order_details.type_of_paper_id = $type
						
						");
			// Assign Result Set
			$results = $this->db->resultSet();

			return $results;
		}

		// Get category
		public function getSubject($Subject_id){
			$this->db->query("SELECT * FROM subject_area WHERE subject_id = :subject_id");

			$this->db->bind(':category_id', $category_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		public function getType($type_id){
			$this->db->query("SELECT * FROM type_of_paper WHERE type_id = :type_id");

			$this->db->bind(':type_id', $type_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}


		// Get Job
		public function getAssignment($order_id){
			$this->db->query("SELECT * FROM order_details WHERE order_id = :order_id");

			$this->db->bind(':order_id', $order_id);

			// Assign Row
			$row = $this->db->single();

			return $row;
		}

		// Create Job
		public function create($request){
			//Insert Query
			$this->db->query("INSERT INTO order_details (order_title, type_of_paper_id, subject_area_id, quality_level, number_of_pages, urgency, number_of_sources, detailed_instructions, tracking_no, total_price)
			VALUES (:order_title, :type_of_paper_id, :subject_area_id, :quality_level, :number_of_pages, :urgency, :number_of_sources, :detailed_instructions, :tracking_no, :total_price)");
			// Bind Data
			$this->db->bind(':order_title', $request['order_title']);
			$this->db->bind(':type_of_paper_id', $request['type_of_paper_id']);
			$this->db->bind(':subject_area_id', $request['subject_area_id']);
			$this->db->bind(':quality_level', $request['quality_level']);
			$this->db->bind(':number_of_pages', $request['number_of_pages']);
			$this->db->bind(':urgency', $request['urgency']);
			$this->db->bind(':number_of_sources', $request['number_of_sources']);
			$this->db->bind(':detailed_instructions', $request['detailed_instructions']);
			$this->db->bind(':tracking_no', $request['tracking_no']);
			$this->db->bind(':total_price', $request['total_price']);


			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Delete Job
		public function delete($order_id){
			//Insert Query
			$this->db->query("DELETE FROM order_details WHERE $order_id = $order_id");
			
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}

		// Update Job
		public function update($order_id, $request){
			//Insert Query
			$this->db->query("UPDATE jobs
				SET 
				order_title = :order_title,
				type_of_paper_id = :type_of_paper_id,
				subject_area_id = :subject_area_id,
				quality_level = :quality_level,
				number_of_pages = :number_of_pages,
				urgency = :urgency,
				number_of_sources = :number_of_sources,
				detailed_instructions = :detailed_instructions,
				tracking_no = :tracking_no,
				total_price = :total_price,

				WHERE order_id = $order_id");
			// Bind Data
			$this->db->bind(':order_title', $request['order_title']);
			$this->db->bind(':type_of_paper_id', $request['type_of_paper_id']);
			$this->db->bind(':subject_area_id', $request['subject_area_id']);
			$this->db->bind(':quality_level', $request['quality_level']);
			$this->db->bind(':number_of_pages', $request['number_of_pages']);
			$this->db->bind(':urgency', $request['urgency']);
			$this->db->bind(':number_of_sources', $request['number_of_sources']);
			$this->db->bind(':detailed_instructions', $request['detailed_instructions']);
			$this->db->bind(':tracking_no', $request['tracking_no']);
			$this->db->bind(':total_price', $request['total_prices']);
			//Execute
			if($this->db->execute()){
				return true;
			} else {
				return false;
			}
		}
	}