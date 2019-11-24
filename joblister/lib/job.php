<?php
class Job{
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	// get all jobs
	public function getAllJobs(){
		$this->db->query("SELECT jobs.*, categories.name AS cname
		FROM jobs 
		INNER JOIN categories 
		ON jobs.category_id = categories.id
		ORDER BY post_date DESC ");

		// assign results set
		$results = $this->db->resultSet();

		return $results;
	}

	// get all Cats
	public function getCategories(){
		$this->db->query("SELECT * FROM categories");
		$results = $this->db->resultSet();
		return $results;
	}

	// get filtered job category
	public function getByCategory($category){
		$this->db->query("SELECT jobs.*, categories.name AS cname
			FROM jobs
			INNER JOIN categories 
			ON jobs.category_id = categories.id
			WHERE jobs.category_id = $category
			ORDER BY post_date DESC");
		// assign results set
		$results = $this->db->resultSet();

		return $results;
	}

	// get category
	public function getCategory($category_id){
		$this->db->query("SELECT * FROM categories WHERE id= :category_id");
		$this->db->bind(':category_id', $category_id);

		// assign row
		$row = $this->db->single();
		return $row;
	}

	// get job
	public function getJob($id){
		$this->db->query("SELECT * FROM jobs WHERE id= :id");
		$this->db->bind(':id', $id);

		// assign row
		$row = $this->db->single();
		return $row;
	}


	public function create($data){
		$this->db->query("INSERT INTO jobs (category_id, job_title, company, job_description,
			location, salary, contact_user, contact_email)
		VALUES (:category_id,:job_title,:company, :job_description, :location, :salary, :contact_user, :contact_email)");
		// bind data
		$this->db->bind(':category_id',  $data['category_id']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':job_description', $data['job_description']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}

	}

	// delete job listing
	public function delete($id){
	$this->db->query("DELETE FROM jobs WHERE id = $id");
	if($this->db->execute()){
		return true;
			} else {
		return false;
			}
	}

	public function update($id, $data){
		$this->db->query("UPDATE JOBS 
			SET
		 category_id = :category_id, 
		 job_title = :job_title, 
		 company = :company, 
		 job_description: :job_description,
		location = :location, 
		salary = :salary, 
		contact_user = :contact_user, 
		contact_email=:contact_email
		WHERE id = $id");

		// bind data
		$this->db->bind(':category_id',  $data['category_id']);
		$this->db->bind(':job_title', $data['job_title']);
		$this->db->bind(':company', $data['company']);
		$this->db->bind(':job_description', $data['job_description']);
		$this->db->bind(':location', $data['location']);
		$this->db->bind(':salary', $data['salary']);
		$this->db->bind(':contact_user', $data['contact_user']);
		$this->db->bind(':contact_email', $data['contact_email']);

		if($this->db->execute()){
			return true;
		} else {
			return false;
		}

	}

}